<?php 
	   // menghubungkan dengan koneksi
        include "../config/koneksi.php";
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
    <title>FILMFLIX | Dashboard</title>
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
            	<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          	</div>
            
            <!-- Content Row -->
          <div class="row">
          <!-- Greeting -->
            <div class="col-lg-12">
			        <h4>Welcome, <?php echo $_SESSION['username']; ?>!</h4>
            </div>
            <div class="w-100 ">
            <table class="table w-100 p-3">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Movies Name</th>
                  <th scope="col">Release Date</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Film Stars</th>
                  <th scope="col">Director</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Link Download</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if (mysqli_affected_rows($con) != 0) {
                    while ()
                  }
                ?>
              </tbody>
            </table>
            </div>
          </div>
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