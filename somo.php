<?php
include "commun.php";
include "dbconnection.php";  
	$sql1 = "SELECT * FROM `somo`";
    $result = $conn->query($sql1);     
?>

				<!-- Nav -->
				<nav id="nav">
						<ul class="links">
							<li><a href="index.php">Invités</a></li>
							<li><a href="terrain.php">Terrain</a></li>
							<li><a href="racing.php">Racing</a></li>
							<li class="active"><a href="somo.php">Somo</a></li>
							<li><a href="autonome.php">Autonome</a></li>
						</ul>
					</nav>
				<!-- Main -->
					<div id="main">

					<header class="major" style="margin-bottom:-30px;" >
			<span class="date"><h2>Somo</h2></span>
		</header>
		<div id="wrapper" style="border-top:none;padding-top: 0.5rem;">
			<form method="post">
				<div class="row gtr-uniform">
					<?php
						if(isset($_POST['chercher']) && !empty($_POST['robot_name1']) &&  empty($_POST['demo-leaderfullname'])){	
							$robot=$_POST['robot_name1'];
							$sql2="SELECT * FROM `somo` WHERE robot_name = '".$_POST['robot_name1']."'";
							$result2 = mysqli_query($conn,$sql2);
							include "firstCase.php"; 
						}
						elseif (isset($_POST['chercher']) && !empty($_POST['robot_name1']) &&  !empty($_POST['demo-leaderfullname'])) {
							$robot=$_POST['robot_name1'];
							$sql2="SELECT * FROM `somo` WHERE robot_name = '".$_POST['robot_name1']."' and leader_fullname='".$_POST['demo-leaderfullname']."'";
							$result2 = mysqli_query($conn,$sql2);
							if (mysqli_num_rows($result2)>0) {
								while($row = $result2->fetch_assoc()) {
								include "thirdCase.php";  
								}
							}
						}else{
								include "secondCase.php"; 
						} 
					?>
					<!-- Break -->
					<div class="col-12">
						<br>
						<ul class="actions">
							<li><input type="submit" value="Confirmer" class="primary" name="confirmation"/></li>
							<li><input type="submit" value="chercher" name="chercher"/></li>
							<li><input type="reset" value="Reset" class="primary"/></li>
						</ul>
					</div>
				</div>
			</form>
	</div>
	<?php
                // Insertion à la base de données
                if(isset($_POST['confirmation']))
                {
                    $robot_name=$_POST['robot_name1'];
                    $etablissement=$_POST['demo-etablissement'];
                    
					$leader_fullname=$_POST['demo-leaderfullname'];
                    $leader_email=$_POST['demo-leaderemail'];
                    $leader_phone=$_POST['demo-leaderphone'];

                    $member_fullname_2=$_POST['demo-fullnamemember1'];
					$member_email_2=$_POST['demo-memberemail1'];
					$member_phone_2=$_POST['demo-phonemember1'];

					$member_fullname_3=$_POST['demo-fullnamemember2'];
					$member_email_3=$_POST['demo-memberemail2'];
					$member_phone_3=$_POST['demo-phonemember2'];
					

					if (!empty($robot_name) && !empty($etablissement) && !empty($leader_fullname) && !empty($leader_email) && !empty($leader_phone)
					&& preg_match("/^[0-9]*$/",$leader_phone) && strlen($leader_phone)== 8 ) {
						if (!empty($member_fullname_2) && (empty($member_email_2) || empty($member_phone_2) || !preg_match("/^[0-9]*$/",$member_phone_2) || !strlen($member_phone_2)== 8)) {
							echo '<div id="toasts" style="border-top:none;"><div class="toast red">Vérifier les champs</div></div>';
						}else if (!empty($member_fullname_3) && (empty($member_email_3) || empty($member_phone_3) || !preg_match("/^[0-9]*$/",$member_phone_3) || !strlen($member_phone_3)== 8)) {
							echo '<div id="toasts" style="border-top:none;"><div class="toast red">Vérifier les champs</div></div>';
						}else{
							$sql=" INSERT INTO somo_v1 (robot_name,etablissement,leader_fullname,leader_email,leader_phone,member_fullname_2,
							member_email_2,member_phone_2,member_fullname_3,member_email_3,member_phone_3)VALUE ('$robot_name', '$etablissement', 
							'$leader_fullname', '$leader_email', '$leader_phone','$member_fullname_2', '$member_email_2', '$member_phone_2',
							'$member_fullname_3','$member_email_3','$member_phone_3')";

						if($conn->query($sql)===TRUE)
						{
							?>
							<div id="toasts" style="border-top:none;"><div class="toast green" > Vous êtes enregistré </div></div>
							<?php
						}
						else{
							?>
							<div id="toasts" style="border-top:none;"><div class="toast red" > Error: <?php echo $conn->error; ?> </div></div>
							<?php
						}}
					}else{
                        echo '<div id="toasts" style="border-top:none;"><div class="toast red">Vérifier les champs</div></div>';
                    }
                }
    ?>
					</div>
	
				<!-- Copyright -->
				<div id="copyright">
						<ul><li>&copy; Microsoft Polytechnique Club</li></ul>
				</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function remove(){
					const toast = document.querySelector('.toast');
					setTimeout(()=>{
						toast.remove();
					},3000)
				}
				remove()
			</script>

	</body>
</html>