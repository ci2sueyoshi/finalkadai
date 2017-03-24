<?php

// データベースの接続情報
define('DB_USER', 'root');  // MySQLのユーザ名
define('DB_PSWD', 'root');    // MySQLのパスワード
define('DB_NAME', 'EC');
define('DB_HOST', 'localhost');
define('DSN', 'mysql:dbname='.DB_NAME.';host='.DB_HOST.";charset=utf8;");  // データベースのDNS情報

define('HTML_CHARACTER_SET', 'UTF-8');  // HTML文字エンコーディング

define('IMG_DIR', './img/');   // 画像ファイル保存ディレクトリ

try {
  // データベースに接続
  $dbh = new PDO(DSN, DB_USER, DB_PSWD);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch (PDOException $e) {
  echo "接続に失敗しました";
  // 例外をスロー
  throw $e;
  exit;
}
