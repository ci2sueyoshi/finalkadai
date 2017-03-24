<?php
session_start();

// 設定ファイル読み込み
require_once './conf/const.php';


$img_dir    = './img/';   // アップロードした画像ファイルの保存ディレクトリ
$data       = [];
$err_msg    = [];         // エラーメッセージ
$new_img_filename = '';   // アップロードした新しい画像ファイル名

// POST送信された場合
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // 商品登録処理
  if(isset($_POST['submit'])) {
    // 画像の保存
    // HTTP POST でファイルがアップロードされたかどうかチェック
    if (is_uploaded_file($_FILES['new_img']['tmp_name']) === TRUE) {
      // 画像の拡張子を取得
      $extension = pathinfo($_FILES['new_img']['name'], PATHINFO_EXTENSION);
      // 指定の拡張子であるかどうかチェック
      if ($extension === 'png' || $extension === 'jpeg') {
        // 保存する新しいファイル名の生成（ユニークな値を設定する）
        $new_img_filename = sha1(uniqid(mt_rand(), true)). '.' . $extension;
        // 同名ファイルが存在するかどうかチェック
        if (is_file($img_dir . $new_img_filename) !== TRUE) {
          // アップロードされたファイルを指定ディレクトリに移動して保存
          if (move_uploaded_file($_FILES['new_img']['tmp_name'], $img_dir . $new_img_filename) !== TRUE) {
              $err_msg[] = 'ファイルアップロードに失敗しました';
          }
        } else {
          $err_msg[] = 'ファイルアップロードに失敗しました。再度お試しください。';
        }
      } else {
        $err_msg[] = 'ファイル形式が異なります。画像ファイルはJPEG又はPNGのみ利用可能です。';
      }
    } else {
      $err_msg[] = 'ファイルを選択してください';
    }

    // テキストボックスの内容のチェック
    // 変数の設定（空文字）
    $_POST['name'] = preg_replace('/^[ 　]+/u', '', $_POST['name']);
    $_POST['price'] = preg_replace('/^[ 　]+/u', '', $_POST['price']);
    $_POST['stock'] = preg_replace('/^[ 　]+/u', '', $_POST['stock']);


    // $nameの条件分岐
    if (isset($_POST['name']) === FALSE || $_POST['name'] === "") {
      $err_msg[] = '商品名を入力してください';
    }  else {
      $name = $_POST['name'];
    }
    // $priceの条件分岐
    if (isset($_POST['price']) === FALSE || $_POST['price'] === "") {
      $err_msg[] = '値段を入力してください';
      // 入力された数字が半角で正の整数ならば
    }  else if (preg_match("/^[0-9]+$/", $_POST['price'])) {
      $price = $_POST['price'];
    } else {
      $err_msg[] ='値段は半角、正の整数で入力してください';
    }
    // $stockの条件分岐
    if (isset($_POST['stock']) === FALSE || $_POST['stock'] === "") {
      $err_msg[] = '個数を入力してください';
      // 入力された数字が半角で正の整数ならば
    }  else if (preg_match("/^[0-9]+$/", $_POST['stock'])) {
      $stock = $_POST['stock'];
    } else {
      $err_msg[] ='在庫数は半角、正の整数で入力してください';
    }
    // 性別の条件分岐
    if ($_POST['seibetu'] == '1') {
      $seibetu = '1';
    } else if ($_POST['seibetu'] == '0') {
      $seibetu = '0';
    }
    // ステータスの条件分岐
    if ($_POST['status'] == '1') {
      $status = '1';
    } else if ($_POST['status'] == '0') {
      $status = '0';
    }

    // エラーなければ完了メッセージを表示
    if (count($err_msg) === 0) {
      echo '商品の登録を完了しました';
    }
    // 在庫変更ボタンが押されたら
  } else if (isset($_POST['stock_Change'])) {
    //変数の設定
    $_POST['id'] = preg_replace('/^[ 　]+/u', '', $_POST['id']);
    $_POST['stock'] = preg_replace('/^[ 　]+/u', '', $_POST['stock']);

    if (isset($_POST['id']) === FALSE || $_POST['id'] === "") {
      $err_msg[] = '商品IDが指定されていません';
    }  else {
      $id = $_POST['id'];
    }
    // 在庫数が入力されていなければ
    if (isset($_POST['stock']) === FALSE || $_POST['stock'] === "") {
      $err_msg[] = '在庫数が入力されていません';
       // 入力された数字が半角で正の整数ならば
    }  else if (preg_match("/^[0-9]+$/", $_POST['stock'])) {
      $stock = $_POST['stock'];
    } else {
      $err_msg[] ='在庫数は半角、正の整数で入力してください';
    }
    // エラーなければ完了メッセージを表示
    if (count($err_msg) === 0) {
      echo '在庫数の変更を完了しました';
    }
    // ステータス変更ボタンが押されたら
  } else if (isset($_POST['status_Change'])) {
    if (isset($_POST['id']) === FALSE || $_POST['id'] === "") {
      $err_msg[] = '商品IDが指定されていません';
    }  else {
      $id = $_POST['id'];
    }
    // ステータスの条件分岐
    if ($_POST['status'] == '1') {
      $status = '1';
    } else if ($_POST['status'] == '0') {
      $status = '0';
    }
    // エラーなければ完了メッセージを表示
    if (count($err_msg) === 0) {
      echo '公開ステータスの変更を完了しました';
    }
    // 性別変更ボタンが押されたら
  } else if (isset($_POST['seibetu_Change'])) {
    if (isset($_POST['id']) === FALSE || $_POST['id'] === "") {
      $err_msg[] = '商品IDが指定されていません';
    }  else {
      $id = $_POST['id'];
    }
    // 性別の条件分岐
    if ($_POST['seibetu'] == '1') {
      $seibetu = '1';
    } else if ($_POST['seibetu'] == '0') {
      $seibetu = '0';
    }
    // エラーなければ完了メッセージを表示
    if (count($err_msg) === 0) {
      echo '性別の変更を完了しました';
    }
    // 名前の変更ボタンが押されたら
  } else if (isset($_POST['name_Change'])) {
    //変数の設定
    $_POST['id'] = preg_replace('/^[ 　]+/u', '', $_POST['id']);
    $_POST['name'] = preg_replace('/^[ 　]+/u', '', $_POST['name']);

    if (isset($_POST['id']) === FALSE || $_POST['id'] === "") {
      $err_msg[] = '商品IDが指定されていません';
    }  else {
      $id = $_POST['id'];
    }
    // 商品名が入力されていなければ
    if (isset($_POST['name']) === FALSE || $_POST['name'] === "") {
      $err_msg[] = '商品名が入力されていません';
       // 入力された数字が半角で正の整数ならば
    }  else {
      $name = $_POST['name'];
    }
    // エラーなければ完了メッセージを表示
    if (count($err_msg) === 0) {
      echo '商品名の変更を完了しました';
    }
  }
}

