<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title . " | " . $page_title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Quran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animations.css">
</head>
<body>

    <!-- Neon Border Effect -->
    <div class="neon-border top"></div>
    <div class="neon-border right"></div>
    <div class="neon-border bottom"></div>
    <div class="neon-border left"></div>

    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <span class="logo-text">عين الحق</span>
                    <span class="logo-text-en">Ai Fashions</span>
                </a>
            </div>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="<?php echo ($page_title == 'Home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo ($page_title == 'About') ? 'active' : ''; ?>">About</a></li>
                    <li><a href="products.php" class="<?php echo ($page_title == 'Products') ? 'active' : ''; ?>">Products</a></li>
                    <li><a href="gallery.php" class="<?php echo ($page_title == 'Gallery') ? 'active' : ''; ?>">Gallery</a></li>
                    <li><a href="contact.php" class="<?php echo ($page_title == 'Contact') ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
            
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="close-menu"><i class="fas fa-times"></i></div>
    </div>