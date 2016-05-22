<h1>This is my blog</h1>
<p class="lead">You will find interested things on what I feel or like.</p>
<p><a href="/contact">Get in touch</a>, or <a href="/">back to the homepage.</a></p>
<hr/>
<?php if (empty($this->orderedFiles)) { ?>
<p style="text-align: center; margin-top: 60px;"><em>No blog posts for now...</em></p>
<?php } else {
    foreach ($this->orderedFiles as $date => $file) { ?>
        <h2><?php echo $file['name']; ?></h2>
        <p class="small">Written: <?php echo $file['date']; ?></p>
        <blockquote>
            <p><?php echo $file['content']; ?></p>
        </blockquote>
    <?php }
} ?>