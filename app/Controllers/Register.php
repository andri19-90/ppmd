<?php
namespace App\Controllers;

use App\Models\Mcustom;
use App\Libraries\Modul;

class Register extends BaseController{
    
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
        
        $data['korps'] = $this->model->getAll("korps");
        $data['pangkat'] = $this->model->getAllQ("select * from pangkat where idpangkat <> 'P00001';");
        
        echo view('depan/header', $data);
        echo view('depan/menu');
        echo view('depan/register');
        echo view('depan/footer');
    }
    
    public function proses() {
        clearstatcache();
        $cek1 = $this->model->getAllQR("select count(*) as jml from users where nrp = '".$this->request->getPost('nrp')."';")->jml;
        if($cek1 > 0){
            $status = "Gunakan NRP lain";
        }else{
            $cek2 = $this->model->getAllQR("select count(*) as jml from users where email = '".$this->request->getPost('email')."';")->jml;
            if($cek2 > 0){
                $status = "Gunakan email lain";
            }else{
                $data = array(
                    'idusers' => $this->model->autokode("U","idusers","users", 2, 7),
                    'nrp' => $this->request->getPost('nrp'),
                    'pass' => $this->modul->enkrip_pass($this->request->getPost('pass')),
                    'nama' => $this->request->getPost('nama'),
                    'email' => $this->request->getPost('email'),
                    'idkorps' => $this->request->getPost('korps'),
                    'idpangkat' => $this->request->getPost('pangkat'),
                    'idrole' => 'R00002',
                    'foto' => ''
                );
                $simpan = $this->model->add("users",$data);
                if($simpan == 1){
                    $status = "Register berhasil";
                }else{
                    $status = "Register gagal";
                }
            }
        }
        echo json_encode(array("status" => $status));
    }
}
