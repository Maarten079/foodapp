<?php

/**
 * @todo implement api key reader
 */
if(isset($_GET['recipe'])) {
    $url = 'https://api.spoonacular.com/recipes/search?query='.$_GET['recipe'].'&number=2&apiKey=';
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
}

?>

<form action="index.php">
    <input type="text" name="recipe">Recipe
    <input type="submit" value="submit">
</form>
