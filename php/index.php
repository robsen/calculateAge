<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Age Calculation</title>
        <meta charset="UTF-8">

        <meta name="author" content="Robert Jaśkowski">
        <meta name="description" content="Calculating imprecise age by given birthyear">
    </head>
    <body>
        <h1>Age Calculation</h1>

        <form method="POST" action="index.php">
            <label for="birthyear">Year of Birth:</label>
            <input type="text" id="birthyear" name="birthyear" autofocus autocomplete="off">
            <button type="submit">Calculate</button>
        </form>
		<?php
			// year of birth entered?
			if (isset($_POST['birthyear']) && 
				is_numeric($_POST['birthyear']))
			{
				// calculate age
				$currentYear = date('Y'); // get current year
				$age = $currentYear - (int)$_POST['birthyear'];

				// show age
				echo '<p>Age +/-1 = ' . $age;
			}
		?>
    </body>
</html>
