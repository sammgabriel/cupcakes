<!DOCTYPE html>
<html lang="en">
<head>
    <!--

       Author Name: Samantha Gabriel
       Date: January 7, 2019
       File Name: index.php

       This is the cupcake fundraiser order form.

    -->
    <meta charset="UTF-8">
    <title>Cupcake Fundraiser</title>
</head>
<body>

    <!-- Page header -->
    <h1>Order Cupcakes</h1>

    <?php

        // Initialize variables
        $fname = "";
        $lname = "";
        $custFlavors = "";

        // If form is submitted, process the data
        if (!empty($_POST)) {
            require('cupcake-confirmation.php');
        }

        // Adds space between the order confirmation and the form
        echo "<br><br>";

    ?>

    <!-- Order form -->
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

                // Associate array of flavors
                $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
                    "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
                    "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

                // Iterates through the array and displays all the options in the form
                foreach ($flavors as $abbreviation => $flavorName) {

                    echo "<label><input type=\"checkbox\" value=\"$abbreviation\" name=\"flavors[]\" ";

                    // Makes this section "sticky"
                    echo (isset($_POST['flavors']) && in_array("$abbreviation", $_POST['flavors'])) ? "checked = 'checked'" : '';

                    echo "> $flavorName</label><br>";
                }

            ?>
        </fieldset>
        <br>

        <!-- Submit order -->
        <input type="submit" value="Order">
    </form>

</body>
</html>