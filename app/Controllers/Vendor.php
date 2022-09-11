<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Vendor extends BaseController {
    
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
            $data['pro'] = $this->model->getAllQR("SELECT * FROM users where idusers = '".session()->get("idusers")."';");
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

            echo view('back/head', $data);
            echo view('back/vendor/index');
            echo view('back/foot');
        }else{
            $this->modul->halaman('login');
        }
    }
    
    public function ajaxlist() {
        if(session()->get("logged_in")){
            $data = array();
            $list = $this->model->getAll("vendor");
            foreach ($list->getResult() as $row) {
                $val = array();
                $deflogo = base_url().'/images/noimg.jpg';
                if(strlen($row->logo) > 0){
                    if(file_exists($this->modul->getPathApp().$row->logo)){
                        $deflogo = base_url().'/uploads/'.$row->logo;
                    }
                }
                $val[] = '<img src="'.$deflogo.'" style="width: 100px;" class="img-thumbnail" alt="alt"/>';
                $val[] = $row->namavendor;
                $val[] = $row->alamat;
                $val[] = $row->tlp;
                $val[] = $row->website;
                $val[] = '<div style="text-align: center;">'
                        . '<button type="button" class="btn btn-xs btn-success btn-fw" onclick="ganti('."'".$row->idvendor."'".')">Ganti</button>&nbsp;'
                        . '<button type="button" class="btn btn-xs btn-danger btn-fw" onclick="hapus('."'".$row->idvendor."'".','."'".$row->namavendor."'".')">Hapus</button>'
                        . '</div>';
                $data[] = $val;
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
                    $pesan = $this->simpan_dengan();
                }
            }else{
                $pesan = $this->simpan_tanpa();
            }
            echo json_encode(array("status" => $pesan));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    private function simpan_dengan() {
        $file = $this->request->getFile('file');
        $fileName = $file->getRandomName();
        $info_file = $this->modul->info_file($file);
        
        if(file_exists($this->modul->getPathApp().'/'.$fileName)){
            $status = "Gunakan nama file lain";
        }else{
            $status_upload = $file->move($this->modul->getPathApp(), $fileName);
            if($status_upload){
                $data = array(
                    'idvendor' => $this->model->autokode("V","idvendor","vendor", 2, 7),
                    'namavendor' => $this->request->getPost('nama'),
                    'alamat' => $this->request->getPost('alamat'),
                    'tlp' => $this->request->getPost('tlp'),
                    'logo' => $fileName,
                    'website' => $this->request->getPost('web')
                );
                $simpan = $this->model->add("vendor",$data);
                if($simpan == 1){
                    $status = "Data tersimpan";
                }else{
                    $status = "Data tersimpan";
                }
            }else{
                $status = "File gagal terupload";
            }
        }
        return $status;
    }
    
    private function simpan_tanpa() {
        $data = array(
            'idvendor' => $this->model->autokode("V","idvendor","vendor", 2, 7),
            'namavendor' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'tlp' => $this->request->getPost('tlp'),
            'logo' => '',
            'website' => $this->request->getPost('web')
        );
        $simpan = $this->model->add("vendor",$data);
        if($simpan == 1){
            $status = "Data tersimpan";
        }else{
            $status = "Data gagal tersimpan";
        }
        return $status;
    }
    
    public function ganti(){
        if(session()->get("logged_in")){
            $kondisi['idvendor'] = $this->request->uri->getSegment(3);
            $data = $this->model->get_by_id("vendor", $kondisi);
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
                    $pesan = $this->update_dengan();
                }
            }else{
                $pesan = $this->update_tanpa();
            }
            echo json_encode(array("status" => $pesan));
        }else{
            $this->modul->halaman('login');
        }
    }
    
    private function update_dengan() {
        $lawas = $this->model->getAllQR("SELECT logo FROM vendor where idvendor = '".$this->request->getPost('kode')."';")->logo;
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
                    'namavendor' => $this->request->getPost('nama'),
                    'alamat' => $this->request->getPost('alamat'),
                    'tlp' => $this->request->getPost('tlp'),
                    'logo' => $fileName,
                    'website' => $this->request->getPost('web')
                );
                $kond['idvendor'] = $this->request->getPost('kode');
                $simpan = $this->model->update("vendor",$data, $kond);
                if($simpan == 1){
                    $status = "Data terupdate";
                }else{
                    $status = "Data terupdate";
                }
            }else{
                $status = "File gagal terupload";
            }
        }
        return $status;
    }
    
    private function update_tanpa() {
        $data = array(
            'namavendor' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'tlp' => $this->request->getPost('tlp'),
            'website' => $this->request->getPost('web')
        );
        $kond['idvendor'] = $this->request->getPost('kode');
        $simpan = $this->model->update("vendor",$data, $kond);
        if($simpan == 1){
            $status = "Data terupdate";
        }else{
            $status = "Data gagal terupdate";
        }
        return $status;
    }
    
    public function hapus() {
        if(session()->get("logged_in")){
            $kond['idvendor'] = $this->request->uri->getSegment(3);
            $lawas = $this->model->getAllQR("SELECT logo FROM vendor where idvendor = '".$kond['idvendor']."';")->logo;
            if(strlen($lawas) > 0){
                if(file_exists($this->modul->getPathApp().$lawas)){
                    unlink($this->modul->getPathApp().$lawas);
                }
            }

            $hapus = $this->model->delete("vendor",$kond);
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
