<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Des extends CI_Model
{
    public function get_sumDes1()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-01'");
        return $this->db->get('')->row();
    }
    public function get_sumDes2()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-02'");
        return $this->db->get('')->row();
    }
    public function get_sumDes3()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-03'");
        return $this->db->get('')->row();
    }
    public function get_sumDes4()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-04'");
        return $this->db->get('')->row();
    }
    public function get_sumDes5()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-05'");
        return $this->db->get('')->row();
    }
    public function get_sumDes6()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-06'");
        return $this->db->get('')->row();
    }
    public function get_sumDes7()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-07'");
        return $this->db->get('')->row();
    }
    public function get_sumDes8()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-08'");
        return $this->db->get('')->row();
    }
    public function get_sumDes9()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-09'");
        return $this->db->get('')->row();
    }
    public function get_sumDes10()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-10'");
        return $this->db->get('')->row();
    }
    public function get_sumDes11()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-11'");
        return $this->db->get('')->row();
    }
    public function get_sumDes12()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-12'");
        return $this->db->get('')->row();
    }
    public function get_sumDes13()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-13'");
        return $this->db->get('')->row();
    }
    public function get_sumDes14()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-14'");
        return $this->db->get('')->row();
    }
    public function get_sumDes15()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-15'");
        return $this->db->get('')->row();
    }
    public function get_sumDes16()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-16'");
        return $this->db->get('')->row();
    }
    public function get_sumDes17()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-17'");
        return $this->db->get('')->row();
    }
    public function get_sumDes18()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-18'");
        return $this->db->get('')->row();
    }
    public function get_sumDes19()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-19'");
        return $this->db->get('')->row();
    }
    public function get_sumDes20()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-20'");
        return $this->db->get('')->row();
    }
    public function get_sumDes21()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-21'");
        return $this->db->get('')->row();
    }
    public function get_sumDes22()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-22'");
        return $this->db->get('')->row();
    }
    public function get_sumDes23()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-23'");
        return $this->db->get('')->row();
    }
    public function get_sumDes24()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-24'");
        return $this->db->get('')->row();
    }
    public function get_sumDes25()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-25'");
        return $this->db->get('')->row();
    }
    public function get_sumDes26()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-26'");
        return $this->db->get('')->row();
    }
    public function get_sumDes27()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-27'");
        return $this->db->get('')->row();
    }
    public function get_sumDes28()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-28'");
        return $this->db->get('')->row();
    }
    public function get_sumDes29()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-29'");
        return $this->db->get('')->row();
    }
    public function get_sumDes30()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-30'");
        return $this->db->get('')->row();
    }
    public function get_sumDes31()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2022-12-31'");
        return $this->db->get('')->row();
    }
}
