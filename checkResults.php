<?php
 include 'config.php';
?>


<?php


    $empId=$_POST['empId'];
  
    echo $empId;
 
    $sql="SELECT * FROM results WHERE user_ID=?;";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$empId);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        echo ("<table border='1'>");
        while($data=$stmt_result->fetch_assoc())
        {
           
                echo ("<tr>");
                echo ("<td>". $data['user_ID']. "</td>");
                echo ("<td>" . $data['exam_ID'] . "</td>");
                echo ("<td>" . $data['grade'] . "</td>");
                echo ("<td>" . $data['marks'] . "</td>");
                echo ("<td>" . $data['panel_ID'] . "</td>");
                echo ("<tr>");
            
           

        }
        echo ("</table>");
    }

    else
    { 
         echo "<script>alert('Invalid username')</script>";
    }
    
    mysqli_close($conn);
?>