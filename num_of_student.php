<html lang="en" dir="ltr">
    <head>
        <title>Grade Entry Form</title>
    </head>
    <body>
        <br>
        <br>
        <?php
        
        echo"<h1>Grade Entry Form</h1>";
        echo"<form  method='post' action='EnterGrades.php' name='num_of_student' id='num_of_student'>";
        echo"<label for='num'> Enter the number of students </label>";
        echo"<input type='number' name='num' id='num'  />";
        echo"<br>";
        echo"<br>";
            
            echo"<button type='submit' name='submit' id='submit' >OPEN</button>";
        
        echo"</form>";
        ?>
    </body>
</html>