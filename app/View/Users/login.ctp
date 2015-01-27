<div class="connexion col-xs-6 col-xs-offset-3">
	<div class="jumbotron">
	  <div class="container">
	    <i class="fa fa-user"></i>
	    <h2>Connexion</h2>
	    <?php echo $this->Session->flash(); ?>
	    <div class="box">
		    <?= $this->Form->create('User', array("action" => "login")); ?>

				<?= $this->Form->input('username', array("label" => false, "placeholder" => "Nom d'utilisateur")); ?>

				<?= $this->Form->input('password', array("label" => false, "placeholder" => "Mot de passe")); ?>

				<?= $this->Form->submit("Se connecter", array("class" => "btn btn-info")); ?>

			<?= $this->Form->end(); ?>
	    </div>
	  </div>
	</div>
</div>