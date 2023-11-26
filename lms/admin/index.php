<?php include('header.php'); ?>
  <body id="login">
    <div class="container">

      <form id="login_form" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i><b> Kérjük jelentkezz be!</b></h3>
        <input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Felhasználónév" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Jelszó" required>
        <button name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-"></i> Belépés</button>

		      </form>
				<script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Üdvözöljük a GitBarmok LMS weboldalán!", { header: 'Hozzáférés engedélyezve!' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);
						}
						else
						{
						$.jGrowl("Kérjük ellenőrizze újra a megadott adatait!", { header: 'Hozzáférés megtagadva!' });
						}
						}

					});
					return false;
				});
			});
			</script>

		


    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>