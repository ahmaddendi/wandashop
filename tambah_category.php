<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ahmad Dendi Wanda Rohyan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
		<h1><a href="index.html"></a>WANDA SHOP</h1>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">PRODUCT</a></li>
            <li class="active"><a href="data_kategori.php">DATA KATEGORI</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
		</div>
	</header>

	<div class="sectionKG">
        <div class="container">
            <h3>TAMBAH CATEGORY</h3>
            <div class="boxKG">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
                    <input type="submit" name="submit" values="Submit" class="btn">
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $nama = ucwords($_POST['nama']);

                        $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES(
                                            null,
                                            '".$nama."') ");
                        if($insert){
                            echo '<script>alert("Tambah data berhasil")</script>';
                            echo '<script>window.location="data_kategori.php"</script>';
                        }else{
                            echo 'gagal' .mysqli_error($conn);
                        }
                    }
                ?>
            </div>
        </div>
    </div>



	<!-- footer -->
	<footer>
		<div class="container">
			<small> Copyright &copy; AHMAD DENDI WANDA ROHYAN - A11.2020.12840.</small>
		</div>
	</footer>
</body>
</html>