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
            <li class="active"><a href="#">DATA KATEGORI</a></li>
			<li><a href="contact.php">CONTACT</a></li>
		</ul>
		</div>
	</header>

	<div class="sectionKG">
        <div class="container">
            <h3>DATA KATEGORI</h3>
            <div class="boxKG">
                <p><a href="tambah_category.php">Tambah Category</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Kategori</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $kategori = mysqli_query($conn,"SELECT * FROM tb_category ORDER BY category_id DESC");
                            while($row = mysqli_fetch_array($kategori)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['category_name']?></td>
                            <td>
                                <a href="edit_kategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="proses_hapus.php?idk=<?php echo $row['category_id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

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