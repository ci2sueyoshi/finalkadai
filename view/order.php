<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Jeans make life better</title>
    <link rel="shortcut icon" href="./lib/logo.ico">
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
</head>
<body>
    <header>
        <div class="header-box">
            <a href="./">
                <img class="logo" src="./lib/logo_original.png" alt="Jeans make life better">
            </a>
        </div>
    </header>
    <div class="content">
<?php if (count($err_msg) === 0) { ?>
<?php if (empty($result_msg) !== TRUE) { ?>
        <p class="msg"><?php print $result_msg; ?></p>
<?php } ?>
        <div class="finish-msg">ご購入ありがとうございました。</div>
        <div class="cart-list-title">
            <span class="cart-list-price">価格</span>
            <span class="cart-list-num">数量</span>
        </div>
            <ul class="cart-list">
<?php foreach ($data as $value)  { ?>
                <li>
                    <div class="cart-item">
                        <img class="cart-item-img" src="<?php print IMG_DIR; ?><?php print $value['img']; ?>">
                        <span class="cart-item-name"><?php print $value['name']; ?></span>
                        <span class="cart-item-price">¥<?php print $value['price']; ?></span>
                        <span class="finish-item-price"><?php print $value['amount']; ?></span>
                    </div>
                </li>
<?php } ?>
            </ul>
        <div class="buy-sum-box">
            <span class="buy-sum-title">合計</span>
            <span class="buy-sum-price">¥<?php print $sum_price; ?></span>
        </div>
<?php } else { ?>
<?php foreach ($err_msg as $value) { ?>
    <p><?php print $value; ?></p>
<?php } ?>
<?php } ?>
    </div>
</body>
</html>
