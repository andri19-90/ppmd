<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/beranda"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Open Ticket</h5>
                    <div class="row align-items-center">
                        <div class="col">
                            <label class="badge badge-pill badge-primary">35% <i class="m-l-10 feather icon-arrow-up"></i></label>
                        </div>
                        <div class="col text-right">
                            <h5 class="mb-0">35</h5>
                        </div>
                    </div>
                    <div class="progress mt-1">
                        <div class="progress-bar bg-primary" style="width:35%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Completed Task</h5>
                    <div class="row align-items-center">
                        <div class="col">
                            <label class="badge badge-pill badge-success">85% <i class="m-l-10 feather icon-arrow-down"></i></label>
                        </div>
                        <div class="col text-right">
                            <h5 class="mb-0">1 Remain</h5>
                        </div>
                    </div>
                    <div class="progress mt-1">
                        <div class="progress-bar bg-success" style="width:85%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Space Remain</h5>
                    <div class="row align-items-center">
                        <div class="col">
                            <label class="badge badge-pill badge-danger">8% <i class="m-l-10 feather icon-arrow-down"></i></label>
                        </div>
                        <div class="col text-right">
                            <h5 class="mb-0">15 BG</h5>
                        </div>
                    </div>
                    <div class="progress mt-1">
                        <div class="progress-bar bg-danger" style="width:15%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5>New Followers</h5>
                    <div class="row align-items-center">
                        <div class="col">
                            <label class="badge badge-pill text-white badge-warning">15% <i class="m-l-10 feather icon-arrow-down"></i></label>
                        </div>
                        <div class="col text-right">
                            <h5 class="mb-0">55+</h5>
                        </div>
                    </div>
                    <div class="progress mt-1">
                        <div class="progress-bar bg-warning" style="width:35%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- forth card start -->
        <div class="col-xl-12 col-md-12">
            <div class="card mb-4">
                <div class="card-body" style="text-align: center;">
                    <img src="<?php echo $logo; ?>" style="width: 200px; height: auto; margin-top: 20px;">
                    <h6 style="margin-top: 20px;">SISTEM INFORMASI PPMD TNI AL</h6>
                    <p style="margin-top: 5px;"><?php echo $alamat . ' - '; ?><a target="_blank" href="<?php echo $website; ?>"><?php echo $website; ?></a></p>
                    <p style="margin-top: 5px;"><?php echo "Telp : " . $tlp; if(strlen($fax) > 0){ echo ', Fax : ' . $fax; } ?></p>
                </div>
            </div>
        </div>
    </div>
</div>