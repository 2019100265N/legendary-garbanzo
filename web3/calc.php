<html>

<head>
    <title>Calculation answer</title>
</head>

<body>
    <?php
    # test if input is_numeric
    if (is_numeric($_POST['val1']) && is_numeric($_POST['val2'])) {
        # test if calc is not null
        if (isset($_POST['calc'])) {
            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            $calc = $_POST['calc'];
            $answer = 0;
            # switch statement for value of calc
            switch ($calc) {
                case 'add':
                    $answer = $val1 + $val2;
                    break;
                case 'sub':
                    $answer = $val1 - $val2;
                    break;
                case 'mul':
                    $answer = $val1 * $val2;
                    break;
                case 'div':
                    $answer = $val1 / $val2;
                    break;
            }
            echo "Calculation result: $answer";
        }
    } else {
        echo "Invalid entry - please retry";
    }
    ?>
</body>

</html>