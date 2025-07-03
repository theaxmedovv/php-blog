<?php
$title = "post-create";
require 'includes/header.php';
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $titleInput = trim($_POST['title']);
  $body = trim($_POST['body']);
}
if (!empty($titleInput) && !empty($body)) {
  $statement = $conn->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");
  $statement->execute([
    'title' => $titleInput,
    'body' => $body
  ]);
  header("Location: blog.php");
  $_SESSION['post-yaratildi'] = "Post Muvaffaqqyatli yaratildi.";
}
?>

<div class="container py-4">
  <header class="pb-3 mb-4 border-bottom">
    <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
      <!-- SVG logo -->
      <span class="fs-4">Post Yaratish</span>
    </a>
  </header>

  <div class="p-5 mb-4 bg-light rounded-3">
    <form method="POST" action="" class="container-fluid py-5">
      <div class="mb-3">
        <label class="form-label">Sarlavha</label>
        <input name="title" type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Matn</label>
        <textarea name="body" class="form-control" rows="3"></textarea>
      </div>
      <button class="btn btn-primary" type="submit">Saqlash</button>
    </form>
  </div>
</div>

<?php require 'includes/footer.php'; ?>