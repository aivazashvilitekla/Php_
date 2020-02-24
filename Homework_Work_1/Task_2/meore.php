
    <table>
        <tr>
        <td>სტუდენტის სახელი - </td><td><?=$_POST["name"]?></td>
        </tr>
        <tr>
        <td>გვარი - </td><td><?=$_POST["lastname"]?></td>
        </tr>
        <tr>
        <td> კურსი - </td><td><?=$_POST["course"]?></td>
        </tr>
        <tr>
        <td>სემესტრი - </td><td><?=$_POST["term"]?></td>
        </tr>
        <tr>
        <td>სასწავლო კურსი - </td><td><?=$_POST["coursename"]?></td>
        </tr>
        <tr>
        <td>მიღებული ნიშანი - </td><td><?=$_POST["grade"]?></td>
        </tr>
        <tr>
        <td>შეფასება - </td><td><?php include "grades.php"; ?></td>
        </tr>
        <tr>
        <td>ლექტორის სახელი - </td><td><?=$_POST["lecturername"]?></td>
        </tr>
        <tr>
        <td>გვარი - </td><td><?=$_POST["lecturerLastName"]?></td>
        </tr>
        <tr>
        <td>დეკანის სახელი - </td><td><?=$_POST["deanName"]?></td>
        </tr>
        <tr>
        <td>გვარი - </td><td><?=$_POST["deanLastName"]?></td>
        </tr>
    </table>