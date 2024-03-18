<!DOCTYPE html>
<html>
<head>
    <title>Определение времени года</title>
</head>
<body>
<h2>Определение времени года</h2>
<form method="post">
    <label>Введите номер месяца (от 1 до 12):</label><br>
    <input type="text" name="monthNumber"><br><br>
    <input type="submit" value="Определить время года">
</form>

<?php
// Проверяем, был ли отправлен номер месяца из формы
if(isset($_POST['monthNumber'])) {
    // Получаем номер месяца из формы
    $monthNumber = intval($_POST['monthNumber']);

    // Определяем время года в зависимости от номера месяца
    switch ($monthNumber) {
        case 12:
        case 1:
        case 2:
            echo "<p>Зима</p>";
            break;
        case 3:
        case 4:
        case 5:
            echo "<p>Весна</p>";
            break;
        case 6:
        case 7:
        case 8:
            echo "<p>Лето</p>";
            break;
        case 9:
        case 10:
        case 11:
            echo "<p>Осень</p>";
            break;
        default:
            echo "<p>Некорректный номер месяца. Введите число от 1 до 12.</p>";
    }
}
?>
</body>
</html>