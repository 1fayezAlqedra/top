<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (v5.3 via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Home Page</title>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href=<?php echo route ('test.home') ?>>Test Wepsite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto" >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=<?php echo route ('test.home') ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo route ('test.home') ?>>Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo route ('test.home') ?>>Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href=<?php echo route ('test.home') ?> role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href=<?php echo route ('test.home') ?>>Action</a></li>
                            <li><a class="dropdown-item" href=<?php echo route ('test.home') ?>>Another action</a></li>
                            <li><a class="dropdown-item" href=<?php echo route ('test.home') ?>>Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mt-5">
        <h1 class="text-primary">Hello, Bootstrap Starter!</h1>
        <p class="lead">This is a simple starter template using Bootstrap 5.</p>
    </div>

    <!-- Bootstrap JS (with Popper included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
