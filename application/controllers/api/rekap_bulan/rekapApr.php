<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class rekapApr extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'produk');
    }
    public function index_get()
    {
        $id = $this->get('id_transaksi');

        if ($id === null) {
            $masterku = $this->produk->getApr();
        } else {
            $masterku = $this->produk->getApr($id);
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
    }
}
