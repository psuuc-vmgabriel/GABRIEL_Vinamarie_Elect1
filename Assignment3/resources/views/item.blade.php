<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item</title>
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
    <h3 class="text-center mb-3">Item Details</h3>
    <form>
        <div class="mb-3">
            <label class="form-label">Item No:</label>
            <input type="text" class="form-control" value="{{ $itemNo }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Item Name:</label>
            <input type="text" class="form-control" value="{{ $name }}" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Price:</label>
            <input type="text" class="form-control" value="{{ $price }}" readonly>
        </div>
    </form>
</div>

</body>
</html>
