<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // ذخیره در فایل (یا دیتابیس)
    $data = "$fullname, $email, $phone, $password\n";
    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "ثبت‌نام با موفقیت انجام شد 🎉";
}
?>