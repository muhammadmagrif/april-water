<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rekruitasi anggota</title>
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
                    <a href="<?php echo site_url()?>"><img src="<?php echo base_url('assets/icon/logo.jpg') ?>" style="height: 65px; margin-top: 15px"></a>
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
    <!-- Form section Start -->
    <div style="background-color: #F9F9F9; margin-bottom: 3%">
        <div class="container" style="padding: 2%">
            <h3 style="text-align: center;margin-bottom: 2%">Form Pendaftaran Anggota</h3>
            <div style="background-color: rgba(200,200,200,0.7);padding: 3%;width: 65%;margin-left: 17.5%;border-radius: 20px" >
                <form action="<?php echo site_url('home_regist/success') ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('please agree'); return false; }">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="part-1" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" id="part-1" name="ttl" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="part-1" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="part-1" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="number" class="form-control" id="part-1" name="nomer" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label>Mendaftar Sebagai</label>
                        <div style="padding: 1%;padding-left: 2%" id="part-1">
                            <div>
                                <input type="radio" name="job" value="Opsi 1" > Opsi 1
                            </div>
                            <div>
                                <input type="radio" name="job" value="Opsi 2" > Opsi 2
                            </div>
                            <div>
                                <input type="radio" name="job" value="Opsi 4" > Opsi 3
                            </div>
                            <div>
                                <input type="radio" name="job" value="Opsi 4" > Opsi 4
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ijazah</label>
                            <input type="file" class="form-control-file" name="file" style="padding: 1%;padding-left: 2%">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">CV</label> 
                            <input type="file" class="form-control-file" name="file2" style="padding: 1%;padding-left: 2%">
                        </div>
                    </div>

                    <div class="form-group form-check" style="margin-top: 3%;margin-bottom: 3%">
                        <input type="checkbox" class="form-check-input" id="agree" style="margin-top: 1.2%">
                        <label>Saya menyetujui dengan semua persyaratan dan juga ketentuan yang telah ditetapkan</label>
                    </div>


                    <div>
                        <input type="submit" class="btn btn-primary" name="submit" style="border-radius: 10px;width: 25%;margin-left: 37.5%" value="Submit">
                    </div>
                </form>
            </div>    
        </div>  
    </div>
    <!-- Form section end -->
    <!-- Footer section Start -->
    <div style="height: 80px">
        <h2 style="text-align: center;">FOOTER SECTION</h2>
    </div>
    <!-- Footer section end -->
</body>
</html>