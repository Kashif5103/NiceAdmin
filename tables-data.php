<?php

include 'db.php'; // Include the database connection

$sql = "SELECT comp_id, comp_name, phone, email, password, image, city, state, country, registration, expiry FROM compani";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Companies</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* Custom CSS to decrease font size of the table */

    .pagetitle {
      display: flex;
      width: 989px;
      flex-direction: column;

    }

    .row {
    margin-left: 52px;
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y)* -1);
    margin-right: calc(var(--bs-gutter-x)* 1.5);
    margin-left: calc(var(--bs-gutter-x)* 0.2);
    }
   
    .datatable-container {
  border:none;
  margin-left: 12px;
  margin-top: 12px;
  /* table-layout: fixed; */
}


    /* Define the pulse animation */
    @keyframes pulse {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.1);
      }

      100% {
        transform: scale(1);
      }
    }

    /* Define the click animation */
    @keyframes clickEffect {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      50% {
        transform: scale(0.9);
        opacity: 0.7;
      }

      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    .company-name {
      color: #000;
      text-decoration: none;
      display: inline-block;
      transition: color 0.3s ease;
    }

    .pagetitleinside {
      padding-left: 600px;
    }

    .datatable-dropdown label {
      font-size: 0.9rem;
    }

    .datatable-info {
      display: none;
    }

    .mt-1 {
    margin-top: .25rem !important;
    margin-right: 45px;
}
    .company-name:active {
      animation: clickEffect 0.s ease;
      /* Apply the click effect animation on click */
      color: #0056b3;
      /* Darken color on click */
    }

    * {
      margin: 0;

      padding: 0;

      box-sizing: border-box;
    }
   
    .custom {
    font-size: 0.8rem;
    border-radius: 7px;
    padding-top: 14px;
    padding-bottom: 14px;
    padding-right: 32px;
    padding-left: 32px;
    
    /* table-layout: fixed; */
    /* width: 100%; */
    /* overflow: hidden; */
    /* text-overflow: ellipsis; */
    /* white-space: nowrap; */
}

tbody, td, tr{
  word-wrap: break-word;
    max-width: 200px;
}

    .image-circle{
      display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center; 
    text-align: center;   
    }

    
    .custom-header-expiry{
      white-space: nowrap;
      /* Light gray background */
      color: #343a40;
      /* Dark text color */
      font-weight: bold;
      /* Bold text */
      /* Center align text */
  
      /* Bottom border */
    }
    .navbar-image{
  width: 50px;
  height: 50px;
  margin-right: 7px;
}

    .headerbox {

      display: flex;
    }

.datatable-table > thead > tr > th {
    vertical-align: bottom;
    text-align: left;
    border-bottom: 0px solid #d9d9d9;
}

    .pagetitleinside button {
      width: 150px;
    }

    .datatable-pagination {
      margin-left: 50px;
    }

    .datatable-top{
      margin: 0;
 
      width: 1002px;

}

    .datatable-bottom {
      width: 122%;
    }

</style>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <img class="navbar-image" src="assets/img/logo3.png" alt="">
          
    <a href="index.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">FingerLog</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3 mr-4">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="ri-home-8-line"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link active" data-bs-target="#tables-nav" data-bs-toggle="" href="tables-data.php">
          <i class="ri-building-4-line"></i><span>Companies</span><i class="bi bi-chevron ms-auto"></i>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->



      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> -->
      <!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside>


  <!-- ---------------------------------------------------End Sidebar--------------------------------------------------->


  <main id="main" class="main">


    <div class="headerbox mt-4">
      <div class="pagetitle">
        <h1 class="mb-1">Companies</h1>
        <div>
          <nav class="mt-0">
            <ol class="breadcrumb mt-0">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Companies</li>
            </ol>
          </nav>
        </div>

      </div><!-- End Page Title -->

      <div class="pagetitleinside mt-1"><button type="button" onclick="window.location.href = 'create.php';" class="btn btn-outline-primary mb-3">Add Company</button>
      </div>
    </div>

    <section class="section">

      <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>

        
      <?php endif; ?>
      <div class="row " id="companytable">
        <div class="col-lg-10">

          <?php
          if ($result->num_rows > 0) {
            // Output data for each row
            echo "<table class='datatable custom'  style='background-color: #ffffff;'><thead><tr>";
            echo "<th class='custom-header'>#</th><th class='custom-header ' scope='row'>Name</th><th class='custom-header'>Phone</th><th class='custom-header'>Email</th><th class='custom-header'>Password</th><th class='custom-header'>City</th>
           
            <th class='custom-header'>Country</th><th class='custom-header-expiry'>Expiry date</th><th class='custom-header'>Action</th>";
            echo "</tr></thead><tbody>";

            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($row["comp_id"]) . "</td>";
          ?>
              <td>

                <a class="text-primary fw-bold" href="table-data2.php?id=<?php echo $row['comp_id']; ?>">
                  <?php echo $row['comp_name']; ?>
                </a>
              </td>
              
              <?php
              echo "<td>" . htmlspecialchars($row["phone"]) . "</td> ";
              echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["password"]) . "</td>";
              
              echo "<td>" . htmlspecialchars($row["city"]) . "</td>";
             // echo "<td>" . htmlspecialchars($row["state"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["country"]) . "</td>";
           //   echo "<td>" . htmlspecialchars($row["registration"]) . "</td>";
              echo "<td>" . htmlspecialchars($row["expiry"]) . "</td>";

              ?>
              <td>
                <div style="display: flex; gap: 10px;">
                  <a type="button" class="btn btn-success btn-info d-flex justify-content-center " style="padding-bottom: 0px; width:25px; height: 28px;" href="update.php?id=<?php echo $row['comp_id']; ?>"><i style="width: 20px;" class="fa-solid fa-pen-to-square"></i></a>
                  <a type="button" class="btn btn-danger btn-floating d-flex justify-content-center" style="padding-bottom: 0px; width:25px; height:28px" data-mdb-ripple-init onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $row['comp_id']; ?>"> <i style="width: 20px;" class="fa-solid fa-trash"></i></a>
                </div>
              </td>

          <?php

              echo "</tr>";
            }

            echo "</tbody></table>";
          } else {
            echo "";
          }
          ?>

        </div>
      </div>

      </div>
      </div>
    </section>

  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  


</body>

</html>