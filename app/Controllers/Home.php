<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Home extends BaseController{
    
    private $model;
    private $modul;
    
    public function __construct() {
        $this->model = new Mcustom();
        $this->modul= new Modul();
    }
    
    public function index(){
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
            
        return view('depan/index', $data);
    }
}
