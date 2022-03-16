<?php
class Super_User_Magazijn extends Controller
{
    public function __construct()
    {
        $this->magazijnModel = $this->model('magazijn');
    }


    public function magazijns()
    {
        $magazijn = $this->magazijnModel->getMagazijn();

        $data = [
            'magazijn' => $magazijn,
        ];
        $this->view('magazijns/index', $data);
    }
}
