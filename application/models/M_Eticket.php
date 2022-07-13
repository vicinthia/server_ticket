<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Eticket extends CI_Model
{
    public function getDataTransaksi($Limit, $start)
    {
        $query = $this->db->get('transaksi', $Limit, $start);
        return $query->result();
    }

    public function cari()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from transaksi where id_transaksi like '%$cari%' or tgl like '%$cari%' or total like '%$cari%'");
        return $data->result();
    }



    public function getDataRekap()
    {
        $query = $this->db->get('rekapitulasi');
        return $query->result();
    }


    ////// MODEL BUAT NAMPILIN TRANSAKSI PERBULAN AJA ///////

    /// JULI ///
    public function getJul()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2022-07-31' and tgl >= '2022-07-01'");
        return $query->result();
    }
    public function get_sumJul()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2022-07-31' and tgl >= '2022-07-01'");
        return $this->db->get('')->row();
    }

    /// AGUSTUS ///
    public function getAug()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2022-08-31' and tgl >= '2022-08-01'");
        return $query->result();
    }
    public function get_sumAug()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2022-08-31' and tgl >= '2022-08-01'");
        return $this->db->get('')->row();
    }

    /// SEPTEMBER ///
    public function getSept()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2022-09-30' and tgl >= '2022-09-01'");
        return $query->result();
    }
    public function get_sumSept()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2022-09-30' and tgl >= '2022-09-01'");
        return $this->db->get('')->row();
    }


    /// OKTOBER ///
    public function getOct()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2022-10-31' and tgl >= '2022-10-01'");
        return $query->result();
    }
    public function get_sumOct()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2022-10-31' and tgl >= '2022-10-01'");
        return $this->db->get('')->row();
    }


    /// NOVEMBER ///
    public function getNov()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2022-11-30' and tgl >= '2022-11-01'");
        return $query->result();
    }
    public function get_sumNov()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2022-11-30' and tgl >= '2022-11-01'");
        return $this->db->get('')->row();
    }


    /// DESEMBER ///
    public function getDes()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2022-12-31' and tgl >= '2022-12-01'");
        return $query->result();
    }
    public function get_sumDes()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2022-12-31' and tgl >= '2022-12-01'");
        return $this->db->get('')->row();
    }

    /// JANUARI ///
    public function getJan()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2023-01-31' and tgl >= '2023-01-01'");
        return $query->result();
    }
    public function get_sumJan()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2023-01-31' and tgl >= '2023-01-01'");
        return $this->db->get('')->row();
    }

    /// FEBRUARI ///
    public function getFeb()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2023-02-28' and tgl >= '2023-02-01'");
        return $query->result();
    }
    public function get_sumFeb()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2023-02-28' and tgl >= '2023-02-01'");
        return $this->db->get('')->row();
    }

    /// MARET ///
    public function getMar()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2023-03-31' and tgl >= '2023-03-01'");
        return $query->result();
    }
    public function get_sumMar()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2023-03-31' and tgl >= '2023-03-01'");
        return $this->db->get('')->row();
    }

    /// APRIL ///
    public function getApr()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2023-04-30' and tgl >= '2023-04-01'");
        return $query->result();
    }
    public function get_sumApr()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2023-04-30' and tgl >= '2023-04-01'");
        return $this->db->get('')->row();
    }

    /// MEI ///
    public function getMei()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2023-05-31' and tgl >= '2023-05-01'");
        return $query->result();
    }
    public function get_sumMei()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2023-05-31' and tgl >= '2023-05-01'");
        return $this->db->get('')->row();
    }

    /// JUNI ///
    public function getJun()
    {
        $query = $this->db->query("select*from transaksi where tgl < '2023-06-30' and tgl >= '2023-06-01'");
        return $query->result();
    }
    public function get_sumJun()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl < '2023-06-30' and tgl >= '2023-06-01'");
        return $this->db->get('')->row();
    }
}
