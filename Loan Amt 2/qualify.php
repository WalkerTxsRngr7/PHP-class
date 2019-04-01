<form action="" method="get">
        <input type="text" name="score" placeholder="Score">
        <select name="age">
            <?php
                // for ($i = 15; $i < 81;$i++){
                //     echo("<option value='$i'>$i years</option>");
                // }


                $i = 1;
                while ($i < 100) {
                    echo("<option value='$i'>$i years</option>");
                    $i++;
                }

            ?>
            

        </select>
        <input type="submit" value="Qualify Me">

    </form>

    <?php
        todaysDate();
    ?>