<?php

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
        $this->loggedinbarpage();
    }

    public function loggedinsearchresults() {
        $this->load->view('snippets/top');
        $this->load->view ('loggedinsearchresults');
        $this->load->view('snippets/footer');
    }

    public function loggedinsearchandadvanced() {
        $this->load->view('snippets/top');
        $this->load->view('loggedinsearchandadvanced');
        $this->load->view('snippets/footer');
    }
    
    public function loggedinbarpage() {
        $this->load->view('snippets/topbarpage');
        //$this->load->view ('home');
        $this->load->view('loggedinbarpage');
        //$this->load->view ('loggedinsearchresults');
        $this->load->view('snippets/footer');
    }
    
}
