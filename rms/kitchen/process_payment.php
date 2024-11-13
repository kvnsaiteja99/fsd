<?php 
session_start();
$conn = new mysqli('localhost', 'root', '', 'restaurant_billing_system');

if (isset($_POST['process_payment'])) {
    $order_id = $_POST['order_id'];

    // Update the order status to "Ready for Payment"
    $conn->query("UPDATE orders SET payment_status = 'Ready for Payment' WHERE id = $order_id");

    header("Location: kitchen_dashboard.php?message=Payment processed successfully.");
    exit();
}
?>