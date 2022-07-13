<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Feb extends CI_Model
{
    public function get_sumFeb1()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-01'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb2()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-02'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb3()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-03'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb4()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-04'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb5()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-05'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb6()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-06'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb7()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-07'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb8()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-08'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb9()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-09'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb10()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-10'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb11()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-11'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb12()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-12'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb13()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-13'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb14()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-14'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb15()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-15'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb16()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-16'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb17()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-17'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb18()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-18'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb19()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-19'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb20()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-20'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb21()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-21'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb22()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-22'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb23()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-23'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb24()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-24'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb25()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-25'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb26()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-26'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb27()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-27'");
        return $this->db->get('')->row();
    }
    public function get_sumFeb28()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-02-28'");
        return $this->db->get('')->row();
    }
}
