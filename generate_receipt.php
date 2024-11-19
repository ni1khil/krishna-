<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);
    $room_type = htmlspecialchars($_POST['room_type']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);
    $payment = htmlspecialchars($_POST['payment']);

    $total_price = "₹15000.00";

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Booking Receipt</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding: 20px;
                background-color: #f9f9f9;
            }
            .receipt {
                background: white;
                padding: 20px;
                border-radius: 10px;
                display: inline-block;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            .receipt h1 {
                color: #4CAF50;
            }
        </style>
    </head>
    <body>
        <div class='receipt'>
            <h1>Krishna Hotel</h1>
            <p><strong>Booking Receipt</strong></p>
            <p>Thank you for your booking, $name!</p>
            <p><strong>Contact:</strong> $contact</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Room Type:</strong> $room_type</p>
            <p><strong>Check-in:</strong> $checkin</p>
            <p><strong>Check-out:</strong> $checkout</p>
            <p><strong>Payment Method:</strong> $payment</p>
            <p><strong>Total Price:</strong> $total_price</p>
        </div>
    </body>
    </html>
    ";
}
?>
