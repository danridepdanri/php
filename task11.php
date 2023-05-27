<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Підключення стилів Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Form Example</title>
</head>

<body>
<div class="container">
    <h1>Form Example</h1>

    <!-- Форма -->
    <form method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="num1">Number 1:</label>
            <input type="number" class="form-control" id="num1" name="num1">
        </div>

        <div class="form-group">
            <label for="num2">Number 2:</label>
            <input type="number" class="form-control" id="num2" name="num2">
        </div>

        <div class="form-group">
            <label for="num3">Number 3:</label>
            <input type="number" class="form-control" id="num3" name="num3">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Отримання значень з форми
        $name = $_POST["name"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        // Виведення рядкової змінної
        echo "<p>Рядкова змінна: $name</p>";

        // Обчислення виразу з числовими змінними
        $result = $num1 + $num2 * $num3;

        // Виведення результату
        echo "<p>Результат: $result</p>";
    }
    ?>
    <p> </p>
    <p><a href="list_task.php" class="btn btn-primary" role="button">List Task</a> </p>
    <p> </p>
    <p><a href="https://github.com/danridepdanri/all_task/blob/main/task11" class="btn btn-primary" role="button">Git</a> </p>
</div>

<!-- Підключення скриптів Bootstrap та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>