<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .transaction-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px 40px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .transaction-icon {
            font-size: 50px;
            color: #4caf50;
            margin-bottom: 20px;
        }
        .transaction-message {
            font-size: 24px;
            color: #333333;
            margin-bottom: 10px;
        }
        .transaction-details {
            font-size: 16px;
            color: #666666;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="transaction-container">
        <div class="transaction-icon">✔️</div>
        <div class="transaction-message">Transaction Successful!</div>
        <div class="transaction-details">Your payment of <?php echo $_SESSION['price'] ?> has been processed.</div>
        <a href="index.php" class="btn">Contine Shopping</a>
    </div>

</body>
</html>
