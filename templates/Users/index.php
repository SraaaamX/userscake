<?php
?>
<ul>
    <?php foreach ($l as $p): ?>
        <li><?= $this->Html->link($p->firstname . ' ' . $p->lastname, ['action' => 'details', $p->id]) ?>
            <?= (!empty($p->biography)) ? $p->biography : 'Aucune biographie' ?>
            - <?= $p->birthdate ? $p->birthdate->i18nFormat('dd/MM/yyyy') : 'Date inconnue' ?>
        </li>
    <?php endforeach; ?>
</ul>