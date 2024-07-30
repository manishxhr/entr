<?php
include'dbcon.php';


if(isset($_POST['add_students'])){
    // echo "pressed drerfefr";

$id=$_POST['id'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$age =$_POST['age'];




if($f_name== "" || empty($f_name) )
{

header('location:index.php?message=WARNING: fill the first name');


}

else
{
    $query = "insert into `students` ( `id` , `firstName` , `lastName`, `age`) values( '$id','$f_name','$l_name', '$age')";
    $result =mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED".mysqli_error());

    }
    else{
        header('location:index.php/insert_msg=YOUR DATA HAS BEEN ADDED SUCCESFULLY');
    }
}

}

