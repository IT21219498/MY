<?php
 include 'config.php';
?>


<?php


    $courses=$_POST['course'];
  
    echo $courses;
 
    $sql="SELECT * FROM courses WHERE course_ID=?;";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$courses);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        echo ("<table border='1'>");
        while($data=$stmt_result->fetch_assoc())
        {
           
                echo ("<tr>");
                echo ("<td>". $data['course_ID']. "</td>");
                echo ("<td>" . $data['DID'] . "</td>");
                echo ("<td>" . $data['course_name'] . "</td>");
                echo ("<td>" . $data['course_fee'] . "</td>");
                echo ("<td>" . $data['course_incharge'] . "</td>");
                echo ("<tr>");
            
           

        }
        echo ("</table>");
    }

    else
    { 
         echo "<script>alert('Invalid course ID')</script>";
    }
    
    mysqli_close($conn);
?>