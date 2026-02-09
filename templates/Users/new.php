<?php
?>
<?= $this->Form->create($new) ?>
<h1>Ajouter un utilisateur</h1>
<?= $this->Form->control('firstname', ['label' => 'Prénom']) ?>
<?= $this->Form->control('lastname', ['label' => 'Nom']) ?>
<?= $this->Form->control('birthday', ['label' => 'Date de naissance', 'type' => 'date', 'empty' => true, 'required' => false]) ?>
<?= $this->Form->control('biography', ['label' => 'Biographie', 'type' => 'textarea', 'required' => false]) ?>
<?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>