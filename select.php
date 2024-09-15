<?php
require_once('config.php');

$sql = "SELECT * FROM books ORDER BY id DESC";
$stmt = $pdo->query($sql);
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録済み書籍一覧</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="index.php">データ登録</a></div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>登録済み書籍一覧</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>書籍名</th>
                    <th>書籍URL</th>
                    <th>書籍コメント</th>
                    <th>登録日時</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= htmlspecialchars($book['id']) ?></td>
                    <td><?= htmlspecialchars($book['book_name']) ?></td>
                    <td><a href="<?= htmlspecialchars($book['book_url']) ?>" target="_blank"><?= htmlspecialchars($book['book_url']) ?></a></td>
                    <td><?= nl2br(htmlspecialchars($book['book_comment'])) ?></td>
                    <td><?= htmlspecialchars($book['registered_at']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>