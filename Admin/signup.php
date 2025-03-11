<!doctype html>
<html lang="en">
    <head>
        <title>signup</title>
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
            <div class="container py-5 px-5 bg-info text-white my-5" style="max-width: 500px;">
                <h2 class="text-center">Signup fourm</h2>
                <hr>
                <form action="" method="post">
                    <div class="form-group py-3" >
                        <label for="">first Name</label>
                        <input type="text" name="fname" placeholder="firstname" class="form-control" required>
                    </div>
                    <div class="form-group py-3">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Lastname" class="form-control" required>
                    </div>
                   
                    <div class="form-group py-3">
                        <label for="">User Name</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="form-group py-3">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="password" class="form-control" required>
                    </div>
                    
                    <div class="form-group py-3">
                    <button type="submit" name="submit" class="btn btn-success">Signup</button>
                    <button type="reset" name="cancel" class="btn btn-danger">Cancel</button>
                    
                    

                </div>
                </form>
                <?php
                include 'connection.php';
                if(isset($_POST['submit']))
                {
                     $a=$_POST['fname'];
                     $b=$_POST['lname'];
                     $c=$_POST['username'];
                     $d=$_POST['password'];
                     $query="insert into users(firstname,lastname,username,password)values('$a','$b','$c','$d')";
                     $run=mysqli_query($conn,$query);
                     if($run)
                     {
                        //echo "signup successfull";
                        echo "<script>window.alert('sign up sucessfull!')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                     }
                     else
                     {
                        //echo "some error found!";
                        echo "<script>window.alert('some error found!')</script>";
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

        <scripte
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
