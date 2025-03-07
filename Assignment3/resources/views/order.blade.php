<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow: auto;
        }
        .card {
            width: 400px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }
        h3 {
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="card bg-white p-4">
        <h3 class="text-center mb-3">Order Information</h3>
        <form>
            <div class="mb-3">
                <label class="form-label">Customer ID:</label>
                <input type="text" class="form-control" value="{{ $customerId }}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" value="{{ $name }}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Order No:</label>
                <input type="text" class="form-control" value="{{ $orderNo }}" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <input type="text" class="form-control" value="{{ $date }}" readonly>
            </div>
        </form>
    </div>
</body>
</html>
