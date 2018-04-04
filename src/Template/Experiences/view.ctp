<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience $experience
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Experience'), ['action' => 'edit', $experience->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Experience'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Experiences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experience'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="experiences view large-9 medium-8 columns content">
    <h3><?= h($experience->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($experience->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= h($experience->company) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($experience->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date In') ?></th>
            <td><?= h($experience->date_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Out') ?></th>
            <td><?= h($experience->date_out) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($experience->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($experience->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($experience->description)); ?>
    </div>
</div>
