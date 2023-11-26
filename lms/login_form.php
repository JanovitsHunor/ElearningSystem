			<form id="login_form1" class="form-signin" method="post">
						<h3 class="form-signin-heading"><i class="icon-lock"></i> Jelentkezz be!</h3>
						<input type="text" class="input-block-level" id="username" name="username" placeholder="Felhasználónév" required>
						<input type="password" class="input-block-level" id="password" name="password" placeholder="Jelszó" required>
						<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Bejelentkezés</button>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
														});
														</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
									$.jGrowl("Állomány betöltése, kérjük várjon......", { sticky: true });
									$.jGrowl("Üdvözöljük a GitBarmok LMS Felületén!", { header: 'Hozzáférés engedélyezve!' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
									}else if (html == 'true_student'){
										$.jGrowl("Üdvözöljük a GitBarmok LMS Felületén!", { header: 'Hozzáférés engedélyezve!' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'student_notification.php'  }, delay);  
									}else
									{
									$.jGrowl("Kérjük ellenőrizze újra beírt adatait!", { header: 'Hozzáférés megtagadva!' });
									}
									}
								});
								return false;
							});
						});
						</script>
			<div id="button_form" class="form-signin" >
			<h4 class = "center">Új vagy rendszerünk fedélzetén?</h4>
			<hr>
				<h3 class="form-signin-heading"><i class="icon-edit"></i> Regisztrálj itt!</h3>
				<button data-placement="top" title="Bejelentkezés hallgatóként" id="signin_student" onclick="window.location='signup_student.php'" id="btn_student" name="login" class="btn btn-info" type="submit">Hallgató</button>
				<div class="pull-right">
					<button data-placement="top" title="Bejelentkezés oktatóként" id="signin_teacher" onclick="window.location='signup_teacher.php'" name="login" class="btn btn-info" type="submit">Oktató</button>
				</div>
			</div>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_student').tooltip('show'); $('#signin_student').tooltip('hide');
														});
														</script>	
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_teacher').tooltip('show'); $('#signin_teacher').tooltip('hide');
														});
														</script>	