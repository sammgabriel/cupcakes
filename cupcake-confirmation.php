<?php

    /*

       Author Name: Samantha Gabriel
       Date: January 7, 2019
       File Name: cupcake-confirmation.php

       This page validates all cupcake order form entries and displays an order summary at
       the top of the page if all entries are valid.

    */

    // Variable used in error checking
    $isValid = true;

    // Checks if a first name was entered
    $fname = $_POST['fname'];
    if(empty($fname)) {

        echo "<p>Please provide a first name.</p>";
        $isValid = false;
    }

    // Checks if a last name was entered
    $lname = $_POST['lname'];
    if(empty($lname)) {

        echo "<p>Please provide a last name.</p>";
        $isValid = false;
    }

    // Validates flavor choices
    // Array of valid flavors
    $validFlavors = array("grasshopper", "maple", "carrot", "caramel", "velvet", "lemon", "tiramisu");
    // Error message if customer does not pick at least one flavor
    $flavors = $_POST['flavors'];
    if (!isset($_POST['flavors'])) {

        echo "<p>Please pick at least one flavor.</p>";
        $isValid = false;
    }

    else {

        // Iterates through array of the customer's flavor choices
        foreach ($flavors as $flavor) {

            // Error message if customer picks an invalid flavor
            if (!in_array($flavor, $validFlavors)) {

                echo "<p>Please pick a valid flavor.</p>";
                $isValid = false;
            }
        }
    }

    if ($isValid) {

        // Initialize variables
        $cupcakeCount = 0;
        $orderTotal = 0;

        // Associative array for displaying the flavors in the order summary
        $displayFlavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
            "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
            "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

        // Message thanking the user for his or her order
        echo "Thank you, $fname, for your order!";

        // Displays the names of the cupcakes the user ordered in an unordered list
        echo "<ul>";

        foreach ($displayFlavors as $abbrev => $name) {

            if (in_array($abbrev, $flavors)) {

                // Displays the full name of the cupcake
                echo "<li>$name</li>";
                // Increments cupcake count by one
                $cupcakeCount++;
            }
        }

        echo "</ul>";

        // Calculates the total of the order and prints the result
        $orderTotal = 3.50 * $cupcakeCount;
        printf("Order Total: $%.2f", $orderTotal);
    }

?>