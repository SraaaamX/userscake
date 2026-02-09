<?php
?>
<ul>
    <?php foreach ($l as $p): ?>
        <li><?= $this->Html->link($p->firstname . ' ' . $p->lastname, ['action' => 'details', $p->id]) ?>
            <?= (!empty($p->biography)) ? $p->biography : 'Aucune biographie' ?>
            - <?= $p->birthday ? $p->birthday->i18nFormat('dd/MM/yyyy') : 'Date inconnue' ?>
        </li>
    <?php endforeach; ?>
</ul>