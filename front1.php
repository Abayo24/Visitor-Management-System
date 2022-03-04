<?php include('db_connect_db_new.php');

include('visitor_out.php');

$user1 = $_SESSION["user"];

if ($_SESSION["loggedIn"] == 0)
    header("location: index.php");

$tody = date("Y:m:d");
$sql = "SELECT Name FROM info_visitor WHERE Date = '$tody'";

$sqlOnline = "SELECT * FROM info_visitor WHERE Status = 'ONLINE' LIMIT 10";

$sqlRecent = "SELECT * FROM (SELECT * FROM info_visitor ORDER BY Serial DESC LIMIT 10) a ORDER BY Serial DESC";

$resultToday = mysqli_num_rows(mysqli_query($link, $sql));   //recent Visitors
$resultS = mysqli_query($link, $sqlOnline);       //Online Visitors
$onlineVsitor = mysqli_num_rows($resultS);
$sqlResRecent = mysqli_query($link, $sqlRecent);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Abayo Akinyi" />
    <!--Descriptions-->
    <meta name="description" content="I am a great developer for web development" />
    <!--Keywords-->
    <meta name="keywords" content="visitor, Management, System" />
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/cdb.min.css" />
    <script src="BootStrap/js/jQuery.min.js"></script>
    <script src="BootStrap/js/bootstrap.min.js"></script>
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Main Style -->
    <link rel="stylesheet" href="assets/css/front1.php">
    <title>Admin Dashboard</title>
</head>

<body>
    <!--  Sidebar Section-->
  
        <div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="app" style="display: flex; height: 100%; position: absolute">
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
                                            <span>Check In Visitors</span>
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
                <div class="col-sm-3">
                    <div>
                        <h3 style="margin-top: 20px; margin-left:40px; color: #01345B; font-weight: 700;">Checkout Visitors</h3>
                    </div>
                    <div class="form">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label class="control-label" id="t" for="recept_id" style="font-size: medium;color: #01345B; font-weight:500;">Receipt ID :</label>
                                <input class="form-control" name="rid" type="text" placeholder="Enter Receipt ID." required />
                            </div>
                            <?php { ?>
                                <input id="x" name="logout" value="Checkout" type="submit" onclick='return confirm("Are you sure you want to Checkout?")'>
                            <?php } ?>

                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if ($success == 1)
                                    echo "<span style = 'color:green;'>Done !</span>";
                                else
                                    echo "<span style = 'color:red;''>Sorry ! No match found.</span>";
                            }
                            ?>
                        </form><br>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 style="margin-top: 20px; margin-left:80px; color: #01345B; font-weight: 700;">Details</h3>
                    <div class="details">
                        <?php
                        $showResultFor = 0;

                        if (isset($_GET['rid'])) {
                            $showResultFor = $_GET['rid'];
                        }

                        $query = "SELECT * FROM info_visitor WHERE ReceiptID = '$showResultFor' AND Status = 'ONLINE' ";
                        $getresult = mysqli_query($link, $query);
                        $resultDetails = mysqli_fetch_array($getresult, MYSQLI_ASSOC);
                        if ($resultDetails) { ?>
                            <div class="row">
                                <div class="col-sm-8" style="padding-left:5px;padding-top:5px; font-size:14px;">
                                    <p style="width: 678px;" id="col-1">Date :<?php echo $resultDetails['Date']; ?>&nbsp;&nbsp;
                                        Time in :&nbsp;<?php echo $resultDetails['TimeIN']; ?></p>
                                    <span id="col-1" name="main">Name :&nbsp;
                                        <?php echo $resultDetails['Name']; ?></span><br>
                                    <span id="col-1">Contact No :&nbsp;
                                        <?php echo $resultDetails['Contact'] ?><br>
                                        <span id="col-1">Purpose :&nbsp;
                                            <?php echo $resultDetails['Purpose']; ?></span><br>
                                        <span id="col-1">Meeting :&nbsp;
                                            <?php echo $resultDetails['meetingTo']; ?></span><br>
                                        <span id="col-1">Receipt ID :&nbsp;
                                            <?php echo $resultDetails['ReceiptID']; ?></span><br>
                                    </span>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="row" style="margin-left:340px;">
                <div class="col-sm-5">
                    <h3 style="margin-top: 20px; margin-left:40px; color: #01345B; font-weight: 700;">Recent Visitors :&nbsp;<?php echo $onlineVsitor; ?></h3>
                    <table class="table table-striped table-hover" id="table" style="width:80%;padding-top:20px;">
                        <script>
                            $(document).ready(function() {
                                $('[data-toggle="popover"]').popover({
                                    container: 'body'
                                });
                            });
                        </script>
                        <?php

                        while ($result2 = mysqli_fetch_array($resultS, MYSQLI_ASSOC))

                            echo '<tr  style = "padding-left:20px;">           
                                        <td  style="height :30px;padding-top:3px;">            
                                        <a style = "font-size:15px;  text-decoration: none;"  href="front1.php?rid=' . $result2['ReceiptID'] . '" data-html="true"  
                                        title="<b>' . $result2['Name'] . '<b>"
                                         data-toggle="popover" 
                                         data-trigger="hover"
                                        data-content="Contact : ' . $result2['Contact'] . ' 
                                        <br>Time in : ' . $result2['TimeIN'] . ' 
                                        <br>Purpose : ' . $result2['Purpose'] . '           
                                        <br> R ID : ' . $result2['ReceiptID'] . '">' . $result2['Name'] . '</a>         
                                    </td>
                                    </tr>'
                        ?>
                    </ul>
                </div>
            </div>

        </div>

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