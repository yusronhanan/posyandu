<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
   public function __construct(){
      parent::__construct();
		$this->load->model('m_data');
   }

   public function index(){
		$data['rs'] = $this->m_data->get_listArticles_home();
		$data['title'] = 'Home';
		$data['main_view'] = 'v_home';
		$this->load->view('v_template',$data);
   }
   public function articles(){
	$keyword = $this->input->get('keyword');
	if(empty($keyword)){
		$data['rs'] = $this->m_data->get_listArticles();
	} else{
		$data['rs'] = $this->m_data->get_listArticles_search($keyword);
	}
	
	$data['title'] = 'Articles';
	$data['main_view'] = 'v_articles';
	$this->load->view('v_template',$data);
	}
	public function schedule(){
		$name = $this->input->get('name');
		$gender = $this->input->get('gender');
		$date = $this->input->get('date');

		$today = date("Y-m-d");
		$diff = date_diff(date_create($date), date_create($today));
		$age_inmonth = ($diff->format('%y') * 12) + $diff->format('%m');

		

		if(empty($name) && empty($gender) && empty($age)) { 
		$data['rs'] = $this->m_data->get_listSchedules();
		$data['age'] = $this->m_data->get_ageInMonth();

		
		} else{
		$data['name'] = $name;
		$data['gender'] = $gender;
		$data['age_inmonth'] = $age_inmonth;

		$data['rs'] = $this->m_data->get_listSchedules_where($age_inmonth);
		$data['age'] = $this->m_data->get_ageInMonth_where($age_inmonth);
		
		$head = $this->input->get('head');
		$weight = $this->input->get('weight');
		$height = $this->input->get('height');
			if(!empty($head)){
				$data['head_size'] = $head;
				$data['head_status'] = $this->m_data->statusHead($head,$age_inmonth);
			}
			if(!empty($weight)){
				$data['weight_size'] = $weight;
				$data['weight_status'] = $this->m_data->statusWeight($weight,$gender,$age_inmonth);
			}
			if(!empty($height)){
				$data['height_size'] = $height;
				$data['height_status'] = $this->m_data->statusHeight($height,$gender,$age_inmonth);
			}
		}
		$data['title'] = 'Schedule';
		$data['main_view'] = 'v_schedule';
		$this->load->view('v_template',$data);
	}
	
	


//detail article
public function article(){
	$id_article = $this->uri->segment(3);
	$data['title'] = 'Article';
	$data['rs'] = $this->m_data->get_article($id_article);
	$data['main_view'] = 'v_detailArticle';
	$this->load->view('v_template',$data);
}

// public function aboutus(){
// 	$data['title'] = 'About Us';
// 	$data['main_view'] = 'v_aboutus';
// 	$this->load->view('v_template',$data);
// }
	// public function index(){
	// 	$data['diri'] = $this->m_data->get_datadiri()->row();
	//    $this->load->view('v_datadiri',$data);
	// }
	// public function daftarteman(){
	// 	$data['diri'] = $this->m_data->get_datadiri()->row();
	// 	$data['teman'] = $this->m_data->get_datateman()->result();
	// 	$this->load->view('v_datateman',$data);
	// }
}
