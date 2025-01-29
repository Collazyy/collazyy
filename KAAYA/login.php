<?php

include 'config.php';
session_start();

// Proses Login
if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    // Verifikasi kredensial admin yang sudah ditentukan
    $admin_email = 'dzuliantoni@gmail.com';
    $admin_pass = md5('upbu budiarto');

    if ($email === $admin_email && $pass === $admin_pass) {
        $_SESSION['admin_name'] = 'Admin'; // Admin name hardcoded, you can modify as needed
        $_SESSION['admin_email'] = $email;
        $_SESSION['admin_id'] = 1; // Hardcoded admin ID, adjust accordingly
        header('location:admin_page.php');
        exit();
    }

    // Verifikasi untuk pengguna biasa
    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {

        $row = mysqli_fetch_assoc($select_users);

        if ($row['user_type'] == 'user') {

            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location:index.php');
            exit();

        }

    } else {
        $message[] = 'Incorrect email or password!';
    }

}

// Proses Pendaftaran
if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    // Pastikan tidak ada pendaftaran dengan tipe admin
    $user_type = 'user'; // Hardcoded as 'user', you can adjust accordingly

    // Cek apakah email sudah terdaftar
    $check_email = mysqli_query($conn, "SELECT email FROM `users` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($check_email) > 0) {
        $message[] = 'Email already exists!';
    } else {
        // Daftar pengguna baru dengan tipe 'user'
        $insert_user = mysqli_query($conn, "INSERT INTO `users` (name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user_type')") or die('query failed');

        if ($insert_user) {
            $message[] = 'Registration successful!';
        } else {
            $message[] = 'Registration failed!';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: black;
}

.form-container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.tab {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: 20px;
    border-bottom: 2px solid #ddd;
    margin-bottom: 0;
}

.tab button {
    background: none;
    border: none;
    font-size: 24px; /* Membesarkan ukuran font */
    font-weight: bold;
    padding: 15px 20px; /* Memberikan padding yang lebih besar */
    cursor: pointer;
    color: #2575fc;
    transition: all 0.3s ease;
    width: 50%; /* Membuat tombol tab lebih lebar */
    text-align: center; /* Menyelaraskan teks ke tengah */
}

.tab button:hover {
    color: #6a11cb;
}

.tab button.active {
    border-bottom: 2px solid #2575fc;
    color: #6a11cb;
}

.box {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.box:focus {
    outline: none;
    border-color: #2575fc;
}

.btn {
    width: 100%;
    padding: 14px;
    background-color: #2575fc;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.btn:hover {
    background-color: #6a11cb;
}

p {
    text-align: center;
    margin-top: 10px;
    color: #333;
}

p a {
    color: #2575fc;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}

.message {
    background-color: #f44336;
    color: white;
    padding: 15px;
    margin: 10px 0;
    text-align: center;
    border-radius: 5px;
}

.message span {
    font-weight: bold;
}

.message i {
    color: white;
    cursor: pointer;
    padding-left: 10px;
}

.form-container form {
    display: flex;
    flex-direction: column;
    width: 100%;
}

.form-container .register-form {
    display: none;
}

.form-container .login-form {
    display: block;
}

    </style>
</head>
<body>

<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<!-- Tab Navigation -->
<div class="form-container">
    <div class="tab">
        <button class="active" onclick="showForm('login')">Login</button>
        <button onclick="showForm('register')">Register</button>
    </div>

    <!-- Login Form -->
    <form action="" method="post" id="login-form" class="login-form">
        <h3>Login</h3>
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="password" name="password" placeholder="Enter your password" required class="box">
        <input type="submit" name="submit" value="Login Now" class="btn">
        <p>Don't have an account? <a href="javascript:void(0);" onclick="showForm('register')">Register now</a></p>
    </form>

    <!-- Register Form -->
    <form action="" method="post" id="register-form" class="register-form">
        <h3>Register</h3>
        <input type="text" name="name" placeholder="Enter your name" required class="box">
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="password" name="password" placeholder="Enter your password" required class="box">
        <input type="submit" name="register" value="Register Now" class="btn">
        <p>Already have an account? <a href="javascript:void(0);" onclick="showForm('login')">Login here</a></p>
    </form>
</div>

<script>
    function showForm(formType) {
        // Hide both forms
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'none';
        
        // Show the selected form
        if (formType === 'login') {
            document.getElementById('login-form').style.display = 'block';
            document.querySelector('.tab button.active').classList.remove('active');
            document.querySelector('.tab button:nth-child(1)').classList.add('active');
        } else if (formType === 'register') {
            document.getElementById('register-form').style.display = 'block';
            document.querySelector('.tab button.active').classList.remove('active');
            document.querySelector('.tab button:nth-child(2)').classList.add('active');
        }
    }
</script>

</body>
</html>
