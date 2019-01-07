<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Fundraiser</title>
</head>
<body>

    <h1>Order Cupcakes</h1>

    <form method="post" action="">

        <!-- Customer name -->
        <fieldset>
            <legend>Contact Info</legend>
            <label>First Name:&nbsp;
                <input type="text" size="20" maxlength="20"
                       name="fname" id="fname" value="">
            </label><br>
            <label>Last Name:&nbsp;
                <input type="text" size="20" maxlength="20"
                       name="lname" id="lname" value="">
            </label><br><br>
        </fieldset>

        <!-- Preferred flavor(s) -->
        <fieldset>
            <legend>Pick One or More Flavors</legend>
            <label>
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
            </label><br>
        </fieldset>

        <!-- Submit order -->
        <input type="submit" value="Order">
    </form>

</body>
</html>