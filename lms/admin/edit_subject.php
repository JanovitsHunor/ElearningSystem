<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									 <a href="add_subject.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Tantárgy hozzáadása</a>
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Tantárgy szerkesztése</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="subjects.php"><i class="icon-arrow-left"></i> Visszalépés</a>
									
									<?php
									$query = mysqli_query($conn,"select * from subject where subject_id = '$get_id'")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>
									
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Tantárgy azonosító</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['subject_code']; ?>" name="subject_code" id="inputEmail" placeholder="Azonosító">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Tantárgy címe</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['subject_title']; ?>" class="span8" name="title" id="inputPassword" placeholder="Cím" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Egységek száma</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['unit']; ?>" class="span1" name="unit" id="inputPassword" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Leírás</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full">
													<?php echo $row['description']; ?>
													</textarea>
											</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Frissítés</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['update'])){
										$subject_code = $_POST['subject_code'];
										$title = $_POST['title'];
										$unit = $_POST['unit'];
										$description = $_POST['description'];
										
										
									
										mysqli_query($conn,"update subject set subject_code = '$subject_code' ,
																		subject_title = '$title',
																		unit  = '$unit',
																		description = '$description'
																		where subject_id = '$get_id' ")or die(mysqli_error());
																		
										mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Subject $subject_code')")or die(mysqli_error());
										
										?>
										<script>
										window.location = "subjects.php";
										</script>
										<?php
										}
										
										
										?>
									
								
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