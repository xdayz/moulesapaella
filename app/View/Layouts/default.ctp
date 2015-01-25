<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<?= $this->Html->css("app.css"); ?>
</head>
<body>

	<div class="col-lg-12">
		<div class="row">
			<div class="menu">

			</div>
		</div>
		
		<div class="container">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>	