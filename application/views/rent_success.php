<!DOCTYPE html>
<html>
<head>
    <title>Rental Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        p {
            text-align: center;
            font-size: 18px;
        }
        
        .home-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .home-link a {
            text-decoration: none;
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    <h2>Rental Successful</h2>
    <p>Your rental request has been processed successfully.</p>
    
    <div class="home-link">
        <a href="<?php echo site_url('Rental'); ?>">Go back to Home</a>
    </div>
</body>
</html>