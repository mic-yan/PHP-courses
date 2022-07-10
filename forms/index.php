<html>
<head>
    <title>Add New Message</title>
</head>
<body>
<h2>Add New Message:</h2>
<form method="post" enctype="multipart/form-data">
    <label>User:</label>
    <input type="text" name="user">
    <br><br>
    <label>Message:</label>
    <input type="text" name="message_text">
    <br><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="65535">
    <label> File: </label>
    <input type="file" name="image">
    <br><br>
    <input type="submit" value="Send">
    <input type="reset" value="Reset">
</form>
</body>
</html>

<?php

// загружаем изображение на сервер в конкретную папку

if (isset($_FILES['image'])) {
    move_uploaded_file($_FILES['image']['tmp_name'], 'E:\xampp\htdocs\img\\'.$_FILES['image']['name']);
}

// проверяем на наличие данных и красиов с защитой добавляем в бд

if (isset($_POST['user']) && isset($_POST['message_text']) && isset($_FILES['image'])) {
    include('db_conn.php');
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
    $stmt = $mysqli->prepare("INSERT INTO message (user, message_text, image) VALUES (?, ?, ?)");
    $user = $_POST['user'];
    $message_text = $_POST['message_text'];
    $image = $_FILES['image']['name'];
    $stmt->bind_param("sss", $user, $message_text, $image);
    $stmt->execute();
}