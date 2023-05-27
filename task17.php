<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Підключення стилів Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>File Upload</title>
</head>

<body>
<div class="container">
    <h1>File Upload</h1>

    <!-- Форма для завантаження файлу -->
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Виберіть файл для завантаження:</label>
            <input type="file" class="form-control-file" id="file" name="file">
        </div>

        <button type="submit" class="btn btn-primary">Завантажити файл</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $uploadDir = "F:/ospanel/domains/"; // Шлях до папки завантаження файлів
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"]; // Дозволені розширення файлів
        $maxFileSize = 20 * 1024 * 1024; // Максимальний розмір файлу (20 MB)

        $file = $_FILES["file"];

        // Перевірка, чи вибраний файл для завантаження
        if ($file["error"] === UPLOAD_ERR_NO_FILE) {
            echo "<p class='text-danger'>Будь ласка, виберіть файл для завантаження.</p>";
        } else {
            // Перевірка розміру файлу
            if ($file["size"] > $maxFileSize) {
                echo "<p class='text-danger'>Розмір файлу перевищує допустимий ліміт (20 MB).</p>";
            } else {
                $extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

                // Перевірка розширення файлу
                if (!in_array($extension, $allowedExtensions)) {
                    echo "<p class='text-danger'>Неприпустиме розширення файлу. Дозволені формати: jpg, jpeg, png, gif.</p>";
                } else {
                    $uploadPath = $uploadDir . basename($file["name"]);

                    // Перевірка, чи файл вже існує в папці завантаження
                    if (file_exists($uploadPath)) {
                        echo "<p class='text-danger'>Файл з таким ім'ям вже існує.</p>";
                    } else {
                        // Завантаження файлу
                        if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                            echo "<p class='text-success'>Файл успішно завантажено.</p>";
                        } else {
                            echo "<p class='text-danger'>Сталася помилка під час завантаження файлу. Будь ласка, спробуйте знову.</p>";
                        }
                    }
                }
            }
        }
    }
    ?>
</div>
<p> </p>
<p><a href="list_task.php" class="btn btn-primary" role="button">List Task</a> </p>
<p> </p>
<p><a href="https://github.com/danridepdanri/all_task/blob/main/task17" class="btn btn-primary" role="button">Git</a> </p>
<!-- Підключення скриптів Bootstrap та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>