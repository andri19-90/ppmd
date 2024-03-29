<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Hub extends BaseController {
    
    private $model;
    private $modul;
    
    public function __construct() {
        $this->model = new Mcustom();
        $this->modul= new Modul();
    }
    
    public function index(){
        $data['menu'] = $this->request->uri->getSegment(1);
        
        $jmliden = $this->model->getAllQR("SELECT count(*) as jml FROM identitas;")->jml;
        if($jmliden > 0){
            $tersimpan = $this->model->getAllQR("SELECT * FROM identitas;");
            $data['alamat'] = $tersimpan->alamat;
            $data['tlp'] = $tersimpan->tlp;
            $data['fax'] = $tersimpan->fax;
            $data['website'] = $tersimpan->website;
            $deflogo = base_url().'/images/noimg.jpg';
            if(strlen($tersimpan->logo) > 0){
                if(file_exists($this->modul->getPathApp().$tersimpan->logo)){
                    $deflogo = base_url().'/uploads/'.$tersimpan->logo;
                }
            }
            $data['email'] = $tersimpan->email;
            $data['logo'] = $deflogo;

        }else{
            $data['alamat'] = "";
            $data['tlp'] = "";
            $data['fax'] = "";
            $data['website'] = "";
            $data['email'] = "";
            $data['logo'] = base_url().'/images/noimg.jpg';
        }
        
        $cekpeta = $this->model->getAllQR("SELECT count(*) as jml FROM peta;")->jml;
        if($cekpeta > 0){
            $data['txtpeta'] = $this->model->getAllQR("SELECT textpeta FROM peta;")->textpeta;
        }else{
            $data['txtpeta'] = "";
        }
        
        $cek_medsos = $this->model->getAllQR("select count(*) as jml from media_sosial")->jml;
        if($cek_medsos > 0){
            $medsos = $this->model->getAllQR("select * from media_sosial");
            $data['tw'] = $medsos->tw;
            $data['fb'] = $medsos->fb;
            $data['gp'] = $medsos->gp;
            $data['lk'] = $medsos->lk;
            $data['ig'] = $medsos->ig;
        }else{
            $data['tw'] = "";
            $data['fb'] = "";
            $data['gp'] = "";
            $data['lk'] = "";
            $data['ig'] = "";
        }
        
        if(session()->get("logged_nonadmin")){
            $data['idusers'] = session()->get("idusers");
            $data['nama'] = session()->get("nama");
        }else{
            $data['idusers'] = "";
            $data['nama'] = "";
        }
        
        
        echo view('depan/header', $data);
        echo view('depan/menu');
        echo view('depan/hub');
        echo view('depan/footer');
    }
    
    public function proses() {
        $data = array(
            'idkotakmasuk' => $this->model->autokode("K","idkotakmasuk","kotakmasuk", 2, 7),
            'nm_depan' => $this->request->getPost('nm_depan'),
            'nm_belakang' => $this->request->getPost('nm_belakang'),
            'email' => $this->request->getPost('email'),
            'judul' => $this->request->getPost('jdl'),
            'pesan' => $this->request->getPost('pesan'),
            'tanggal' => $this->modul->TanggalSekarang()
        );
        $simpan = $this->model->add("kotakmasuk",$data);
        if($simpan == 1){
            $status = "Data tersimpan";
        }else{
            $status = "Data gagal tersimpan";
        }
        echo json_encode(array("status" => $status));
    }
}
