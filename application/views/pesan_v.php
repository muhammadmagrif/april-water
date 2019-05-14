<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title></title>
    <style media="screen">
      .navbar{
        background-color: #ffffff !important;
      }
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9 !important;
      }
      h3 {
        margin: 50px 0 25px;
      }
      hr {
        border: 0;
        clear:both;
        display:block;
        width: 100%;
        background-color: #d6d6d6;
        height: 2px;
        margin-bottom: 50px;
      }
      form {
        padding: 50px;
      }
      .wrap {
        background-color: #e3f2e4;
        border: none;
        border-radius: 10px;
        margin: 0 200px 50px;
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;
        -moz-box-shadow: 3px 3px 5px 6px #ccc;
        box-shadow: 3px 3px 5px 6px #ccc;
      }
      .btn {
        background-color: #82cf87;
      }
      .btn:hover {
        background-color: #008f39;
      }
      .navbartext li{
        margin-right: 30px;
      }
      .navbartext li a{
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        color: black;
        text-decoration: none;
      }
      .navbartext li a:hover {
        color: #008f39;
      }

      .logos{
      	width:150px; height:60px;
      }
      .row{
      	margin:50px;
      }
      .product_description{
      	margin-bottom: 8px;
      }
      .info-relasi{
      	margin-bottom: 8px;
      }
      .options{
      	margin-bottom: 8px;
      }
      .beli{
      	margin-bottom: 8px;
      }

      .kotak_1301164313{
  			border : small;
  			background-color: white;  
  		}

  		body{
  			background-image: url("bg.jpg")
  		}

  		p{
  			text-align: center;
  			margin: 2px 25px 0 25px;
  		}

  		#container_1301164313 {
   			padding: 30px;
   			border-radius: 4px;
  		}

  		.logo_1301164313 {
  			margin-top: 2%;
			width: 80px;
		   	/*margin-top: 30px;
		   	margin-left: 60px;*/
		   	position: relative;
		}
		  
		.avatar_1301164313{
		   	width: 150px;
		   	height: 150px;
		   	border-radius: 50%;
		   	margin: 40px 0px 2% 0px;
		}

		#imgcontainer_1301164313 {
		   	text-align: center;
		   	margin: 0 0 0 0;
		   	position: relative;
		   	background-color: green;
		}

		#imgcontainer2_1301164313{
		   	text-align: center;
		   	margin: 0 0 0 0;
		   	position: relative;
		   	background-color: grey;
		   	border-top-right-radius: 4px;
		   	border-bottom-right-radius: 4px;
		}

		#warnateks_1301164313{
			font-weight: bold;
		}

		#warnateks2_1301164313{
			font-weight: bold;
			color: #0D47A1;
		}

		button {
		   	background-color: red;
		   	color: white;
		   	margin-left: 2%;
		   	border: none;
		   	cursor: pointer;
		   	width: 80%;
		}

		#cpy_1301164313{
			font-size: 12px;
			margin: 4% 10px 4% 10px;
		}

		#welcome_1301164313{
			font-size: 20px;
			font-weight: bold;
			margin-top: 2%;
			margin-bottom: 6%; 
		}

		#inp_1301164313{
			
			border: none;
			outline: none;
			width: 100%;
		}

		#bts_1301164313{
			margin-top: 76px;
		}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top navbarr">
        <div class="container">
          <div class="navbar-header">
            <img class="logos" src="<?php echo base_url('img/LOGO APRIL.jpg')?>" alt="Card image cap">
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav navbartext">
            <li class="nav-item dropdown">
               <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Product
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Something else here</a>
               </div>
             </li>
            <li><a href="">Career</a></li>
            <li><a href="">Contact Us</a></li>
          </div>
        </div>
      </div>
    </nav>
    <div id="container_1301164313">
		<div id="bts_1301164313">
			<div>
					<div class="container">
						<div class="row">
            <div class="col-sm-3">
            </div>
							<div class="col-sm-6" id="imgcontainer_1301164313">
								<!-- Insert Logo Here -->
								<img src="<?php echo base_url('img/LOGO APRIL.jpg')?>" class="logo_1301164313">
								<p id="welcome_1301164313">Data Pesanan</p>
								<?php echo form_open_multipart('pesanan_c/pesan');?>
								    <div class="form-group">
									      <input type="text" name="nama" id="inp_1301164313" placeholder="Nama">
                    </div>
                    <div class="form-group">
									      <input type="text" name="ktp" id="inp_1301164313" placeholder="No KTP">
								    </div>
								    <div class="form-group">
									    <input type="text" name="alamat" id="inp_1301164313" placeholder="Alamat">
                    </div>
                    <div class="form-group">
									    <input type="text" name="noHp" id="inp_1301164313" placeholder="No HP">
                    </div>
                    <div class="form-group">
									    <input type="text" name="jml" id="inp_1301164313" placeholder="Jumlah Barang">
                    </div>
                    <div class="form-group">
                      <select size="1" id="metpem" name="jenis">
                        <option value = "">Jenis Barang</option>
                        <option value = "Botol 350ml">Botol 350ml</option>
                        <option value = "Botol 600ml">Botol 600ml</option>
                        <option value = "Galon">Galon</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select size="1" id="metpem" name="metpem">
                        <option value = "">Pilih Metode Pembayaran</option>
                        <option value = "cod">COD</option>
                        <option value = "transfer">Transfer</option>
                      </select>
                    </div>
								    <button type="submit" class="btn btn-default">Masuk</button>
								</form>
								
              </div>
              <div class="col-sm-3">
              </div>
							
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>