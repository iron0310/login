<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 여기서 실제 사용자 인증 과정을 수행합니다 (예: 데이터베이스 확인)
    // 간단히 예를 들어, 기본 사용자 이름과 비밀번호를 사용하여 인증
    if ($username == 'admin' && $password == 'password123') {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
