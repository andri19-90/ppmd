<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Syarat extends BaseController{
    
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
        
        $cek_khusus = $this->model->getAllQR("SELECT count(*) as jml FROM syarat_khusus;")->jml;
        if($cek_khusus > 0){
            $keterangan = $this->model->getAllQR("SELECT keterangan FROM syarat_khusus;")->keterangan;
            $data['ket_khusus'] = $keterangan;
        }else{
            $data['ket_khusus'] = "";
        }
        
        $cek_umum = $this->model->getAllQR("SELECT count(*) as jml FROM syarat_umum;")->jml;
        if($cek_umum > 0){
            $keterangan = $this->model->getAllQR("SELECT keterangan FROM syarat_umum;")->keterangan;
            $data['ket_umum'] = $keterangan;
        }else{
            $data['ket_umum'] = "";
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
        echo view('depan/syarat');
        echo view('depan/footer');
    }
}
