<?php
$conn = mysqli_connect("localhost","root","");

    $sqlcreatedb="CREATE DATABASE IF NOT EXISTS employeedb";

    if(mysqli_query($conn,$sqlcreatedb)){
        echo "DATABASE 'employeedb' successfully created<br>";
    }
    else{
        echo "Error in Creating Database".mysqli_error($conn)."<br>";
    }
    mysqli_select_db($conn,"employeedb");

    $sqlcreatetable = "CREATE TABLE IF NOT EXISTS employees(
        empid INT,
        name VARCHAR(30),
        section INT
    )";

if(mysqli_query($conn,$sqlcreatetable)){
    echo "Table 'employees' successfully created<br>";
}
else{
    echo "Error in Creating table".mysqli_error($conn)."<br>";
}

mysqli_close($conn);
?>

<html>
    <body>
    
    <form method="POST">
        <h1>Add Employee</h1>
        <label>Emp ID</label>
        <input type="text" name="id">
        <label>Emp Name</label>
        <input type="text" name="name">
        <label>Section</label>
        <input type="text" name="section">

        <input type="date" name="date"><br>
        
        <input type="submit" name="submit">
    </form>
<a href="emphome.php">back to home</a>

<?php
$conn = mysqli_connect("localhost","root","","employeedb");

if(!$conn){
    echo "Connection Error with database<br>".mysqli_connect_error();
}
else{
    echo "Connection Successful with database<br>"; 
}

if(isset($_POST['submit'])){
    $a=$_POST['id'];
    $b=$_POST['name'];
    $c=$_POST['section'];
    $d=$_POST['date'];

    $sql="INSERT INTO employees VALUES('$a','$b','$c','$d')";

    if(mysqli_query($conn,$sql)){
        echo "Employee Data Inserted";
    }
    else{
        echo "error : ".$sql."<br>".mysqli_error($conn);
    }
}
?>




      </body>
</html>