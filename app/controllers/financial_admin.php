<?php
class Financial_admin extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Magazijn');
    }

    public function index() {
        $data = [
            'title' => 'financial_admin_home_page',
        ];

        $this->view('financial_admin/index', $data);
    }

    public function magazijn() {

        $user = $this->userModel->getArtikelen();
        $tablesRow = "";

        foreach($user as $values){
            $tablesRow .= "<tr>
            <td>$values->naam</td>
            <td>$values->omschrijving</td>
            <td>$values->prijs</td>
            <td><i class='bi bi-pencil-square'></i></td>
            <td><i class='bi bi-x-circle'></i></td>
            </tr>";
        }

        $data = [
            'title' => 'kmkmkmk',
            'artikelen' => $tablesRow,
        ];

        $this->view('financial_admin/magazijn', $data);
    }


}


