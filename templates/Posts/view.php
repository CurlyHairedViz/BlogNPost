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
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item text-dark fw-bold mb-4']) ?>
            <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'side-nav-item fw-bold  mb-4']) ?>
            <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->Id], ['class' => 'side-nav-item fw-bold mb-4']) ?>
            <?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->Id), 'class' => 'side-nav-item fw-bold']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts view content">
            <h2 class="text-center fw-bold">POST</h2>
            <table>
                <tr>
                    <th><?= __('Post Image') ?></th>
                    <td> <?= @$this->Html->image($post->PostImg, ['class' => 'w-75']) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($post->Id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($post->Title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($post->Content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($post->Date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
