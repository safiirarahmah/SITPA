<?php
include('config.php');
$query = "SELECT jadwal.*, pengajar.nama_pengajar as nama FROM `jadwal` JOIN pengajar ON jadwal.id_pengajar = pengajar.id_pengajar GROUP BY jadwal.nama_mapel ORDER BY jadwal.id_jadwal";
$result = mysqli_query($host,$query);
?>

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
		<div class="container mb-2">
			<div class="row justify-content-center">
				<div class="col-3">
			      <label><h5>Jadwal TPA Al-Ikhlas</h5></label>
			    </div>
			</div>
		</div>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Hari</th>
		      <th scope="col">Mapel</th>
		      <th scope="col">Pengajar</th>
		      <th scope="col">Jam</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
              
              while($data = mysqli_fetch_array($result)) {   ?>
			    <tr>
			      <th scope="row"><?= $data['id_jadwal'] ?></th>
			      <td><?= $data['nama_mapel'] ?></td>
			      <td><?= $data['nama'] ?></td>
			      <td><?= $data['jam'] ?></td>
			    </tr>


			<?php } ?>
		  </tbody>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>