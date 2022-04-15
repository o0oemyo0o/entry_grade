<html lang="en" dir="ltr">
    <head>
        <title>View Students' Grades</title>
        <style>
        table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
        text-align: center;
        }   
        th {
        background-color:#009999; 
        color: white;
        }
        tr{
        background-color: #96D4D4; 
        }
        </style>
    </head>  
    <body>
        <br><br>
        <?php
        $count=$_POST['count'];
        

        
         echo  " <h1>View Students' Grades</h1>";
        echo"<table style='width:100%'>";
           echo "<tr>";
                echo"<th>Student ID</th>";
                echo"<th>Name</th>";
                echo"<th>Combuter</th>";
                echo"<th>Math</th>";
            echo"</tr>";
             for($i=0;$i<$count;$i++){ 
            echo"<tr>";
                echo"<td>".($i+1)."</td>";
                echo"<td>".$_POST['Name'.$i]."</td>";
                echo"<td>" .$_POST['Computer'.$i]."</td>";
                echo"<td>". $_POST['Math'.$i]."</td>";
            echo"</tr>";
            
             }
            echo"</table >";

            echo"Total number of student: ". $count;
            echo "<br>"."<br>";

         ?>
         <a href="num_of_student.php">
             <button type="button" name="back" id="back">BACK</button>
         </a>
    </body>
</html>