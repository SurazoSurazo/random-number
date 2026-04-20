<?php
$random = rand(1, 3);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>乱数表示</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card">
        <div class="title">生成された乱数</div>
        <p class="number"><?php echo $random; ?></p>
    </div>
</body>
</html>