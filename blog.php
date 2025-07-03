<?php
$title = "Blog";
require 'includes/header.php';
require "database.php";

// Post yaratildi xabarini o'qish
if (isset($_SESSION["post-yaratildi"])) {
  $message = $_SESSION["post-yaratildi"];
  unset($_SESSION["post-yaratildi"]);
}

// Postni o'chirish
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["delete_post"])) {
  $post_id = (int) $_POST["post_id"];
  $statement = $conn->prepare("DELETE FROM posts WHERE id = ?");
  $statement->execute([$post_id]);
  header('Location: blog.php');
  $_SESSION['post-ochirildi'] = 'Post Muaffaqqiyatli o\'chirildi';
  exit;
}

// Postlarni olish
$statement = $conn->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll();
?>


<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Bizning Blog</h1>
      <p class="lead text-muted"> Eng yangi iPhone modellaridan tortib, foydali maslahatlar, texnologik yangiliklar va tajribali foydalanuvchilar sharhlarigacha — hammasi shu yerda. Blogimiz orqali siz iPhone olamida sodir bo‘layotgan eng so‘nggi voqealardan xabardor bo‘lasiz.</p>
      <p>
        <a href="post-create.php" class="btn btn-primary my-2">Post yaratish</a>
        <a href="#" class="btn btn-secondary my-2">Bo'sh Sahifa</a>
      </p>
    </div>
  </div>
</section>


<div class="album py-5 bg-light ">
  <div class="container">
    <?php if (isset($_SESSION["post-yaratildi"])): ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_SESSION["post-yaratildi"]; ?>
        <?php unset($_SESSION["post-yaratildi"]); ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION["post-ochirildi"])): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION["post-ochirildi"]; ?>
        <?php unset($_SESSION["post-ochirildi"]); ?>
      </div>
    <?php endif; ?>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($posts as $post) : ?>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>

            <div class="card-body">
              <a href="post.php?id=<?php echo $post['id']; ?>">
                <h5><?php echo htmlspecialchars($post['title']); ?></h5>
              </a>
              <p class="card-text"> <?php echo $post['body'];  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>

                  <form method="POST" action="" onsubmit="return confirm('Rostan ham o\'chirmoqchimisiz')">
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                    <input type="hidden" name="delete_post" value="1">
                    <button type="submit">Delete</button>
                  </form>
                </div>
              </div>
              <small> <?php echo $post['created_at']  ?> </small>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<?php require 'includes/footer.php' ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>