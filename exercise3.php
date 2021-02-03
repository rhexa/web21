<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        .container {
            margin-bottom: 100px;
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

    <!-- Javascript No Refresh -->
    <script type="text/javascript">
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

    <!-- PHP handling -->
    <?php
        // Validation
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    ?>

    <title>Exercise 3</title>
</head>
<body>

    <div class="container">
        <!-- 1 -->
        <article>
            <h2>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h2>
            <p>It's August, so it's still holiday. <br>
            Not August, This is Month-name so i don't have any holidays</p>
            
            <!-- answer -->
            <div class="answer">Answer</div>

            <?php
                if (date(n) == 8) {
                    echo "<p>It's " . date(F) . ", so it's still holiday</p>";
                }
                else {
                    echo "<p>Not August, This is " . date(F) . " so i don't have any holidays</p>";
                }
            ?>
        </article>

        <!-- 2 -->
        <article>
            <h2>2. Assign color red to a variable name $color and check to print one the following responses using if else statement </h2>
            <p>The color is red. <br>
            The color is not red.</p>
            
            <!-- answer -->
            <div class="answer">Answer</div>
            <?php
                $color = red;

                if ($color == "red") {
                    echo "<p>The color is red.</p>";
                }
                else {
                    echo "<p>The color is not red</p>";
                }
            ?>
        </article>

        <!-- 3 -->
        <article>
            <h2>3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50</h2>
            
            <!-- answer -->
            <div class="answer">Answer</div>
                <!-- PHP Form Handling -->
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $pre_score = test_input($_POST["score"]);
                        if (is_numeric($pre_score)) {
                            $score = $pre_score;
                        }
                    }
                ?>

                <!-- Form -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="text" id="score" name="score" value="Type 0 - 100">
                    <input type="submit" value="Calculate">    
                </form>

                <!-- PHP processing -->
                <?php
                    if (isset($score) && !empty($score)) {
                        switch($score){
                            case ($score>=80 && $score<=100):
                                echo "Excellent";
                                break;
                            case ($score>=70 && $score<80):
                                echo "Great";
                                break;
                            case ($score>=60 && $score<70):
                                echo "Good";
                                break;
                            case ($score>=50 && $score<60):
                                echo "Pass";
                                break;
                            case ($score>=0 && $score<50):
                                echo "Fail";
                                break;
                            default:
                                echo "Score has to be between 0 - 100";
                                break;
                        }
                    }
                    elseif (isset($score) && empty($score)) {
                        echo "Score is 0";
                    }
                    else {
                        echo "Insert the score";
                    }
                ?>
        </article>

        <!-- 4 -->
        <article>
            <h2>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)</h2>
            
            <!-- answer -->
            <div class="answer">Answer</div>
            <!-- php handling -->
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $name = test_input($_POST["name"]);
                    $pre_age = test_input($_POST["age"]);

                    // name validation
                    if (!empty($name)){
                        $question4greet = "Hi " . $name . "!";
                    }
                    
                    // age validation
                    if (is_numeric($pre_age)) {
                        $age = $pre_age;
                    }

                    if (isset($age) && !empty($age)){
                        if ($age < 18){
                            $question4error = "You are " . $age . " years old. You are not eligible for voting";
                        }   
                        else {
                            $question4error = "You are " . $age . " years old. You are eligible for voting";
                        }
                    }
                    elseif (isset($age) && empty($age)) {
                        $question4error = "You are " . $age . " years old. You are not eligible for voting";
                    }
                    else {
                        $question4error = "";
                    }
                }
            ?>

            <!-- form -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table>
                    <tr>
                        <td><label for="name">Name: </label></td>
                        <td><input type="text" name="name" id="name"></td>
                    </tr>
                    <tr>
                        <td><label for="age">Age: </label></td>
                        <td><input type="number" name="age" id="age" min="0"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Calculate"></td>
                    </tr>
                </table>
            </form>
            <p style="text-align: center;"><?php
            echo "<strong>" . $question4greet . "</strong><br>";
            echo $question4error; ?></p>
                
        </article>

        <!-- 5 -->
        <article>
            <h2>5. Use a looping statement to construct the following pattern: </h2>
                12345678 <br>
                1234567 <br>
                123456 <br>
                12345 <br>
                1234 <br>
                123 <br>
                12 <br>
                1
       
            <!-- answer -->
            <div class="answer">Answer</div>
                <?php
                    for ($i=8; $i > 0; $i--) { 
                        for ($j=1; $j < $i+1 ; $j++) { 
                            echo $j;
                        }
                        echo "<br>";
                    }
                ?>
        </article>

        <!-- 6 -->
        <article>
            <h2>6. Use While loop to print the following pattern: </h2>
            
                * <br>
                ** <br>
                *** <br>
                **** <br>
                ***** <br>
                ****** <br>
                ******* <br>
                ********
            
            <!-- answer -->
            <div class="answer">Answer</div>
            <?php
                $a = $b = 0;

                while ($a < 8) {
                    while ($b < $a+1) {
                        echo "*";
                        $b++;
                    }
                    echo "<br>";
                    $a++;
                    $b=0;
                }
            ?>

        </article>

        <!-- 7 -->
        <article>
            <h2>7. Create a GitHub repo and enable GitHub pages for the repo. Upload an HTML file of yours to the repo. You should include in your PHP code the link to the repo and your web page. </h2>
           
            <!-- answer -->
            <div class="answer">Answer</div>
            <a href="https://github.com/rhexa/web21" target="_blank" rel="noopener noreferrer">My GitHub Repo</a> <br>
            <a href="https://rhexa.github.io/web21/" target="_blank" rel="noopener noreferrer">My GitHub Pages</a>
        </article>

        <!-- 8 -->
        <article>
            <h2>8. Give  1 or 0 point for the clarity of the task (User interface). </h2>
           
            <!-- answer -->
            <div class="answer">Answer</div>
            <p>I was a bit wondering about this instruction. But, in case it meant that i needed to make my work looks tidy and easy to be understood, i did try to make it easy to be read by putting comments on the script also styled the user interface somehow so the user will not get confused with the contents.</p>
        </article>
    </div>



<!-- bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>