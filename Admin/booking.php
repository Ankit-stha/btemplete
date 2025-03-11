<?php
SESSION_start();
if(!isset($_SESSION['username']))
{
    header('location:index.php');
}
else
{
?>
<!doctype html>
<html lang="en">
    <head>
        <title>main</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
             <nav
                class="navbar navbar-expand-sm navbar-dark bg-info"
             >
                <a class="navbar-brand" href="mai.php">dashboard</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                ></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0" >

                    </ul>
                    <div class="d-flex my-2 my-lh-0">
                        <i class="fa fa-user text-white fs-5 fw-b mx-3" aria-hidden="true"><?php echo $_SESSION['username']; ?></i>
                        <a href="logout.php">
                            <i class="fa fa-power-off text-white fs-5 fw-b mx-3" aria-hidden="true">Log out</i>
                        </a>

                    </div>
                    
                </div>
             </nav>
             
        </header>
        <main>
            <div class="container my-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-grid gap-3">
                            <a href="add-photo.php" class="btn btn-success">Add Photo</a>
                            <a href="add-posts.php" class="btn btn-success">Add Posts</a>
                            <a href="view-post.php" class="btn btn-success">View Posts</a>
                            <a href="booking.php" class="btn btn-warning">Bookings</a>
                            <a href="users.php" class="btn btn-success">All users</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h1>Welcome</h1>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php
}
?>
