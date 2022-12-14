<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/online_gym/"
       class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="images/logo.png" alt="logo" width="42">
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/online_gym/index.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="/online_gym/about.php" class="nav-link px-2 link-dark">About</a></li>
    </ul>
    <div class="col-md-3">
        <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signModal">Sign-up</button>

        <?php require "loginModalWindow.php" ?>
        <?php require "signModalWindow.php" ?>
    </div>
</header>