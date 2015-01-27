<div class="col-xs-12">
	<?php //echo $this->Session->flash(); ?>

	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-primary">
			<div class="panel-heading">Créer une nouvelle zone</div>
				<div class="panel-body full-height">
				Ici une google maps pour créer ses zones
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="panel panel-primary">
			<div class="panel-heading">Liste des zones existantes</div>
				
			<ul class="list-group">
				<?php foreach($zonesList as $zone){ ?>
					<li class="list-group-item">
						<span class="badge"><?= count($zone['Points']); ?> points</span>
						<?= $zone['Zone']['name']; ?>
					</li>
				<?php } ?>
			</ul>
			
		</div>
	</div>
</div>