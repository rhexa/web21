<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
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
            <?php
                $score = 0;
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
                else {
                    echo "Score is 0";
                }

                

            ?>
        </article>

        <!-- 4 -->
        <article>
            <h2>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)</h2>
            
            <!-- answer -->
            <div class="answer">Answer</div>
            <p></p>
        </article>

        <!-- 5 -->
        <article>
            <h2>5. Use a looping statement to construct the following pattern: </h2>
       
            <!-- answer -->
            <div class="answer">Answer</div>
            <p></p>
        </article>

        <!-- 6 -->
        <article>
            <h2>6. Use While loop to print the following pattern: </h2>
            
            <!-- answer -->
            <div class="answer">Answer</div>
            <p></p>
        </article>

        <!-- 7 -->
        <article>
            <h2>7. Create a GitHub repo and enable GitHub pages for the repo. Upload an HTML file of yours to the repo. You should include in your PHP code the link to the repo and your web page. </h2>
           
            <!-- answer -->
            <div class="answer">Answer</div>
            <p></p>
        </article>
    </div>



<!-- bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>