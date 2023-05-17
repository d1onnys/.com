<?php
  // Получение данных из формы ввода
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Проверка правильности введенных данных
  if ($username === 'Denny' && $password === '23032002dD') {
    header('Location: Denny-page.html');
    exit;
  } elseif ($username === 'Archi' && $password === 'archi123') {
    header('Location: archi-page.html');
    exit;
  } elseif ($username === 'Andron1kos' && $password === 'Andron1kos') {
    header('Location: Danny-page.html');
    exit;
  } elseif ($username === 'bogdankrut1' && $password === 'denislox2') {
    header('Location: Bodya-page.html');
    exit;
  } else {
    header('Location: page404.html');
    exit;
  }

  header('Location: main.html');
?>


