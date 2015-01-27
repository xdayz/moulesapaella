<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://bootflat.github.io/css/site.min.css">
	<?= $this->Html->css("app.css"); ?>
</head>
<body>

	<div class="col-xs-12">
		<div class="row">
			<div class="menu">

			</div>
		</div>
		
		<div class="container-fluid">
			<?php echo $this->fetch('content'); ?>
		</div>

	</div>

	
	<!-- <?php if($this->Session->read('Auth.User.username')){ ?>
		<div class="bottom col-xs-12">
			<a href="#" class="gros_menu col-xs-4">Item 1</a>
			<a href="#" class="gros_menu col-xs-4">Item 2</a>
			<a href="#" class="gros_menu col-xs-4">Item 3</a>
			<a href="#" class="gros_menu col-xs-4">Item 4</a>
			<a href="#" class="gros_menu col-xs-4">Item 5</a>
			<a href="#" class="gros_menu col-xs-4">Item 6</a>
		</div>
	<?php } ?> -->
</body>
</html>	