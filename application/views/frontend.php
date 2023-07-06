<!DOCTYPE html>
<html>
<head>
    <title>Rental Buku</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</head>
<body>
    <header>
        <h1>Rental Buku</h1>
        <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo">
        <nav>
            <ul>
                <li><a href="<?php echo base_url('index.php/Rental'); ?>">Beranda</a></li>
                <li><a href="index.php/Rent" onclick="return confirmLogin();">Peminjaman</a></li>
            </ul>
        </nav>
    </header>

    <div class="login-container">
    <?php if ($this->session->userdata('username')): ?>
        <?php
        $username = $this->session->userdata('username');
        $avatarUrl = generateAvatarUrl($username);
        ?>
        <div class="user-section">
        <p>Welcome, <?php echo $this->session->userdata('username'); ?></p> 
            <a href="<?php echo site_url('index.php/Rental/logout'); ?>" class="logout-button">Logout</a>
        </div>
        <a href="<?php echo base_url('index.php/user/'); ?>" class="avatar-link">
            <img src="<?php echo $avatarUrl; ?>" alt="Avatar" class="avatar">
        </a>
    <?php else: ?>
        <div class="login-button">
            <a href="<?php echo base_url('index.php/user'); ?>">Sign In</a>
        </div>
    <?php endif; ?>
</div>

    <section id="featured-books">
        <?php foreach ($books as $book): ?>
            <div class="book">
                <img src="<?php echo base_url('assets/images/'.$book['image']); ?>" alt="<?php echo $book['title']; ?>">
                <h2><?php echo $book['title']; ?></h2>
                <p><?php echo $book['author']; ?></p>
                <p><?php echo $book['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Rental Buku</p>
    </footer>
    <script>
        function confirmLogin() {
            if ('<?php echo $this->session->userdata('username'); ?>' === '') {
                alert('You must log in to view this page.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
