<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Підключення стилів Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Додаткова стилізація */
        p {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
    <title>Greeting Example</title>
</head>

<body>
<div class="container">
    <h1>Greeting Example</h1>

    <?php
    // Отримання поточного часу
    $currentHour = date('G');

    // Визначення привітання в залежності від часу
    if ($currentHour >= 6 && $currentHour < 9) {
        $greeting = 'Доброго ранку';
    } elseif ($currentHour >= 9 && $currentHour < 20) {
        $greeting = 'Доброго дня';
    } else {
        $greeting = 'Доброго вечора';
    }
    ?>

    <p><?php echo $greeting; ?></p>
</div>
<p> </p>
<p><a href="list_task.php" class="btn btn-primary" role="button">List Task</a> </p>
<p> </p>
<p><a href="https://github.com/danridepdanri/all_task/blob/main/task12" class="btn btn-primary" role="button">Git</a> </p>
<script>
<!-- Підключення скриптів Bootstrap та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>