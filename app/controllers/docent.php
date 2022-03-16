<?php
class Docent extends Controller {
    public function __construct() {

    }

    public function index() {
        $data = [
            'title' => 'docent_home_page'
        ];

        $this->view('docent/index', $data);
    }

    public function overzicht_magazijn() {
        $data = [
            'title' => 'kmkmkmk'
        ];

        $this->view('docent/overzicht_magazijn', $data);
    }


}


