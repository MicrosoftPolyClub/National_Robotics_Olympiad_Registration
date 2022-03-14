<?php
include "commun.php";
include "dbconnection.php";       
?>

				<!-- Nav -->
				<nav id="nav">
						<ul class="links">
							<li><a href="index.php">Invités</a></li>
							<li><a href="terrain.php">Terrain</a></li>
							<li><a href="racing.php">Racing</a></li>
							<li><a href="somo.php">Somo</a></li>
							<li  class="active"><a href="autonome.php">Autonome</a></li>
						</ul>
					</nav>
				<!-- Main -->
					<div id="main">

					<header class="major" style="margin-bottom:-30px;" >
			<span class="date"><h2>Autonome</h2></span>
		</header>
		<div id="wrapper" style="border-top:none;padding-top: 0.5rem;">
			<form method="post">
				<div class="row gtr-uniform">
					<div class="col-12">
					<h2>Informations général : <h2>
					</div>
					
					<div class="col-6 col-12-xsmall">
						<h4>Nom du robot :</h4>
						<input type="text" name="demo-robotname" id="demo-robotname" value="" placeholder="Robot" require/>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Etablissement : </h4>
						<input type="text" name="demo-etablissement" id="demo-etablissement" value="" placeholder="Etablissement" require/>
					</div>
					<div class="col-12">
						<br>
					<h2>Informations du chef d'équipe : <h2>
					</div>
					
					<div class="col-6 col-12-xsmall">
						<h4>Nom et prénom chef d'équipe : </h4>
						<input type="text" name="demo-leaderfullname" id="demo-leaderfullname" value="" placeholder="Chef d'équipe" require/>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Email chef d'équipe : </h4>
						<input type="email" name="demo-leaderemail" id="demo-leaderemail" value="" placeholder="Email chef d'équipe" require/>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Téléphone chef d'équipe : </h4>
						<input type="text" name="demo-leaderphone" id="demo-leaderphone" value="" placeholder="Téléphone chef d'équipe" require/>
					</div>
					<div class="col-6 col-12-xsmall">
						<input type="hidden" />
					</div>
					<div class="col-12">
						<br>
					<h2>Informations membre 1 : <h2>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Nom et prénom de membre : </h4>
						<input type="text" name="demo-fullnamemember1" id="demo-fullnamemember1" value="" placeholder="Nom et prénom membre" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Email de membre : </h4>
						<input type="email" name="demo-memberemail1" id="demo-memberoneemail1" value="" placeholder="Email membre" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Téléphone membre : </h4>
						<input type="text" name="demo-phonemember1" id="demo-phonemember1" value="" placeholder="Téléphone membre" />
					</div>

					<div class="col-6 col-12-xsmall">
						<input type="hidden"/>
					</div>
					<div class="col-12">
						<br>
					<h2>Informations membre 2 : <h2>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Nom et prénom de membre : </h4>
						<input type="text" name="demo-fullnamemember2" id="demo-fullnamemember2" value="" placeholder="Nom et prénom membre" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Email de membre : </h4>
						<input type="email" name="demo-memberemail2" id="demo-memberoneemail2" value="" placeholder="Email membre" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Téléphone membre : </h4>
						<input type="text" name="demo-phonemember2" id="demo-phonemember2" value="" placeholder="Téléphone membre" />
					</div>
					
					<!-- Break -->
					<div class="col-12">
						
					<br>
						<ul class="actions">
							<li><input type="submit" value="Confirmer" class="primary" name="confirmation"/></li>
							<li><input type="reset" value="Reset" /></li>
						</ul>
					</div>
				</div>
			</form>
	</div>
	<?php
                // Insertion à la base de données
                if(isset($_POST['confirmation']))
                {
					$robot_name=$_POST['demo-robotname'];
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
							$sql=" INSERT INTO terrain_v1 (robot_name,etablissement,leader_fullname,leader_email,leader_phone,member_fullname_2,
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