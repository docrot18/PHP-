<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>

<?php
do {
    if ($i < 5) {
        echo "i ещё недостаточно велико";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
   echo "значение i уже подходит";

    /* обработка i */

} while (0);
?>