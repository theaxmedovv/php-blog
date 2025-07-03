<?php
$title = "post-edit";
require 'includes/header.php';
require 'database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Ma'lumotni olish
$statement = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);
$post = $statement->fetch();

// Post topilmagan bo‘lsa
if (!$post) {
    echo "<div class='container mt-5'><div class='alert alert-danger'>Post topilmadi!</div></div>";
    require 'includes/footer.php';
    exit;
}

// Yangilash
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $body = trim($_POST['body']);

    if ($title && $body) {
        $update = $conn->prepare("UPDATE posts SET title = ?, body = ? WHERE id = ?");
        $update->execute([$title, $body, $id]);

        $_SESSION['post-yaratildi'] = "Post yangilandi.";
        header("Location: blog.php");
        exit;
    }
}
?>

<div class="container mt-5">
    <h3>Postni Tahrirlash</h3>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Sarlavha</label>
            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($post['title']) ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Matn</label>
            <textarea name="body" rows="4" class="form-control"><?= htmlspecialchars($post['body']) ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Yangilash</button>
    </form>
</div>

<?php require 'includes/footer.php'; ?>