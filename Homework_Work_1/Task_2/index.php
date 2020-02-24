<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
    <table>
        <tr>
        <td>სტუდენტის სახელი - </td><td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
        <td>გვარი - </td><td><input type="text" name="lastname" id="lastname"></td>
        </tr>
        <tr>
        <td> კურსი - </td><td><input type="number" name="course" id="course"></td>
        </tr>
        <tr>
        <td>სემესტრი - </td><td><input type="number" name="term" id="term"></td>
        </tr>
        <tr>
        <td>სასწავლო კურსი - </td><td><input type="text" name="coursename" id="coursename"></td>
        </tr>
        <tr>
        <td>მიღებული ნიშანი - </td><td><input type="number" name="grade" id="grade" onkeyup="checkGrade()"></td>
        </tr>
        <tr>
        <td>შეფასება - </td><td><input type="text" name="gradecheck" id="gradecheck" disabled></td>
        </tr>
        <tr>
        <td>ლექტორის სახელი - </td><td><input type="text" name="lecturername" id="lecturername"></td>
        </tr>
        <tr>
        <td>გვარი - </td><td><input type="text" name="lecturerLastName" id="lecturerLastName"></td>
        </tr>
        <tr>
        <td>დეკანის სახელი - </td><td><input type="text" name="deanName" id="deanName"></td>
        </tr>
        <tr>
        <td>გვარი - </td><td><input type="text" name="deanLastName" id="deanLastName"></td>
        </tr>
        <tr>
        <td colspan="2"><input type="submit" value="გაგზავნა" name="send"></td>
        </tr>
    </table>
    </form>
    <?php
        if(isset($_POST["send"]))
            include "meore.php";
    ?>
</body>
<script src="script.js"></script>
</html>