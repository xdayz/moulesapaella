<?= $this->Form->create('User', array("action" => "login")); ?>

	<?= $this->Form->input('username', array("label" => "Nom d'utilisateur")); ?>

	<?= $this->Form->input('password', array("label" => "Mot de passe")); ?>

	<?= $this->Form->submit("Se connecter"); ?>

<?= $this->Form->end(); ?>