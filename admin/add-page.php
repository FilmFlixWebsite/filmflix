<?php 
	   // menghubungkan dengan koneksi
        //require "../config/functions.php";
		// mengaktifkan session php
        session_start();
        if($_SESSION['status'] !="login"){
            header("location:../");
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<head>
    <title>FILMFLIX | Add Film</title>
    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">

<!-- Page Wrapper -->
  <div id="wrapper">
  	<?php include "sidebar.php"; ?>
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      
      <?php include "topbar.php";?>
      
      	<!-- Begin Page Content -->
        <div class="container-fluid">
        	<!-- Page Heading -->
          	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            	<h1 class="h3 mb-0 text-gray-800">Add Movies</h1>
          	</div>
            
            <!-- Content Row -->
<?php

$con = mysqli_connect("localhost", "root", "", "filmflix");
if(isset($_POST["submit"])) {
    $namaFilm = $_POST["filmName"];
    $tglRilis = $_POST["releaseDate"];
    $durasiFilm = $_POST["filmDuration"];
    $bintangFilm = $_POST["filmStars"];
    $pembuatFilm = $_POST["filmDirector"];
    $genre = implode(',', $_POST['genre']); 
    $linkDwnld = $_POST["downloadLink"];
    $coverImg = $_POST['imgCover'];
    $desk = $_POST['description'];
    $query = "INSERT INTO all_movielist VALUES ('', '$namaFilm', '$tglRilis', '$durasiFilm', '$bintangFilm', '$pembuatFilm', '$genre', '$linkDwnld','$coverImg','$desk')";
    mysqli_query($con, $query);
    if (mysqli_affected_rows($con) > 0) {
        echo "Berhasil";
    } else {
        echo mysqli_error($con);
    }
}
?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="filmName" class="col-sm-2 col-form-label">Film Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="filmName" class="form-control" id="filmName" placeholder="Film Name..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="filmReleaseDate" class="col-sm-2 col-form-label">Release Date</label>
                    <div class="col-sm-10">
                        <input type="text" name="releaseDate" class="form-control" id="filmReleaseDate" placeholder="Release Date..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="filmDuration" class="col-sm-2 col-form-label">Film Duration</label>
                    <div class="col-sm-10">
                        <input type="text" name="filmDuration" class="form-control" id="filmDuration" placeholder="Film Duration..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="filmStars" class="col-sm-2 col-form-label">Film Stars</label>
                    <div class="col-sm-10">
                        <input type="text" name="filmStars" class="form-control" id="filmStars" placeholder="Film Stars..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="filmDirector" class="col-sm-2 col-form-label">Film Director</label>
                    <div class="col-sm-10">
                        <input type="text" name="filmDirector" class="form-control" id="filmDirector" placeholder="Film Director..." required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Genre</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Action" type="checkbox" id="genreAction">
                                    <label class="form-check-label" for="genreAction">Action</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Drama" type="checkbox" id="genreDrama">
                                    <label class="form-check-label" for="genreDrama">Drama</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Adventure" type="checkbox" id="genreAdventure">
                                    <label class="form-check-label" for="genreAdventure">Adventure</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Thriller" type="checkbox" id="genreThriller">
                                    <label class="form-check-label" for="genreThriller">Thriller</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Comedy" type="checkbox" id="genreComedy">
                                    <label class="form-check-label" for="genreComedy">Comedy</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Sci-Fi" type="checkbox" id="genreSciFi">
                                    <label class="form-check-label" for="genreSciFi">Sci-Fi</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Horror" type="checkbox" id="genreHorror">
                                    <label class="form-check-label" for="genreHorror">Horror</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Animation" type="checkbox" id="genreAnimation">
                                    <label class="form-check-label" for="genreAnimation">Animation</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Romance" type="checkbox" id="genreRomance">
                                    <label class="form-check-label" for="genreRomance">Romance</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Fantasy" type="checkbox" id="genreFantasy">
                                    <label class="form-check-label" for="genreFantasy">Fantasy</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="Mystery" type="checkbox" id="genreMystery">
                                    <label class="form-check-label" for="genreMystery">Mystery</label>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-check">
                                    <input class="form-check-input" name="genre[]" value="War" type="checkbox" id="genreWar">
                                    <label class="form-check-label" for="genreWar">War</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="downloadLink" class="col-sm-2 col-form-label">Download Link</label>
                    <div class="col-sm-10">
                        <input type="url" name="downloadLink" class="form-control" id="downloadLink" placeholder="Download Link...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="customFile" class="col-sm-2 col-form-label">Image Cover</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <input type="file" name="imgCover" id="imgCover">
                    </div>
                </div>
                <div class="form-grup row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="submit" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10 h-25 p-3 d-flex justify-content-around">
                        <button class="btn btn-danger" onclick="clearForm()">Clear</button>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
            <script>
                function clearForm() {
                    document.querySelector('#addMovies').reset();
                }
            </script>
            <!-- End Content Row -->
          
        </div>
         <!-- End Page Content -->
      </div>
      <!-- End Content Wrapper -->
     <?php include "footer.php";?>

    </div>
    <!-- End Main Content -->
    </div>
    <!-- End Page Wrapper -->
     <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>