<?php       
include "commun.php";  
include "dbconnection.php";                     
?>

				<!-- Nav -->
				<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Guest</a></li>
							<li><a href="terrain.php">Terrain</a></li>
							<li><a href="racing.php">Racing</a></li>
							<li><a href="somo.php">Somo</a></li>
							<li><a href="autonome.php">Autonome</a></li>
						</ul>
						
					</nav>
					<div id="main" >

<!-- Featured Post -->
	
		<header class="major" style="margin-bottom:-30px;">
			<span class="date"><h2>Invités</h2></span>
		</header>
		<div id="wrapper" style="border-top:none;padding-top: 1rem;">
			<form method="post" onload="remove()">
				<div class="row gtr-uniform">
					<div class="col-6 col-12-xsmall">
						<h4>Nom :</h4>
						<input type="text" name="demo-nom" id="demo-nom" value="" placeholder="Nom" require/>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Prénom :</h4>
						<input type="text" name="demo-prenom" id="demo-prenom" value="" placeholder="Prénom" require/>
					</div>

					<div class="col-6 col-12-xsmall">
						<h4>Téléhone : </h4>
						<input type="text" name="demo-telephone" id="demo-telephone" value="" placeholder="Téléphone" require/>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Email : </h4>
						<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" require/>
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Etablissement</h4>
						<input type="text" name="demo-etablissement" id="demo-name" value="" placeholder="Etablissement" require/>
					</div>
					<!-- Break -->
					<div class="col-12">
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
                    $name=$_POST['demo-prenom'];
                    $lastName=$_POST['demo-nom'];
                    $email=$_POST['demo-email'];
                    $phone=$_POST['demo-telephone'];
                    $etablissement=$_POST['demo-etablissement'];

                    $sql=" INSERT INTO guests (name,lastName,email,phone,etablissement)
	                VALUE ('$name', '$lastName', '$email', '$phone', '$etablissement')";

                    if($conn->query($sql)===TRUE)
                    {
						?>
                        <div id="toasts" style="border-top:none;"><div class="toast green" > Vous êtes enregistré </div></div>
						<?php
                    }else{
                        echo '<div id="toasts" style="border-top:none;"><div class="toast red" onload="setTimeout(()=>{
							this.remove();
						},3000);
						">Vérifier les champs</div></div>';
                        echo "Error: ". $sql . "<br>" . $conn->error;
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