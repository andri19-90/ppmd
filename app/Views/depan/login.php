<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">New account / Sign in </h1>               
            </div>
        </div>
    </div>
</div>
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">
        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>New account : </h2> 
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name_regis">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email_regis">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="pass_regis">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box-for overflow">                         
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Login : </h2> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="emil">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="text-center">
                        <button id="btnProses" type="button" class="btn btn-default" onclick="proses();"> Log in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<script type="text/javascript">

    $(document).ready(function () {

    });

    function proses() {

        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;

        if (email === "") {
            alert("Email tidak boleh kosong");
        } else if (pass === "") {
            alert("Password lama tidak boleh kosong");
        } else {
            $('#btnProses').text('Prosessing...');
            $('#btnProses').attr('disabled', true);

            var form_data = new FormData();
            form_data.append('email', email);
            form_data.append('pass', pass);

            $.ajax({
                url: "<?php echo base_url(); ?>/login/proses",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function (response) {
                    $('#btnProses').text('Sign In');
                    $('#btnProses').attr('disabled', false);

                    if (response.status === "ok") {
                        window.location.href = "<?php echo base_url(); ?>/beranda";
                    } else {
                        alert(response.status);
                    }

                }, error: function (response) {
                    alert(response.status);
                    $('#btnProses').text('Sign In');
                    $('#btnProses').attr('disabled', false);
                }
            });
        }
    }

</script>