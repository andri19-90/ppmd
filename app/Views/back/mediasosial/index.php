<script type="text/javascript">

    $(document).ready(function () {

    });

    function proses() {
        $('#btnSave').text('Saving...');
        $('#btnSave').attr('disabled', true);

        $.ajax({
            url: "<?php echo base_url(); ?>/mediasosial/proses",
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
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
            <li class="breadcrumb-item active">Media Sosial</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Media Sosial</h5>
                <div class="card-body">
                    <form id="form">
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 text-sm-right">Twiter</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autocomplete="off" id="tw" name="tw" value="<?php echo $tw; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 text-sm-right">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autocomplete="off" id="fb" name="fb" value="<?php echo $fb; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 text-sm-right">Google Plus</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autocomplete="off" id="gp" name="gp" value="<?php echo $gp; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 text-sm-right">LinkedIn</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autocomplete="off" id="lk" name="lk" value="<?php echo $lk; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-2 text-sm-right">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" autocomplete="off" id="ig" name="ig" value="<?php echo $ig; ?>">
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button id="btnSave" type="button" class="btn btn-primary" onclick="proses();">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>