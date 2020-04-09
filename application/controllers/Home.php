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

		$name = $this->input->get('name');
		$gender = $this->input->get('gender');
		$date = $this->input->get('date');
		$head = $this->input->get('head');
		$weight = $this->input->get('weight');
		$height = $this->input->get('height');
		
		$data['name'] = $name;
		$data['gender'] = $gender;
		$data['date'] = $date;
		$data['head'] = $head;
		$data['weight'] = $weight;
		$data['height'] = $height;

		$this->load->view('v_template',$data);
   }
   public function articles(){
	$limit = 4;
	$start = $this->uri->segment(3);
	if(empty($start)){
		$start = 0;
	}
	$keyword = $this->input->get('keyword');

	if(empty($keyword)){
		$data['rs'] = $this->m_data->get_listArticles_limit($limit,$start);
		$config['total_rows'] = count($this->m_data->get_listArticles());
	} else{
		$data['rs'] = $this->m_data->get_listArticles_search_limit($limit,$start,$keyword);
		$config['total_rows'] = count($this->m_data->get_listArticles_search($keyword));
	}
	
	$this->load->library('pagination');
	
	$config['base_url'] = base_url().'index.php/home/articles';
	// $config['total_rows'] = count($data['rs']);
	$config['per_page'] = $limit;
	$config['uri_segment'] = 3;
	$config['num_links'] = 3;
	$config['full_tag_open'] = '';//'<p>';
	$config['full_tag_close'] = '';//'</p>';
	$config['first_link'] = 'First';
	$config['first_tag_open'] = '';//'<div>';
	$config['first_tag_close'] = '';//'</div>';
	$config['last_link'] = 'Last';
	$config['last_tag_open'] = '';//'<div>';
	$config['last_tag_close'] = '';//'</div>';
	$config['next_link'] = '&gt;';
	$config['next_tag_open'] = '';//'<div>';
	$config['next_tag_close'] = '';//'</div>';
	$config['prev_link'] = '&lt;';
	$config['prev_tag_open'] = '';//'<div>';
	$config['prev_tag_close'] = '';//'</div>';
	$config['cur_tag_open'] = '<a id="pagination-active" href="#">';//'<b>';
	$config['cur_tag_close'] = '</a>';//'</b>';
	
	$this->pagination->initialize($config);
	
	
	


	$data['title'] = 'Articles';
	$data['main_view'] = 'v_articles';
	$this->load->view('v_template',$data);
	}
	public function schedule(){
		$data['ar'] = $this->m_data->get_listArticles_home();

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
		$data['born_date'] = $date;
		if($age_inmonth <= 0){
			$age_inmonth = 0;
		}
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
