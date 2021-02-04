<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
    <style>
        .container {
            margin-bottom: 100px;
            width: 90%;
            margin: 0 auto;
        }
        h1 {
            font-size: 28px;
        }
        h2 {
            font-size: 20px;
            background-color: #a4dfef;
            margin: 15px 0 0 0;
        }
        h3 {
            font-size: 18px;
            margin: 0;
        }
        div.answer {
            font-size: 20px;
            background-color: #cae2fa;
            font-weight: bold;
            margin-bottom: 0;

        }
        p {
            font-size: 18px;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container"> 
        <?php
        // Answer separator
        function divAnswer(){
            echo '<div class="answer">Answer</div>';
        }

        /*
        1. Write a php script to display courses as list. Use <li>
        $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
        */
        function question1(){
            echo "<h2>1. Write a php script to display courses as list.</h2>";
            
            // answer
            divAnswer();

            $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
            foreach ($courses as $course) {
                echo "<li>$course</li>";
            }
        }
        echo "<article>" . question1() . "</article>";
        

        /* 2. The unset() function is used to remove element from the array.
        The var_dump() function is used to dump information about a variable. 
        array_values() is an inbuilt function that 
        returns all the values of an array and not the keys.
        Delete an element from the array below:
        $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
        */
        function question2(){
            echo '<h2>2. The unset() function is used to remove element from the array. <br>
            The var_dump() function is used to dump information about a variable. <br>
            array_values() is an inbuilt function that
            returns all the values of an array and not the keys. <br>
            Delete an element from the array below:
            $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");</h2>';
            echo "<b>print array before unset():</b><br>";
            $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
            foreach ($courses1 as $course) {
                echo $course . "<br>";
            }

            // answer
            divAnswer();

            echo "<b>echo var_dump() returns: </b><br>";
            echo var_dump($courses1);
            echo "<br><br>";

            echo "<b>print_r(array_values()) returns: </b><br>";
            print_r(array_values($courses1));
            echo "<br><br>";
            
            echo "<b>print array after unset() returns nothing</b><br>";
            unset($courses1);
            foreach ($courses1 as $course) {
                echo $course . "<br>";
            }
        }
        echo "<article>" . question2() . "</article>";

        /* 
        3. Sort the following array 
        $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
        a) ascending order sort by value
        b) ascending order sort by Key
        c) descending order sort by Value
        d) descending order sort by Key
        */
        function q3print($arrays){
            foreach ($arrays as $key => $value) {
                echo $key . " = " . $value . "<br>";
            }
        }
        echo "<article>";
        echo "<h2>3. Sort the following array</h2>";
        echo '$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");<br>
                a) ascending order sort by value <br>
                b) ascending order sort by Key <br>
                c) descending order sort by Value <br>
                d) descending order sort by Key';
        
        // answer
        divAnswer();
        echo "<b>The array provided is not an associative array. In case you really meant this exercise for associative array, i will modify the array to be associative one</b><br>";
        echo '$courses3=array("PHP" => "7.3", "HTML" => "5", "JavaScript" => "ES6", "CMS" => "Joomla", "Project" => "Web Development");';
        $courses3=array("PHP" => "7.3", "HTML" => "5", "JavaScript" => "ES6", "CMS" => "Joomla", "Project" => "Web Development");

        // A.
        echo "<br><br>";
        echo "<b>a) ascending order sort by value</b> <br>";
        asort($courses3);
        q3print($courses3);

        // B.
        echo "<br>";
        echo "<b>b) ascending order sort by Key </b><br>";
        ksort($courses3);
        q3print($courses3);

        // C.
        echo "<br>";
        echo "<b>c) descending order sort by Value</b><br>";
        arsort($courses3);
        q3print($courses3);

        echo "</article>";

        // D.
        echo "<br>";
        echo "<b>d) descending order sort by Key</b><br>";
        krsort($courses3);
        q3print($courses3);

        echo "</article>";





        /* 
        4. Change the following array's all values to upper case.
        $courses4=array("php", "html", "javascript", "cms", "project");
        */






        // 5. Create an array that holds your favorite colors and print them. (indexed arrays)




        // 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)




        // 7. Include 12 months in an array named month and print them using loop statement.




        /*
        8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

        Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
        85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
        74, 62, 62, 65, 64, 68, 73, 75, 79, 73
        Write comments to explain the following code (when asked):
        */
        echo "<hr><h2> Calculation average temperature: </h2>";
        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
        // what is explode and what does the below code do? : 
        $temp_array = explode(',', $month_temp);
        $tot_temp = 0;
        // What is count?
        $temp_array_length = count($temp_array);
        foreach($temp_array as $temp)
        {
        $tot_temp += $temp;
        }
        $avg_high_temp = $tot_temp/$temp_array_length;
        echo "Average Temperature is : ".$avg_high_temp."
        "; 
        // what does sort do?
        sort($temp_array);
        echo "<br> List of five lowest temperatures :";
        for ($i=0; $i< 5; $i++)
        { 
        echo $temp_array[$i].", ";
        }
        echo "<br>List of five highest temperatures :";
        // explain the following loop
        for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
        {
        echo $temp_array[$i].", ";
        }
        ?>
    </div>
    


</body>
</html>
