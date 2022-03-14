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

    public function magazijn() {
        $data = [
            'title' => 'kmkmkmk'
        ];

        $this->view('financial_admin/magazijn', $data);
    }


}


