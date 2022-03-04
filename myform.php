<?php
include('db_connect_db_new.php');
session_start();
if ($_SESSION["loggedIn"] == 0)
  header("location: index.php");
$user_ = $_SESSION["user"];

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
  <meta name="keywords" content="visitor, Management, System" />
  <!--bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/cdb.min.css" />
  <script src="BootStrap/js/jQuery.min.js"></script>
  <script src="BootStrap/js/bootstrap.min.js"></script>
  <!-- font-awesome icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Main Style -->
  <link rel="stylesheet" href="assets/css/myform.css">
  <title>New Visitor</title>

</head>

<body onload=display_ct();>

  <?php
  $success = 0;

  if (!$link)
    die("error".mysqli_connect_error());


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["idno"]))
      $idno_error = "Enter the ID/Passport Properly !";
    else
      $idno = $_POST["idno"];

    if (empty($_POST["name"]))
      $name_error = "Enter the Name Properly !";
    else
      $name = $_POST["name"];

    if (strlen($_POST["cno"]) != 10)
      $cno_error = "Enter Valid Contact number";
    else
      $cno = $_POST["cno"];

    if (empty($_POST["purpose"]))
      $p_error = "Enter Valid Purpose";
    else
      $p = $_POST["purpose"];
    date_default_timezone_set("Asia/Kathmandu");
    $timein = date("H:i:s");
    $rid = rand(100000, 900000);
    $_SESSION["rid"] = $rid;

    $date = date("Y/m/d");
    $day = date("d");
    $month = date("m");
    $year = date("Y");
    $meet = $_POST["MeetingTo"];




    if (empty($idno) || empty($name) || empty($cno) || empty($p) || strlen($cno) != 10)
      $displayError = "You have not entered the details correctly !";
    else {
      $sql = "INSERT INTO info_visitor(idno, Name, Contact, Purpose, meetingTo, day, month, year, Date, TimeIN, ReceiptID,Status,registeredBy)
      VALUES ('$idno', '$name','$cno','$p',
				 '$meet', '$day', '$month', '$year', '$date',
				 '$timein','$rid','ONLINE', 
				 '$user_')";

      if (mysqli_query($link, $sql))
        $success = 1;   //redirection to the printing page.
      else
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

  
    if ($success == 1)
      header('location: user_profile_admin.php');
  }
  ?>
  <!--  Sidebar Section-->
   <div>
      <div class="row">
        <div class="col-sm-3">
          <div class="app" style="display: flex; height: 100%; position: fixed">
            <div class="sidebar text-white" id="sidebar-showcase" role="cdb-sidebar">
              <div class="sidebar-container" style="background-color: #01345B;">
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
                    <a class="sidebar-item" href="home.php">
                      <i class="fa fa-home sidebar-icon"></i>
                      <span>Back Home</span>
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
        <div class="row">
        
          <div class="col-sm-4" style="margin-left:500px">
            <h3 style="margin-top: 20px;color: #01345B; font-weight: 700">Check In Visitor</h3>
            <form class="myForm" style=" padding-left:90px" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="form">
              <? echo $displayError; ?>
              <div class="form-group">
                <label for="name"> ID/Passport No :</label>
                <input autocomplete="off" class="form-control" type="number" name="idno" placeholder="Enter ID/Passport No." required id="idno" oninvalid="this.setCustomValidity(this.willValidate?'':'ID/Passport No is required')" onblur="isEmpty('idno')" onfocus="onfo('idno')" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger="onfocus" />
              </div>
              <div class="form-group">
                <label for="name"> Name :</label>
                <input autocomplete="off" class="form-control" type="text" name="name" placeholder="Enter Visitor's Name." required id="name" oninvalid="this.setCustomValidity(this.willValidate?'':'Name is required')" onblur="isEmpty('name')" onfocus="onfo('name')" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger="onfocus" />
              </div>
              <div class="form-group">
                <label for="cno"> Contact No. :</label>
                <input autocomplete="off" class="form-control" type="number" id="ContactInfo" onkeyup="Ccheck('ContactInfo')" onblur="isEmpty('ContactInfo')" onfocus="onfo('ContactInfo')" name="cno" placeholder="Enter Contact Number." required min="700000000" max="799999999" oninvalid="this.setCustomValidity(this.willValidate?'':'Enter correct Contact number please')" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger="onfocus" />
              </div>
              <div class="form-group">
                <label for="prps">Purpose :</label>
                <input autocomplete="off" class="form-control" type="text" name="purpose" placeholder="Enter Purpose." required id="Purpose" oninvalid="this.setCustomValidity(this.willValidate?'':'Enter your Purpose')" maxlength="30" onblur="isEmpty('Purpose')" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger="onfocus" />
              </div>
              <div class="form-group">
                <label for="meetingTo">Meeting to :</label>
                <input autocomplete="off" class="form-control" type="text" required name="MeetingTo" id="meetingTo" placeholder="Whom will you meet ?" oninvalid="this.setCustomValidity(this.willValidate?'':'Whom do you want to meet ?')" maxlength="30" onblur="isEmpty('meetingTo')" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" data-trigger="onfocus" />
              </div>
              <div class="submit">
                <input id="submitme" type="submit" name="submit_post" class="btn" value="Submit" onclick="return emptys()" />
                <input autocomplete="off" id="mydata" type="hidden" name="mydata">
              </div>
            </form>
          </div>
          <div class="col-sm-3"style="display: block; position: absolute" id="time" >
            <p id="timeDisplay"> Time : <span id="t1"></span> </p>
            <p id="dateDisplay"> Date : <span id="t2"></span></p>         
        </div>
      </div>
    </div>

  <!-- time and date script -->

  <script type="text/javascript">
    function display_c() {
      var refresh = 1000; // Refresh rate in milli seconds
      mytime = setTimeout('display_ct()', refresh)
    }

    function display_ct() {
      var date = new Date();
      var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
      var am_pm = date.getHours() >= 12 ? "PM" : "AM";
      hours = hours < 10 ? "0" + hours : hours;
      var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
      var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
      time = hours + ":" + minutes + ":" + seconds + " " + am_pm;
      document.getElementById('t1').innerHTML = time;
      var x = new Date()
      var x1 = x.getMonth() + 1 + "/" + x.getDate() + "/" + x.getFullYear();
      document.getElementById('t2').innerHTML = x1;
      display_c();
    }
  </script>

  <script>
    const sidebar = document.querySelector('.sidebar');
    new CDB.Sidebar(sidebar);
  </script>

  <script src="BootStrap/js/bootstrap.min.js"></script>
  <script src="BootStrap/js/jQuery.min.js"></script>
  <script src="BootStrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="webcam/webmaster/webcam.js"></script>
  </div>

</body>

</html>