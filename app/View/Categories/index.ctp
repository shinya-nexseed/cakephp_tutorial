<h1>Blog categories</h1>
<p><?php echo $this->Html->link('Add Category', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- ここで$categories配列をループして、投稿情報を表示 -->

    <?php foreach ($categories as $category): ?>
    <tr>
        <td><?php echo $category['Category']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($category['Category']['name'], array('action' => 'view', $category['Category']['id']));?>
        </td>
        <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $category['Category']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $category['Category']['id'])); ?>
        </td>
        <td>
            <?php echo $category['Category']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
