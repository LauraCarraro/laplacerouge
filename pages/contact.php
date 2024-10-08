<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - La Place Rouge</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
    <main>
        <section>
            <h2>Contactez-nous</h2>
            <form id="contact-form" action="send_email.php" method="POST">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
