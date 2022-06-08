



<?php

include ('connect.php');


if(isset($_POST['submit'])){
    $Fullname=$_FILES['Fullname']['fname'];
    $Age=$_FILES['Age']['age'];
    $Gender=$_FILES['Gender']['gender'];
    $Course=$_FILES['Course']['course'];
    

   

    $sql= "INSERT into details (Fullname, Age, Gender, Course) VALUES ('$fname', '$age', '$gender', '$course')";
    $result= mysqli_query($conn,$sql);

    if($result){
        header("Location: index.php");
    }
    else{
        echo "Query Error".mysqli_error($conn);
    }

  
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h3>Details</h3>
    

    <div>
      <form action="index.php" method="post"  enctype="multipart/form-data">
        <label for="fname">Fullname</label>
        <input type="text" id="Fullname" name="fullname" placeholder="Your name.." value="fname">
    
        <label for="Age">Age</label>
        <input type="text" id="Age" name="age" placeholder="Your age.." value="age">


        <label for="Gender">Gender</label>
        <select name="gender" id="Gender" class="gender" value="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Rather not to say">Rather not say</option>
        </select>

        <label for="Course">Course</label>

        <select name="course of interest" id="Course" class="Course" value="course">
            <option value="DIT">DIT</option>
            <option value="Web Dev">Web Dev</option>
            <option value="Hiit">Hiit</option>

        </select>
      
        <input type="submit" value="submit">
      </form>
    </div>
</body>
</html>