<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('content_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Tartalom hozzáadása</a>
							<!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Tartalom szerkesztése</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="content.php"><i class="icon-arrow-left"></i> Visszalépés</a>
									   <?php
									   $query = mysqli_query($conn,"select * from content where content_id = '$get_id'")or die(mysqli_error());
									   $row = mysqli_fetch_array($query);
									   ?>
									   
									   <form class="form-horizontal" method="POST">
										<div class="control-group">
										<label class="control-label" for="inputEmail">Cím</label>
										<div class="controls">
										<input type="text" name="title" id="inputEmail" placeholder="Title" value="<?php echo $row['title']; ?>">
										</div>
										</div>
										
												<div class="control-group">
										<label class="control-label" for="inputPassword">Tartalom</label>
										<div class="controls">
												<textarea name="content" id="ckeditor_full">
												<?php echo $row['content']; ?>
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
										$title = $_POST['title'];
										$content = $_POST['content'];
										mysqli_query($conn,"update content set title = '$title' , content = '$content' where content_id = '$get_id'")or die(mysqli_error());
										?>
										<script>
										window.location = 'content.php';
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