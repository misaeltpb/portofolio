<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $pesan = $_POST['message'];
    $to = "misaeltampubolon9@gmail.com"; // Ganti dengan email Anda
    $subject = "Pesan dari Portofolio Website";
    $headers = "From: $email";

    $body = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Gagal mengirim pesan.";
    }
}
?>
