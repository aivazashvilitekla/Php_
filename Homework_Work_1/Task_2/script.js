function checkGrade(){
    var grade = document.getElementById("grade").value;
    if(grade <= 100 && grade >= 91)
        document.getElementById("gradecheck").value = 'A';
    else if(grade <= 90 && grade >= 81)
        document.getElementById("gradecheck").value = 'B';
    else if(grade <= 80 && grade >= 71)
        document.getElementById("gradecheck").value = 'C';
    else if(grade <= 70 && grade >= 61)
        document.getElementById("gradecheck").value = 'D';
    else if(grade <= 60 && grade >= 51)
        document.getElementById("gradecheck").value = 'C';
    else if(grade <= 51 && grade >= 0)
        document.getElementById("gradecheck").value = 'FX';
    else
        document.getElementById("gradecheck").value = "Invalid Number";
}