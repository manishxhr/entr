<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
  <h1>update.php</h1>
     <?php

if(isset($_GET['id'])){
    $id = $_GET['id'];



        $query ="select * from `students` where `id`='$id'";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query failed".mysqli_error());
        
        }
        else{
            // print_r($result);
            $row = mysqli_fetch_assoc($result);

            // print_r($row);
                
            }

        }
    ?> 

<form>
    <?php
    if(isset($_POST['update_students'])){

        if(isset($_GET['id_new'])){
            $id_new = $_GET['id_new'];
        }

        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];

        $query= "update`students`set `firstName`= '$f_name' , `lastName`= '$l_name' , `age`= '$age' where `id`= '$id_new'";

        if(!$result){
            die("query failed".mysqli_error());
        
        }
        else
    {
        header('location:index.php?updatemsg=you have successfully updatedthe data.');
    }

    }

    ?>


<form action="updatepg.php?id_new=$id = <?php echo $id; ?>" method="post">

<div class="container1">
<input  class="inside" type="text"  name="id" placeholder="ID" value="<?php  echo $row['id'] ?>">
<input class="inside" type="text" name="f_name" placeholder="first name" value="<?php echo $row['firstName'] ?>">
<input class="inside" type="text" name="l_name" placeholder="last name" value="<?php  echo $row['lastName'] ?>">
<input class="inside" type="text" name="age" placeholder="AGE" value="<?php echo $row['age'] ?>">

</div>

<input class="btns" type="submit" name="add_students" value="UPDATE">
</form>




