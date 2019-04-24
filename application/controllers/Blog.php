<?php
class Blog extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('blog_model');
                $this->load->helper('url');
        }

        public function index()
        {
                $data['posts'] = $this->blog_model->get_posts();
                $data['title'] = 'Arsip blog';

		$this->load->view('templates/header', $data);
		$this->load->view('blog/index', $data);
		$this->load->view('templates/footer', $data);
        }

        public function view($slug = NULL)
        {
                $data['post'] = $this->blog_model->get_posts($slug);

		if (empty($data['post']))
		{
		        show_404();
		}

		$data['title'] = $data['post']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('blog/view', $data);
		$this->load->view('templates/footer');
        }
}


