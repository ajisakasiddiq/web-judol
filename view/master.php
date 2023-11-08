<?php
$url = $_GET['url'] ?? '/mvc-dynamic';
if ($url === 'role') {
    $id = $_GET['id'] ?? 0;
    require_once 'controllers/role_controller.php';
    // RoleController::getRoles($id);
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web-Judol</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            header {
                background-color: #333;
            }

            .nav-bar {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            .nav-bar>li {
                float: left;
            }

            .nav-bar>li a {
                display: block;
                color: white;
                text-align: center;
                padding: 10px 16px;
                text-decoration: none;
            }

            .nav-bar>li a:hover {
                background-color: #111;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <?php require_once 'config/config.php' ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="item">Item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <div class="col-md-9 mt-3">
                <?= $header ?? '' ?>
                <?php include 'controller/main.php'; ?>
            </div>
        </div>
    </body>

    </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
}
?>