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
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item text-dark fw-bold mb-3']) ?>
            <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'side-nav-item fw-bold mb-3']) ?>
            <?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->Category_Id], ['class' => 'side-nav-item fw-bold mb-3']) ?>
            <?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->Category_Id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->Category_Id), 'class' => 'side-nav-item fw-bold mb-3']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= __('Categories') ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($category->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category Id') ?></th>
                    <td><?= $this->Number->format($category->Category_Id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
