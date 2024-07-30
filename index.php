<?php include('header.php'); ?>

<?php include('dbcon.php'); ?>

    
    
    <h2>LIST OF ALL STUDENTS-</h2>
    <table>
        <thead>

        <tr>

        <th>srno</th>
        <th>id</th>
        <th>first name</th>
        <th>last name</th>
        <th>age</th>
        <th>Update</th>
        <th>Delete</th>
        </tr>
        </thead>

        <tbody>

        <?php

        $query ="select * from students";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query failed".mysqli_error());
        
        }
        else{
            // print_r($result);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                         <td><?php echo $row['sno']; ?></td>
                         <td><?php echo $row['id']; ?></td>
                         <td><?php echo $row['firstName']; ?></td>
                         <td><?php echo $row['lastName']; ?></td>
                         <td><?php echo $row['age']; ?></td>
                         <td><a href="updatepg.php?id=<?php echo $row['id']; ?>" class="btn2" > Update</a></td>
                         <td><a href="deletepg.php?id=<?php echo $row['id']; ?>" class="btn2" > Delete</a></td>
                    </tr>
                <!-- <h3>fdjkfhdshfdhsf</h3> -->
                <?php
            }
            
        }
        ?>


            
            <!-- <tr>
                <td>3</td>
                <td>2403</td>
                <td>manish</td>
                <td>kataria</td>
                <td>25</td>
            </tr> -->
        </tbody>
    </table>

    <?php

      if(isset($_GET['message'])){
        echo"<h6>".$_GET['message']."  </h6>";
      }

      if(isset($_GET['insert_msg'])){
        echo"<h6>".$_GET['insert_msg']."  </h6>";
      }

      if(isset($_GET['deletemsg'])){
        echo"<h6>".$_GET['deletemsg']."  </h6>";
      }

    ?>

    <a href="form.php"><button id="btn"> Add Student</button></a>
    <a href="dltform.php"><button>delete student</button></a>
    
    <?php include('footer.php'); ?>
    <!-- <button type="button" id="btn">add new st</button> -->