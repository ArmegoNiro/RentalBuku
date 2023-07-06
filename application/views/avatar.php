<!-- avatar.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Avatar</title>
    <style>
        .avatar {
            border: 2px solid green;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php if (!empty($avatarUrl)): ?>
        <img src="<?php echo $avatarUrl; ?>" alt="Avatar" class="avatar">
    <?php else: ?>
        <!-- Placeholder image or alternative content for no avatar -->
        <img src="placeholder.png" alt="No Avatar" class="avatar">
    <?php endif; ?>
</body>
</html>
