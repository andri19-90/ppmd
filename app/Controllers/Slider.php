<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Slider extends BaseController {
    
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
                $data['logo'] = $deflogo;
                
            }else{
                $data['alamat'] = "";
                $data['tlp'] = "";
                $data['fax'] = "";
                $data['website'] = "";
                $data['logo'] = base_url().'/images/noimg.jpg';
            }
            
            // membaca text 
            $cek1 = $this->model->getAllQR("SELECT count(*) as jml FROM sliderjudul;")->jml;
            if($cek1 > 0){
                $text_slider_tersimpan = $this->model->getAllQR("SELECT * FROM sliderjudul;");
                $data['judul'] = $text_slider_tersimpan->judul;
                $data['subjudul'] = $text_slider_tersimpan->subjudul;
            }else{
                $data['judul'] = "";
                $data['subjudul'] = "";
            }

            echo view('back/head', $data);
            echo view('back/slider/index');
            echo view('back/foot');
            
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function prosestext() {
        if(session()->get("logged_in")){
            $cek = $this->model->getAllQR("SELECT count(*) as jml FROM sliderjudul;")->jml;
            if($cek > 0){
                $data = array(
                    'judul' => $this->request->getPost('judul'),
                    'subjudul' => trim($this->request->getPost('subjudul'))
                );
                $hasil = $this->model->updateNK("sliderjudul",$data);
            }else{
                $data = array(
                    'idsliderjudul' => $this->model->autokode("S","idsliderjudul","sliderjudul", 2, 7),
                    'judul' => $this->request->getPost('judul'),
                    'subjudul' => trim($this->request->getPost('subjudul'))
                );
                $hasil = $this->model->add("sliderjudul",$data);
            }
            
            if($hasil == 1){
                $status = "Data tersimpan";
            }else{
                $status = "Data gagal tersimpan";
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajaxlist() {
        if(session()->get("logged_in")){
            $data = array();
            $no = 1;
            $list = $this->model->getAll("slider");
            foreach ($list->getResult() as $row) {
                $val = array();
                $val[] = $no;
                
                $def_foto = base_url().'/images/noimg.jpg';
                if(strlen($row->gambar) > 0){
                    if(file_exists($this->modul->getPathApp().$row->gambar)){
                        $def_foto = base_url().'/uploads/'.$row->gambar;
                    }
                }
                $val[] = '<img src="'.$def_foto.'" class="img-thumbnail" style="width: 120px; height: auto;">';
                $val[] = '<div style="text-align: center;">'
                        . '<button type="button" class="btn btn-xs btn-success btn-fw" onclick="ganti('."'".$row->idslider."'".')">Ganti</button>&nbsp;'
                        . '<button type="button" class="btn btn-xs btn-danger btn-fw" onclick="hapus('."'".$row->idslider."'".','."'".$no."'".')">Hapus</button>'
                        . '</div>';
                $data[] = $val;
                
                $no++;
            }
            $output = array("data" => $data);
            echo json_encode($output);
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajax_add() {
        if(session()->get("logged_in")){
            if (isset($_FILES['file']['name'])) {
                if(0 < $_FILES['file']['error']) {
                    $pesan = "Error during file upload ".$_FILES['file']['error'];
                }else{
                    $status = $this->simpan();
                }
            }else{
                $status = "File gambar tidak ditemukan";
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    private function simpan() {
        $file = $this->request->getFile('file');
        $fileName = $file->getRandomName();
        $info_file = $this->modul->info_file($file);
        
        if(file_exists($this->modul->getPathApp().'/'.$fileName)){
            $status = "Gunakan nama file lain";
        }else{
            $status_upload = $file->move($this->modul->getPathApp(), $fileName);
            if($status_upload){
                $data = array(
                    'idslider' => $this->model->autokode("S","idslider","slider", 2, 7),
                    'gambar' => $fileName
                );
                $simpan = $this->model->add("slider", $data);
                if($simpan == 1){
                    $status = "Data tersimpan";
                }else{
                    $status = "Data gagal tersimpan";
                }
            }else{
                $status = "File gagal terupload";
            }
        }
        return $status;
    }
    
    public function ganti(){
        if(session()->get("logged_in")){
            $kondisi['idslider'] = $this->request->uri->getSegment(3);
            $data = $this->model->get_by_id("slider", $kondisi);
            echo json_encode($data);
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajax_edit() {
        if(session()->get("logged_in")){
            if (isset($_FILES['file']['name'])) {
                if(0 < $_FILES['file']['error']) {
                    $pesan = "Error during file upload ".$_FILES['file']['error'];
                }else{
                    $status = $this->update();
                }
            }else{
                $status = "File gambar tidak ditemukan";
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    private function update() {
        $lawas = $this->model->getAllQR("SELECT gambar FROM slider where idslider = '".$this->request->getPost('kode')."';")->gambar;
        if(strlen($lawas) > 0){
            if(file_exists($this->modul->getPathApp().$lawas)){
                unlink($this->modul->getPathApp().$lawas);
            }
        }
        
        $file = $this->request->getFile('file');
        $fileName = $file->getRandomName();
        $info_file = $this->modul->info_file($file);
        
        if(file_exists($this->modul->getPathApp().'/'.$fileName)){
            $status = "Gunakan nama file lain";
        }else{
            $status_upload = $file->move($this->modul->getPathApp(), $fileName);
            if($status_upload){
                $data = array(
                    'gambar' => $fileName
                );
                $kond['idslider'] = $this->request->getPost('kode');
                $update = $this->model->update("slider", $data, $kond);
                if($update == 1){
                    $status = "Data terupdate";
                }else{
                    $status = "Data gagal terupdate";
                }
            }else{
                $status = "File gagal terupload";
            }
        }
        
        return $status;
    }
    
    public function hapus() {
        if(session()->get("logged_in")){
            $kond['idslider'] = $this->request->uri->getSegment(3);
            
            $lawas = $this->model->getAllQR("SELECT gambar FROM slider where idslider = '".$kond['idslider']."';")->gambar;
            if(strlen($lawas) > 0){
                if(file_exists($this->modul->getPathApp().$lawas)){
                    unlink($this->modul->getPathApp().$lawas);
                }
            }
            
            $hapus = $this->model->delete("slider",$kond);
            if($hapus == 1){
                $status = "Data terhapus";
            }else{
                $status = "Data gagal terhapus";
            }
            echo json_encode(array("status" => $status));
        }else{
            $this->modul->halaman('login');
        }
    }
}
