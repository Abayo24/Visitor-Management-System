<?php
include('visitor_out.php');
$userM = $_SESSION['user'];
if ($_SESSION["loggedIn"] == 0)
  header("location: index.php");
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Abayo Akinyi" />
  <!--Descriptions-->
  <meta name="description" content="I am a great developer for web development" />
  <!--Keywords-->
  <meta name="keywords" content="Webdev, programmer, Freelancer, coder, Startup" />
  <!--bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/cdb.min.css" />
  <script src="BootStrap/js/jQuery.min.js"></script>
  <script src="BootStrap/js/bootstrap.min.js"></script>
  <!-- font-awesome icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Main Style -->
  <link rel="stylesheet" href="logoutform.css">
  <title>Checked Out</title>
</head>

<body>
  <!--  Sidebar Section-->
  <div>
    <div class="row">
      <div class="col-sm-3">
        <div class="app" id="sidebar" style="display: flex; height: 100%; position: absolute;">
          <div class="sidebar text-white" id="sidebar-showcase" role="cdb-sidebar">
            <div class="sidebar-container"  style="background-color: #01345B;">
              <div class="sidebar-header text-center">
                <a class="sidebar-toggler"><i class="fa fa-bars"></i></a>
                <a class="sidebar-brand">Visitor Management</a>
              </div>
              <div class="sidebar-nav">
                <div class="sidenav">
                  <a class="sidebar-item" href="front1.php">
                    <i class="fa fa-th-large sidebar-icon"></i>
                    <span>Admin Dashboard</span>
                  </a>
                  <a class="sidebar-item" href="myform.php">
                    <i class="fa fa-plus sidebar-icon"></i>
                    <span>Check In Visitor</span>
                  </a>
                  <a class="sidebar-item" href="logoutform.php">
                    <i class="fa fa-minus-circle sidebar-icon"></i>
                    <span>Checked Out Visitors</span>
                  </a>
                  <a class="sidebar-item" href="query_data.php">
                    <i class="fa fa-eye sidebar-icon"></i>
                    <span>View Data</span>
                  </a>
                  <a class="sidebar-item" href="logout.php">
                    <i class="fa fa-sign-out sidebar-icon"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6" style="margin-left: 400px;">
          <p>
          <h3 style="margin-top: 60px; margin-left:40px; color: #01345B; font-weight: 800;">These visitors were Logged out Today!</h3>
          </p><br>
          <div style="padding-left: 25px">
            <?php
            include('db_connect_db_new.php');
            $date = date("Y/m/d");
            $query = "SELECT * FROM info_visitor WHERE Date = '$date' AND Status = 'OFFLINE'";
            $res = mysqli_query($link, $query);

            echo '<table class="table table-hover">
                    <tr>
                      <th>Receipt ID </th>
                      <th>Name </th>
                      <th>Contact</th>
                      <th>Time In</th>
                      <th>Date</th>
                    <th>Meeting</th>
                  </tr>';
            while ($result = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                echo '<tr>
                  <td>'.$result['ReceiptID'].'</td>
                  <td>'.$result['Name'].'</td>
                  <td>'.$result['Contact'].'</td>
                  <td>'.$result['TimeIN'].'</td>
                  <td>'.$result['Date'].'</td>
                  <td>'.$result['meetingTo'].'</td>
                  </tr>';
            }                          
                 echo '</table>';
                  ?>
          </div>
    </div>
        <script>
          const sidebar = document.querySelector('.sidebar');
          new CDB.Sidebar(sidebar);
        </script>

        <script src="../build/cdbbootstrap.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/js/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/js/cdb.min.js"></script>
</body>

</html>