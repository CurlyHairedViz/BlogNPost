<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column-responsive column-20">
        <div class="side-nav">
            <h3 class="heading fw-bold"><?= __('Actions') ?></h3>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item fw-bold']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post,['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php
                    echo $this->Form->control('Title');
                    echo $this->Form->control('Content');
                    echo $this->Form->control('Date');
                    echo $this->Form->control('PostImage', ['type' => 'file']);
//                    echo $this->Form->select('categories' , ['empty' => '(choose one)']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
