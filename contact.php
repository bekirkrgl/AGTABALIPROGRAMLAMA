<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost:3306"; // Sunucu adresi
$username = "root";        // MySQL kullanıcı adı
$password = "Krglu.2001";            // MySQL şifresi
$dbname = "contact_db";    // Veritabanı adı

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? null;       
    $email = $_POST['email'] ?? null;    
    $message = $_POST['message'] ?? null;     
    if (empty($name) || empty($email) || empty($message)) {
        echo "Lütfen tüm alanları doldurun!";
        exit;
    }

        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Mesaj başarıyla kaydedildi!";
    } else {
        echo "Hata: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
