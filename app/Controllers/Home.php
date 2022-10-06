<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Home extends BaseController{
    
    private $model;
    private $modul;
    
    public function __construct() {
        $this->model = new Mcustom();
        $this->modul = new Modul();
    }
    
    public function index(){
        $data['model'] = $this->model;
        $data['modul'] = $this->modul;
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
        
        // membaca text slider
        $cek1 = $this->model->getAllQR("SELECT count(*) as jml FROM sliderjudul;")->jml;
        if($cek1 > 0){
            $text_slider_tersimpan = $this->model->getAllQR("SELECT * FROM sliderjudul;");
            $data['judul'] = $text_slider_tersimpan->judul;
            $data['subjudul'] = $text_slider_tersimpan->subjudul;
        }else{
            $data['judul'] = "";
            $data['subjudul'] = "";
        }
        
        // membaca slider
        $data['slider'] = $this->model->getAll("slider");
        
        $data['modul'] = $this->modul;
        $data['model'] = $this->model;
        
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
        // menampilkan produk terbaru dengan limit 12
        $data['produk'] = $this->model->getAllQ("SELECT * FROM produk limit 12;");
        
        // menampilkan kota perumahan
        $data['kota'] = $this->model->getAllQ("SELECT distinct kota FROM produk;");
        // menampilkan batas bawah dan atas
        $min_max = $this->model->getAllQR("SELECT min(harga) as minharga, max(harga) as maxharga, min(area) as minarea, max(area) as maxarea, min(jml_bed) as min_bed, max(jml_bed) as max_bed, min(jml_bath) as min_bath, max(jml_bath) as max_bath FROM produk;");
        $data['min_harga'] = $min_max->minharga;
        $data['max_harga'] = $min_max->maxharga;
        
        $data['min_area'] = $min_max->minarea;
        $data['max_area'] = $min_max->maxarea;
        
        $data['min_bed'] = $min_max->min_bed;
        $data['max_bed'] = $min_max->max_bed;
        
        $data['min_bath'] = $min_max->min_bath;
        $data['max_bath'] = $min_max->max_bath;
        
        echo view('depan/header', $data);
        echo view('depan/menu');
        echo view('depan/content');
        echo view('depan/footer');
    }
}
