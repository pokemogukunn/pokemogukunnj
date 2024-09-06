<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['execute'])) {
    $command = 'git clone https://github.com/unogameonline/unogameonline.github.io.git';
    
    $output = [];
    $return_var = 0;
    exec($command, $output, $return_var);

    echo "<h1>Command Output</h1>";
    echo "<pre>";
    foreach ($output as $line) {
        echo htmlspecialchars($line) . "\n";
    }
    echo "</pre>";

    echo $return_var === 0 ? "<p>Command executed successfully.</p>" : "<p>Command failed with error code: $return_var</p>";
} else {
    echo "<p>Invalid request method.</p>";
}
?>
