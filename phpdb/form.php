<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="input.php" method="post">
        <label for="fname">First Name:</label> <input type="text" name="fname" id="fname"> <br>
        <label for="lname">Last Name:</label> <input type="text" name="lname" id="lname"> <br>
        <label for="city">City:</label> <input type="text" name="city" id="city"> <br>
        <label for="groupid">Group ID</label>
        <select name="groupid" id="groupid">
            <option value="bbcap19">BBCAP 2019</option>
            <option value="bbcap20">BBCAP 2020</option>
            <option value="bbcap21">BBCAP 2021</option>
        </select>
        <input type="submit" value="Submit">
    </form>

</body>
</html>