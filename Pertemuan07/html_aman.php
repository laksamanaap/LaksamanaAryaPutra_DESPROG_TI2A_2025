<!DOCTYPE html>
<html>
<head>
    <title>Validasi Email</title>
</head>
<body>
    <form method="post" action="">
        <label for="email">Masukkan Email:</label>
        <input type="text" name="email" id="email" style="width: 200px;">
        <input type="submit" value="Submit">
    </form>
    <hr>
    <h3>Hasil Validasi:</h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: <b>" . htmlspecialchars($email) . "</b> adalah email yang valid.";
        } else {
            echo "Input: <b>" . htmlspecialchars($email) . "</b> BUKAN format email yang valid.";
        }
    }
    ?>
</body>
</html>