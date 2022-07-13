<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Eticket');
		$this->load->model('rekapBulan/M_Juli');
		$this->load->model('rekapBulan/M_Aug');
		$this->load->model('rekapBulan/M_Sept');
		$this->load->model('rekapBulan/M_Oct');
		$this->load->model('rekapBulan/M_Nov');
		$this->load->model('rekapBulan/M_Des');
		$this->load->model('rekapBulan/M_Jan');
		$this->load->model('rekapBulan/M_Feb');
		$this->load->model('rekapBulan/M_Mar');
		$this->load->model('rekapBulan/M_Apr');
		$this->load->model('rekapBulan/M_Mei');
		$this->load->model('rekapBulan/M_Jun');
		$this->load->library("pagination");
	}

	public function index()
	{
		// $this->load->helper('url');
		$this->load->view('home');
	}

	public function halaman_transaksi()
	{
		$config = array();
		$config['base_url'] = site_url('home/halaman_transaksi');
		$config['total_rows'] = $this->db->count_all('transaksi');
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$choice = $config["total_rows"] / $config['per_page'];
		$config["num_links"] = floor($choice);
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['next_tagl_close'] = '<span aria-hidden= "true">&raquo</span></span></li>';
		$config['prev_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['prev_tagl_close'] = '</span>Next</li>';
		$config['first_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item "><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';



		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// $queryAllData = $this->M_Eticket->getDataTransaksi($config["per_page"], $DATA['page']);

		$data['pagination'] = $this->pagination->create_links();

		// $DATA = array('queryAllDts' => $queryAllData);
		// $data['sum_total'] = $this->M_Eticket->get_sum();
		// $DATA['tgl'] = $this->M_Eticket->getTgl();
		$data['data'] = $this->M_Eticket->getDataTransaksi($config["per_page"], $data['page']);
		$this->load->view('transaksi', $data);
	}

	public function halaman_rekap()
	{
		$data['data'] = $this->M_Eticket->getDataRekap();
		$data['sum_totalAllJul'] = $this->M_Eticket->get_sumJul();
		$data['sum_totalAllAug'] = $this->M_Eticket->get_sumAug();
		$data['sum_totalAllSept'] = $this->M_Eticket->get_sumSept();
		$data['sum_totalAllOct'] = $this->M_Eticket->get_sumOct();
		$data['sum_totalAllNov'] = $this->M_Eticket->get_sumNov();
		$data['sum_totalAllDes'] = $this->M_Eticket->get_sumDes();
		$data['sum_totalAllJan'] = $this->M_Eticket->get_sumJan();
		$data['sum_totalAllFeb'] = $this->M_Eticket->get_sumFeb();
		$data['sum_totalAllMar'] = $this->M_Eticket->get_sumMar();
		$data['sum_totalAllApr'] = $this->M_Eticket->get_sumApr();
		$data['sum_totalAllMei'] = $this->M_Eticket->get_sumMei();
		$data['sum_totalAllJun'] = $this->M_Eticket->get_sumJun();
		$this->load->view('rekapnya', $data);
	}

	public function detail_rekapJul()
	{
		$data['data'] = $this->M_Eticket->getJul();

		$data['sum_totalJul1'] = $this->M_Juli->get_sumJul1();
		$data['sum_totalJul2'] = $this->M_Juli->get_sumJul2();
		$data['sum_totalJul3'] = $this->M_Juli->get_sumJul3();
		$data['sum_totalJul4'] = $this->M_Juli->get_sumJul4();
		$data['sum_totalJul5'] = $this->M_Juli->get_sumJul5();
		$data['sum_totalJul6'] = $this->M_Juli->get_sumJul6();
		$data['sum_totalJul7'] = $this->M_Juli->get_sumJul7();
		$data['sum_totalJul8'] = $this->M_Juli->get_sumJul8();
		$data['sum_totalJul9'] = $this->M_Juli->get_sumJul9();
		$data['sum_totalJul10'] = $this->M_Juli->get_sumJul10();
		$data['sum_totalJul11'] = $this->M_Juli->get_sumJul11();
		$data['sum_totalJul12'] = $this->M_Juli->get_sumJul12();
		$data['sum_totalJul13'] = $this->M_Juli->get_sumJul13();
		$data['sum_totalJul14'] = $this->M_Juli->get_sumJul14();
		$data['sum_totalJul15'] = $this->M_Juli->get_sumJul15();
		$data['sum_totalJul16'] = $this->M_Juli->get_sumJul16();
		$data['sum_totalJul17'] = $this->M_Juli->get_sumJul17();
		$data['sum_totalJul18'] = $this->M_Juli->get_sumJul18();
		$data['sum_totalJul19'] = $this->M_Juli->get_sumJul19();
		$data['sum_totalJul20'] = $this->M_Juli->get_sumJul20();
		$data['sum_totalJul21'] = $this->M_Juli->get_sumJul21();
		$data['sum_totalJul22'] = $this->M_Juli->get_sumJul22();
		$data['sum_totalJul23'] = $this->M_Juli->get_sumJul23();
		$data['sum_totalJul24'] = $this->M_Juli->get_sumJul24();
		$data['sum_totalJul25'] = $this->M_Juli->get_sumJul25();
		$data['sum_totalJul26'] = $this->M_Juli->get_sumJul26();
		$data['sum_totalJul27'] = $this->M_Juli->get_sumJul27();
		$data['sum_totalJul28'] = $this->M_Juli->get_sumJul28();
		$data['sum_totalJul29'] = $this->M_Juli->get_sumJul29();
		$data['sum_totalJul30'] = $this->M_Juli->get_sumJul30();
		$data['sum_totalJul31'] = $this->M_Juli->get_sumJul31();

		$data['sum_totalAllJul'] = $this->M_Eticket->get_sumJul();

		$this->load->view('detail_bulan/detail_jul', $data);
	}

	public function detail_rekapAug()
	{
		$data['data'] = $this->M_Eticket->getAug();

		$data['sum_totalAug1'] = $this->M_Aug->get_sumAug1();
		$data['sum_totalAug2'] = $this->M_Aug->get_sumAug2();
		$data['sum_totalAug3'] = $this->M_Aug->get_sumAug3();
		$data['sum_totalAug4'] = $this->M_Aug->get_sumAug4();
		$data['sum_totalAug5'] = $this->M_Aug->get_sumAug5();
		$data['sum_totalAug6'] = $this->M_Aug->get_sumAug6();
		$data['sum_totalAug7'] = $this->M_Aug->get_sumAug7();
		$data['sum_totalAug8'] = $this->M_Aug->get_sumAug8();
		$data['sum_totalAug9'] = $this->M_Aug->get_sumAug9();
		$data['sum_totalAug10'] = $this->M_Aug->get_sumAug10();
		$data['sum_totalAug11'] = $this->M_Aug->get_sumAug11();
		$data['sum_totalAug12'] = $this->M_Aug->get_sumAug12();
		$data['sum_totalAug13'] = $this->M_Aug->get_sumAug13();
		$data['sum_totalAug14'] = $this->M_Aug->get_sumAug14();
		$data['sum_totalAug15'] = $this->M_Aug->get_sumAug15();
		$data['sum_totalAug16'] = $this->M_Aug->get_sumAug16();
		$data['sum_totalAug17'] = $this->M_Aug->get_sumAug17();
		$data['sum_totalAug18'] = $this->M_Aug->get_sumAug18();
		$data['sum_totalAug19'] = $this->M_Aug->get_sumAug19();
		$data['sum_totalAug20'] = $this->M_Aug->get_sumAug20();
		$data['sum_totalAug21'] = $this->M_Aug->get_sumAug21();
		$data['sum_totalAug22'] = $this->M_Aug->get_sumAug22();
		$data['sum_totalAug23'] = $this->M_Aug->get_sumAug23();
		$data['sum_totalAug24'] = $this->M_Aug->get_sumAug24();
		$data['sum_totalAug25'] = $this->M_Aug->get_sumAug25();
		$data['sum_totalAug26'] = $this->M_Aug->get_sumAug26();
		$data['sum_totalAug27'] = $this->M_Aug->get_sumAug27();
		$data['sum_totalAug28'] = $this->M_Aug->get_sumAug28();
		$data['sum_totalAug29'] = $this->M_Aug->get_sumAug29();
		$data['sum_totalAug30'] = $this->M_Aug->get_sumAug30();
		$data['sum_totalAug31'] = $this->M_Aug->get_sumAug31();

		$data['sum_totalAllAug'] = $this->M_Eticket->get_sumAug();

		$this->load->view('detail_bulan/detail_aug', $data);
	}

	public function detail_rekapSept()
	{
		$data['data'] = $this->M_Eticket->getSept();

		$data['sum_totalSept1'] = $this->M_Sept->get_sumSept1();
		$data['sum_totalSept2'] = $this->M_Sept->get_sumSept2();
		$data['sum_totalSept3'] = $this->M_Sept->get_sumSept3();
		$data['sum_totalSept4'] = $this->M_Sept->get_sumSept4();
		$data['sum_totalSept5'] = $this->M_Sept->get_sumSept5();
		$data['sum_totalSept6'] = $this->M_Sept->get_sumSept6();
		$data['sum_totalSept7'] = $this->M_Sept->get_sumSept7();
		$data['sum_totalSept8'] = $this->M_Sept->get_sumSept8();
		$data['sum_totalSept9'] = $this->M_Sept->get_sumSept9();
		$data['sum_totalSept10'] = $this->M_Sept->get_sumSept10();
		$data['sum_totalSept11'] = $this->M_Sept->get_sumSept11();
		$data['sum_totalSept12'] = $this->M_Sept->get_sumSept12();
		$data['sum_totalSept13'] = $this->M_Sept->get_sumSept13();
		$data['sum_totalSept14'] = $this->M_Sept->get_sumSept14();
		$data['sum_totalSept15'] = $this->M_Sept->get_sumSept15();
		$data['sum_totalSept16'] = $this->M_Sept->get_sumSept16();
		$data['sum_totalSept17'] = $this->M_Sept->get_sumSept17();
		$data['sum_totalSept18'] = $this->M_Sept->get_sumSept18();
		$data['sum_totalSept19'] = $this->M_Sept->get_sumSept19();
		$data['sum_totalSept20'] = $this->M_Sept->get_sumSept20();
		$data['sum_totalSept21'] = $this->M_Sept->get_sumSept21();
		$data['sum_totalSept22'] = $this->M_Sept->get_sumSept22();
		$data['sum_totalSept23'] = $this->M_Sept->get_sumSept23();
		$data['sum_totalSept24'] = $this->M_Sept->get_sumSept24();
		$data['sum_totalSept25'] = $this->M_Sept->get_sumSept25();
		$data['sum_totalSept26'] = $this->M_Sept->get_sumSept26();
		$data['sum_totalSept27'] = $this->M_Sept->get_sumSept27();
		$data['sum_totalSept28'] = $this->M_Sept->get_sumSept28();
		$data['sum_totalSept29'] = $this->M_Sept->get_sumSept29();
		$data['sum_totalSept30'] = $this->M_Sept->get_sumSept30();

		$data['sum_totalAllSept'] = $this->M_Eticket->get_sumSept();

		$this->load->view('detail_bulan/detail_sept', $data);
	}

	public function detail_rekapOct()
	{
		$data['data'] = $this->M_Eticket->getOct();

		$data['sum_totalOct1'] = $this->M_Oct->get_sumOct1();
		$data['sum_totalOct2'] = $this->M_Oct->get_sumOct2();
		$data['sum_totalOct3'] = $this->M_Oct->get_sumOct3();
		$data['sum_totalOct4'] = $this->M_Oct->get_sumOct4();
		$data['sum_totalOct5'] = $this->M_Oct->get_sumOct5();
		$data['sum_totalOct6'] = $this->M_Oct->get_sumOct6();
		$data['sum_totalOct7'] = $this->M_Oct->get_sumOct7();
		$data['sum_totalOct8'] = $this->M_Oct->get_sumOct8();
		$data['sum_totalOct9'] = $this->M_Oct->get_sumOct9();
		$data['sum_totalOct10'] = $this->M_Oct->get_sumOct10();
		$data['sum_totalOct11'] = $this->M_Oct->get_sumOct11();
		$data['sum_totalOct12'] = $this->M_Oct->get_sumOct12();
		$data['sum_totalOct13'] = $this->M_Oct->get_sumOct13();
		$data['sum_totalOct14'] = $this->M_Oct->get_sumOct14();
		$data['sum_totalOct15'] = $this->M_Oct->get_sumOct15();
		$data['sum_totalOct16'] = $this->M_Oct->get_sumOct16();
		$data['sum_totalOct17'] = $this->M_Oct->get_sumOct17();
		$data['sum_totalOct18'] = $this->M_Oct->get_sumOct18();
		$data['sum_totalOct19'] = $this->M_Oct->get_sumOct19();
		$data['sum_totalOct20'] = $this->M_Oct->get_sumOct20();
		$data['sum_totalOct21'] = $this->M_Oct->get_sumOct21();
		$data['sum_totalOct22'] = $this->M_Oct->get_sumOct22();
		$data['sum_totalOct23'] = $this->M_Oct->get_sumOct23();
		$data['sum_totalOct24'] = $this->M_Oct->get_sumOct24();
		$data['sum_totalOct25'] = $this->M_Oct->get_sumOct25();
		$data['sum_totalOct26'] = $this->M_Oct->get_sumOct26();
		$data['sum_totalOct27'] = $this->M_Oct->get_sumOct27();
		$data['sum_totalOct28'] = $this->M_Oct->get_sumOct28();
		$data['sum_totalOct29'] = $this->M_Oct->get_sumOct29();
		$data['sum_totalOct30'] = $this->M_Oct->get_sumOct30();
		$data['sum_totalOct31'] = $this->M_Oct->get_sumOct31();

		$data['sum_totalAllOct'] = $this->M_Eticket->get_sumOct();

		$this->load->view('detail_bulan/detail_oct', $data);
	}

	public function detail_rekapNov()
	{
		$data['data'] = $this->M_Eticket->getNov();

		$data['sum_totalNov1'] = $this->M_Nov->get_sumNov1();
		$data['sum_totalNov2'] = $this->M_Nov->get_sumNov2();
		$data['sum_totalNov3'] = $this->M_Nov->get_sumNov3();
		$data['sum_totalNov4'] = $this->M_Nov->get_sumNov4();
		$data['sum_totalNov5'] = $this->M_Nov->get_sumNov5();
		$data['sum_totalNov6'] = $this->M_Nov->get_sumNov6();
		$data['sum_totalNov7'] = $this->M_Nov->get_sumNov7();
		$data['sum_totalNov8'] = $this->M_Nov->get_sumNov8();
		$data['sum_totalNov9'] = $this->M_Nov->get_sumNov9();
		$data['sum_totalNov10'] = $this->M_Nov->get_sumNov10();
		$data['sum_totalNov11'] = $this->M_Nov->get_sumNov11();
		$data['sum_totalNov12'] = $this->M_Nov->get_sumNov12();
		$data['sum_totalNov13'] = $this->M_Nov->get_sumNov13();
		$data['sum_totalNov14'] = $this->M_Nov->get_sumNov14();
		$data['sum_totalNov15'] = $this->M_Nov->get_sumNov15();
		$data['sum_totalNov16'] = $this->M_Nov->get_sumNov16();
		$data['sum_totalNov17'] = $this->M_Nov->get_sumNov17();
		$data['sum_totalNov18'] = $this->M_Nov->get_sumNov18();
		$data['sum_totalNov19'] = $this->M_Nov->get_sumNov19();
		$data['sum_totalNov20'] = $this->M_Nov->get_sumNov20();
		$data['sum_totalNov21'] = $this->M_Nov->get_sumNov21();
		$data['sum_totalNov22'] = $this->M_Nov->get_sumNov22();
		$data['sum_totalNov23'] = $this->M_Nov->get_sumNov23();
		$data['sum_totalNov24'] = $this->M_Nov->get_sumNov24();
		$data['sum_totalNov25'] = $this->M_Nov->get_sumNov25();
		$data['sum_totalNov26'] = $this->M_Nov->get_sumNov26();
		$data['sum_totalNov27'] = $this->M_Nov->get_sumNov27();
		$data['sum_totalNov28'] = $this->M_Nov->get_sumNov28();
		$data['sum_totalNov29'] = $this->M_Nov->get_sumNov29();
		$data['sum_totalNov30'] = $this->M_Nov->get_sumNov30();

		$data['sum_totalAllNov'] = $this->M_Eticket->get_sumNov();

		$this->load->view('detail_bulan/detail_nov', $data);
	}
	public function detail_rekapDes()
	{
		$data['data'] = $this->M_Eticket->getDes();

		$data['sum_totalDes1'] = $this->M_Des->get_sumDes1();
		$data['sum_totalDes2'] = $this->M_Des->get_sumDes2();
		$data['sum_totalDes3'] = $this->M_Des->get_sumDes3();
		$data['sum_totalDes4'] = $this->M_Des->get_sumDes4();
		$data['sum_totalDes5'] = $this->M_Des->get_sumDes5();
		$data['sum_totalDes6'] = $this->M_Des->get_sumDes6();
		$data['sum_totalDes7'] = $this->M_Des->get_sumDes7();
		$data['sum_totalDes8'] = $this->M_Des->get_sumDes8();
		$data['sum_totalDes9'] = $this->M_Des->get_sumDes9();
		$data['sum_totalDes10'] = $this->M_Des->get_sumDes10();
		$data['sum_totalDes11'] = $this->M_Des->get_sumDes11();
		$data['sum_totalDes12'] = $this->M_Des->get_sumDes12();
		$data['sum_totalDes13'] = $this->M_Des->get_sumDes13();
		$data['sum_totalDes14'] = $this->M_Des->get_sumDes14();
		$data['sum_totalDes15'] = $this->M_Des->get_sumDes15();
		$data['sum_totalDes16'] = $this->M_Des->get_sumDes16();
		$data['sum_totalDes17'] = $this->M_Des->get_sumDes17();
		$data['sum_totalDes18'] = $this->M_Des->get_sumDes18();
		$data['sum_totalDes19'] = $this->M_Des->get_sumDes19();
		$data['sum_totalDes20'] = $this->M_Des->get_sumDes20();
		$data['sum_totalDes21'] = $this->M_Des->get_sumDes21();
		$data['sum_totalDes22'] = $this->M_Des->get_sumDes22();
		$data['sum_totalDes23'] = $this->M_Des->get_sumDes23();
		$data['sum_totalDes24'] = $this->M_Des->get_sumDes24();
		$data['sum_totalDes25'] = $this->M_Des->get_sumDes25();
		$data['sum_totalDes26'] = $this->M_Des->get_sumDes26();
		$data['sum_totalDes27'] = $this->M_Des->get_sumDes27();
		$data['sum_totalDes28'] = $this->M_Des->get_sumDes28();
		$data['sum_totalDes29'] = $this->M_Des->get_sumDes29();
		$data['sum_totalDes30'] = $this->M_Des->get_sumDes30();
		$data['sum_totalDes31'] = $this->M_Des->get_sumDes31();

		$data['sum_totalAllDes'] = $this->M_Eticket->get_sumDes();

		$this->load->view('detail_bulan/detail_des', $data);
	}

	public function detail_rekapJan()
	{
		$data['data'] = $this->M_Eticket->getJan();

		$data['sum_totalJan1'] = $this->M_Jan->get_sumJan1();
		$data['sum_totalJan2'] = $this->M_Jan->get_sumJan2();
		$data['sum_totalJan3'] = $this->M_Jan->get_sumJan3();
		$data['sum_totalJan4'] = $this->M_Jan->get_sumJan4();
		$data['sum_totalJan5'] = $this->M_Jan->get_sumJan5();
		$data['sum_totalJan6'] = $this->M_Jan->get_sumJan6();
		$data['sum_totalJan7'] = $this->M_Jan->get_sumJan7();
		$data['sum_totalJan8'] = $this->M_Jan->get_sumJan8();
		$data['sum_totalJan9'] = $this->M_Jan->get_sumJan9();
		$data['sum_totalJan10'] = $this->M_Jan->get_sumJan10();
		$data['sum_totalJan11'] = $this->M_Jan->get_sumJan11();
		$data['sum_totalJan12'] = $this->M_Jan->get_sumJan12();
		$data['sum_totalJan13'] = $this->M_Jan->get_sumJan13();
		$data['sum_totalJan14'] = $this->M_Jan->get_sumJan14();
		$data['sum_totalJan15'] = $this->M_Jan->get_sumJan15();
		$data['sum_totalJan16'] = $this->M_Jan->get_sumJan16();
		$data['sum_totalJan17'] = $this->M_Jan->get_sumJan17();
		$data['sum_totalJan18'] = $this->M_Jan->get_sumJan18();
		$data['sum_totalJan19'] = $this->M_Jan->get_sumJan19();
		$data['sum_totalJan20'] = $this->M_Jan->get_sumJan20();
		$data['sum_totalJan21'] = $this->M_Jan->get_sumJan21();
		$data['sum_totalJan22'] = $this->M_Jan->get_sumJan22();
		$data['sum_totalJan23'] = $this->M_Jan->get_sumJan23();
		$data['sum_totalJan24'] = $this->M_Jan->get_sumJan24();
		$data['sum_totalJan25'] = $this->M_Jan->get_sumJan25();
		$data['sum_totalJan26'] = $this->M_Jan->get_sumJan26();
		$data['sum_totalJan27'] = $this->M_Jan->get_sumJan27();
		$data['sum_totalJan28'] = $this->M_Jan->get_sumJan28();
		$data['sum_totalJan29'] = $this->M_Jan->get_sumJan29();
		$data['sum_totalJan30'] = $this->M_Jan->get_sumJan30();
		$data['sum_totalJan31'] = $this->M_Jan->get_sumJan31();

		$data['sum_totalAllJan'] = $this->M_Eticket->get_sumJan();

		$this->load->view('detail_bulan/detail_jan', $data);
	}

	public function detail_rekapFeb()
	{
		$data['data'] = $this->M_Eticket->getFeb();

		$data['sum_totalFeb1'] = $this->M_Feb->get_sumFeb1();
		$data['sum_totalFeb2'] = $this->M_Feb->get_sumFeb2();
		$data['sum_totalFeb3'] = $this->M_Feb->get_sumFeb3();
		$data['sum_totalFeb4'] = $this->M_Feb->get_sumFeb4();
		$data['sum_totalFeb5'] = $this->M_Feb->get_sumFeb5();
		$data['sum_totalFeb6'] = $this->M_Feb->get_sumFeb6();
		$data['sum_totalFeb7'] = $this->M_Feb->get_sumFeb7();
		$data['sum_totalFeb8'] = $this->M_Feb->get_sumFeb8();
		$data['sum_totalFeb9'] = $this->M_Feb->get_sumFeb9();
		$data['sum_totalFeb10'] = $this->M_Feb->get_sumFeb10();
		$data['sum_totalFeb11'] = $this->M_Feb->get_sumFeb11();
		$data['sum_totalFeb12'] = $this->M_Feb->get_sumFeb12();
		$data['sum_totalFeb13'] = $this->M_Feb->get_sumFeb13();
		$data['sum_totalFeb14'] = $this->M_Feb->get_sumFeb14();
		$data['sum_totalFeb15'] = $this->M_Feb->get_sumFeb15();
		$data['sum_totalFeb16'] = $this->M_Feb->get_sumFeb16();
		$data['sum_totalFeb17'] = $this->M_Feb->get_sumFeb17();
		$data['sum_totalFeb18'] = $this->M_Feb->get_sumFeb18();
		$data['sum_totalFeb19'] = $this->M_Feb->get_sumFeb19();
		$data['sum_totalFeb20'] = $this->M_Feb->get_sumFeb20();
		$data['sum_totalFeb21'] = $this->M_Feb->get_sumFeb21();
		$data['sum_totalFeb22'] = $this->M_Feb->get_sumFeb22();
		$data['sum_totalFeb23'] = $this->M_Feb->get_sumFeb23();
		$data['sum_totalFeb24'] = $this->M_Feb->get_sumFeb24();
		$data['sum_totalFeb25'] = $this->M_Feb->get_sumFeb25();
		$data['sum_totalFeb26'] = $this->M_Feb->get_sumFeb26();
		$data['sum_totalFeb27'] = $this->M_Feb->get_sumFeb27();
		$data['sum_totalFeb28'] = $this->M_Feb->get_sumFeb28();


		$data['sum_totalAllFeb'] = $this->M_Eticket->get_sumFeb();

		$this->load->view('detail_bulan/detail_feb', $data);
	}

	public function detail_rekapMar()
	{
		$data['data'] = $this->M_Eticket->getMar();

		$data['sum_totalMar1'] = $this->M_Mar->get_sumMar1();
		$data['sum_totalMar2'] = $this->M_Mar->get_sumMar2();
		$data['sum_totalMar3'] = $this->M_Mar->get_sumMar3();
		$data['sum_totalMar4'] = $this->M_Mar->get_sumMar4();
		$data['sum_totalMar5'] = $this->M_Mar->get_sumMar5();
		$data['sum_totalMar6'] = $this->M_Mar->get_sumMar6();
		$data['sum_totalMar7'] = $this->M_Mar->get_sumMar7();
		$data['sum_totalMar8'] = $this->M_Mar->get_sumMar8();
		$data['sum_totalMar9'] = $this->M_Mar->get_sumMar9();
		$data['sum_totalMar10'] = $this->M_Mar->get_sumMar10();
		$data['sum_totalMar11'] = $this->M_Mar->get_sumMar11();
		$data['sum_totalMar12'] = $this->M_Mar->get_sumMar12();
		$data['sum_totalMar13'] = $this->M_Mar->get_sumMar13();
		$data['sum_totalMar14'] = $this->M_Mar->get_sumMar14();
		$data['sum_totalMar15'] = $this->M_Mar->get_sumMar15();
		$data['sum_totalMar16'] = $this->M_Mar->get_sumMar16();
		$data['sum_totalMar17'] = $this->M_Mar->get_sumMar17();
		$data['sum_totalMar18'] = $this->M_Mar->get_sumMar18();
		$data['sum_totalMar19'] = $this->M_Mar->get_sumMar19();
		$data['sum_totalMar20'] = $this->M_Mar->get_sumMar20();
		$data['sum_totalMar21'] = $this->M_Mar->get_sumMar21();
		$data['sum_totalMar22'] = $this->M_Mar->get_sumMar22();
		$data['sum_totalMar23'] = $this->M_Mar->get_sumMar23();
		$data['sum_totalMar24'] = $this->M_Mar->get_sumMar24();
		$data['sum_totalMar25'] = $this->M_Mar->get_sumMar25();
		$data['sum_totalMar26'] = $this->M_Mar->get_sumMar26();
		$data['sum_totalMar27'] = $this->M_Mar->get_sumMar27();
		$data['sum_totalMar28'] = $this->M_Mar->get_sumMar28();
		$data['sum_totalMar29'] = $this->M_Mar->get_sumMar29();
		$data['sum_totalMar30'] = $this->M_Mar->get_sumMar30();
		$data['sum_totalMar31'] = $this->M_Mar->get_sumMar31();

		$data['sum_totalAllMar'] = $this->M_Eticket->get_sumMar();

		$this->load->view('detail_bulan/detail_mar', $data);
	}

	public function detail_rekapApr()
	{
		$data['data'] = $this->M_Eticket->getApr();

		$data['sum_totalApr1'] = $this->M_Apr->get_sumApr1();
		$data['sum_totalApr2'] = $this->M_Apr->get_sumApr2();
		$data['sum_totalApr3'] = $this->M_Apr->get_sumApr3();
		$data['sum_totalApr4'] = $this->M_Apr->get_sumApr4();
		$data['sum_totalApr5'] = $this->M_Apr->get_sumApr5();
		$data['sum_totalApr6'] = $this->M_Apr->get_sumApr6();
		$data['sum_totalApr7'] = $this->M_Apr->get_sumApr7();
		$data['sum_totalApr8'] = $this->M_Apr->get_sumApr8();
		$data['sum_totalApr9'] = $this->M_Apr->get_sumApr9();
		$data['sum_totalApr10'] = $this->M_Apr->get_sumApr10();
		$data['sum_totalApr11'] = $this->M_Apr->get_sumApr11();
		$data['sum_totalApr12'] = $this->M_Apr->get_sumApr12();
		$data['sum_totalApr13'] = $this->M_Apr->get_sumApr13();
		$data['sum_totalApr14'] = $this->M_Apr->get_sumApr14();
		$data['sum_totalApr15'] = $this->M_Apr->get_sumApr15();
		$data['sum_totalApr16'] = $this->M_Apr->get_sumApr16();
		$data['sum_totalApr17'] = $this->M_Apr->get_sumApr17();
		$data['sum_totalApr18'] = $this->M_Apr->get_sumApr18();
		$data['sum_totalApr19'] = $this->M_Apr->get_sumApr19();
		$data['sum_totalApr20'] = $this->M_Apr->get_sumApr20();
		$data['sum_totalApr21'] = $this->M_Apr->get_sumApr21();
		$data['sum_totalApr22'] = $this->M_Apr->get_sumApr22();
		$data['sum_totalApr23'] = $this->M_Apr->get_sumApr23();
		$data['sum_totalApr24'] = $this->M_Apr->get_sumApr24();
		$data['sum_totalApr25'] = $this->M_Apr->get_sumApr25();
		$data['sum_totalApr26'] = $this->M_Apr->get_sumApr26();
		$data['sum_totalApr27'] = $this->M_Apr->get_sumApr27();
		$data['sum_totalApr28'] = $this->M_Apr->get_sumApr28();
		$data['sum_totalApr29'] = $this->M_Apr->get_sumApr29();
		$data['sum_totalApr30'] = $this->M_Apr->get_sumApr30();

		$data['sum_totalAllApr'] = $this->M_Eticket->get_sumApr();

		$this->load->view('detail_bulan/detail_apr', $data);
	}

	public function detail_rekapMei()
	{
		$data['data'] = $this->M_Eticket->getMei();

		$data['sum_totalMei1'] = $this->M_Mei->get_sumMei1();
		$data['sum_totalMei2'] = $this->M_Mei->get_sumMei2();
		$data['sum_totalMei3'] = $this->M_Mei->get_sumMei3();
		$data['sum_totalMei4'] = $this->M_Mei->get_sumMei4();
		$data['sum_totalMei5'] = $this->M_Mei->get_sumMei5();
		$data['sum_totalMei6'] = $this->M_Mei->get_sumMei6();
		$data['sum_totalMei7'] = $this->M_Mei->get_sumMei7();
		$data['sum_totalMei8'] = $this->M_Mei->get_sumMei8();
		$data['sum_totalMei9'] = $this->M_Mei->get_sumMei9();
		$data['sum_totalMei10'] = $this->M_Mei->get_sumMei10();
		$data['sum_totalMei11'] = $this->M_Mei->get_sumMei11();
		$data['sum_totalMei12'] = $this->M_Mei->get_sumMei12();
		$data['sum_totalMei13'] = $this->M_Mei->get_sumMei13();
		$data['sum_totalMei14'] = $this->M_Mei->get_sumMei14();
		$data['sum_totalMei15'] = $this->M_Mei->get_sumMei15();
		$data['sum_totalMei16'] = $this->M_Mei->get_sumMei16();
		$data['sum_totalMei17'] = $this->M_Mei->get_sumMei17();
		$data['sum_totalMei18'] = $this->M_Mei->get_sumMei18();
		$data['sum_totalMei19'] = $this->M_Mei->get_sumMei19();
		$data['sum_totalMei20'] = $this->M_Mei->get_sumMei20();
		$data['sum_totalMei21'] = $this->M_Mei->get_sumMei21();
		$data['sum_totalMei22'] = $this->M_Mei->get_sumMei22();
		$data['sum_totalMei23'] = $this->M_Mei->get_sumMei23();
		$data['sum_totalMei24'] = $this->M_Mei->get_sumMei24();
		$data['sum_totalMei25'] = $this->M_Mei->get_sumMei25();
		$data['sum_totalMei26'] = $this->M_Mei->get_sumMei26();
		$data['sum_totalMei27'] = $this->M_Mei->get_sumMei27();
		$data['sum_totalMei28'] = $this->M_Mei->get_sumMei28();
		$data['sum_totalMei29'] = $this->M_Mei->get_sumMei29();
		$data['sum_totalMei30'] = $this->M_Mei->get_sumMei30();
		$data['sum_totalMei31'] = $this->M_Mei->get_sumMei31();

		$data['sum_totalAllMei'] = $this->M_Eticket->get_sumMei();

		$this->load->view('detail_bulan/detail_mei', $data);
	}

	public function detail_rekapJun()
	{
		$data['data'] = $this->M_Eticket->getJun();

		$data['sum_totalJun1'] = $this->M_Jun->get_sumJun1();
		$data['sum_totalJun2'] = $this->M_Jun->get_sumJun2();
		$data['sum_totalJun3'] = $this->M_Jun->get_sumJun3();
		$data['sum_totalJun4'] = $this->M_Jun->get_sumJun4();
		$data['sum_totalJun5'] = $this->M_Jun->get_sumJun5();
		$data['sum_totalJun6'] = $this->M_Jun->get_sumJun6();
		$data['sum_totalJun7'] = $this->M_Jun->get_sumJun7();
		$data['sum_totalJun8'] = $this->M_Jun->get_sumJun8();
		$data['sum_totalJun9'] = $this->M_Jun->get_sumJun9();
		$data['sum_totalJun10'] = $this->M_Jun->get_sumJun10();
		$data['sum_totalJun11'] = $this->M_Jun->get_sumJun11();
		$data['sum_totalJun12'] = $this->M_Jun->get_sumJun12();
		$data['sum_totalJun13'] = $this->M_Jun->get_sumJun13();
		$data['sum_totalJun14'] = $this->M_Jun->get_sumJun14();
		$data['sum_totalJun15'] = $this->M_Jun->get_sumJun15();
		$data['sum_totalJun16'] = $this->M_Jun->get_sumJun16();
		$data['sum_totalJun17'] = $this->M_Jun->get_sumJun17();
		$data['sum_totalJun18'] = $this->M_Jun->get_sumJun18();
		$data['sum_totalJun19'] = $this->M_Jun->get_sumJun19();
		$data['sum_totalJun20'] = $this->M_Jun->get_sumJun20();
		$data['sum_totalJun21'] = $this->M_Jun->get_sumJun21();
		$data['sum_totalJun22'] = $this->M_Jun->get_sumJun22();
		$data['sum_totalJun23'] = $this->M_Jun->get_sumJun23();
		$data['sum_totalJun24'] = $this->M_Jun->get_sumJun24();
		$data['sum_totalJun25'] = $this->M_Jun->get_sumJun25();
		$data['sum_totalJun26'] = $this->M_Jun->get_sumJun26();
		$data['sum_totalJun27'] = $this->M_Jun->get_sumJun27();
		$data['sum_totalJun28'] = $this->M_Jun->get_sumJun28();
		$data['sum_totalJun29'] = $this->M_Jun->get_sumJun29();
		$data['sum_totalJun30'] = $this->M_Jun->get_sumJun30();

		$data['sum_totalAllJun'] = $this->M_Eticket->get_sumJun();

		$this->load->view('detail_bulan/detail_jun', $data);
	}

	public function cari()
	{
		$this->load->view('transaksi');
	}

	public function hasil()
	{
		$data2['cari'] = $this->M_Eticket->cari();
		$this->load->view('result_cari', $data2);
	}
}
