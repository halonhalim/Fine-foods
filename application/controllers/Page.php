<?php

if (!defined('BASEPATH'))
    exit('Hacking Attempt: Get out of the system ..!');

class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $data['contact'] = $this->contact_model->index();
        $data['banners'] = $this->banners_model->index();
        $data['article'] = $this->article_model->latest_about();
        $data['notice'] = $this->notice_model->latest_notice();
        $data['category'] = $this->category_model->index();
        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }
    public function contact() {
        $data['contact'] = $this->contact_model->index();
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
    public function massage($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['massage'] = $this->massage_model->get_by_id($id);
        $data['id'] = $id;
        if (!$data['massage']) {
            redirect(base_url());
        }
        $this->load->view('header', $data);
        $this->load->view('md_massag');
        $this->load->view('footer');
    }
    public function notice() {
        $data['contact'] = $this->contact_model->index();
        $data['notice'] = $this->notice_model->index();
        $this->load->view('header', $data);
        $this->load->view('notice');
        $this->load->view('footer');
    }
    public function category($categoryid) {
        $data['contact'] = $this->contact_model->index();
        $data['category'] = $this->category_model->index();
        $data['products'] = $this->products_model->productbycategoryid($categoryid);
        $data['id'] = $categoryid;
        if (!$data['category']) {
            redirect(base_url());
        }
        $this->load->view('header', $data);
        $this->load->view('fish-feed');
        $this->load->view('footer');
    }
    public function picture() {
        $data['contact'] = $this->contact_model->index();
        $data['picture'] = $this->picture_model->index();
        $this->load->view('header', $data);
        $this->load->view('gallery');
        $this->load->view('footer');
    }
    public function corporateprofile() {
        $data['contact'] = $this->contact_model->index();
        $data['corporateprofile'] = $this->corporateprofile_model->index();
        $this->load->view('header', $data);
        $this->load->view('corporate-profile');
        $this->load->view('footer');
    }
    public function firstquater($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['firstquater'] = $this->firstquater_model->get_by_id($id);
        $data['id'] = $id;
        if (!$data['firstquater']) {
            redirect(base_url());
        }
        $this->load->view('header', $data);
        $this->load->view('first-a');
        $this->load->view('footer');
    }

    public function halfyearly($tittle) {
        $data['contact'] = $this->contact_model->index();
        $data['halfyearly'] = $this->halfyearly_model->select_by_year($tittle);

        $this->load->view('header', $data);
        $this->load->view('half-b');
        $this->load->view('footer');
    }

    public function thirdquater($year) {
        $data['contact'] = $this->contact_model->index();
        $data['thirdquater'] = $this->thirdquater_model->select_by_year($year);
        $this->load->view('header', $data);
        $this->load->view('thard-a');
        $this->load->view('footer');
    }

    public function investorralation() {
        $data['contact'] = $this->contact_model->index();
        $data['investorralation'] = $this->investorralation_model->index();
        $this->load->view('header', $data);
        $this->load->view('investor-relations');
        $this->load->view('footer');
    }

    public function anualreport($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['anualreport'] = $this->anualreport_model->get_by_id($id);
         $data['id'] = $id;
        if (!$data['anualreport']) {
            redirect(base_url());
        }
        $this->load->view('header', $data);
        $this->load->view('annual-a');
        $this->load->view('footer');
    }

}
