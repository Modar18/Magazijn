<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page',
            'description' => 'momenteel er is geen inlog systeem, voeg een button voor je user '


        ];

        $this->view('index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About us page',
            'description' => 'Een voorbeeld van een page'

        ];

        $this->view('pages/about', $data);
    }

    public function contact() {
        $data = [
            'title' => 'Contact page',
            'description' => 'Dit is tweede voorbeeld'

        ];

        $this->view('pages/about', $data);
    }

    

}

