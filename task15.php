<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Підключення стилів Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Average Elements</title>
</head>

<body>
<div class="container">
    <h1>Average Elements</h1>

    <!-- Форма для введення масиву одновимірних чисел -->
    <form method="POST">
        <div class="form-group">
            <label for="number-array">Введіть масив одновимірних чисел (через кому):</label>
            <input type="text" class="form-control" id="number-array" name="number-array">
        </div>

        <button type="submit" class="btn btn-primary">Знайти середнє арифметичне</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Отримання рядка з масивом одновимірних чисел
        $numberArrayInput = $_POST["number-array"];

        // Розбивання рядка на окремі числа
        $numbers = explode(",", $numberArrayInput);

        // Ініціалізація змінних для підрахунку середнього арифметичного на парних та непарних позиціях
        $sumEven = 0;
        $countEven = 0;
        $sumOdd = 0;
        $countOdd = 0;

        // Обхід масиву чисел та підрахунок сум та кількостей на парних та непарних позиціях
        foreach ($numbers as $key => $number) {
            if ($key % 2 === 0) { // Парна позиція
                $sumEven += $number;
                $countEven++;
            } else { // Непарна позиція
                $sumOdd += $number;
                $countOdd++;
            }
        }

        // Розрахунок середнього арифметичного на парних та непарних позиціях
        $averageEven = $countEven > 0 ? $sumEven / $countEven : 0;
        $averageOdd = $countOdd > 0 ? $sumOdd / $countOdd : 0;

        // Виведення масиву та результату
        echo "<p>Масив чисел: " . implode(", ", $numbers) . "</p>";
        echo "<p>Середнє арифметичне на парних позиціях: $averageEven</p>";
        echo "<p>Середнє арифметичне на непарних позиціях: $averageOdd</p>";
    }
    ?>
</div>
<p> </p>
<p><a href="list_task.php" class="btn btn-primary" role="button">List Task</a> </p>
<p> </p>
<p><a href="https://github.com/danridepdanri/all_task/blob/main/task15" class="btn btn-primary" role="button">Git</a> </p>

<!-- Підключення скриптів Bootstrap та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>