<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    private $ud = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->ud = has_loggedIn();
    }

    private function view($id = null)
    {
        if ($cat = $this->category_model->get($id)) {
            view('category/edit', compact('cat'), "Portal | Category Update");
        } else {
            view('category/create', [], "Portal | Category Create");
        }
    }


    public function index()
    {
        $category = $this->category_model->get_all();
        view('category/index', compact("category"), 'Category');
    }


    public function save($id = null)
    {
        try {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $this->form_validation->set_rules("name", "Category Name", "trim|required");
                $this->form_validation->set_error_delimiters('<div class="error ">', '</div>');

                if ($this->form_validation->run() == true) {
                    $data = [
                        "name" => $this->input->post("name"),
                    ];

                    if ($id) {
                        if ($this->category_model->update($id, $data)) {
                            alert("success", "Category updated Successfully");
                        } else {
                            alert("warning", "Category details no Changes");
                        }
                    } else {
                        if ($this->category_model->save($data)) {
                            alert("success", "Category created successfully");
                        } else {
                            alert("danger", "Category create failed");
                        }
                    }
                    redirect(base_url("category"));
                } else {
                    $this->view($id);
                }
            } else {
                $this->view($id);
            }
        } catch (\Throwable $th) {
            redirect(base_url("category"));
        }
    }

    public function delete($id = null)
    {
        try {
            if ($this->category_model->delete($id)) {
                alert("success", "Category deleted successfully");
            } else {
                alert("danger", "Category delete failed");
            }
            redirect(base_url("category"));
        } catch (\Throwable $th) {
            redirect(base_url("category"));
        }
    }
}
