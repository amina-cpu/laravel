<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .order-details {
            margin-bottom: 30px;
        }
        .order-details h3 {
            margin: 0;
        }
        .order-details p {
            margin: 5px 0;
        }
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Order Confirmation</h2>
            <p>Thank you for your order!</p>
        </div>

        <div class="order-details">
            <h3>Order Details</h3>
            <p><strong>Order Number:</strong> {{ $order->order_number }}</p>
            <p><strong>Name:</strong> {{ $order->customer_name }}</p>
            <p><strong>Phone:</strong> {{ $order->phone }}</p>
            <p><strong>Address:</strong> {{ $order->address }}</p>
            <p><strong>City:</strong> {{ $order->city }}</p>
            <p><strong>Province:</strong> {{ $order->province }}</p>
            <p><strong>Zip Code:</strong> {{ $order->zip_code }}</p>
        </div>

        <h3>Items in Your Order:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <h3>Total: ${{ number_format($order->total, 2) }}</h3>
        </div>
    </div>
</body>
</html>
