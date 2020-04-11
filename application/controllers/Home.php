<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Covidmodel");
    }
    public function index()
    {
        $data['apiRegion'] = $this->Covidmodel->getApi('region');
        $data['apiIndonesia'] = $this->Covidmodel->getApi('indonesia');
        $data['apiProvinsi'] = $this->Covidmodel->getApi('provinsi');
        $data['title'] = "Kawal Corona";

        $data['apiWorld'] = [
            'positif' => $this->Covidmodel->getApiWorld("positif"),
            'sembuh' => $this->Covidmodel->getApiWorld("sembuh"),
            'meninggal' => $this->Covidmodel->getApiWorld("meninggal")
        ];


        $this->load->view('header/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('footer/footer');
    }
}
