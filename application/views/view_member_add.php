<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/main_member.css" ?>">

		<meta charset="UTF-8">
		<title>INDOBARCA FANS | MEMBER</title>

		<style type="text/css">
			body{
				margin-top: 0px;
				margin-left: 0px;
				margin-right: 0px;
				margin-right: 0px;
			}
		</style>
	</head>

	<body bgcolor= #ebebeb>
		<div id="container">
			<div id="header">
				<img src="<?php echo base_url(). "gambar/fcb_header.jpg" ?>"
			</div>
			<div id="menu">
				<ul>
					<li><a href="<?php echo base_url(); ?>">HOME</a></li>
					<li><a href="#">MASTER</a>
						<ul>
							<li><a href="<?php echo base_url()."index.php/controller_barang/index"; ?>">BARANG</a></li><br/>
							<li><a href="<?php echo base_url()."index.php/controller_cabang/index"; ?>">CABANG</a></li><br/>
							<li><a href="<?php echo base_url()."index.php/controller_member/index"; ?>">MEMBER</a></li>
						</ul>
					</li>
					<li><a href="#">ABOUT</a>
						<ul>
							<li><a href="<?php echo base_url()."index.php/controller_penulis/index"; ?>">PENULIS</a></li><br/>
							<li><a href="<?php echo base_url()."index.php/controller_about/index"; ?>">WEBSITE</a></li><br/>
						</ul>
					</li>
				</ul>
			</div>
			<div id="match">
				<h2 style="font-family: sans-serif; text-align: center; color: yellow;">FORM INDOBARCA MEMBER</h2>
				<table align="center" border="0" style="border-collapse: collapse; font-family: monospace; color: white">
					<form enctype="multipart/form-data" method="post" action="<?php echo base_url(). "index.php/controller_member/do_add" ?>">
						<tr>
							<td width="100">ID</td>
							<td><input type="text" name="id" size="30" readonly="readonly"></td>
						</tr>

						<tr>
							<td width="100">NAMA</td>
							<td><input type="text" name="nama" size="30"></td>
						</tr>

						<tr>
							<td width="100">KELAMIN</td>
							<td>
								<input type="radio" name="jk" value="P" checked="checked">PRIA
								<input type="radio" name="jk" value="W">WANITA
							</td>
						</tr>

						<tr>
							<td width="100">TGL. LAHIR</td>
							<td><input type="text" name="tgl_lahir" size="30"></td>
						</tr>

						<tr>
							<td width="100">TELEPON</td>
							<td><input type="text" name="telepon" size="30"></td>
						</tr>

						<tr width="100">
							<td>EMAIL</td>
							<td><input type="text" name="email" size="30"></td>
						</tr>

						<tr width="100">
							<td>PASSWORD</td>
							<td><input type="password" name="password" size="30"></td>
						</tr>

						<tr>
							<td width="100">ALAMAT</td>
							<td>
								<textarea cols="23" rows="3" name="alamat"></textarea>
							</td>
						</tr>

						<tr>
							<td width="100">FOTO</td>
							<td><input type="file" name="file"></td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="submit" name="input" value="INPUT">
								<input type="reset" name="reset" value="CANCEL">
							</td>
						</tr>
					</form>
				</table>
			</div>
			<div id="sidebar">
				<img src="<?php echo base_url(). "gambar/fcb_sidebar.jpg" ?>">
			</div>
			<div id="sponsor">
				<img src="<?php echo base_url(). "gambar/fcb_footer.jpg" ?>"
			</div>
			<div id="sosmed">
				<img src="<?php echo base_url(). "gambar/fcb_sosmed.jpg" ?>"
			</div>
			<div id="footer" style="text-align: center; vertical-align: middle;">
				IndoBarcaFans. All Right Reserved. Copyright <a href="http://www.instagram.com/a_pardana" target="_blank" style="color: #FFF; text-decoration: none;">@A_Pardana</a>
			</div>
		</div>

		<!--<script type="text/javascript">
			alert("Data Berhasil Disimpan");
			window.open("<?php echo base_url(). "index.php/controller_member/index"; ?>");
		</script>-->
	</body>
</html>