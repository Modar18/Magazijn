<?php
class Magazijnen extends Controller {
    public function __construct() {
        $this->magazijnModel = $this->model('magazijn');

    }
  

    public function index() {
        $magazijn = $this->magazijnModel->getmagazijn();
        $data = [
            'magazijn'=>$magazijn,
            'title' => 'aanvragen page',
            'description' => 'aanvragen page om artikel aanvrag goed te keuren voor de aanvrager '
        ];
        $this->view('magazijnen/index', $data);
    }

    public function update($id = null) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
           $this->magazijnModel->updateMagazijn($_POST);
        header("Location: " . URLROOT . "/magazijnen/index");
        } else {
            $row = $this->magazijnModel->getSingleMagazijn($id);
       $data = [
           'title' => 'Updata page',
           'row' => $row,
       ];
       $this->view("magazijnen/update", $data);

        }
       
    }


    
}



