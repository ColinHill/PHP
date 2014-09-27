<!DOCTYPE html>
    <html>
     <head>
        <title>Lab #1 - Part B</title>
     </head>
     <body>

        <?php
        echo "Greetings from Lab1"
        ?>

     <p>
         This is a simple paragraph!
     </p>

        <?php
        echo '<h3>' . "This is an H3 echo!" . '</h3>'
        ?>

        <p>
            <?php
               $myName = "Colin Hill";
               echo $myName;
            ?>
        </p>

        <p>
            <?php
               $myName = "My name is " . "Colin Hill" . "!";
                echo $myName;
            ?>
        </p>

        <h3>Using the Arithmetic Operators</h3>

        <?php
        $mathA = 32 * 14;
        $mathB = (1024 / 128) - 7;
        $mathC = 769 % 6;
        ?>

        <p><?php echo $mathA; ?></p>
        <p><?php echo $mathB; ?></p>
        <p><?php echo $mathC; ?></p>

        <h3>Use a Loop</h3>

        <?php
        for ($i=10; $i>=0; $i--) {
            if ($i == 0)
                echo "Blast Off";
            else
            echo "$i...";
        }
        ?>

        <h3>Use an Array</h3>

        <?php
        $array = array("Red", "Green", "Blue", "Yellow", "Purple", "Black", "Gray");
        for ($i=0; $i<=6; $i++) {
                echo $array[$i] . "  ";
        }
        ?>

      <p>
        <?php
        foreach ($array as &$value){
            echo $value . "  ";
        }
        ?>
     </p>

     <p>
         <?php
         var_dump($array);
         ?>
     </p>

     </body>
    </html>