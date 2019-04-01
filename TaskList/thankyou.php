<?php
    if (isset($_POST['task']) && $_POST['button'] == "Sort"){
        sort($_POST['task']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thank you!</h1>

    <?php
        
        foreach ($_POST as $key => $value):
            if (is_array($value)):
                echo "key: ";
                foreach($value as $keys => $values){
                    echo ($keys. " - " . $values);
                }
            else:
                echo ($key . ": " . $value);
            endif;
            
        endforeach;
    ?>

    <form action=""method="post">

        <?php
            foreach ($_POST['task'] as $value){
                echo("<input type='text' name='task[]' value='$value'>");
            }
        ?>
        <input type="submit" name="button" value="Sort">
        <!-- <input type="hidden" name="jigglypuff" value="sort"> -->
    </form>
</body>
</html>