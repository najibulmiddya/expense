<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    private $ud = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->ud = has_loggedIn();
    }


    public function index()
    {
        $users = $this->user_model->get_all();
        view('users/index', compact("users"), 'Users');
    }


    public function delete($id = null)
    {
        try {
            if ($this->user_model->delete($id)) {
                alert("success", "User deleted successfully");
            } else {
                alert("danger", "User delete failed");
            }
            redirect(base_url("users"));
        } catch (\Throwable $th) {
            redirect(base_url("users"));
        }
    }

   
}
