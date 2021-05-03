<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <div id="header">
        <h2>Family member deleted</h2>
    </div>
    <div id="btn_add">
        <a href="index.php">View Members</a>
    </div>
    <?php
        require_once('config.php');
        $id = $_GET["id"];
        $sql = "DELETE FROM FamilyMembers WHERE MemberId = $id";
        mysqli_query($conn,$sql);
    ?>
    <p>Se va a eliminar el miembro: <?php echo $_GET["id"]; ?></p>

</body>
</html>