<?php include('header.php'); ?>
<?php include('api.php'); ?>

<h2 class="product-list">Posts</h2>
<div class="titles-product">
    <h2>Titel</h2>
    <h2>Content</h2>
</div>

<?php 
//GET request som hämtar posts från wordpress
$url = 'http://localhost/grupp-projekt/wp-json/wp/v2/posts';
$response = file_get_contents($url);
$posts = json_decode($response);

foreach ($posts as $post) {
    echo '<div class="post">';
    echo '<h2>' . $post->title->rendered . '</h2>';
    echo '<div class="content" style="width:400px; padding: 10px;">' . $post->content->rendered . '</div>';
    echo '</div>';
}
?>