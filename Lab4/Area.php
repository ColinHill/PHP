<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Area Calculator - Lab #4</title>
    </head>
    <body>
        <?php

            if (isset($_POST['radius']))
            {
                $radius = ($_POST['radius']);
            } else {
                $radius = NULL;
            }//end if
            if (isset($_POST['length']))
            {
                $length = ($_POST['length']);
            } else {
                $length = NULL;
            }//end if
            if (isset($_POST['width']))
            {
                $width = ($_POST['width']);
            } else {
                $width = NULL;
            }//end if
            if (isset($_POST['base']))
            {
                $base = ($_POST['base']);
            } else {
                $base = NULL;
            }//end if
            if (isset($_POST['height']))
            {
                $height = ($_POST['height']);
            } else {
                $height = NULL;
            }//end if
            if (isset($_POST['circleSize']))
            {
                $circleSize = ($_POST['circleSize']);
            } else {
                $circleSize = NULL;
            }//end if
            if (isset($_POST['triangleSize']))
            {
                $triangleSize = ($_POST['triangleSize']);
            } else {
                $triangleSize = NULL;
            }//end if

        //$radius = $myCircle->getRadius();
        //$length = $myRectangle->getLength();
       // $width = $myRectangle->getWidth();
        //$base = $myTriangle->getBase();
       // $height = $myTriangle->getHeight();

        ?>

        <table border = 0 width = 100%>
            <tr>
                <td width = 50%>
                    <form name="areaForm" id="areaForm" method="post" action="Area.php">
                        <fieldset>
                            <legend style="color:black;font-weight:bold;">Circle</legend>
                            <table>
                                <tr>
                                    <td width = 60>Radius:</td>
                                    <td><input type="text" name="radius" id="radius" value="<?php echo $radius;?>"/></td>
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend style="color:black;font-weight:bold;">Rectangle</legend>
                            <table>
                                <tr>
                                    <td width = 60>Length:</td>
                                    <td><input type="text" name="length" id="length" value="<?php echo $length;?>"/></td>
                                    <td width = 60>Width:</td>
                                    <td><input type="text" name="width" id="width" value="<?php echo $width;?>"/></td>
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend style="color:black;font-weight:bold;">Triangle</legend>
                            <table>
                                <tr>
                                    <td width = 60>Base:</td>
                                    <td><input type="text" name="base" id="base" value="<?php echo $base;?>"/></td>
                                    <td width = 60>Height:</td>
                                    <td><input type="text" name="height" id="height" value="<?php echo $height;?>"/></td>
                                </tr>
                            </table>
                        </fieldset>
                        <input type="submit" name="submitButton" id="submitButton" value="Calculate Area"/>
                    </form>
                </td>
                <td width = 50%>
                    <form name="resizeForm" id="resizeForm" method="post" action="Resize.php">
                        <input type="hidden" name="radius" id="radius" value="<?php echo $radius;?>"/>
                        <input type="hidden" name="length" id="length" value="<?php echo $length;?>"/>
                        <input type="hidden" name="width" id="width" value="<?php echo $width;?>"/>
                        <input type="hidden" name="base" id="base" value="<?php echo $base;?>"/>
                        <input type="hidden" name="height" id="height" value="<?php echo $height;?>"/>

                        <fieldset>
                            <legend style="color:black;font-weight:bold;">iResizable</legend>
                            <table>
                                <tr>
                                    <td width = 120>Circle Size:</td>
                                    <td><input type="text" name="circleSize" id="circleSize" value=""/>%</td>
                                </tr>
                            </table>
                        </fieldset>

                            <table>
                                <tr>
                                    <td height = 66>
                                    </td>
                                </tr>
                            </table>

                        <fieldset>
                            <legend style="color:black;font-weight:bold;">iResizable</legend>
                            <table>
                                <tr>
                                    <td width = 120>Triangle Size:</td>
                                    <td><input type="text" name="triangleSize" id="triangleSize" value=""/>%</td>
                                </tr>
                            </table>
                        </fieldset>
                        <input type="submit" name="submitButton" id="submitButton" value="Resize Shapes"/>
                    </form>
                </td>
            </tr>
        </table>

        <div>
            <span>
                <?php

                include_once("Circle.php");
                $myCircle = new Circle("Circle", $radius);
                echo "<h2>" . $myCircle->getShape() . "</h2>";
                echo "<h3>Area: " . $myCircle->calculateSize() . "</h3>";

                include_once("Rectangle.php");
                $myRectangle = new Rectangle("Rectangle", $length, $width);
                echo "<h2>" . $myRectangle->getShape() . "</h2>";
                echo "<h3>Area: " . $myRectangle->calculateSize() . "</h3>";

                include_once("Triangle.php");
                $myTriangle = new Triangle("Triangle", $base, $height);
                echo "<h2>" . $myTriangle->getShape() . "</h2>";
                echo "<h3>Area: " . $myTriangle->calculateSize() . "</h3>";

                ?>
            </span>
        </div>
    </body>
</html>
