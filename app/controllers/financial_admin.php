<?php
class Financial_admin extends Controller {
    public function __construct() {

    }

    public function index() {
        $data = [
            'title' => 'financial_admin_home_page'
        ];

        $this->view('financial_admin/index', $data);
    }

    public function home() {
        $data = [
            'title' => 'kmkmkmk'
        ];

        $this->view('financial_admin/home', $data);
    }


}


