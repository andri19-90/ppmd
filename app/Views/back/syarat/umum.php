<script type="text/javascript">

    $(document).ready(function () {

    });

    function proses() {
        $('#btnSave').text('Saving...');
        $('#btnSave').attr('disabled', true);

        var ket = tinyMCE.get('ket').getContent();

        var form_data = new FormData();
        form_data.append('ket', ket);

        $.ajax({
            url: "<?php echo base_url(); ?>/syaratumum/proses",
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
            <li class="breadcrumb-item active">Syarat Umum</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Syarat Umum Pengajuan</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <textarea class="form-control" id="ket" name="ket"><?php echo $keterangan; ?></textarea>
                            <script type="text/javascript">
                                var BASE_URL = "<?php echo base_url(); ?>";
                                tinymce.init({
                                    selector: "#ket",theme: "modern",height: 250,
                                    plugins: [
                                        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                                        "searchreplace wordcount visualblocks visualchars insertdatetime nonbreaking",
                                        "table contextmenu directionality emoticons paste textcolor"
                                ],
                                toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
                                toolbar2: "| link unlink anchor | forecolor backcolor  | print preview code ",
                                image_advtab: true ,
                                external_filemanager_path: BASE_URL + "/filemanager/",
                                filemanager_title: "File Gallery",
                                relative_urls : false,
                                remove_script_host : false,
                                convert_urls : true,
                                external_plugins: {"filemanager": BASE_URL + "/filemanager/plugin.min.js"}
                                });
                            </script>
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