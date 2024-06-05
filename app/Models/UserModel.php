<?php defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    private $_table = 'users';

    public $id;
    public $email;
    public $name;
    public $password;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'required' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'required' => 'required'
            ],
            [
                'field' => 're_type_password',
                'label' => 're_type_password',
                'required' => 'required'
            ]
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uuid();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        return $this->db->insert($this->_table, $this);
    }

}