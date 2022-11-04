<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h3 class="heading fw-bold"><?= __('Actions') ?></h3>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item fw-bold text-dark mb-4']) ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->Category_Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->Category_Id), 'class' => 'side-nav-item fw-bold']
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <legend><?= __('Edit Category') ?></legend>
                <?php
                    echo $this->Form->control('Name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
