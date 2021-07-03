<?php
class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_app');
    }

    public function index()
    {
        $data = [
            'siswa' => $this->M_app->get_siswa(),
        ];
        $this->load->view('V_siswa', $data);
    }
}
