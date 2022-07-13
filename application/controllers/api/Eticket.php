<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Eticket extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Eticket_model', 'ticket');
    }
    public function index_get()
    {
        $data['judul'] = 'Daftar Transaksi';
        $id = $this->get('id_transaksi');

        if ($id === null) {
            $masterku = $this->ticket->getAllProduk();
        } else {
            $masterku = $this->ticket->getAllProduk($id);
        }

        if ($masterku) {
            $this->response([
                'status' => TRUE,
                'data' => $masterku
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        $this->load->view('home', $masterku);
    }


    public function index_delete()
    {
        $id = $this->delete('id_transaksi');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->ticket->deleteProduk($id) > 0) {
                // ok
                $this->response([
                    'status' => TRUE,
                    'id_transaksi' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // id not found
                $this->response([
                    'status' => FALSE,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'id_transaksi' => $this->post('id_transaksi'),
            'meja' => $this->post('meja'),
            'total' => $this->post('total'),
            'tgl' => $this->post('tgl'),
            // 'user_id' => $this->post('user_id'),
            // 'status' => $this->post('status'),
        ];

        if ($this->ticket->createProduk($data) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'new produk has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'failed to created new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id_transaksi');

        $data = [
            'id_transaksi' => $this->put('id_transaksi'),
            'meja' => $this->put('meja'),
            'total' => $this->put('total'),
            'tgl' => $this->put('tgl'),
            // 'user_id' => $this->put('user_id'),
            // 'status' => $this->put('status'),
        ];

        if ($this->ticket->updateProduk($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'data produk has been updated'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
