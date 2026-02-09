<?php
?>
<h1>
    <?= $p->firstname ?> <?= $p->lastname ?>
</h1>
<?php if (!empty($p->biography)): ?>
    <p>
        <?= $p->biography ?>
    </p>
<?php endif; ?>

<p>
    Né(e) le :
    <?= $p->birthdate ? $p->birthdate->i18nFormat('dd/MM/yyyy') : 'Inconnue' ?>
</p>

<p>
    <?= $this->Html->link('Modifier', ['action' => 'edit', $p->id]) ?>
</p>

<p>
    <?= $this->Form->postlink('Supprimer', ['action' => 'delete', $p->id], ['method' => 'delete', 'confirm' => __('Voulez-vous vraiment supprimer {0} ? Pas de retour en arrière possible !', $p->firstname . ' ' . $p->lastname)]) ?>
</p>