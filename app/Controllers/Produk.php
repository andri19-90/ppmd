<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Produk extends BaseController {
    
    private $model;
    private $modul;
    
    public function __construct() {
        $this->model = new Mcustom();
        $this->modul= new Modul();
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
        
        $data['produk'] = $this->model->getAllQ("SELECT * FROM produk;");
        
        echo view('depan/header', $data);
        echo view('depan/menu');
        echo view('depan/produk');
        echo view('depan/footer');
    }
    
    public function detil(){
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
        
        $kode = $this->modul->dekrip_url($this->request->uri->getSegment(3));
        $cek = $this->model->getAllQR("SELECT count(*) as jml FROM produk where idproduk = '".$kode."';")->jml;
        if($cek > 0){
            $data['head'] = $this->model->getAllQR("SELECT * FROM produk where idproduk = '".$kode."';");
            $data['gambarlain'] = $this->model->getAllQ("SELECT idproduk_img, gambar FROM produk_img where idproduk = '".$kode."';");
            
            echo view('depan/header', $data);
            echo view('depan/menu');
            echo view('depan/produk_detil');
            echo view('depan/footer');
        }else{
            $this->modul->halaman("produk");
        }
    }
}
