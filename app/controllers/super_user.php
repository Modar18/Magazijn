<?php
class Super_User extends Controller {
    public function __construct() {
        $this->aanvragModel = $this->model('aanvrag');

    }

    public function index() {
        $data = [
            'title' => 'super_user_home_page'
        ];

        $this->view('super_user/index', $data);
    }

    public function aanvragen(){
        $aanvrag = $this->aanvragModel->getAanvrag();
        $data = [
            'aanvrag' => $aanvrag,
        ];
    
        $this->view('super_user/aanvragen', $data);
    }
}


