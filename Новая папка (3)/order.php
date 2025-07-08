
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $order = [
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],
    'time' => date('Y-m-d H:i:s')
  ];
  $orders = json_decode(file_get_contents('data/orders.json'), true);
  $orders[] = $order;
  file_put_contents('data/orders.json', json_encode($orders, JSON_PRETTY_PRINT));
  echo "Buyurtma qabul qilindi!";
}
?>
