<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
        if (isset($_POST)) {

            if (!empty($_POST['username']) && !empty($_POST['color']) && !empty($_POST['dish'])) {
                echo "Thanks for your selection " . $_POST['username'];
                echo "</br>You really enjoy " . $_POST['dish'] . "</br>- especially with a nice " . $_POST['color'] . " wine";
            } else {

                if(empty($_POST['username'])) {
                    
                    echo 'Username is not set</br>';
                }
                if(empty($_POST['color'])) {
                    echo 'Color is not set</br>';
                }
                if(empty($_POST['dish'])) {
                    echo 'Dish is not set</br>';
                }
            }
        }
    ?>
</body>
</html>