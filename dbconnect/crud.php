<?php
include_once 'data.php';
$result = mysqli_query($conn,"SELECT *FROM employee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="crud.css">
    <title>Document</title>
    
</head>
<body>
    <?php
    if (mysqli_num_rows($result)> 0) {
        ?>
        

<div class="insert-section">
        <h2>Insert New Employee</h2>
        <form action="insert.php" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="number" name="age" placeholder="Age">
            <input type="text" name="city" placeholder="City">
        
            <button type="submit">Insert</button>
        </form>
    </div>


    
        <table>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>age</td>
                <td>city</td>
                <td>action</td>
                <td>del</td>
            </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td><?php echo $row["city"]; ?></td>
                <td><a href="update.php?id=<?php echo $row["id"]; ?>">update</a></td>
                <td><a href="delete.php?id=<?php echo $row["id"]; ?>">delete</a></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    
        <?php

    }
    else{ echo "no result found" ;
    }
    ?>
</body>
</html>