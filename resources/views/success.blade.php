<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .success-message {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            text-align: center;
        }
        .success-message h2 {
            color: #28a745;
        }
        .btn-home {
            background: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }
        .btn-home:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="success-message">
    <h2>Booking Confirmed!</h2>
    <p>Your hotel booking was successful.</p>
    <a href="/" class="btn-home">Back to Home</a>
</div>

</body>
</html>
