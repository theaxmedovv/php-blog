<?php
$title = "Post";
require 'includes/header.php';
require "database.php";
$id = $_GET['id'];
?>


<?php $statement = $conn->prepare("SELECT * FROM posts WHERE id = ? ");
$statement->execute([$id]);
$post = $statement->fetch();
?>




<div class="container mt-5">
    <h3><?php echo $post['id'] ?></h3>
    <h1><?php echo $post['title'] ?></h1>
    <p class="fs-5 col-md-8"><?php echo $post['body'] ?></p>
</div>



<?php require 'includes/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>