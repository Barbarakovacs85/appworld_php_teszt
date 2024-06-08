<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Számológép</title>
</head>
<body>
    <form action="calculator.php" method="post" >
        <input type="number" name="num1" placeholder="Irj egy számot">
        <input type="number" name="num2" placeholder="Irj egy másik számot">
        <select name="operation">
        <option value="add">Összeadás</option>
        <option value="sub">Kivonás</option>
        <option value="mul">Szorzás</option>
        <option value="div">Osztás</option>
        </select>
    </form>
</body>
</html>