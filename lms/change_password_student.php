<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('change_password_sidebar_student.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
								$school_year_query_row = mysqli_fetch_array($school_year_query);
								$school_year = $school_year_query_row['school_year'];
								?>
								<li><a href="#"><b>Jelszó megváltoztatása</b></a><span class="divider">/</span></li>
								<li><a href="#">Tanév: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<div class="alert alert-info"><i class="icon-info-sign"></i> Kérjük töltse ki a megfelelő paramétereknél!</div>
								<?php
								$query = mysqli_query($conn,"select * from student where student_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>								
										
								    <form  method="post" id="change_password" class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Jelenlegi jelszó</label>
											<div class="controls">
											<input type="hidden" id="password" name="password" value="<?php echo $row['password']; ?>"  placeholder="Jelenlegi jelszó">
											<input type="password" id="current_password" name="current_password"  placeholder="Jelenlegi jelszó">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Új jelszó</label>
											<div class="controls">
											<input type="password" id="new_password" name="new_password" placeholder="Új jelszó">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Új jelszó megismétlése</label>
											<div class="controls">
											<input type="password" id="retype_password" name="retype_password" placeholder="Új jelszó">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn btn-info"><i class="icon-save"></i> Mentés</button>
											</div>
										</div>
									</form>
									
												<script>
			jQuery(document).ready(function(){
			jQuery("#change_password").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var current_password = jQuery('#current_password').val();
						var new_password = jQuery('#new_password').val();
						var retype_password = jQuery('#retype_password').val();
						if (password != current_password)
						{
						$.jGrowl("A beírt jelszavak nem megegyezőek!  ", { header: 'Jelszó megváltoztatása sikertelen!' });
						}else if  (new_password != retype_password){
						$.jGrowl("A beírt jelszavak nem megegyezőek!  ", { header: 'Jelszó megváltoztatása sikertelen!' });
						}else if ((password == current_password) && (new_password == retype_password)){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "update_password_student.php",
						data: formData,
						success: function(html){
					
						$.jGrowl("A jelszavad sikeresen megváltoztatva!", { header: 'Jelszó megváltoztatása sikeres!' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
						
						}
						
						
					});
			
					}
				});
			});
			</script>
										
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					

	

                </div>
	
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>