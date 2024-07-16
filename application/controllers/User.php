<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // private $ud = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
        //   $this->ud = has_loggedIn();

    }

    public function signup()
    {
        // $this->load->view('user/create');
        try {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $this->form_validation->set_rules("name", "Name", "trim|required");
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[8]');
                $this->form_validation->set_rules('passconf', 'Confirm password', 'trim|required|matches[password]');

                $this->form_validation->set_error_delimiters('<div class="error ">', '</div>');

                if ($this->form_validation->run() == true) {

                    $name = $this->security->xss_clean($this->input->post('name'));
                    $email = $this->security->xss_clean($this->input->post('email'));
                    $password = $this->security->xss_clean($this->input->post('passconf'));
                    
                   $pas= password_hash($password,PASSWORD_DEFAULT);
                    $data = [
                        "name" => $name,
                        "email" => $email,
                        "password" => $pas
                    ];
          
                    if ($this->user_model->save($data)) {
                        alert("success", "Account created successfully");
                    } else {
                        alert("danger", "Account create failed");
                    }
                    redirect(base_url("user"));
                } else {
                    $this->load->view('user/create');
                }
            } else {
                $this->load->view('user/create');
            }
        } catch (\Throwable $th) {
            redirect(base_url("user/singup"));
        }
    }

    public function index()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                $this->form_validation->set_rules('password', 'password', 'required');


                if ($this->form_validation->run() == false) {
                    $this->load->view('user/login');
                } else {
                    $email = $this->security->xss_clean($this->input->post('email'));
                    $password = $this->security->xss_clean($this->input->post('password'));
                    if ($user = $this->user_model->login($email)) {
                        if (password_verify($password, $user->password)) {
                            $userdata = array(
                                'id' => $user->id,
                                'name' => $user->name,
                                'role' => $user->role,
                                'email' => $user->email,
                                'logged_in' => TRUE
                            );
                            $this->session->set_userdata("loggedIn", $userdata);
                            alert("success", "Logged In Successfully");

                            if ($_SESSION['loggedIn']['role'] == 'User') {
                                redirect('dashboard');
                            } else {
                                redirect('category');
                            }

                            // redirect(base_url("dashboard"));
                        } else {
                            alert("danger", "Please enter valid password");
                            $this->load->view('user/login');
                        }
                    } else {
                        alert("danger", "Please enter valid username");
                        $this->load->view('user/login');
                    }
                }
            } else {
                $this->load->view('user/login');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('user'));
    }
}

