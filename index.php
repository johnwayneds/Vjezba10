<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Preuzimanje unesene rečenice
    $sentence = $_POST['sentence'];

    // Prebrojavanje riječi u rečenici
    $wordCount = str_word_count($sentence);
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prebrojavanje riječi</title>
</head>
<body>

<h2>Prebrojavanje riječi u rečenici</h2>

<!-- Forma za unos rečenice -->
<form action="" method="POST">
    <label for="sentence">Unesite rečenicu:</label><br>
    <textarea id="sentence" name="sentence" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Pošaljite">
</form>

<?php
// Ispis broja riječi nakon slanja forme
if (isset($wordCount)) {
    echo "<p>Broj riječi u rečenici: $wordCount</p>";
}
?>

</body>
</html>
