<h2><?php echo $title; ?></h2>

<?php foreach ($posts as $post): ?>

        <h3><?php echo $post['title']; ?></h3>
        <div class="main">
                <?php echo $post['text']; ?>
        </div>
        <p><a href="<?php echo site_url('blog/'.$post['slug']); ?>">View article</a></p>

<?php endforeach; ?>
