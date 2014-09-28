<!DOCTYPE html>
    <html>
     <head>
         <style type="text/css">
             table th{
                 background-color: #a9a9a9;
             }
             table tr:nth-child(odd) td{
                 background-color: #a9a9a9;
             }
         </style>
        <title>Fahrenheit to Celsius Converter</title>
     </head>
     <body>
     <h3><a href ="FahrenheitConverstion2.php">Take me to the Celsius Converter!</a></h3>
     <h3>Step 1</h3>
      <table border = "1" cellpadding = "5">
       <tr><th>Fahrenheit</th><th>Celsius</th></tr>
         <?php
            for ($i=0; $i<=100; $i++) {
              $celsius = round(($i -32) * (5/9));
              echo "<tr><td>$i</td><td>$celsius</td></tr>";
            }
         ?>
      </table>
     </body>
    </html>