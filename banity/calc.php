
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="calc.css">
    <style>

    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="logo">
        <h1>My Page</h1>
    </header>
    <hr>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li id='uul'>
                <a href="">Narzędzia</a>
                <ul id='calc'>
                    <li><a href="calc.php">Kalkulator</a></li>
                </ul>
            </li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
        <div class="calculator">
            <h2>Kalkulator</h2>
            <form method="post" action="">
                <input type="number" name="num1" placeholder="Podaj pierwszą liczbę" required>
                <select name="operator" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="num2" placeholder="Podaj drugą liczbę" required>
                <input type="submit" value="Oblicz">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operator = $_POST["operator"];
                $result = 0;
                switch ($operator) {
                    case "+":
                        $result = $num1 + $num2;
                        break;
                    case "-":
                        $result = $num1 - $num2;
                        break;
                    case "*":
                        $result = $num1 * $num2;
                        break;
                    case "/":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            echo "Nie można dzielić przez zero!";
                        }
                        break;
                    default:
                        echo "Nieprawidłowy operator";
                }
                echo "<p>Wynik: $result</p>";
            }
            ?>
        </div>
    </nav>
</body>
</html>

