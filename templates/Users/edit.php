<?php
?>
<?= $this->Form->create($p) ?>
<h1>Modifier un utilisateur</h1>
<?= $this->Form->control('firstname', ['label' => 'Prénom']) ?>
<?= $this->Form->control('lastname', ['label' => 'Nom']) ?>
<?= $this->Form->control('birthdate', ['label' => 'Date de naissance', 'type' => 'date', 'empty' => true]) ?>
<?= $this->Form->control('bio', ['label' => 'Biographie', 'type' => 'textarea', 'empty' => true]) ?>
<?= $this->Form->button('Modifer') ?>
<?= $this->Form->end() ?>