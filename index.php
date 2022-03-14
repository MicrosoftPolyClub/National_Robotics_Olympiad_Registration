<?php       
include "commun.php";                 
?>
<div id="main" >

<!-- Featured Post -->
	
		<header class="major" >
			<span class="date"><h2>Invités</h2></span>
		</header>
		<div id="wrapper" style="border-top:none;">
			<form method="post">
				<div class="row gtr-uniform">
					<div class="col-6 col-12-xsmall">
						<h4>Nom :</h4>
						<input type="text" name="demo-nom" id="demo-nom" value="" placeholder="Nom" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Prénom :</h4>
						<input type="text" name="demo-prenom" id="demo-prenom" value="" placeholder="Prénom" />
					</div>

					<div class="col-6 col-12-xsmall">
						<h4>Téléhone : </h4>
						<input type="text" name="demo-telephone" id="demo-telephone" value="" placeholder="Téléphone" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Email : </h4>
						<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
					</div>
					<div class="col-6 col-12-xsmall">
						<h4>Etablissement</h4>
						<input type="text" name="demo-etablissement" id="demo-name" value="" placeholder="Etablissement" />
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
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="polyrobots";
                // Connection DB
                $conn= new mysqli($servername,$username,$password,$dbname);
                // Test cnx
                if($conn->connect_error){
                    die("Cnx Failed : ".$conn->connect_error);
                }
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
                        echo "ok";
                    }else{
                        echo "<h2>Vérifier les champs </h2>" . $txt1 . "</h2>";
                        echo "Error: ". $sql . "<br>" . $conn->error;
                    }
                }
    ?>
</div>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
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