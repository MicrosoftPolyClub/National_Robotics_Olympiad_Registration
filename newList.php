<?php
include "commun.php";
include "dbconnection.php";    

	$sql1 = "SELECT * FROM `autonome_v1` ORDER BY robot_name";
	$sql2 = " SELECT * FROM `racing_v1` ORDER BY robot_name";
	$sql3 = "SELECT * FROM `somo_v1` ORDER BY robot_name";
	$sql4 = "SELECT * FROM `terrain_v1` ORDER BY robot_name";
    $sql5 = "SELECT COUNT(*) as nb_auto FROM autonome_v1 ";
    $sql6 = "SELECT COUNT(*) as nb_rac FROM racing_v1 ";
    $sql7 = "SELECT COUNT(*) as nb_somo FROM somo_v1";
    $sql8 = "SELECT COUNT(*) as nb_terr FROM terrain_v1";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);
    $result5 = $conn->query($sql5);
    $result6 = $conn->query($sql6);
    $result7 = $conn->query($sql7);
    $result8 = $conn->query($sql8);
    $row1 = $result5->fetch_assoc();
    $row2 = $result6->fetch_assoc();
    $row3 = $result7->fetch_assoc();
    $row4 = $result8->fetch_assoc();

    $nb = intval($row1['nb_auto']) + intval($row2['nb_rac']) + intval($row3['nb_somo']) + intval($row4['nb_terr']);
?>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="oldList.php">Old list</a></li>
							<li class="active"><a href="newList.php">New list</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
					
								<header class="major">
									<h1>Number of teams <br> <?php echo $nb;?> </h1>
                                    
								</header>
                                <div id="wrapper" style="border-top:none;padding-top: 0.5rem;"   >
                                    <!-- Table -->
                                    <h2>Table</h2>
                                    <div class="table-wrapper">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Robot's Name</th>
                                                    <th>Leader Name</th>
                                                    <th>Member 1 Name</th>
                                                    <th>Member 2 Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td colspan=4 style="text-align: center;margin: 0;"><h3 style="margin: 0;">Autonome</h3></td>
                                            </tr> 
<?php
 if (mysqli_num_rows($result1)>0) {
    while($row = $result1->fetch_assoc()) {
?>
                                                <tr>
                                                    <td><?php echo $row["robot_name"];?></td>
                                                    <td><?php echo $row["leader_fullname"];?></td>
                                                    <td><?php echo $row["member_fullname_2"];?></td>
                                                    <td><?php echo $row["member_fullname_3"];?></td>
                                                </tr>
<?php
        }
    }
?>
<tr>
                                                <td colspan=4 style="text-align: center;"><h3 style="margin: 0;">Terrain</h3></td>
                                            </tr> 
<?php
 if (mysqli_num_rows($result4)>0) {
    while($row = $result4->fetch_assoc()) {
?>
                                                <tr>
                                                    <td><?php echo $row["robot_name"];?></td>
                                                    <td><?php echo $row["leader_fullname"];?></td>
                                                    <td><?php echo $row["member_fullname_2"];?></td>
                                                    <td><?php echo $row["member_fullname_3"];?></td>
                                                </tr>
<?php
        }
    }
?>
<tr>
                                                <td colspan=4 style="text-align: center;"><h3 style="margin: 0;">Racing</h3></td>
                                            </tr> 
<?php
 if (mysqli_num_rows($result2)>0) {
    while($row = $result2->fetch_assoc()) {
?>
                                                <tr>
                                                    <td><?php echo $row["robot_name"];?></td>
                                                    <td><?php echo $row["leader_fullname"];?></td>
                                                    <td><?php echo $row["member_fullname_2"];?></td>
                                                    <td><?php echo $row["member_fullname_3"];?></td>
                                                </tr>
<?php
        }
    }
?>
<tr>
                                                <td colspan=4 style="text-align: center;"><h3 style="margin: 0;">Somo</h3></td>
                                            </tr> 
<?php
 if (mysqli_num_rows($result3)>0) {
    while($row = $result3->fetch_assoc()) {
?>
                                                <tr>
                                                    <td><?php echo $row["robot_name"];?></td>
                                                    <td><?php echo $row["leader_fullname"];?></td>
                                                    <td><?php echo $row["member_fullname_2"];?></td>
                                                    <td><?php echo $row["member_fullname_3"];?></td>
                                                </tr>
<?php
        }
    }
?>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                               <!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>