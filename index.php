<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once 'includes/class-query.php';
    
    $posts_array = $query->all_posts();
    
    if (isset($_GET['p'])) {
        $post_single=$_GET['p'];
        $posts_array=$query->post($post_single);
    } 
?> 
    
<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php 
        if(empty($posts_array)){
            echo "<p>Post not found.</p>";
        } else {
        foreach ($posts_array as $post): ?>
    <div class="post">
        <h1>
            <?php echo $post->post_title;?>
        </h1>
        <p>
            <?php echo $post->post_content;?>
        </p>
    </div>
    <?php endforeach;}?>
    </body>
</html>