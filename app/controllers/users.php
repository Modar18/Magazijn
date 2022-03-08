<?php
class Users extends Controller {
    public function __construct() {
    }



public function register() {
    $data = [
        'title' => 'Register page',
        'description' => 'Er is nog niks komt te staan, we zijn nog bezig'

    ];

    $this->view('users/register', $data);
    }

    public function login() {
        $data = [
            'title' => 'Login page',
            'description' => 'Er is nog niks komt te staan, we zijn nog bezig'
    
        ];
    
        $this->view('users/login', $data);
    }
}