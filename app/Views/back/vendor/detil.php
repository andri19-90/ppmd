<script type="text/javascript">

    var save_method; //for save method string
    var table;

    $(document).ready(function () {
        table = $('#tb').DataTable({
            ajax: "<?php echo base_url(); ?>/vendor/ajaxdetil/<?php echo $head->idvendor; ?>",
            ordering: false
        });
    });

    function reload() {
        table.ajax.reload(null, false); //reload datatable ajax
    }

    function add() {
        save_method = 'add';
        $('#form')[0].reset();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah produk');
    }

    function save() {
        var kode = document.getElementById('kode').value;
        var kode_head = document.getElementById('kode_head').value;
        
        var nama = document.getElementById('nama').value;
        var harga = document.getElementById('harga').value;
        var area = document.getElementById('area').value;
        var alamat = document.getElementById('alamat').value;
        var kota = document.getElementById('kota').value;
        var bed = document.getElementById('bed').value;
        var bath = document.getElementById('bath').value;
        var carport = document.getElementById('carport').value;
        var file = $('#gambar').prop('files')[0];
        
        if (nama === '') {
            alert("Nama perumahan tidak boleh kosong");
        }else if (harga === '') {
            alert("Harga tidak boleh kosong");
        }else if (area === '') {
            alert("Luas area tidak boleh kosong");
        }else if (alamat === '') {
            alert("Alamat tidak boleh kosong");
        }else if (kota === '') {
            alert("Kota tidak boleh kosong");
        } else {
            $('#btnSave').text('Saving...'); //change button text
            $('#btnSave').attr('disabled', true); //set button disable 

            var url = "";
            if (save_method === 'add') {
                url = "<?php echo base_url(); ?>/vendor/ajax_add_detil";
            } else {
                url = "<?php echo base_url(); ?>/vendor/ajax_edit_detil";
            }
            
            var form_data = new FormData();
            form_data.append('kode', kode);
            form_data.append('kode_head', kode_head);
            form_data.append('nama', nama);
            form_data.append('harga', harga);
            form_data.append('area', area);
            form_data.append('alamat', alamat);
            form_data.append('kota', kota);
            form_data.append('bed', bed);
            form_data.append('bath', bath);
            form_data.append('carport', carport);
            form_data.append('file', file);
        
            $.ajax({
                url : url,
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function (data) {
                    alert(data.status);
                    $('#modal_form').modal('hide');
                    reload();

                    $('#btnSave').text('Save');
                    $('#btnSave').attr('disabled', false);
                }, error: function (jqXHR, textStatus, errorThrown) {
                    alert("Error json " + errorThrown);

                    $('#btnSave').text('Save');
                    $('#btnSave').attr('disabled', false);
                }
            });
        }
    }

    function hapus(id, nama) {
        if (confirm("Apakah anda yakin menghapus perumahan " + nama + " ?")) {
            $.ajax({
                url: "<?php echo base_url(); ?>/vendor/hapusdetil/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data) {
                    alert(data.status);
                    reload();
                }, error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error hapus data');
                }
            });
        }
    }

    function ganti(id) {
        save_method = 'update';
        $('#form')[0].reset();
        $('#modal_form').modal('show');
        $('.modal-title').text('Ganti perumahan');
        $.ajax({
            url: "<?php echo base_url(); ?>/vendor/ganti_detil/" + id,
            type: "POST",
            dataType: "JSON",
            success: function (data) {
                $('[name="kode"]').val(data.idproduk);
                $('[name="nama"]').val(data.nama_produk);
                $('[name="harga"]').val(data.harga);
                $('[name="area"]').val(data.area);
                $('[name="alamat"]').val(data.persil);
                $('[name="kota"]').val(data.kota);
                $('[name="bed"]').val(data.jml_bed);
                $('[name="carport"]').val(data.car_port);
                $('[name="bath"]').val(data.jml_bath);
            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data');
            }
        });
    }
    
    function closemodal(){
        $('#modal_form').modal('hide');
    }
    
    function detil(kode){
        window.location.href = "<?php echo base_url(); ?>/vendor/subdetil/" + kode;
    }

</script>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Vendor Perumahan</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Vendor Perumahan</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2 text-sm-right">Vendor Perumahan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" autocomplete="off" readonly value="<?php echo $head->namavendor; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary btn-sm" onclick="add();">Tambah</button>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="reload();">Reload</button>
                </div>
                <div class="card-body">
                    <div class="card-datatable table-responsive">
                        <table id="tb" class="datatables-demo table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Area</th>
                                    <th>Persil</th>
                                    <th>Kota</th>
                                    <th>Bed</th>
                                    <th>Bath</th>
                                    <th>Car Port</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" id="kode" name="kode">
                    <input type="hidden" id="kode_head" name="kode_head" value="<?php echo $head->idvendor; ?>">
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control" autocomplete="off" id="gambar" name="gambar">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" autocomplete="off" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group col">
                                <label class="form-label">Harga</label>
                                <input type="text" class="form-control" autocomplete="off" id="harga" name="harga" onkeypress="return hanyaAngka(event,false);">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col">
                                <label class="form-label">Luas Area (m2)</label>
                                <input type="text" class="form-control" autocomplete="off" id="area" name="area" onkeypress="return hanyaAngka(event,false);" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Persil</label>
                            <input type="text" class="form-control" autocomplete="off" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Kota</label>
                            <input type="text" class="form-control" autocomplete="off" id="kota" name="kota">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group col">
                                <label class="form-label">Bed Room</label>
                                <input type="number" class="form-control" autocomplete="off" id="bed" name="bed" onkeypress="return hanyaAngka(event,false);" value="1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group col">
                                <label class="form-label">Bath Room</label>
                                <input type="number" class="form-control" autocomplete="off" id="bath" name="bath" onkeypress="return hanyaAngka(event,false);" value="1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group col">
                                <label class="form-label">Car Port</label>
                                <input type="number" class="form-control" autocomplete="off" id="carport" name="carport" onkeypress="return hanyaAngka(event,false);" value="1">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="btnSave" type="button" class="btn btn-primary" onclick="save();">Save</button>
            </div>
        </div>
    </div>
</div>