<!DOCTYPE html>
    <html>
     <head>
        <title>Lab #2</title>
     </head>
     <body>

     <h3>Write a PHP Function</h3>
        <?php

        $string = " ";
        $size = 0;

        function fun($string, $size){

            if ($size >= 1 && $size <=6){
            echo "<h$size>$string</h$size>";
        }else{
                echo "Error. Please choose a number between one and six.";
            }
        }
        ?>

     <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="TextString">
         <p>Input some text:
             <input name="string" type="text">
         </p>
         <p>Input a number between 1 & 6:
             <input name="size" type="text">
         </p>
         <p>
             <input name="submit" type="submit">
         </p>

         <?php

         $string = $_POST['string'];
         $size = $_POST['size'];

         if(isset($_POST['submit']))
         {

            echo fun($string, $size);

         }
        ?>

         <h3>Loop Output</h3>
         <?php
         $size = 0;
         for ($i=1; $i<=7; $i++, $size++) {
             fun($string, $size);
         }
         ?>

         <h3> Step 2 ~ Functions</h3>

         <?php

         $var = "Hello, World.";

         function byValue($var){
             $var .= "...blah";
         }

         function byRef(&$ref)
         {
             $ref .= "...blah";
         }

         echo $var . "<br>";
         byValue($var);
         echo $var . "<br>";
         byRef($var);
         echo $var . "<br>";
         ?>

         <h3> Step 3</h3>

         <?php
         $age = "25";

         function age($age)
         {
             echo "<h1>You are " . $age . " years old.</h1>";
         }

         age($age);
         ?>

     </form>
     </body>
    </html>