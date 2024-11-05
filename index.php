<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="text-center p-3">Membuat Website Dinamis</h1>
    </header>
    
    <!-- Menu -->
    <?php include "includes/navbar.php"; ?>
    <!-- ./Menu -->
    
    <!-- Konten -->
    <div class="container mt-3">
        <?php include "konten.php"; ?>
    </div>
    <!-- ./Konten -->
    
    <footer>
        <div class="text-bg-dark p-3 text-center mt-5">
            Pemrograman Web 1 @ <?= date("Y"); ?>
        </div>
    </footer>

    <!-- JS Scripts -->
    <script src="assets/jquery/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>
</html>