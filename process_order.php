<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pizzaType = $_POST["pizza-type"];
    $pizzaTopping = $_POST["pizza-topping"];
    $quantity = $_POST["quantity"];

    // Prepare the email message
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New Pizza Order";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Pizza Type: $pizzaType\n";
    $message .= "Pizza Topping: $pizzaTopping\n";
    $message .= "Quantity: $quantity\n";

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Order submitted successfully!";
    } else {
        echo "Error sending the order. Please try again later.";
          }
}
?>