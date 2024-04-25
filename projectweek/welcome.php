<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <button class="logout-btn" onclick="location.href='logout.php';">Logout</button>
    </div>
    <div class="content">
        <div class="block"></div>
    </div>
    <h1 class="title">Neem contact op met je familie</h1>
        <div class="gegevens">

    <div class="input-gegevens">
                <form action="https://formspree.io/f/mleqakdo"
                     method="POST" class="contact-input">
                    <input type="text" name="Name" placeholder="Jouw Naam" required>
                        <input type="email" name="email" placeholder="Jouw Email" required>
                        <textarea name="Message" rows="6" placeholder="Jouw Bericht"></textarea>
                    <button type="submit" class="contact-button">Versturen</button>
                 </form>
        </div>
    </div>
</body>
</html>
