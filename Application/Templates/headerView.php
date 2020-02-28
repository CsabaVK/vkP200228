<header class="main-header">

    <a href="index.php" class="hdr-btn">Home</a>

    <?php if ( @!$_SESSION['userName']): ?>
        <a href="index.php?page=signUp" class="hdr-btn">Sign Up</a>
        <a href="index.php?page=signIp" class="hdr-btn">Sign In</a>
    <?php else: ?>
        <span class="hdr-btn hdr-usr"><?= $_SESSION['userName'] ?></span>
        <a href="index.php?page=logout" class="hdr-btn">Logout</a>
    <?php endif ?>

</header>