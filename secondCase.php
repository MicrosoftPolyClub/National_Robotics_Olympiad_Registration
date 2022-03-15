<div class="col-12">
					<h2>Informations général : <h2>
					</div>
						<div class="col-6 col-12-xsmall">
							<h4>Nom du robot :</h4>
							<select name="robot_name1" id="robo_name">
								<option value="">--Please choose an option--</option>
								<?php 
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
								?>
								<option value="<?php echo $row["robot_name"];?>"><?php echo $row["robot_name"];?></option>
								<?php 
									}
								}
								?>
							</select>
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
						<input type="text" name="demo-leaderfullname" id="demo-leaderfullname" value="" placeholder="Chef d'équipe" />
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