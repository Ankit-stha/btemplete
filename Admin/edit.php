<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
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
        </header>
        <main>
            <h2 class="text-center fs-60">Update Users</h2>
            <hr>
            <div class="container" style="width: 600px;">
             <form action="edit_user.php" method="get">
                <div class="form-group">
                    <label for="">ID:</label>
                    <input type="text" name="id1" id="id1" class="form-control" value="<?php echo$_GET['id']; ?>">
                </div>
                <div class="form-group">
                    <label for="">First Name:</label>
                    <input type="text" name="fname1" id="fname1" class="form-control" value="<?php echo$_GET['fn']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Last Name:</label>
                    <input type="text" name="lname1" id="lname1" class="form-control" value="<?php echo$_GET['ln']; ?>">
                </div>
                <div class="form-group">
                    <label for ="">username:</label>
                    <input type="text" name="uname1" id="uname1" class="form-control" value="<?php echo$_GET['un']; ?>">
                </div>
                <div class="form-group">
                    <label for="">username:</label>
                    <input type="text" name="pw1" id="pw1" class="form-control" value="<?php echo$_GET['pw']; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
             
                
             </form>
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
