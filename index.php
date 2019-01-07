<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Fundraiser</title>
</head>
<body>

    <h1>Order Cupcakes</h1>

    <?php
    //Initialize variables
    $fname = "";
    $lname = "";
    $custFlavors = "";

    //If form is submitted, process the data
    if (!empty($_POST)) {
        require('cupcake-confirmation.php');
    }

    ?>

    <form method="post" action="">

        <!-- Customer name -->
        <fieldset>
            <legend>Contact Info</legend>
            <label>First Name:&nbsp;
                <input type="text" size="20" maxlength="20"
                       name="fname" id="fname" value="<?php echo $fname; ?>">
            </label><br>
            <br>
            <label>Last Name:&nbsp;
                <input type="text" size="20" maxlength="20"
                       name="lname" id="lname" value="<?php echo $lname; ?>">
            </label><br><br>
        </fieldset>
        <br>

        <!-- Preferred flavor(s) -->
        <fieldset>
            <legend>Pick One or More Flavors</legend>

            <?php

                $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
                    "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
                    "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

                foreach ($flavors as $abbreviation => $flavorName) {

                    echo "<label><input type=\"checkbox\" value=\"$abbreviation\" name=\"flavors[]\"> $flavorName</label><br>";

                }




            ?>
            <!-- <label>
                <input type="checkbox" value="grasshopper" name="flavors[]">&nbsp;The Grasshopper
            </label><br>
            <label>
                <input type="checkbox" value="maple" name="flavors[]">&nbsp;Whiskey Maple Bacon
            </label><br>
            <label>
                <input type="checkbox" value="carrot" name="flavors[]">&nbsp;Carrot Walnut
            </label><br>
            <label>
                <input type="checkbox" value="caramel" name="flavors[]">&nbsp;Salted Caramel Cupcake
            </label><br>
            <label>
                <input type="checkbox" value="velvet" name="flavors[]">&nbsp;Red Velvet
            </label><br>
            <label>
                <input type="checkbox" value="lemon" name="flavors[]"> Lemon Drop
            </label><br>
            <label>
                <input type="checkbox" value="tiramisu" name="flavors[]"> Tiramisu
            </label><br> -->
        </fieldset>
        <br>

        <!-- Submit order -->
        <input type="submit" value="Order">
    </form>

</body>
</html>