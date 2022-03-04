<?php session_start();
include("db_connect_db_new.php");
if ($_SESSION["loggedIn"] == 0)
	header("location: index.php");
$user2 = $_SESSION["user"];
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
	<meta name="keywords" content="Visitor, Management, Freelancer, System" />
	<!--bootstrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap@1.0.0/css/cdb.min.css" />
	<script src="BootStrap/js/jQuery.min.js"></script>
	<script src="BootStrap/js/bootstrap.min.js"></script>
	<!-- font-awesome icon -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Main Style -->
	<link rel="stylesheet" href="assets/css/query_data.css">
	<title>View data</title>
</head>

<body>
	<!-------------------------------SideNav------------------------------------------------------->
	<div class="row">
		<div class="col-sm-3">
			<div class="app" style="display: flex; height: 100%; position: fixed;">
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
	</div>
	</div>
	<div>
		<!-----------------------Query Form----------------------------------------------->
		<div id='body'>
			<div class="search" style=" margin-bottom: 10px;">
				<h3 style="margin-left: 400px;margin-top: 20px;margin-bottom: 20px;color: #01345B; font-weight: 700">Search By </h3>

				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" style="padding:20px;margin-left:300px;width:62%;">

					<div class="FormLabel">
						<input type="radio" id="allData" name="search" value="all" onclick="disable()"><label for="all">All Entries</label>
					</div>
					<div class="FormLabel">
						<input type="radio" name="search" id="active" value="active" onclick="disable()"><label for=" active entries">Active Visitors </label>
					</div>
					<div class="FormLabel">
						<input type="radio" id="bydate" name="search" value="dates" onclick="undisable()"><label for="date">By Date </label>
					</div>
					<div class="FormLabel">
						<label for="date">From </label><input type="date" id="dateP" name="dateP" value="<?php echo $datePF; ?>" id="in1" oninput="onDateInput()" disabled required />
						<label for="date">To </label> <input type="date" id="dateF" name="dateF" value="<?php echo $dateFP; ?>" id="in2" disabled required />
					</div>
					<button class="btn" type="submit" name="submit">Search</button>
			</div>
			</form>
		</div>

		<div class="col-sm-9 ">
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (!isset($_POST["search"])) {
					echo "<br><br><span style = 'color : red; margin-left:400px;'>PLease Select any field !</span>";
					exit();
				}
				/*----------------------------------DISPAYING ALL DATA------------------------------------------*/

				if (isset($_POST["search"]) && $_POST["search"] == "all") {
					$query = "SELECT * FROM info_visitor";
					$result = mysqli_query($link, $query);
					$count = mysqli_num_rows($result);

					if ($count) {
						echo "<br><h3 style = 'margin-left:400px;color: #01345B; font-weight: 700'>Information of all visitors </h3><br/>";
						headingMake($result);
					} else {
						echo "<br><span style = 'color : red; margin-left:400px;'>No Entries to Display</span>";
					}
				}

				/* -----------------------------------DISPLAY ACTIVE VISITORS------------------------------------*/
				 else if (isset($_POST["search"]) && $_POST["search"] == "active") {
					if (empty($_POST["day_start"]) && empty($_POST["day_end"]) && empty($_POST["active"])) {

						$sql = "SELECT * FROM info_visitor WHERE Status = 'ONLINE'";
						$result = mysqli_query($link, $sql);
						$count = mysqli_num_rows($result);

						if ($count) {
							echo "<br><h3 style = 'margin-left:400px;color: #01345B; font-weight: 700'>Visitor Information for Active Visitors</h3><br/>";
							headingMake($result);
						} else {
							echo "<br><span style = 'color : red;margin-left:400px;'>No Entry Found !</span>";
						}
					} else {
						echo "<br><span style = 'color : red;margin-left:400px;'>select one at a time1.</span>";
					}
				}

				/*-------------------------DISPALYING SELECTED DATA--------------------------------------------------*/
				 else if (isset($_POST["search"]) && $_POST["search"] == "dates") {

					if (empty($_POST["dateP"]) || empty($_POST["dateF"]))
						echo "<br><br><span style = 'color : red;margin-left:400px;'>Select a valid option</p>";
					else {
						$datePF = $_POST['dateP'];
						$dateFP = $_POST['dateF'];
						$dateP = explode('-', $_POST['dateP']);
						$dateF = explode('-', $_POST['dateF']);
						/* Vriables used many times seperatly , 
	 						 * so can't use arrray now !! 
	 		                 * future Reminder  */
						$day_start = $dateP[2];
						$day_end = $dateF[2];
						$month_start = $dateP[1];
						$month_end = $dateF[1];
						$year_start = $dateP[0];
						$year_end = $dateF[0];
						$inputDate = array("$day_start", "$day_end", "$month_start", "$month_end", "$year_start", "$year_end");

						if ($day_end >= $day_start && $month_end >= $month_start && $year_end >= $year_start) {
							if ($day_start <= 31 && $day_end <= 31) {
								$sql = "SELECT * FROM info_visitor WHERE day >= '$day_start' AND day <= '$day_end' AND year >= '$year_start' 
                                AND year <= '$year_end' AND month >= '$month_start' AND month <='$month_end'";
								$result = mysqli_query($link, $sql);
								$count = mysqli_num_rows($result);
								if ($count) {

									if ($inputDate[0] == $inputDate[1])
										echo "<br><br><h3 style = 'margin-left:400px;color: #01345B; font-weight: 700'>Visitor Information for $inputDate[0]-$inputDate[2]-$inputDate[4]<br/></h3>";
									else
										echo "<br><br><h3 style = 'margin-left:400px;color: #01345B; font-weight: 700'>Visitor Information from $inputDate[0]-$inputDate[2]-$inputDate[4] to 
	                                    $inputDate[1]-$inputDate[3]-$inputDate[5] <br/></h3>";

									headingMake($result);
								} else {
									echo "<br><br><span style = 'color : red;margin-left:400px;'>No Match Found Sorry</span>";
								}
							} else {
								echo "<br><br><span style = 'color : red;margin-left:400px;'>Their are max 31 days in any month !</span>";
							}
						} else echo "<br><br><p style = 'color : red;margin-left:400px;'>select correct order, from past  to future !</p>";
					}
				}			
			}

			/*---------------------FUNCTIONS---------------------------------------------*/

			function echoDetails($row)
			{
				if ($row["TimeOUT"] == NULL) $row["TimeOUT"] = "Not Yet Logged out";
				echo "<tr><td>" . $row['Name'] . "</td><td>"
					. $row['Contact'] . "</td><td>"
					. $row["Purpose"] . "</td><td>"
					. $row["Date"] . "</td><td>"

					. $row["TimeIN"] . "</td><td>" . $row["TimeOUT"] . "</td><td>"
					. $row["Comment"] . "</td><td>"
					. $row["Status"] . "</td><td>"
					. $row["registeredBy"] . "</td></tr>";
			}
			function headingMake($res)
			{
				echo '<table class="table table-hover " style="margin-left:300px">
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
				<td>' . $result['ReceiptID'] . '</td>
				<td>' . $result['Name'] . '</td>
				<td>' . $result['Contact'] . '</td>
				<td>' . $result['TimeIN'] . '</td>
				<td>' . $result['Date'] . '</td>
				<td>' . $result['meetingTo'] . '</td>
				</tr>';
								}
							}
             ?>
					</div>
					</div>
					<script>
						function undisable() {
							document.getElementById("dateF").disabled = false;
							document.getElementById("dateP").disabled = false;
						}

						function disable() {
							document.getElementById("dateF").disabled = true;
							document.getElementById("dateP").disabled = true;
						}
					</script>
					<script type="text/javascript">
						var dateInput = document.getElementById('in1');
						var dateInput2 = document.getElementById('in2');

						if (dateInput.value != "" || dateInput2.value != "")
							document.getElementById('inputdate').removeAttribute("class");
					</script>
					<script type="text/javascript">
						function onDateInput() {
							var inputDateA = document.getElementById('in1').value;

							if (inputDateA)
								document.getElementById('in2').setAttribute('min', inputDateA);


						}
					</script>
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