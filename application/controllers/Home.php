<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		include APPPATH.'views/tool/function.php';
	}
	public function index(){
		$d['title']= 'Indonesia';
		//indonesia
		$indonesia= file_get_contents('https://api.kawalcorona.com/indonesia');
		// $indonesia= file_get_contents(base_url('corona/indonesia'));
		$d['total_indonesia']= json_decode($indonesia);
		//indonesia
		$provinsi= file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		// $provinsi= file_get_contents(base_url('corona/provinsi'));
		$d['total_provinsi']= json_decode($provinsi);
		$this->template->covid19('home',$d);
	}
	public function allglobal(){
		$d['title']= 'Global';
		$tanggal =  date('d M Y');
		$this->session->set_userdata('tanggal', $tanggal);
		//positif global
		$positifglobal= file_get_contents('https://api.kawalcorona.com/positif');
		// $positifglobal= file_get_contents(base_url('corona/positif'));
		$d['positif_global']= json_decode($positifglobal);
		//sembuh global
		$sembuhglobal= file_get_contents('https://api.kawalcorona.com/sembuh');
		// $sembuhglobal= file_get_contents(base_url('corona/sembuh'));
		$d['sembuh_global']= json_decode($sembuhglobal);
		//meninggal global
		$meninggalglobal= file_get_contents('https://api.kawalcorona.com/meninggal');
		// $meninggalglobal= file_get_contents(base_url('corona/meninggal'));
		$d['meninggal_global']= json_decode($meninggalglobal);
		//global
		$allglobal= file_get_contents('https://api.kawalcorona.com');
		// $allglobal= file_get_contents(base_url('corona/global'));
		$d['data_global']= json_decode($allglobal);
		$this->template->covid19('global',$d);
	}
}