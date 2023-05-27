<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Підключення стилів Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>User Data Validation</title>
</head>

<body>
<div class="container">
    <h1>User Data Validation</h1>

    <!-- Форма для введення даних користувача -->
    <form method="POST">
        <div class="form-group">
            <label for="last-name">Прізвище:</label>
            <input type="text" class="form-control" id="last-name" name="last-name">
        </div>
        <div class="form-group">
            <label for="first-name">Ім'я:</label>
            <input type="text" class="form-control" id="first-name" name="first-name">
        </div>
        <div class="form-group">
            <label for="email">Електронна пошта:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="birthdate">Дата народження:</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate">
        </div>

        <button type="submit" class="btn btn-primary">Перевірити дані</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Отримання введених даних користувача
        $lastName = $_POST["last-name"];
        $firstName = $_POST["first-name"];
        $email = $_POST["email"];
        $birthdate = $_POST["birthdate"];

        // Перевірка, чи поля не є порожніми
        if (empty($lastName) || empty($firstName) || empty($email) || empty($birthdate)) {
            echo "<p class='text-danger'>Будь ласка, заповніть всі поля.</p>";
        } else {
            // Перевірка прізвища на наявність спеціальних символів (дозволений лише апостроф)
            if (!preg_match("/^[a-zA-Zа-яА-ЯіІїЇєЄ'-]+$/u", $lastName)) {
                echo "<p class='text-danger'>Фамілія може містити лише букви, апостроф та дефіс.</p>";
            }

            // Перевірка імені на наявність спеціальних символів
            if (!preg_match("/^[a-zA-Zа-яА-ЯіІїЇєЄ'-]+$/u", $firstName)) {
                echo "<p class='text-danger'>Ім'я може містити лише букви, апостроф та дефіс.</p>";
            }

            // Перевірка правильності введеної електронної пошти
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p class='text-danger'>Будь ласка, введіть коректну електронну пошту.</p>";
            }

            // Перевірка правильності введеної дати народження
            $birthdateTimestamp = strtotime($birthdate);
            $currentDate = strtotime(date("Y-m-d"));
            if (!$birthdateTimestamp || $birthdateTimestamp > $currentDate) {
                echo "<p class='text-danger'>Будь ласка, введіть коректну дату народження. А також дату що не більша за поточну</p>";
            }
        }
    }
    ?>
</div>
<p> </p>
<p><a href="list_task.php" class="btn btn-primary" role="button">List Task</a> </p>
<p> </p>
<p><a href="https://github.com/danridepdanri/all_task/blob/main/task16" class="btn btn-primary" role="button">Git</a> </p>
<!-- Підключення скриптів Bootstrap та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>