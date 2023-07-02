<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php#services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php#buku">Daftar Buku</a>
        </li>
        <li class="nav-extra">
            <a class="nav-link" href="signin.php">Login</a>
        </li>
        <li class="nav-extra">
            <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
        <?php
        if (isset($_SESSION['login'])) {
            if ($_SESSION['username'] === 'admin') {
                echo '
                <li class="nav-extra">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                ';
            }
            echo '
            <li class="nav-extra">
                <a class="nav-link" href="signout.php">Sign Out</a>
            </li>
            ';
        }
        ?>
    </ul>
</nav>