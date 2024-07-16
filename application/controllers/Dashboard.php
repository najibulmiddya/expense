<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    private $ud = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->model('expense_model');
        $this->ud = has_loggedIn();
    }

  

    public function index()
    {
       view('index',[],'Dashboard');
    }
}