// アップロードした新しい画像ファイル名の登録、既存の画像ファイル名の取得
try {
  // エラーがなければ、商品名、値段、アップロードした新しい画像ファイル名、性別、公開ステータス、在庫数、日時を保存
  if (count($err_msg) === 0 && $_SERVER['REQUEST_METHOD'] === 'POST' ) {
    //商品登録ボタンが押された時
    if(isset($_POST['submit'])) {
      // トランザクション開始
      $dbh->beginTransaction();
      // データベースへの書き込み開始
      try {
        // ec_itemテーブルのSQL文を作成
        $sql = 'INSERT INTO ec_item(name, price, img, seibetu, status, stock, create_datetime, update_datetime)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        // SQL文を実行する準備
        $stmt = $dbh->prepare($sql);
        // SQL文のプレースホルダに値をバインド
        $stmt->bindValue(1, $name,    PDO::PARAM_STR);
        $stmt->bindValue(2, $price,    PDO::PARAM_STR);
        $stmt->bindValue(3, $new_img_filename,    PDO::PARAM_STR);
        $stmt->bindValue(4, $seibetu,    PDO::PARAM_STR);
        $stmt->bindValue(5, $status,    PDO::PARAM_STR);
        $stmt->bindValue(6, $stock,    PDO::PARAM_INT);
        $stmt->bindValue(7, date('Y-m-d H:i:s'),    PDO::PARAM_STR);
        $stmt->bindValue(8, date('Y-m-d H:i:s'),    PDO::PARAM_STR);
         // SQLを実行
        $stmt->execute();
        $dbh->commit();
      } catch (PDOException $e) {
        // ロールバック処理
        $dbh->rollback();
        // 例外をスロー
        throw $e;
      }
      // 在庫変更ボタンが押された時
    } else if (isset($_POST['stock_Change'])) {
      // 在庫更新のSQL文を作成
      $sql = 'UPDATE ec_item
              SET stock = ?,
                  update_datetime = ?
              WHERE id = ?';
      // SQL文を実行する準備
      $stmt = $dbh->prepare($sql);
      // SQL文のプレースホルダに値をバインド
      $stmt->bindValue(1, $stock,    PDO::PARAM_STR);
      $stmt->bindValue(2, date('Y-m-d H:i:s'),    PDO::PARAM_STR);
      $stmt->bindValue(3, $id,    PDO::PARAM_STR);
      // SQLを実行
      $stmt->execute();

      // 商品変更ボタンが押された時
    } else if (isset($_POST['name_Change'])) {
      // 商品更新のSQL文を作成
      $sql = 'UPDATE ec_item
              SET name = ?,
                  update_datetime = ?
              WHERE id = ?';
      // SQL文を実行する準備
      $stmt = $dbh->prepare($sql);
      // SQL文のプレースホルダに値をバインド
      $stmt->bindValue(1, $name,    PDO::PARAM_STR);
      $stmt->bindValue(2, date('Y-m-d H:i:s'),    PDO::PARAM_STR);
      $stmt->bindValue(3, $id,    PDO::PARAM_STR);
      // SQLを実行
      $stmt->execute();

      // 性別変更ボタンが押された時
    } else if (isset($_POST['seibetu_Change'])) {
      // 性別更新のSQL文を作成
      $sql = 'UPDATE ec_item
              SET seibetu = ?,
                  update_datetime = ?
              WHERE id = ?';
      // SQL文を実行する準備
      $stmt = $dbh->prepare($sql);
      // SQL文のプレースホルダに値をバインド
      $stmt->bindValue(1, $seibetu,    PDO::PARAM_STR);
      $stmt->bindValue(2, date('Y-m-d H:i:s'),    PDO::PARAM_STR);
      $stmt->bindValue(3, $id,    PDO::PARAM_STR);
      // SQLを実行
      $stmt->execute();

      // ステータス変更ボタンが押された時
    } else if (isset($_POST['status_Change'])) {

        // 公開ステータス更新のSQL文を作成
        $sql = 'UPDATE ec_item
                SET status = ?,
                    update_datetime = ?
                WHERE id = ?';
        // SQL文を実行する準備
        $stmt = $dbh->prepare($sql);
        // SQL文のプレースホルダに値をバインド
        $stmt->bindValue(1, $status,    PDO::PARAM_STR);
        $stmt->bindValue(2, date('Y-m-d H:i:s'),    PDO::PARAM_STR);
        $stmt->bindValue(3, $id,    PDO::PARAM_STR);
        // SQLを実行
        $stmt->execute();
    }
  }

  // データベースから情報を読み込み
  $sql = 'SELECT *  FROM ec_item';
  // SQL文を実行する準備
  $stmt = $dbh->prepare($sql);
  // SQLを実行
  $stmt->execute();
  // レコードの取得
  $rows = $stmt->fetchAll();
  // 1行ずつ結果を配列で取得
  foreach ($rows as $row) {
    $data[] = $row;
  }
} catch (PDOException $e) {
  // 接続失敗した場合
  $err_msg['db_connect'] = 'DBエラー：'.$e->getMessage();
}
// テンプレートファイル読み込み
include_once './view/tool.php';
