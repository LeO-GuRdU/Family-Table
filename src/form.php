<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/form_styling.css">
    </head>
    <body>
        <div id="container">
        <div>
        <div>
        <form action="member_added.php" method="post">
            <div id="header">
            <h3>Add Family Member</h3>
            </div>

            <div id="btn_add">
            <a href="index.php">View Members</a>
            </div>

            <label for="fname">First Name</label>
            <input type="text" id="first_name" name="first_name" maxlength="80">
            <label for="fname">Last Name</label>
            <input type="text" id="last_name" name="last_name" maxlength="80">
            <label for="fname">Age</label>
            <input type="text" id="age" name="age" min = "1" max="100">
            <label for="fname">Gender</label>
            <select id="gender" name="gender">
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>
            <label for="relationship">Relationship</label>
            <input type="text" id="relationship" name="relationship" maxlength="80">

            <input type="submit" name="submit" value="ADD">            
        </form>
        </div>
        </div>
    </body>
</html>