<?php
class Artikelen extends Controller {
    public function __construct() {
        $this->artikelModel = $this->model('artikel');

    }
  

    public function index() {
        $data = [
            'title' => 'Index',
            'description' => 'aanvragen page om artikel aanvrag goed te keuren voor de aanvrager '
        ];
        $this->view('artikelen/index', $data);
    }
    public function artikelen_aanvragen() {
        $aanvragen = $this->artikelModel->getAanvragen_voor_artikelen();
        $data = [
            'aanvragen'=>$aanvragen,
            'title' => 'aanvragen page',
            'description' => 'aanvragen page om artikel aanvrag goed te keuren voor de aanvrager '
        ];
        $this->view('artikelen/artikelen_aanvragen', $data);
    }
}



