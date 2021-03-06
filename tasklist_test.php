<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Tasklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="mt-4">
<?php
    // フォームデータ送受信確認用コード（本番では削除）
    print '<div style="background-color: skyblue;">';
    print '<p>動作確認用:</p>';
    print_r($_POST);
    print '</div>';
?>
        <div class="container">
            <h1><a href="tasklist.php">Tasklist</a></h1>

            <h2>タスクの登録フォーム</h2>
            <form action="tasklist.php" method="POST" class="form-inline mb-2">
                <div class="form-group mr-2">
                    <input type="text" name="content" class="form-control" placeholder="タスクタイトルを入力" required>
                </div>
                <button type="submit" name="submit_add_task" class="btn btn-primary">登録</button>
            </form>

            <hr />

            <h2>登録されたタスク一覧</h2>
            <ul>
                <li>はじめてのWebアプリケーション</li>
                <li>かんたん！PHPプログラミング</li>
                <li>PHP+MySQLで作るWebアプリケーション</li>
                <?php // 登録されたタスクタイトルの数だけループ 開始 ?>
                    <li><?php // print タスクタイトル; ?></li>
                <?php // ループ 終了 ?>
            </ul>
        </div>

        <!-- BootstrapなどのJavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
    </body>
</html>