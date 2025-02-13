<!DOCTYPE htm lang="id">
<html>

<head>
  <? include 'head.php'; ?>

  <link rel="stylesheet" href="<?= ASSETS_CSS; ?>app.min.css" />
</head>

<body class="body--prepared hold-transition">
  <!--header-->
  <header class="header <?= $navigation_menu === 'beranda' ? 'header--o' : ''; ?>">
    <div class="container">
    </div>
  </header>
  <!--end-header-->

  <!-- main-site -->
  <main class="main-site <?= $navigation_menu === 'beranda' ? 'main-site--np' : ''; ?>">
