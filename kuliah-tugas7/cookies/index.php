<?php
// Check if a cookie exists for the preferred language
if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
} else {
    $language = 'not set'; // Default message if no cookie is found
}

// Handle the form submission
if (isset($_POST['submit'])) {
    $language = $_POST['language'];
    // Set a cookie for the language, valid for 1 week
    setcookie('language', $language, time() + (7 * 24 * 60 * 60)); // 7 days
    header("Location: index.php"); // Redirect to avoid resubmission on refresh
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pemilihan Bahasa</title>
</head>
<body>
    <h1>Pilih bahasa yang anda kuasai</h1>

    <form method="POST" action="index.php">
        <label for="language">Bahasa:</label>
        <select name="language" id="language">
            <option value="Inggris" <?= ($language == 'Inggris') ? 'selected' : '' ?>>Inggris</option>
            <option value="Spanyol" <?= ($language == 'Spanyol') ? 'selected' : '' ?>>Spanyol</option>
            <option value="Perancis" <?= ($language == 'Perancis') ? 'selected' : '' ?>>Perancis</option>
            <option value="C++" <?= ($language == 'C++') ? 'selected' : '' ?>>C++</option>
            <option value="Python" <?= ($language == 'Python') ? 'selected' : '' ?>>Python</option>
            <option value="Java" <?= ($language == 'Java') ? 'selected' : '' ?>>Java</option>
        </select>
        <input type="submit" name="submit" value="Save">
    </form>

    <h2>Your selected language is: <?= htmlspecialchars($language) ?></h2>
</body>
</html>
