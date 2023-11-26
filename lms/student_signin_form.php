			<form id="signin_student" class="form-signin" method="post">
			<h3 class="form-signin-heading"><i class="icon-lock"></i> Regisztrálj hallgatóként!</h3>
			<input type="text" class="input-block-level" id="username" name="username" placeholder="Hallgató ID" required>
			<input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Vezetéknév" required>
			<input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Keresztnév" required>
			<label>Csoport</label>
			<select name="class_id" class="input-block-level span5">
				<option></option>
				<?php
				$query = mysqli_query($conn,"select * from class order by class_name ")or die(mysqli_error());
				while($row = mysqli_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php
				}
				?>
			</select>
			<input type="password" class="input-block-level" id="password" name="password" placeholder="Jelszó" required>
			<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Jelszó megismétlése" required>
			<button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Regisztáció</button>
			</form>
			
		
			
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_student").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "student_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Üdvözlünk a GitBarmok LMS Felületén!", { header: 'Sikeres regisztráció!' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
						}else if(html=='false'){
							$.jGrowl("A hallgató nem található meg az adatbázisban! Kérjük ellenőrizze megadott adatait! ", { header: 'Hozzáférés megtagadva!' });
						}
						}
						
						
					});
			
					}else
						{
						$.jGrowl("A hallgató nem található meg az adatbázisban!", { header: 'Hozzáférés megtagadva!' });
						}
				});
			});
			</script>

			
		
			<a onclick="window.location='index.php'" id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Bejelentkezéshez lépj ide!</a>