<!-- Navbar -->
<nav class="navbar-section">
    <div class="nav-header">
        <a href="index.php">
            <img src="assets/unmul-logo.png" alt="Logo Universitas Mulawarman" width="50" height="50" />
        </a>

        <button id="btn-hamburger">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <menu class="navbar-list">
        <li class="navbar-item <?php echo isset($home) && $home ? 'nav-active' : '' ?> ">
            <a href="index.php">
                Beranda
            </a>
        </li>
        <li class="navbar-item <?php echo isset($lihat) && $lihat ? 'nav-active' : '' ?>">
            <a href="lihat_data.php">
                Lihat Data
            </a>
        </li>
        <li class="navbar-item <?php echo isset($about) && $about ? 'nav-active' : '' ?>">
            <a href="tentang_kami.php">
                Tentang Kami
            </a>
        </li>
    </menu>

    <a href="login.php" class="button">
        Login
    </a>
</nav>

<!-- sidebar -->
<nav class="sidebar-section">
    <div class="nav-header">
        <a href="index.php">
            <img src="assets/unmul-logo.png" alt="Logo Universitas Mulawarman" width="50" height="50" />
        </a>

        <button id="btn-close">
            <i class="fas fa-xmark"></i>
        </button>
    </div>

    <div class="sidebar-content">
        <menu class="sidebar-list">
            <li class="sidebar-item">
                <a href="index.php">
                    Beranda
                </a>
            </li>
            <li class="sidebar-item">
                <a href="lihat_data.php">
                    Lihat Data
                </a>
            </li>
            <li class="sidebar-item">
                <a href="tentang_kami.php">
                    Tentang Kami
                </a>
            </li>
        </menu>

        <a href="login.php" class="button">
            Login
        </a>
    </div>
</nav>

<div class="overlay"></div>