<!DOCTYPE html>
  <html>
    <head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/contact/css/materialalert.css"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Kritik & Saran</title>
    </head>

    <body>
		<!--Navbar-->
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">Menu</a></li>
					<li><a href="#">Menu</a></li>
					<li><a href="#">Menu</a></li>
				</ul>
			</div>
		</nav>
		<!--End Navbar-->
		<!--Side Navbar-->
		<ul class="sidenav sidenav-fixed invisible-top">
		  <li><a href="#!">Menu</a></li>
		  <li><a href="#!">Menu</a></li>
		  <li class="active"><a href="#!">Kritik & Saran</a></li>
		  <li><a href="#!">Menu</a></li>
		</ul>
		<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <!--End Side Navbar-->
		 <!--Main-->
		 

		 <main>
		 <div class="row">
			 <div class="input-field col s3">
				 <form action="" method="post">
						<input placeholder="Search" id="first_name" type="text" class="validate" name="cari">
						<button class="btn waves-effect waves-light" type="submit" name="submit">Search
						<i class="material-icons right">search</i>
					</button>
				</form>
        </div>
			 </div>
			<table id="theTable" class="striped highlight">
				<thead>
				  <tr>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Tanggal pesan</th>
					  <th>Isi pesan</th>
				  </tr>
				</thead>

				<?php foreach ($comment as $row) : ?>
				<tbody>
				  <tr>
						<td><?= $row["nama"]; ?></td>
						<td><a href="mailto:<?=$row["email"];?>?Subject=April%20Water%20Costumer Care"target="_top"><?= $row['email']; ?></a></td>
						<td><?= $row["tanggal_upload"]; ?></td>
						<td><?= $row["pesan"]; ?></td>
				  </tr>
				</tbody>
			<?php endforeach; ?>
			
				</table>
				<?php if(empty($comment)): ?>
							<div class="materialert">
								<i class="material-icons">clear</i> <span>Data Not Found</span>
						</div>
				<?php endif; ?>
		 </main>
		 <!--End Main-->
		<!--The JS-->
		<script src="<?php echo base_url(); ?>assets/admin/js/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/js/script.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/materialize.min.js"></script>
    </body>
  </html>