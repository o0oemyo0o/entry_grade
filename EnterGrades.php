<html lang="en" dir="ltr" >
    <head>
        <title>Grade Entry Form</title>
    </head>
    <body>
        <?php
         "<br>";
         "<br>";
         
         echo "<h1>Grade Entry Form</h1>";
         echo "<form  method='post' action='show.php' name='add' id='add'>";

         $count=$_POST["num"];
        
            
         

         "<div>";
         for($i=0;$i<$count;$i++){
             
             

             echo"<input type = 'hidden' name='count' id='count' type='number' value=  $count  />";
             echo"&emsp13;";

             echo"<label for="."Name".$i."> NAME </label>";
             echo"&emsp13;";
             echo "<input type='text' required name="."Name".$i." id="."Name".$i."/>";
             echo"&emsp13;";

             echo"<label for="."Computer".$i.">COMPUTER</label>";
             echo"&emsp13;";
             echo "<input type='nmber' name="."Computer".$i." id="."Computer".$i.">";

             echo"&emsp13;";
             echo"<label for="."Math".$i.">MATH</label>";
             echo"&emsp13;";
             echo "<input type='number' name="."Math".$i." id="."Math".$i.">";

             echo"<br>";  echo"<br>";
         }
         echo "</div>";

         "<br>";  "<br>";

         "<div>";
        

         echo"<button type='submit' name='submit' id='submit' value='Submit'>SHOW</button>";
         "</div>";

     echo"</form>";

        ?>
       
    </body>
</html>