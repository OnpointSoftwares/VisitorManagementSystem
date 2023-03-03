<?php 
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","vms");
$sql = mysqli_query($conn, "update bookings set approval=1,status='confirmed' where id='$id'");
if($sql)
{
    echo "Successful";
    header("location:receptionist.php?success=successful && page=bookings");
}
else
{
    echo "Failed";
    header("location:receptionist.php?page=bookings");
}