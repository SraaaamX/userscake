<?php
?>
<ul>
    <?php foreach ($l as $p): ?>
        <li><?= $this->Html->link($p->firstname . ' ' . $p->lastname, ['action' => 'details', $p->id]) ?>
            <?= (!empty($p->bio)) ? $p->bio : 'Aucune biographie' ?>
            - <?= $p->birthdate ?>
        </li>
    <?php endforeach; ?>
</ul>