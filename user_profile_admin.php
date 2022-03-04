<?php
include('db_connect_db_new.php');
session_start();
$r_id = $_SESSION['rid'];
$sql = "SELECT * FROM info_visitor WHERE ReceiptID = $r_id";
$re = mysqli_query($link, $sql);
$result = mysqli_fetch_array($re, MYSQLI_ASSOC);

?>
<html>

<head>
  <meta content="text/html; charset=windows-1252" http-equiv="content-type">
  <link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/user_profile.css">
</head>

<body>
  <div class="row">
    <div class="col-sm-6">
      <p style="width: 678px;" id="col-1">Date :<?php echo $result['Date']; ?>&nbsp;&nbsp;
        Time in :&nbsp;<?php echo $result['TimeIN'] ?></p>
      <br>
      <span id="col-1" name="main">Name :&nbsp;
        <?php echo $result['Name']; ?></span><br>
      <span id="col-1">Contact No :&nbsp;
        <?php echo $result['Contact'] ?><br>
        <span id="col-1">Purpose :&nbsp;
          <?php echo $result['Purpose']; ?></span><br>
        <span id="col-1">Meeting :&nbsp;
          <?php echo $result['meetingTo']; ?></span><br>
        <span id="col-1">Receipt ID :&nbsp;
          <?php echo $result['ReceiptID']; ?></span><br>
      </span>
      <p style="width: 678px; padding-top:20px; font-weight: 600;">NOTE :PLEASE RETURN THIS WHEN YOU EXIT!!!</p>
    </div>
  </div>

  <br>
  <br>
  <div> <button type="button" id="mybutton" class="hide-from-printer" onclick="window.print()" value="Print Badge">Print Badge</button>
    <a type="button" id="button1" class="hide-from-printer" href="myform.php">Back </a>
  </div>
</body>

</html>