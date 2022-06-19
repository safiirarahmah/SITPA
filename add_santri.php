<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sitpa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="praktikum.css">
    
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #DEB6AB;"></nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(235, 235, 235);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SITPA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="get_santri.php">Data Santri</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="get_pengajar.php">Data Pengajar</a>
             </li>
             <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="get_jadwal.php">Jadwal</a>
             </li>
        </ul>
      </div>
    </div>
</nav>
	<div class="container mt-3">
		<div class="container mb-3" style="background-color: rgb(235, 235, 235)">
			<div class="row justify-content-center">
				<div class="col-3">
			      <label><h5>Tambah Santri</h5></label>
			    </div>
			</div>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
			
			<div class="mb-3">
				<input required type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
			</div>
			<div class="mb-3">
				<input required type="text" class="form-control" name="umur" id="umur" placeholder="Umur">
			</div>
            <div class="mb-3">
				<select required class="form-select" name="jeniskelamin" id="jeniskelamin" aria-label="Default select example">
				  <option value="Laki-laki">Laki-Laki</option>
				  <option value="perempuan">Perempuan</option>
				</select>
			</div>
			<div class="mb-3">
				<select required class="form-select" name="kelas" id="kelas" aria-label="Default select example">
				  <option value="1">Iqro</option>
				  <option value="2">Qur'an</option>
				</select>
			</div>
			<a class="btn btn-success" href="get_santri.php" role="button">Kembali</a>
			<input class="btn btn-success" type="submit" name="submit" value="Simpan">
		</form>
	</div>



	<?php
	include('config.php');
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$umur = $_POST['umur'];
		$jeniskelamin = $_POST['jeniskelamin'];
        $kelas = $_POST['kelas'];


		// Create connection
		// $conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		// if (!$conn) {
		// die("Connection failed: " . mysqli_connect_error());
		// }

		
		$query = "INSERT INTO santri (nama_santri, umur, jenis_kelamin, kelas) VALUES ('$nama','$umur', '$jeniskelamin', '$kelas')";
		$result = mysqli_query($host, $query);
		

		if ($result === TRUE) {
			echo "New record created successfully";
		  } else {
			echo "Error: " . $result  . "<br>" ;
		  }
		//   $conn->close();



		header("location:get_santri.php");
	}
	?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>