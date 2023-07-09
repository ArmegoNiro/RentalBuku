<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .container h1 {
            text-align: center;
        }
        
        .container form {
            margin-top: 20px;
        }
        
        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .container .error-message {
            display: none;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="error-message"><?php echo $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('success')): ?>
        <div class="success-message"><?php echo $this->session->flashdata('success'); ?></div>
        <?php endif; ?>

        <form action="<?php echo base_url('index.php/user/authenticate'); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Sign In">
        </form>
        <div class="home-button">
        <a href="<?php echo site_url('Rental'); ?>">Kembali ke Beranda</a>
        </div>
        <div class="register-button">
        <a href="<?php echo site_url('register'); ?>">Haven't have an account yet? Register here</a>
        </div>
        <script>
            // Check if the error message is not empty, then show it
            var errorMessage = document.querySelector('.error-message');
            if (errorMessage && errorMessage.textContent.trim() !== '') {
                errorMessage.style.display = 'block';
            }
             // Check if the success message is not empty, then show it
        var successMessage = document.querySelector('.success-message');
        if (successMessage && successMessage.textContent.trim() !== '') {
            successMessage.style.display = 'block';
        }
        </script>
    </div>
</body>
</html>

