<!-- stampare a schermo, attraverso il foreach gli elementi passati in get -->

<?php
var_dump($_GET);

foreach ($_GET as $key => $value) {
    # code...
    var_dump($key);
    var_dump($value);
}
?>