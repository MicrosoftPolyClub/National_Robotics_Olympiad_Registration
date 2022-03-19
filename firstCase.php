<?php    
    
    if (mysqli_num_rows($result2)===1) {
        while($row = $result2->fetch_assoc()) {
                            ?>
                        
							<div class="col-12">
							<h2>Informations général : <h2>
							</div>
								<div class="col-6 col-12-xsmall">
									<h4>Nom du robot :</h4>
									<select name="robot_name1" id="robo_name">
										<option value="">--Please choose an option--</option>
										<?php 
										if ($result->num_rows > 0) {
											while($row2 = $result->fetch_assoc()) {
												if ($row2["robot_name"] === $robot) {
													?>
													<option value="<?php echo $row2["robot_name"];?>" selected><?php echo $row2["robot_name"];?></option>
													<?php 
												}else{
										?>
										<option value="<?php echo $row2["robot_name"];?>"><?php echo $row2["robot_name"];?></option>
										<?php 
												}
											}
										}
										?>
									</select>
                                    <small style="color:bleu"><?php echo $row["payment"];?></small>
								</div>
							
							
							<div class="col-6 col-12-xsmall">
								<h4>Etablissement : </h4>
								<input type="text" name="demo-etablissement" id="demo-etablissement" value="<?php echo $row["etablissement"];?>" placeholder="Etablissement" require/>
							</div>
							
							<div class="col-12">
								<br>
							<h2>Informations du chef d'équipe : <h2>
							</div>
							
							<div class="col-6 col-12-xsmall">
								<h4>Nom et prénom chef d'équipe : </h4>
								<input type="text" name="demo-leaderfullname" id="demo-leaderfullname" value="<?php echo $row["leader_fullname"];?>" placeholder="Chef d'équipe" />
							</div>					
							<div class="col-6 col-12-xsmall">
								<h4>Email chef d'équipe : </h4>
								<input type="email" name="demo-leaderemail" id="demo-leaderemail" value="<?php echo $row["leader_email"];?>" placeholder="Email chef d'équipe" require/>
							</div>
							<div class="col-6 col-12-xsmall">
								<h4>Téléphone chef d'équipe : </h4>
								<input type="text" name="demo-leaderphone" id="demo-leaderphone" value="<?php echo $row["leader_phone"];?>" placeholder="Téléphone chef d'équipe" require/>
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
								<input type="text" name="demo-fullnamemember1" id="demo-fullnamemember1" value="<?php echo $row["member_fullname_2"];?>" placeholder="Nom et prénom membre" />
							</div>
							<div class="col-6 col-12-xsmall">
								<h4>Email de membre : </h4>
								<input type="email" name="demo-memberemail1" id="demo-memberoneemail1" value="<?php echo $row["member_email_2"];?>" placeholder="Email membre" />
							</div>
							<div class="col-6 col-12-xsmall">
								<h4>Téléphone membre : </h4>
								<input type="text" name="demo-phonemember1" id="demo-phonemember1" value="<?php echo $row["member_phone_2"];?>" placeholder="Téléphone membre" />
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
								<input type="text" name="demo-fullnamemember2" id="demo-fullnamemember2" value="<?php echo $row["member_fullname_3"];?>" placeholder="Nom et prénom membre" />
							</div>
							<div class="col-6 col-12-xsmall">
								<h4>Email de membre : </h4>
								<input type="email" name="demo-memberemail2" id="demo-memberoneemail2" value="<?php echo $row["member_email_3"];?>" placeholder="Email membre" />
							</div>
							<div class="col-6 col-12-xsmall">
								<h4>Téléphone membre : </h4>
								<input type="text" name="demo-phonemember2" id="demo-phonemember2" value="<?php echo $row["member_phone_3"];?>" placeholder="Téléphone membre" />
							</div>
						<?php
        }
    }elseif (mysqli_num_rows($result2)>1) {
        $row = $result2->fetch_assoc()
            ?>
            <div class="col-12">
            <h2>Informations général : <h2>
            </div>
                <div class="col-6 col-12-xsmall">
                    <h4>Nom du robot :</h4>
                    <select name="robot_name1" id="robo_name">
                        <option value="">--Please choose an option--</option>
                        <?php 
                        if ($result->num_rows > 0) {
                            while($row2 = $result->fetch_assoc()) {
                                if ($row2["robot_name"] === $robot) {
                                    ?>
                                    <option value="<?php echo $row2["robot_name"];?>" selected><?php echo $row2["robot_name"];?></option>
                                    <?php 
                                }else{
                        ?>
                        <option value="<?php echo $row2["robot_name"];?>"><?php echo $row2["robot_name"];?></option>
                        <?php 
                                }
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
                <select name="demo-leaderfullname" id="demo-leaderfullname">
                    <option value="">--Please choose an option--</option>
                    <?php 
                    $result3 = mysqli_query($conn,$sql2);
                    if ($result3->num_rows > 0) {
                        while($row3 = $result3->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $row3["leader_fullname"];?>"><?php echo $row3["leader_fullname"];?></option>
                    <?php 
                            
                        }
                    }
                    ?>
                </select>
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
        <?php
    }