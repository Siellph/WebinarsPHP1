<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="GET">
        <input type="number" name="firstnum" placeholder="Введите первое число">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="secondnum" placeholder="Введите второе число">
        <input type="submit" value="Посчитать">
    </form>

</body>

</html>