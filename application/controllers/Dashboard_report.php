<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_report extends CI_Controller
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
        $u_id = $_SESSION['loggedIn']['id'];
        if (isset($_GET['from'])) {
            $from = $_GET['from'];
        }

        if (isset($_GET['to'])) {
            $to = $_GET['to'];
        }

        if ($from !== '' && $to !== '') {
            $data = $this->expense_model->get_report($u_id, $from, $to);
            // pp($data);
        } else {
            $data = $this->expense_model->get_all($u_id);
            // pp($data);
        }
        view('dashboard_report/index', compact('data'), 'Dashboard Reports');
    }
}
