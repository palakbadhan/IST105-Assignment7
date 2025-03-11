<?php
if (isset($_GET['numbers']) && isset($_GET['threshold'])) {
    $numbers = escapeshellarg($_GET['numbers']);
    $threshold = escapeshellarg($_GET['threshold']);
    
    $output = shell_exec("python3 bitwise_operations.py $numbers $threshold 2>&1");
    
    echo "<pre>$output</pre>";
} else {
    echo "Please provide valid input.";
}
?>
