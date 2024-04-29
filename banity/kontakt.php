<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="kontakt.css">
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
    </nav>
    <div class="contact-form">
        <h2>Skontaktuj się z nami</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Imię i nazwisko" required>
            <input type="email" name="email" placeholder="Twój adres e-mail" required>
            <textarea name="message" placeholder="Twoja wiadomość" rows="5" required></textarea>
            <input type="submit" value="Wyślij">
        </form>
    </div>
</body>
</html>
