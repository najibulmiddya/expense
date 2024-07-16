<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reports extends CI_Controller
{
    private $ud = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->model('expense_model');
        $this->load->model('category_model');
        $this->ud = has_loggedIn();
    }


    public function index()
    {
        $cat = $this->category_model->get_all();
        $u_id = $_SESSION['loggedIn']['id'];
        $from = "";
        $to = "";
        $expense=[];
        if (isset($_GET['category_id'])) {
            $category_id = $_GET['category_id'];
            $expense = $this->expense_model->reports_get_1($u_id, $category_id);
        }

        if (isset($_GET['from'])) {
            $from = $_GET['from'];
        }
        if (isset($_GET['to'])) {
            $to = $_GET['to'];
        }

        if ($from !== '' && $to != '') {
            $expense = $this->expense_model->reports_get_2($u_id, $from, $to);
        }

        
        view('reports/index', compact("cat","expense"), 'Reports');

    }
}
