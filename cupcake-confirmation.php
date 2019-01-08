<?php

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
    $flavors = $_POST['flavors'];
    // Error message if customer does not pick at least one flavor
    if (!isset($_POST['flavors'])) {

        echo "<p>Please pick at least one flavor.</p>";
        $isValid = false;
    }

    else {

        // Iterates through array of the customer flavor choices
        foreach ($flavors as $flavor) {

            // Error message if customer picks an invalid flavor
            if (!in_array($flavor, $validFlavors)) {

                echo "<p>Please pick a valid flavor.</p>";
                $isValid = false;
            }

            // Creates list of flavor choices if choices are valid.
            else if (isset($flavors)) {

                $flavors = $_POST['flavors'];

            }
        }
    }

    if ($isValid) {

        $cupcakeCount = 0;
        $orderTotal = 0;

        echo "Thank you, $fname, for your order!";

        echo "<ul>";
        foreach ($flavors as $flavor) {

            echo "<li>$flavor</li>";
            $cupcakeCount++;
        }

        echo "</ul>";

        $orderTotal = 3.50 * $cupcakeCount;
        printf("Order Total: $%.2f", $orderTotal);




    }

?>