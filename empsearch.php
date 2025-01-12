<?php
$conn=mysqli_connect("localhost","root","","employeedb");
$result ="";
if(!$conn){
    echo "Connection Error with database<br>".mysqli_connect_error();
}
else{
    echo "Connection Successful with database<br>"; 
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
$sql="SELECT * FROM employees WHERE name='$name'";
$result=mysqli_query($conn,$sql);
}

?>


<html>

<body>

<div>
    <h2>Search Employee</h2>
    <form method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
    <table border='1' cellpadding="10" cellspacing='0'>
        <tr>
            <th>Emp Id</th>
            <th>Name</th>
            <th>Section</th>
        </tr>

        <?php if($result && $result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['empid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['section']; ?></td>
            </tr>
            <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No EMployee DAta found</td>
                </tr>
                <?php endif; ?>
    </table>

    <a href="emphome.php">back to home</a>
</div>

</body>


</html>