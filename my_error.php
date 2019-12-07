
<?php
function inverse($x) {
    if ($x != 1) {
        throw new Exception('ERROR');
    }
    return $x;
}

try {
    echo inverse(5) . PHP_EOL;
} catch (Exception $e) {
    echo  $e->getMessage() . PHP_EOL;
    exit;
}

echo "Hello World" . PHP_EOL;
?>
