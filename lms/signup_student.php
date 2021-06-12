
<?php include('header.php'); ?>
<style>
	body {
    content: "";
    background-image: url(admin/images/index1.jpg);
     box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.3);
    position: absolute;
    top: 0;
    /* z-index: 1; */
    left: 0;
    width: 100%;
    height: 100%;
}
	
</style>
  <body id="login">
    <div class="container">
	<div class="row-fluid">
	<div class="span6">
		<div class="title_index">
				<?php include('title_index.php'); ?>
		</div>
	</div>
	<div class="span6">
		<div class="pull-right">
				<?php include('student_signin_form.php'); ?>
		</div>
	</div>
    </div>
	<div class="row-fluid">
		<div class="span12">
			<div class="index-footer">
				<?php include('link.php'); ?>
			</div>
		</div>
	</div>
		   <!-- /container -->
		<?php include('footer.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>