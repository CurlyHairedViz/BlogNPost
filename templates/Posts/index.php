<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Post> $posts
 */
?>
<div class="posts index content mb-5">
    <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h2 class="fw-bold text-uppercase"><?= __('Posts') ?></h2>
    <hr class="border border-danger border-2">

    <div class="row mt-3 mb-3">
        <?php foreach ($posts as $post):
            if($post){ ?>
                <div class="card p-0 mt-3 m-auto text-center col-lg-5 border-0">
                    <div class="card-img-top"> <?= @$this->Html->image($post->PostImg) ?> </div>
                    <div class="card-body m-0 p-0 ">
                        <div class="card-title fw-bold fs-1 p-3 mb-0 text-uppercase bg-dark text-light"><?= h($post->Title) ?></div>
                        <div class="card-text fs-2 p-4 bg-secondary text-light mb-0"><?= h($post->Content) ?></div>
                        <p class="card-text text-end pe-3 pb-3 h4 bg-secondary  mb-0 text-dark">Posted on: <?= h($post->Date) ?></p>
                        <div class="card-footer actions bg-dark">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $post->Id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->Id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->Id)]) ?>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div><p class="display-5">No Posts Found</p></div>
            <?php } endforeach; ?>
    </div>


</div>

