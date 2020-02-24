<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #pasuxebi{
        width: 200px;
        height: 80px;
        margin-top: 15px;
        background: yellow;
    }
</style>
<body>
    <form method="post">
        <div class="box">
        <p>Question 1:</p>
        <p>What does HTML stand for?</p>
            <div class="first">
                <input type="radio" value="Home Tool Markup Language" name="1">
                <label for="Home Tool Markup Language">Home Tool Markup Language</label><br><br>

                <input type="radio" value="Hyperlinks and Text Markup Language" name="1">
                <label for="Hyperlinks and Text Markup Language">Hyperlinks and Text Markup Language</label><br><br>

                <input type="radio" value="correct" name="1">
                <label for="correct">Hyper Text Markup Language</label><br><br>
            </div>
        </div>
    </form>
    <form action="mesame.php" method="post">
        <div class="box">
        <p>Question 2:</p>
        <p>What does PHP stand for?</p>
            <div class="first">
                <input type="radio" value="correct" name="1">
                <label for="correct">PHP: Hypertext Processor</label><br><br>

                <input type="radio" value="value2" name="1">
                <label for="value2">Private Home Page</label><br><br>

                <input type="radio" value="value3" name="1">
                <label for="value3">Personal Hypertext Processor</label><br><br>
            </div>
        </div>
    </form>
    <form method="post">
        <div class="box">
        <p>Question 3:</p>
        <p>PHP server scripts are surrounded by delimiters, which?</p>
            <div class="first">
                <input type="radio" value="value1" name="1">
                <label for="value1">&lt?php&gt...&lt/?&gt</label><br><br>

                <input type="radio" value="value2" name="1">
                <label for="value2">&ltscript&gt...&lt/script&gt</label><br><br>

                <input type="radio" value="correct" name="1">
                <label for="correct">&lt?php...?&gt</label><br><br>
                <input type="radio" value="value4" name="1">
                <label for="value4">&lt&&gt...&lt/&&gt</label><br><br>
            </div>
        </div>
    </form>
    <form method="post">
        <div class="box">
        <p>Question 4:</p>
        <p>How do you write "Hello World" in PHP</p>
            <div class="first">
                <input type="text" name="answer" id="answer">
            </div>
        </div>
    </form>
    <form method="post">
        <div class="box">
        <p>Question 5:</p>
        <p>What is the correct way to add 1 to the $count variable? <br>(variable name - count)</p>
            <div class="first">
                <input type="text" name="answer" id="answer2">
                <input type="submit" name="check" value="Check">
            </div>
        </div>
        <div id="pasuxebi"></div>
    </form>
    <?php
        if(isset($_POST["send"])){
        }
    ?>
    
</body>
<script src="script.js"></script>
</html>