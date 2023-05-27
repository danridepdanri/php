<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Підключення стилів Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Quadratic Equation Solver</title>
</head>

<body>
<div class="container">
    <h1>Quadratic Equation Solver</h1>

    <!-- Форма для введення коефіцієнтів квадратного рівняння -->
    <form method="POST">
        <div class="form-group">
            <label for="coefficient-a">Коефіцієнт a:</label>
            <input type="number" class="form-control" id="coefficient-a" name="coefficient-a">
        </div>

        <div class="form-group">
            <label for="coefficient-b">Коефіцієнт b:</label>
            <input type="number" class="form-control" id="coefficient-b" name="coefficient-b">
        </div>

        <div class="form-group">
            <label for="coefficient-c">Коефіцієнт c:</label>
            <input type="number" class="form-control" id="coefficient-c" name="coefficient-c">
        </div>

        <button type="submit" class="btn btn-primary">Розв'язати</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Отримання значень коефіцієнтів з форми
        $a = $_POST["coefficient-a"];
        $b = $_POST["coefficient-b"];
        $c = $_POST["coefficient-c"];

        // Розв'язання квадратного рівняння
        $delta = $b * $b - 4 * $a * $c;

        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);

            // Виведення розв'язків
            echo "<p>Розв'язки рівняння:</p>";
            echo "<p>x1 = $x1</p>";
            echo "<p>x2 = $x2</p>";
        } elseif ($delta === 0) {
            $x = -$b / (2 * $a);

            // Виведення подвійного розв'язку
            echo "<p>Подвійний розв'язок:</p>";
            echo "<p>x = $x</p>";
        } else {
            // Виведення повідомлення про відсутність розв'язків
            echo "<p>Рівняння не має розв'язків у множині дійсних чисел.</p>";
        }
    }
    ?>
</div>
<p> </p>
<p><a href="list_task.php" class="btn btn-primary" role="button">List Task</a> </p>
<p> </p>
<p><a href="https://github.com/danridepdanri/all_task/blob/main/task13" class="btn btn-primary" role="button">Git</a> </p>

<!-- Підключення скриптів Bootstrap та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>