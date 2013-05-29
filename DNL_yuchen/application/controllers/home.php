<?php

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        session_start();
    }

    public function index() {
        $this->loggedinsearchandadvanced();
    }

    public function loggedinsearchresults() {
        $this->load->view('snippets/top');
        //$this->load->view ('home');
        //$this->load->view('loggedinsearchresults');
        $this->load->view ('loggedinsearchresults');
        $this->load->view('snippets/footer');
    }

    public function loggedinsearchandadvanced() {
        $this->load->view('snippets/top');
        //$this->load->view ('home');
        $this->load->view('loggedinsearchandadvanced');
        //$this->load->view ('loggedinsearchresults');
        $this->load->view('snippets/footer');
    }

}
