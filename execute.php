<?php
// コマンドの実行
$command = 'git clone https://github.com/unogameonline/unogameonline.github.io.git';

// コマンドの出力を取得
$output = [];
$return_var = 0;
exec($command, $output, $return_var);

// 出力を表示
echo "<pre>";
foreach ($output as $line) {
    echo htmlspecialchars($line) . "\n";
}
echo "</pre>";

// コマンドが成功したかどうかを確認
if ($return_var === 0) {
    echo "コマンドは成功しました。";
} else {
    echo "コマンドは失敗しました。エラーコード: $return_var";
}
?>
