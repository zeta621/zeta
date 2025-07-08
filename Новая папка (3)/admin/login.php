
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST['password'] === 'admin123') {
    $_SESSION['admin'] = true;
    header("Location: index.php");
    exit;
  } else {
    echo "Xato parol";
  }
}
?>
<form method="POST">
  <input type="password" name="password" placeholder="Parol">
  <button type="submit">Kirish</button>
</form>
