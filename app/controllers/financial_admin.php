<?php
class Financial_admin extends Controller {
    public function __construct() {
        $this->userModel = $this->model('OverzichtFinancialAdmin');
    }

    public function index() {
        $data = [
            'title' => 'financial_admin_home_page',
        ];

        $this->view('financial_admin/index', $data);
    }

    public function OverzichtFinancialAdmin() {

        $user = $this->userModel->getArtikelen();
        $tablesRow = "";

        foreach($user as $values){
            $tablesRow .= "<tr>
            <td>$values->naam</td>
            <td>$values->categorie</td>
            <td>$values->omschrijving</td>
            <td>$values->prijs</td>
            <td><a href='" . URLROOT . "/financial_admin/update/$values->id'><i class='bi bi-pencil-square'></i></td>
            <td><a href='" . URLROOT . "/financial_admin/delete/$values->id'><i class='bi bi-x-circle'></i></td>
            </tr>";
            
        }           
        
        $data = [
            'title' => 'OverzichtFinancialAdmin',
            'artikelen' => $tablesRow,
        ];

        $this->view('financial_admin/OverzichtFinancialAdmin', $data);
    }

    public function update($id = null) {
        // var_dump($id);exit();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // var_dump($_POST);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $result = $this->userModel->updatetable($_POST);
            //echo $result;exit();
            if ($result) {
                header(" Location: " . URLROOT . "/financial_admin/OverzichtFinancialAdmin");
            } else {
                header("Location: " . URLROOT . "/financial_admin/error");
            }
        } else {
            $row = $this->userModel->updaterecord($id);
            $data = [
                'title' => '<h1>Update</h1>',
                'row' => $row,
            ];
            $this->view("financial_admin/update", $data);
        };
        
        
        
        
        

    }
    


}


