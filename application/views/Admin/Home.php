<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Pendaftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <script src="main.js"></script>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <!-- Header section start -->
    <div style="height: 95px ;">
        <div class="container" >
            <div class="row">
                <!-- icon product -->
                <div class="col-lg-6">
                    <a href="<?php echo site_url('home_regist/admin')?>"><img src="<?php echo base_url('assets/icon/logo.jpg') ?>" style="height: 65px; margin-top: 15px"></a>
                </div>
                <!-- service  -->
                <div class="col-lg-6" style="margin-top: 26px;">
                    <ul class="nav justify-content-end" >
                        <li class="nav-item" >
                            <div id="nav">
                                <ul class="menu">
                                    <li class="nav-link">Produk
                                        <ul class="subMenu">
                                            <a id="pr" href="#"><li>Produk 1</li></a>
                                            <a id="pr" href="#"><li>Produk 2</li></a>
                                            <a id="pr" href="#"><li>Produk 3</li></a>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav1">
                            <a class="nav-link active" href="#">Career</a>
                        </li>
                        <li class="nav-item nav1">
                            <a class="nav-link active" href="#">Contact Us</a>
                        </li>
                    </ul>    
                </div>  
            </div>      
        </div>
    </div>
    <!-- Header section end -->

    <div style="margin-left: 5%;margin-right: 5%">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th>Nomor</th>
            <th>Nama Pendaftar</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Nomor Hp</th>
            <th>Pilihan Pekerjaan</th>
            <th>Berkas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($data as $reg) {
                $no++;
                $judul = $reg->ijazah;
            ?>
                <tr>
                <td><?=$no?></td>
                <td><?= $reg->nama ?></td>
                <td><?=$reg->tanggal_lahir?></td>
                <td><?=$reg->alamat?></td>
                <td><?=$reg->email?></td>
                <td><?=$reg->nomer?></td>
                <td><?=$reg->job?></td>
                <td><a href="<?= site_url('home_regist/bukafile/')?>">Lihat Berkas</a></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>        
    </div>

    <!-- Footer section Start -->
    <div style="height: 80px;margin-left: 42%;position: absolute;bottom: 0px;">
        <h2 style="text-align: center;">FOOTER SECTION</h2>
    </div>
    <!-- Footer section end -->
</body>
</html>