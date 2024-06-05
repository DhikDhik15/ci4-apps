<?php defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('form_validation');
    }

    public function add()
    {
        $product = $this->UserModel;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("landing_page/index");
    }
}