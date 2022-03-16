<?php
class Student extends Controller {
    public function __construct() {

    }

    public function index() {
        $data = [
            'title' => 'student_home_page'
        ];

        $this->view('student/index', $data);
    }

    public function overzicht_magazijn() {
        $data = [
            'title' => 'kmkmkmk'
        ];

        $this->view('student/overzicht_magazijn', $data);
    }


}


