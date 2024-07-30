<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('insert_data.php'); ?>

<h1>this is form.php</h1>

<form action="insert_data.php " method="post">

<div class="container1">
<input  class="inside" type="text"  name="id" placeholder="ID">
<input class="inside" type="text" name="f_name" placeholder="first name">
<input class="inside" type="text" name="l_name" placeholder="last name">

<input class="inside" type="text" name="age" placeholder="AGE">





</div>

<input class="btns" type="submit" name="add_students" value="Submit">
</form>