<!DOCTYPE html>
<html>
<head>
    <title>Form Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Rent a Book</h2>
    <form method="post" action="<?php echo site_url('rent/processRent/' . $book['idbuku']); ?>">
        <div class="form-group">
            <label for="book_title">Book Title</label>
            <input type="text" name="book_title" id="book_title" class="form-control" value="<?php echo $book['judul']; ?>" readonly required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="date" name="duration" id="duration" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Rent Book</button>
    </form>
</body>
</html>
