<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercise 2</title>
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
        .container {
            max-width: 1140px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>String</h1>
        <!-- 1 -->
        <h2>1. Write PhP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.(Hint: string function)</h2>
        <!-- answer -->
        <div class="answer">Answer</div>
        <?php
            $var1 = "Random text 1";
            $var2 = "Another Random Text";
            $var3 = "$var1 $var2";
            echo "<p>$var3</p>";
            echo "<p>String length: " . strlen($var3) . " </p>"
        ?>
        

        <!-- 2 -->
        <h2>2. In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect?</h2>
        <!-- showcase -->
        <p><b>Here is showing the result after replacing the quotes</b></p>
        <?php
            $var1 = 'Random text 1';
            $var2 = 'Another Random Text';
            $var3 = '$var1 $var2';
            echo '<p>$var3</p>';
            echo '<p>String length: ' . strlen($var3) . ' </p>';
        ?>
        <!-- answer -->
        <div class="answer">Answer</div>
        <p>And yes. With double quotes, it expands the variable value. But, with single quote, it treats the variable as a normal string.</p>

        <!-- 3 -->
        <h2>3. Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?</h2>
        <!-- answer -->
        <div class="answer">Answer</div>
        <p><b>syntax error, unexpected '>'</b><br>
            It returns an error, it is expecting a closing single quote. </p>

        <!-- 4 -->
        <h2>4. Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?</h2>
        <!-- answer -->
        <div class="answer">Answer</div>
        <p><b>syntax error, unexpected '='</b><br>
            It returns an error, it does not know what to do with the equal sign. It is logical, it seems we are forcing the machine to do a math process like "10 = 3" or stringA = stringB. It is just uncomparable. But, if we put $ sign in front of the string, the machine will notice that this string is not a normal string. So, it will treat it as a variable. In math it will be equivalent to "x = 10". It means the machine will assign the value to the variable.</p>

        <!-- 5 -->
        <h2>5. Put the dollar sign back and remove one of the semicolon from the code. Run your code again. What error did you get this time?</h2>
        <!-- answer -->
        <div class="answer">Answer</div>
        <p><b>';' expected.</b><br>
            <b>syntax error, unexpected 'echo' (T_ECHO)</b></p>

        <!-- 6 -->
        <h2>6. Write a PHP script to get the following display</h2>
            <h3>" It is Markku's car." <br>
                Random characters: del c:\*.* "</h3>
        <!-- answer -->
        <div class="answer">Answer</div>
        <?php
            echo '<p>" It is Markku\'s car." <br>
            Random characters: del c:\*.* "</p>';
        ?>
        

        <h1>Operators</h1>
        <!-- 1 -->
        <h2>1. Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer.</h2>
        <!-- answer -->
        <div class="answer">Answer</div>
        <?php
            echo "<p>298 + 234 + 46 = " . (298+234+46) . " </p>";
        ?>

        <!-- 2 -->
        <h2>2. Use variables to calculate the following : (87 + 44)+(200 * 15) / 10</h2>
        <!-- answer -->
        <div class="answer">Answer</div>
        <?php
            $num1 = (87+44);
            $num2 = (200*15);
            $num3 = $num1+$num2/10;
            echo "<p>(87 + 44) + (200 * 15) / 10</p>";
            echo "<p>$num1 + $num2 / 10 = $num3</p>";
        ?>
    </div>
</body>
</html>