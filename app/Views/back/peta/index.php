<script type="text/javascript">

    $(document).ready(function () {

    });

    function proses() {
        $('#btnSave').text('Saving...');
        $('#btnSave').attr('disabled', true);

        var peta = document.getElementById('peta').value;

        var form_data = new FormData();
        form_data.append('peta', peta);

        $.ajax({
            url: "<?php echo base_url(); ?>/peta/proses",
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'POST',
            success: function (response) {
                alert(response.status);

                $('#btnSave').text('Save');
                $('#btnSave').attr('disabled', false);
            }, error: function (response) {
                alert(response.status);
                $('#btnSave').text('Save');
                $('#btnSave').attr('disabled', false);
            }
        });
    }

</script>
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Peta Lokasi</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Peta Lokasi</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea id="peta" name="peta" class="form-control" rows="8">
                                
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 ml-sm-auto">
                            <button id="btnSave" type="button" class="btn btn-primary" onclick="proses();">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>