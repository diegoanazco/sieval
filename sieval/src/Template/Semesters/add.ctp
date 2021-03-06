<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semester $semester
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Semesters'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Study Plans'), ['controller' => 'StudyPlans', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Study Plan'), ['controller' => 'StudyPlans', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Semesters'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Study Plans'), ['controller' => 'StudyPlans', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Study Plan'), ['controller' => 'StudyPlans', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($semester); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Semester']) ?></legend>
    <?php
    echo $this->Form->control('study_plans_id', ['options' => $studyPlans]);
    echo $this->Form->control('semesters_number');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
