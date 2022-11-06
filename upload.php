<?php
if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла.';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'http://myproject.loc/uploads/' . $srcFileName;
    }

    //1. проверка на размер файла
    $fileSize = $file['size'];
    if ($fileSize > 8 * 1024 * 1024) {
        $error = 'размер файла слишком большой';
    }

    //2.
    elseif ($file['error'] == UPLOAD_ERR_INI_SIZE) {
        $error = 'размер файла слишком большой';
    }

    //3.
    $limitWidth = 1280;
    $limitHeight = 720;
    $getImageSize = getimagesize($file['tmp_name']);
    if ($getImageSize['1'] > $limitWidth || $getImageSize['0'] > $limitHeight) {
        $error = 'разрешение картинки слишком велико';
    }
}
?>
<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if (!empty($error)): ?>
    <?= $error ?>
<?php elseif (!empty($result)): ?>
    <?= $result ?>
<?php endif; ?>
<br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>