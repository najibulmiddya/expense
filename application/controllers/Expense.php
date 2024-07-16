<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Expense extends CI_Controller
{
    private $ud = [];
    public function __construct()
    {
        parent::__construct();
        $this->load->model('expense_model');
        $this->load->model('category_model');
        $this->ud = has_loggedIn();
    }

    private function view($id = null)
    {
        if ($expense = $this->expense_model->get($id)) {
            $cat = $this->category_model->get_all();

            view('expense/edit', compact('expense', 'cat'), "Portal | Expense Update");
        } else {
            $cat = $this->category_model->get_all();
            view('expense/create', compact('cat'), "Portal | Expense Create");
        }
    }


    public function index()
    {
        $uid = $_SESSION['loggedIn']['id'];
        if (isset($_GET['category_id'])) {
            $category_id = $_GET['category_id'];
            if ($category_id == "") {
                $expense = $this->expense_model->get_all($uid);
            }else{
                $expense = $this->expense_model->search($uid, $category_id);
            }
            // $expense = $this->expense_model->search($uid, $category_id);
        } else {
            $expense = $this->expense_model->get_all($uid);
        }


        $cat = $this->category_model->get_all();
        view('expense/index', compact("expense", "cat"), 'Expense');
    }

    public function save($id = null)
    {

        try {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->form_validation->set_rules("category_id", "category", "trim|required");
                $this->form_validation->set_rules("item", "item", "trim|required");
                $this->form_validation->set_rules("price", "price", "trim|required");
                $this->form_validation->set_rules("details", "details", "trim|required");
                $this->form_validation->set_rules("expense_date", "expense_date", "trim|required");

                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

                if ($this->form_validation->run() == true) {
                    $added_by = $_SESSION['loggedIn']['id'];

                    $data = [
                        "category_id" => $this->input->post("category_id"),
                        "item" => $this->input->post("item"),
                        "price" => $this->input->post("price"),
                        "details" => $this->input->post("details"),
                        "expense_date" => $this->input->post("expense_date"),
                        "added_by" => $added_by
                    ];



                    if ($id) {
                        if ($this->expense_model->update($id, $data)) {
                            alert("success", "Expense updated Successfully");
                        } else {
                            alert("warning", "Expense details no Changes");
                        }
                    } else {
                        if ($this->expense_model->save($data)) {
                            alert("success", "Expense created successfully");
                        } else {
                            alert("danger", "Expense create failed");
                        }
                    }
                    redirect(base_url("expense"));
                } else {
                    $this->view($id);
                }
            } else {
                $this->view($id);
            }
        } catch (\Throwable $th) {
            redirect(base_url("expense"));
        }
    }

    public function delete($id = null)
    {
        try {
            if ($expense = $this->expense_model->get($id)) {

                if ($this->expense_model->delete($id)) {
                    alert("success", "Expense deleted successfully");
                } else {
                    alert("danger", "Expense delete failed");
                }
                redirect(base_url("expense"));
            } else {
                alert("danger", "Expense not available");
            }
        } catch (\Throwable $th) {
            redirect(base_url("expense"));
        }
    }
}
