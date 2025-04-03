<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .booking-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }
        .booking-form h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }
        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px;
        }
        .btn-primary {
            background: #d4af37;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .btn-danger {
            background: #ffffff;
            border: none;
            padding: 12px;
            font-size: 16px;
            color: #333;
            border-radius: 8px;
            margin-top: 10px;
        }

    </style>
</head>
<body>

<div class="booking-form">
    <h2>Hotel Booking Form</h2>
    <form action="submit_booking.php" method="POST">

        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="checkin" class="form-label">Check-in Date</label>
                <input type="date" class="form-control" id="checkin" name="checkin" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="checkout" class="form-label">Check-out Date</label>
                <input type="date" class="form-control" id="checkout" name="checkout" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="roomType" class="form-label">Room Type</label>
            <select class="form-select" id="roomType" name="roomType" required>
                <option value="">Select a Room</option>
                <option value="single">Single Room</option>
                <option value="double">Double Room</option>
                <option value="suite">Suite</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="guests" class="form-label">Number of Guests</label>
            <input type="number" class="form-control" id="guests" name="guests" min="1" required>
        </div>

        <div class="mb-3">
            <label for="requests" class="form-label">Special Requests</label>
            <textarea class="form-control" id="requests" name="requests" rows="3"></textarea>
        </div>

      <a href="/success" class="btn btn-primary w-100">Book Now</a>
        <a href="/" class="btn btn-danger w-100">Cancel</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
