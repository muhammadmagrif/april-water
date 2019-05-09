<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pendaftaran Berhasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="main.js"></script>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
        #back {
            border-radius: 10px;
            margin-top: 3%;
            width: 15%;
            margin-left: 42.5%;
        }

        #back a {
            text-decoration-line: none;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header section start -->
    <div style="height: 95px ;">
        <div class="container" >
            <div class="row">
                <!-- icon product -->
                <div class="col-lg-6">
                    <a href="<?php echo site_url()?>"><img src="<?php echo base_url('assets/icon/logo.jpg') ?>" style="height: 65px; margin-top: 15px"></a>
                </div>
                </div>

            </div>      
        </div>
    </div>
    <!-- Header section end -->
    <!-- Thanks section start -->
    <div class="container" style="padding: 12px;background-color: rgba(150,150,150,0.5);border-radius: 15px;margin-top: 1%">
        <h5 style="color: green;font-weight: bold;">Pendaftaran Berhasil,</h5>
        <p style="margin-bottom: 0">Terimakasih sudah mendaftar di April Healty Water.</p>
        <p>Data anda sudah kami terima, silahkan menunggu untuk proses verifikasi data.</p>
    </div>
    <!-- Thanks section end -->
    
    <div id="back" class="btn btn-primary" >
        <a href="<?php echo site_url()?>"><-- Kembali Ke Pendaftaran</a>
    </div>

    <!-- Footer section Start -->
    <div style="height: 80px;margin-left: 42%;position: absolute;bottom: 0px;">
        <h2 style="text-align: center;">FOOTER SECTION</h2>
    </div>
    <!-- Footer section end -->
</body>
</html>