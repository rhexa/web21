<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        h1 {
            font-size: 24px;
        }
    </style>
</head>
<body>

<h1>1. Write a PHP script to get the PHP configuration information.</h1>
uncomment the code <br>
<!-- <?php phpinfo();?> -->

<h1>2. Write a simple PHP script to print your information (Name and your groupid).</h1>
<?php
$name="Rachmad Fauzan";
$groupId="BBCAP20";
echo "Name: $name<br>";
echo "Group ID: $groupId <br>";
?>

<h1>3. Write PHP code to display the following message <br> Hello world ! My name is "David"</h1>
<?php
echo "Hello world! My name is \"David\" <br>";
?>

<h1>4. Write PHP code to display the following paragraph.</h1>
<?php
echo "It is possible to place variables inside of double-quoted strings (e.g. \"string here and a \$variable\"). <b>By putting a variable</b> inside the quotes (\" \") you are telling PHP that you want it to grab the string value of that variable and use it in the string. The example below shows an example of this feature. <br>";
?>

<h1>5. Use two constants to assign your first name and last name. Print to get the following output. <br>
My first name is firstname and last name is lastname.</h1>
<?php
define("firstName", "Rachmad");
define("lastName", "Fauzan");
echo "My First name is ";
echo firstName;
echo " and last name is ";
echo lastName;
echo "<br>";
?>

<h1>6. In one of your HTML page, write the PHP code to display date. </h1>
<?php
echo date("d m Y");
echo "<br>";
?>

<h1>7. $title = "PHP is interesting". <br> Put this variable as a title that is marked as h1 (heading 1) in your HTML document.</h1>
<?php
$title = "PHP is interesting";
?>
<title><?php echo $title; ?></title> <!-- this one for <head> title -->
<h1><?php echo $title; ?></h1> <!-- this one for article's title -->

<h1>8. $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade.</h1>
<?php
$g1=5;
$g2=4;
$g3=5
?>
<table>
    <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Pekka</td>
        <td><?php echo "$g1"; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Johanna</td>
        <td><?php echo "$g2"; ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>John</td>
        <td><?php echo "$g3"; ?></td>
    </tr>
</table>

</body>
</html>