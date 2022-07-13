<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Jan extends CI_Model
{
    public function get_sumJan1()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-01'");
        return $this->db->get('')->row();
    }
    public function get_sumJan2()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-02'");
        return $this->db->get('')->row();
    }
    public function get_sumJan3()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-03'");
        return $this->db->get('')->row();
    }
    public function get_sumJan4()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-04'");
        return $this->db->get('')->row();
    }
    public function get_sumJan5()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-05'");
        return $this->db->get('')->row();
    }
    public function get_sumJan6()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-06'");
        return $this->db->get('')->row();
    }
    public function get_sumJan7()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-07'");
        return $this->db->get('')->row();
    }
    public function get_sumJan8()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-08'");
        return $this->db->get('')->row();
    }
    public function get_sumJan9()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-09'");
        return $this->db->get('')->row();
    }
    public function get_sumJan10()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-10'");
        return $this->db->get('')->row();
    }
    public function get_sumJan11()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-11'");
        return $this->db->get('')->row();
    }
    public function get_sumJan12()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-12'");
        return $this->db->get('')->row();
    }
    public function get_sumJan13()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-13'");
        return $this->db->get('')->row();
    }
    public function get_sumJan14()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-14'");
        return $this->db->get('')->row();
    }
    public function get_sumJan15()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-15'");
        return $this->db->get('')->row();
    }
    public function get_sumJan16()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-16'");
        return $this->db->get('')->row();
    }
    public function get_sumJan17()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-17'");
        return $this->db->get('')->row();
    }
    public function get_sumJan18()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-18'");
        return $this->db->get('')->row();
    }
    public function get_sumJan19()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-19'");
        return $this->db->get('')->row();
    }
    public function get_sumJan20()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-20'");
        return $this->db->get('')->row();
    }
    public function get_sumJan21()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-21'");
        return $this->db->get('')->row();
    }
    public function get_sumJan22()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-22'");
        return $this->db->get('')->row();
    }
    public function get_sumJan23()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-23'");
        return $this->db->get('')->row();
    }
    public function get_sumJan24()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-24'");
        return $this->db->get('')->row();
    }
    public function get_sumJan25()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-25'");
        return $this->db->get('')->row();
    }
    public function get_sumJan26()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-26'");
        return $this->db->get('')->row();
    }
    public function get_sumJan27()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-27'");
        return $this->db->get('')->row();
    }
    public function get_sumJan28()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-28'");
        return $this->db->get('')->row();
    }
    public function get_sumJan29()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-29'");
        return $this->db->get('')->row();
    }
    public function get_sumJan30()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-30'");
        return $this->db->get('')->row();
    }
    public function get_sumJan31()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-01-31'");
        return $this->db->get('')->row();
    }
}
