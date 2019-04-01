<section>
    <h4>Categories</h4>
<?php

    $aryCat = getAllCats();

    foreach($aryCat as $category){
        $str = "<a href='?cat=$category[categoryID]'>$category[categoryName]</a><br>";
        //echo($category['categoryName'] . "<br>");
        echo($str);
    }
?>
</section>