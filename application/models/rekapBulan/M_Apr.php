<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Apr extends CI_Model
{
    public function get_sumApr1()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-01'");
        return $this->db->get('')->row();
    }
    public function get_sumApr2()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-02'");
        return $this->db->get('')->row();
    }
    public function get_sumApr3()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-03'");
        return $this->db->get('')->row();
    }
    public function get_sumApr4()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-04'");
        return $this->db->get('')->row();
    }
    public function get_sumApr5()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-05'");
        return $this->db->get('')->row();
    }
    public function get_sumApr6()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-06'");
        return $this->db->get('')->row();
    }
    public function get_sumApr7()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-07'");
        return $this->db->get('')->row();
    }
    public function get_sumApr8()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-08'");
        return $this->db->get('')->row();
    }
    public function get_sumApr9()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-09'");
        return $this->db->get('')->row();
    }
    public function get_sumApr10()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-10'");
        return $this->db->get('')->row();
    }
    public function get_sumApr11()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-11'");
        return $this->db->get('')->row();
    }
    public function get_sumApr12()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-12'");
        return $this->db->get('')->row();
    }
    public function get_sumApr13()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-13'");
        return $this->db->get('')->row();
    }
    public function get_sumApr14()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-14'");
        return $this->db->get('')->row();
    }
    public function get_sumApr15()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-15'");
        return $this->db->get('')->row();
    }
    public function get_sumApr16()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-16'");
        return $this->db->get('')->row();
    }
    public function get_sumApr17()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-17'");
        return $this->db->get('')->row();
    }
    public function get_sumApr18()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-18'");
        return $this->db->get('')->row();
    }
    public function get_sumApr19()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-19'");
        return $this->db->get('')->row();
    }
    public function get_sumApr20()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-20'");
        return $this->db->get('')->row();
    }
    public function get_sumApr21()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-21'");
        return $this->db->get('')->row();
    }
    public function get_sumApr22()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-22'");
        return $this->db->get('')->row();
    }
    public function get_sumApr23()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-23'");
        return $this->db->get('')->row();
    }
    public function get_sumApr24()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-24'");
        return $this->db->get('')->row();
    }
    public function get_sumApr25()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-25'");
        return $this->db->get('')->row();
    }
    public function get_sumApr26()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-26'");
        return $this->db->get('')->row();
    }
    public function get_sumApr27()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-27'");
        return $this->db->get('')->row();
    }
    public function get_sumApr28()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-28'");
        return $this->db->get('')->row();
    }
    public function get_sumApr29()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-29'");
        return $this->db->get('')->row();
    }
    public function get_sumApr30()
    {
        $this->db->select_sum('total');
        $this->db->from("transaksi where tgl = '2023-04-30'");
        return $this->db->get('')->row();
    }
}
