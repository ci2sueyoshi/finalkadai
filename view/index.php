<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Jeans make life better</title>
    <link rel="shortcut icon" href="./lib/logo.ico">
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
</head>
<body>
    <!-- ナビゲーション -->
    <div class="nav">
        <div class="center margin_top">
            <a href="cart.php"><img src="./lib/cart.png" /></a>
        </div>
        <div class="center">
            <a href="man.php"><img src="./lib/man.png" /></a>
        </div>
        <div class="center top">
            <a href="woman.php"><img src="./lib/woman.png" /></a>
        </div>
    </div>
    <!-- ヘッダー -->
    <header>
        <div class="header-box">
            <a href="./">
                <img class="logo" src="./lib/logo_original.png" alt="Jeans make life better" />
            </a>
            <?php if(check_login()) { ?>
            <a href="logout.php" class="menu">
                <img src="./lib/logout.png" alt="ログアウト" />
            </a>
            <p class="menu font"><?php print $_SESSION['LOGIN']['name']; ?> さん</p>
            <?php } else { ?>
            <a href="regist.php" class="menu">
                <img src="./lib/kaiin.jpg" alt="会員登録" />
            </a>
            <a href="login.php" class="menu">
                <img src="./lib/login.png" alt="ログイン" />
            </a>
            <?php } ?>
        </div>
    </header>
    <!-- メインコンテンツ -->
    <div class="content_top">
    <?php if (!empty($result_msg)) { //結果メッセージ ?>
        <p class="msg"><?php print $result_msg; ?></p>
    <?php } ?>
    <?php foreach ($err_msg as $value) { //エラーメッセージ ?>
      <p><?php print $value; ?></p>
    <?php } ?>
        <ul class="item-list">
      <?php foreach ($data as $value)  { ?>
            <li>
                <div class="item">
                    <form action="./" method="post">
                        <img class="item-img" src="<?php print IMG_DIR; ?><?php print $value['img']; ?>" >
                        <div class="item-info">
                            <p>
                                <span><?php print $value['name']; ?></span>
                            </p>
                            <p class="margin">
                                <span class="item-price">¥<?php print $value['price']; ?></span>
                            </p>
                        </div>
            <?php if ($value['stock'] > 0) { ?>
                <input class="cart-btn" type="submit" value="カートに入れる">
            <?php } else { ?>
                <p class="sold-out" >売り切れ</p>
            <?php } ?>
                        <input type="hidden" name="item_id" value="<?php print $value['id']; ?>">
                        <input type="hidden" name="mode" value="insert_cart">
                    </form>
                </div>
            </li>
      <?php } ?>
        </ul>
    </div>
</body>
</html>
