<?php if ($a == 5): ?>
A равно 5
<?php endif; ?>

<?php
if ($a == 5):
    echo "a равно 5";
    echo "...";
elseif ($a == 6):
    echo "a равно 6";
    echo "!!!";
else:
    echo "a не равно ни 5 ни 6";
endif;
?>