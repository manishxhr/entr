<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>


<h1>this is delete page</h1>

<?php

if(isset($_get['id'])){
    $id = $_get['id'];


$query = "delete frpm `students` where `id`= '$id'";

$result = mysqli_query($connection, $query);

if(!$result){
    die("QUERY FAILED".mysqli_error());
}

else{
    header('location:index.php?deletemsg=YOU HAVE DELETED THID RECORD.');

    }


}
?>
