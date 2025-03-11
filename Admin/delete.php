<?php
include 'connection.php';
if(isset($_GEt['Del']))
{
    $delID=$_GET['del'];
    $query="delete from users where id='$delID'";
    $run=mysqli_query($conn,$query);
    if($run){
        echo "Deleted";
        header("Location:users.php");

    }
    else{
        echo "Not Deleted";
    }
}
?>