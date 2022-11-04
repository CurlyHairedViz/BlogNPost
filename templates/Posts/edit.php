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
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item fw-bold text-dark mb-4']) ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->Id), 'class' => 'side-nav-item fw-bold']
            ) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts form content">
            <?= $this->Form->create($post,['type' => 'file']) ?>
            <fieldset>
                <legend class="text-dark text-center h1 fw-bold"><?= __('Edit Post') ?></legend>
                <?php
                    echo $this->Form->control('Title');
                    echo $this->Form->control('Content');
                    echo $this->Form->control('Date');
                    echo $this->Form->control('Image_update', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
