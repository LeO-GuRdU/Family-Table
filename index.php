<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/table_styling.css">
    </head>
    <body>
        <div id="container">
        <div id="header">
            <h2>My Family table</h2>
        </div>
        <div id="btn_add">
            <a href="form.php">ADD</a>
        </div>
        <div id="content">
        <?php
            require_once('config.php');
            $sql = "SELECT MemberID,FirstName,LastName,Age,Gender,Relationship FROM FamilyMembers";
            $response = @mysqli_query($conn,$sql);
            if ($response){
                echo'<table>
                        <tr>
                            <th>Member ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Relationship</th>
                            <th>Delete</th>
                        </tr>';
                        while($row =mysqli_fetch_array($response)){
                            echo '<tr>
                            <td>'.$row['MemberID'].'</td>
                            <td>'.$row['FirstName'].'</td>
                            <td>'.$row['LastName'].'</td>
                            <td>'.$row['Age'].'</td>
                            <td>'.$row['Gender'].'</td>
                            <td>'.$row['Relationship'].'</td>
                            <td><div id="btn_del"><a href="delete.php?id='.$row['MemberID'].'">Del</a></div></td>
                        </tr>';
                        }
                        echo'</table>';
            }
            else{
                echo"Could not get a response from database".mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
    </body>
</html>