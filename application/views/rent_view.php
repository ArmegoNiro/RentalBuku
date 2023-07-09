<!DOCTYPE html>
<html>
<head>
    <title>Rent Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        form {
            display: inline-block;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        
        .out-of-stock {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Rental Book</h1>
    <table>
        <thead>
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo $book['idbuku']; ?></td>
                <td><?php echo $book['judul']; ?></td>
                <td><?php echo $book['penulis']; ?></td>
                <td><?php echo $book['penerbit']; ?></td>
                <td><?php echo $book['stok']; ?></td>
                <td>
                    <?php if ($book['stok'] > 0): ?>
                        <form action="<?php echo site_url('rent/processRent/' . $book['idbuku']); ?>" method="post">
                            <input type="hidden" name="book_id" value="<?php echo $book['idbuku']; ?>">
                            <input type="submit" name="rent_book" value="Rent">
                        </form>
                    <?php else: ?>
                        Out of Stock
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

