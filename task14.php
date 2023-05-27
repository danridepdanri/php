<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Підключення стилів Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Average Positive Numbers</title>
</head>

<body>
<div class="container">
    <h1>Average Positive Numbers</h1>

    <!-- Форма для введення масиву цілих чисел -->
    <form method="POST">
        <div class="form-group">
            <label for="number-array">Введіть масив із 10 цілих чисел (через кому):</label>
            <input type="text" class="form-control" id="number-array" name="number-array">
        </div>

        <button type="submit" class="btn btn-primary">Знайти середнє арифметичне</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Отримання рядка з масивом цілих чисел
        $numberArrayInput = $_POST["number-array"];

        // Розбивання рядка на окремі числа
        $numbers = explode(",", $numberArrayInput);

        // Ініціалізація змінних для підрахунку середнього арифметичного
        $sum = 0;
        $count = 0;

        // Обхід масиву чисел та підрахунок середнього арифметичного додатніх чисел
        foreach ($numbers as $number) {
            // Перевірка, чи число є додатнім
            if ($number > 0) {
                $sum += $number;
                $count++;
            }
        }

        // Розрахунок середнього арифметичного
        if ($count > 0) {
            $average = $sum / $count;

            // Виведення середнього арифметичного
            echo "<p>Середнє арифметичне додатніх чисел: $average</p>";
        } else {
            // Виведення повідомлення про відсутність додатніх чисел
            echo "<p>У введеному масиві немає додатніх чисел</p>";
        }
    }
    ?>
</div>
<p> </p>
<p><a href="list_task.php" class="btn btn-primary" role="button">List Task</a> </p>
<p> </p>
<p><a href="https://github.com/danridepdanri/all_task/blob/main/task14" class="btn btn-primary" role="button">Git</a> </p>

<!-- Підключення скриптів Bootstrap та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>