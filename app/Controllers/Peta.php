<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Peta extends BaseController {
    
    private $model;
    private $modul;
    
    public function __construct() {
        $this->model = new Mcustom();
        $this->modul= new Modul();
    }
    
    public function index(){
        if(session()->get("logged_in")){
            $data['idusers'] = session()->get("idusers");
            $data['nama'] = session()->get("nama");
            $data['role'] = session()->get("role");
            $data['nm_role'] = session()->get("nama_role");
            $data['menu'] = $this->request->uri->getSegment(1);
            
            // membaca foto profile
            $def_foto = base_url().'/images/noimg.jpg';
            $foto = $this->model->getAllQR("select foto from users where idusers = '".session()->get("idusers")."';")->foto;
            if(strlen($foto) > 0){
                if(file_exists($this->modul->getPathApp().$foto)){
                    $def_foto = base_url().'/uploads/'.$foto;
                }
            }
            $data['foto_profile'] = $def_foto;
            
            // membaca identitas
            $jml_identitas = $this->model->getAllQR("SELECT count(*) as jml FROM identitas;")->jml;
            if($jml_identitas > 0){
                $tersimpan = $this->model->getAllQR("SELECT * FROM identitas;");
                $data['instansi'] = $tersimpan->instansi;
                $data['slogan'] = $tersimpan->slogan;
                $data['tahun'] = $tersimpan->tahun;
                $data['pimpinan'] = $tersimpan->pimpinan;
                $data['alamat'] = $tersimpan->alamat;
                $data['kdpos'] = $tersimpan->kdpos;
                $data['tlp'] = $tersimpan->tlp;
                $data['fax'] = $tersimpan->fax;
                $data['website'] = $tersimpan->website;
                $data['email'] = $tersimpan->email;
                $deflogo = base_url().'/images/noimg.jpg';
                if(strlen($tersimpan->logo) > 0){
                    if(file_exists($this->modul->getPathApp().$tersimpan->logo)){
                        $deflogo = base_url().'/uploads/'.$tersimpan->logo;
                    }
                }
                $data['logo'] = $deflogo;
                
            }else{
                $data['instansi'] = "";
                $data['slogan'] = "";
                $data['tahun'] = "";
                $data['pimpinan'] = "";
                $data['alamat'] = "";
                $data['kdpos'] = "";
                $data['tlp'] = "";
                $data['fax'] = "";
                $data['website'] = "";
                $data['email'] = "";
                $data['logo'] = base_url().'/images/noimg.jpg';
            }
            
            $cek = $this->model->getAllQR("SELECT count(*) as jml FROM peta;")->jml;
            if($cek > 0){
                $data['txtpeta'] = $this->model->getAllQR("SELECT textpeta FROM peta;")->textpeta;
            }else{
                $data['txtpeta'] = "";
            }

            echo view('back/head', $data);
            echo view('back/peta/index');
            echo view('back/foot');
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function proses() {
        if(session()->get("logged_in")){
            $cek = $this->model->getAllQR("SELECT count(*) as jml FROM peta;")->jml;
            if($cek > 0){
                $status = $this->update();
            }else{
                $status = $this->simpan();
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    private function simpan() {
        $data = array(
            'idpeta' => $this->model->autokode("P","idpeta","peta", 2, 7),
            'textpeta' => $this->request->getPost('peta')
        );
        $simpan = $this->model->add("peta",$data);
        if($simpan == 1){
            $status = "Data tersimpan";
        }else{
            $status = "Data gagal tersimpan";
        }
        return $status;
    }
    
    private function update() {
        $data = array(
            'textpeta' => $this->request->getPost('peta')
        );
        $simpan = $this->model->updateNK("peta",$data);
        if($simpan == 1){
            $status = "Data terupdate";
        }else{
            $status = "Data gagal terupdate";
        }
        return $status;
    }
}
