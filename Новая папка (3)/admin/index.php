
<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
$products = json_decode(file_get_contents("../data/products.json"), true);
?>
<h2>Admin Panel</h2>
<a href="logout.php">Chiqish</a>
<ul>
  <?php foreach($products as $p): ?>
    <li><?= $p['name'] ?> - <?= $p['price'] ?> so'm</li>
  <?php endforeach; ?>
</ul>
