<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_name = $_POST['book_name'];
    $book_url = $_POST['book_url'];
    $book_comment = $_POST['book_comment'];

    $sql = "INSERT INTO books (book_name, book_url, book_comment, registered_at) VALUES (:book_name, :book_url, :book_comment, NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':book_name', $book_name, PDO::PARAM_STR);
    $stmt->bindParam(':book_url', $book_url, PDO::PARAM_STR);
    $stmt->bindParam(':book_comment', $book_comment, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header("Location: select.php");
        exit();
    } else {
        echo "エラーが発生しました：" . $stmt->errorInfo()[2];
    }
}
?>