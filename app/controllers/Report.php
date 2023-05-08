<?php 

class Report extends Controller {
    public function index()
    {
        $data['judul'] = 'Report Keuntungan';
        $data['br'] = $this->model('Report_model')->getReportSum();
        $this->view('templates/header', $data);
        $this->view('report/index', $data);
        //$this->view('templates/footer');
        //var_dump($data);
    }



}