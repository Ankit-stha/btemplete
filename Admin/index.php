<?php
session_start();
?>
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

        <div class="container py-5 px-5 bg-info text-white my-5" style="max-width:500px;">
            <h2 class="text-center">Log into Cpanel</h2>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Username:</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
                </div>
                <div class="form-group py-3">
                    <label for="">Password:</label>
                    <input type="password" name="password" id="password" placeholder="password" class="form-control" required>
                </div>
                <div class="form-group py-3">
                    <button type="submit" name="submit" class="btn btn-success">Log In</button>
                    <button type="reset" name="cancel" class="btn btn-danger">Cancel</button>
                    <a href="signup.php" class="btn btn-success">Create New Account</a>

                </div>
            </form>
            <?php
            include 'connection.php';
            if(isset($_POST['submit']))
            {
                 $a=$_POST['username'];
                 $b=$_POST['password'];
                 $query="select * from users where username='$a' && password='$b'";
                 $run=mysqli_query($conn,$query);
                 if(mysqli_num_rows($run)>0){
                    echo $_SESSION['username']=$a;
                    header("location:main.php");
                    
                 }
                 else{
                    echo "Invalid user";
                 }
            }
            ?>
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
