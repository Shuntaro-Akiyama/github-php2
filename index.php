<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍ブックマーク登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>書籍ブックマーク登録</h1>
        <form method="post" action="insert.php">
            <div class="form-group">
                <label for="book_name">書籍名：</label>
                <input type="text" class="form-control" id="book_name" name="book_name" required>
            </div>
            <div class="form-group">
                <label for="book_url">書籍URL：</label>
                <input type="url" class="form-control" id="book_url" name="book_url" required>
            </div>
            <div class="form-group">
                <label for="book_comment">書籍コメント：</label>
                <textarea class="form-control" id="book_comment" name="book_comment" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
</body>
</html>