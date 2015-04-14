<h1><?php echo h($category['Category']['name']); ?></h1>

<p><small>Created: <?php echo $category['Category']['created']; ?></small></p>

<?php foreach ($posts as $post): ?>
    <p><?php echo h($post['title']); ?></p>
    
<?php endforeach; ?>
