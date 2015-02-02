<html>
<head>
	<title>Moules à Paëlla</title>

	<meta charset="UTF-8">

	<?= $this->Html->css("http://bootflat.github.io/css/site.min.css"); ?>
	<?= $this->Html->css("http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"); ?>
	<?= $this->Html->css("app.css"); ?>


	<?= $this->Html->script('jquery'); ?>
	<?= $this->Html->script('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'); ?>
	<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCauJIAiYa6sE6xrzxUhcUjWiGKF8d8BoY&libraries=drawing'); ?>
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