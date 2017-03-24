<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Jeans make life better[管理ページ]</title>
    <link rel="shortcut icon" href="./lib/logo.ico">
    <link type="text/css" rel="stylesheet" href="./lib/style_tool.css">
</head>
<body>
  <h1>管理ページ</h1>
  <?php foreach ($err_msg as $error) { ?>
    <p><?php print $error; ?></p>
  <?php } ?>
  <h2>新規商品追加</h2>
  <form method="post" enctype="multipart/form-data">
    名前：<input type="text" name="name"><br>
    値段：<input type="text" name="price"><br>
    個数：<input type="text" name="stock"><br>
    <input type="file" name="new_img"><br>
    <select name="seibetu">
    <option value = "1">メンズ</option>
    <option value = "0">レディース</option>
    </select><br>
    <select name="status">
    <option value = "1">公開</option>
    <option value = "0">非公開</option>
    </select><br>
    <input type="submit" name="submit" value="商品を追加">
  </form>
  <h2>商品情報変更</h2>
  <p>商品一覧</p>
  <table>
    <tr>
      <th>商品画像</th>
      <th>商品名</th>
      <th>価格</th>
      <th>在庫数</th>
      <th>性別</th>
      <th>ステータス</th>
    </tr>
  <?php foreach ($data as $values)  { ?>
    <tr>
      <td><img src="<?php print $img_dir . $values['img']; ?>" class="size"></td>
      <form method="post">
        <input type="hidden" name="id" value="<?php echo $values['id']; ?>">
      <td>
        <textarea name="name" cols="30" rows="5"><?php echo htmlspecialchars($values['name'], ENT_QUOTES, 'UTF-8'); ?></textarea>
        <input type="submit" name="name_Change" value="変更">
      </td>
      </form>
      <td><?php echo htmlspecialchars($values['price'], ENT_QUOTES, 'UTF-8');?></td>
      <form method="post">
        <input type="hidden" name="id" value="<?php echo $values['id']; ?>">
      <td>
        <input type="text" name="stock" value="<?php echo $values['stock']; ?>">個
        <input type="submit" name="stock_Change" value="変更">
      </td>
      </form>
      <form method="post">
        <input type="hidden" name="id" value="<?php echo $values['id']; ?>">
      <td>
        <?php
        if ($values['seibetu'] == '1') {
          echo 'メンズ';
        } else if ($values['seibetu'] == '0') {
          echo 'レディース';
        }
        ?>
        <select name="seibetu">
        <option value = "1">メンズ</option>
        <option value = "0">レディース</option>
        <input type="submit" name="seibetu_Change" value="変更">
      </td>
      </form>
      <form method="post">
        <input type="hidden" name="id" value="<?php echo $values['id']; ?>">
      <td>
        <?php
        if ($values['status'] == '1') {
          echo '公開';
        } else if ($values['status'] == '0') {
          echo '非公開';
        }
        ?>
        <select name="status">
        <option value = "1">公開</option>
        <option value = "0">非公開</option>
        <input type="submit" name="status_Change" value="変更">
      </td>
      </form>

    <tr>
  <?php } ?>
  </table>
</body>
</html>
