<?php
$conn=mysqli_connect("localhost","root","","employeedb");

if(!$conn){
    echo "Connection Error with database<br>".mysqli_connect_error();
}
else{
    echo "Connection Successful with database<br>"; 
}
$sql = "SELECT * FROM employees";
$result = mysqli_query($conn,$sql);
?>


<html>

<body>

<div>
    <h2>Employee List</h2>

    <table border='1' cellpadding="10" cellspacing='0'>
        <tr>
            <th>Emp Id</th>
            <th>Name</th>
            <th>Section</th>
        </tr>

        <?php if($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['empid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['section']; ?></td>
            </tr>
            <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td>No EMployee DAta found</td>
                </tr>
                <?php endif; ?>
    </table>
    <a href="emphome.php">back to home</a>
</div>

</body>


</html>