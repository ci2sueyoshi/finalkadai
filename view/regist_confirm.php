<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Jeans make life better</title>
    <link rel="shortcut icon" href="./lib/logo.ico">
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
</head>
<body>
    <header class="normal">
        <div class="header-box">
            <a href="./">
                <img class="logo" src="./lib/logo_original.png" alt="Jeans make life better">
            </a>
        </div>
    </header>
    <div class="content">
		<form action="regist.php" method="post">
			<div class="login_form">
				<dl>
					<dt>名前</dt>
					<dd><?php print $name; ?></dd>
					<dt>メールアドレス</dt>
					<dd><?php print $email; ?></dd>
					<dt>パスワード</dt>
					<dd><?php print str_repeat("●", strlen($password)); ?></dd>
				</dl>
				<div class="login_submit">
					<input type="hidden" name="name" value="<?php print $name; ?>">
					<input type="hidden" name="email" value="<?php print $email; ?>">
					<input type="hidden" name="password" value="<?php print $password; ?>">
					<input type="submit" name="regist" value="確認">
				</div>
			</div>
		</form>
    </div>
</body>
</html>
