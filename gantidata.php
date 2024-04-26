<?php
require_once 'model.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = Warehouse::selectById($id);

    if ($db){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Nameupdt']) && isset($_POST['Phoneupdt']) && isset($_POST['Salaryupdt'])) {
                $Nameupdt = $_POST['Nameupdt'];
                $Phoneupdt = $_POST['Phoneupdt'];
                $Salaryupdt = $_POST['Salaryupdt'];
                Warehouse::update($id, $Nameupdt, $Phoneupdt, $Salaryupdt);
                header("Location: index1.php");
                exit;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kedua.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image.png" href="assets/baymax.png">
    <title>Intaan</title>
</head>
<body>
    <div class="container">
        <div class="kedua">
            <div class="atas"><p>Update Clothing Warehouse</p></div>
            <img class="bawah" src="assets/bg1.png" alt="">
        </div>
        <form class="pertama" id="upt" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>" method="post"> 
            <div class="formregis">
                <label for="nama1">Staff Name</label>
                <input type="text" id="Nameupdt" name="Nameupdt" placeholder="Input Staff" autocomplete="off">
            </div>
            <div class="formregis">
                <label for="Nomer">Phone Number</label>
                <input type="text" id="Phoneupdt" name="Phoneupdt" placeholder="Input Phone Number" autocomplete="off">
            </div>
            <div class="formregis">
                <label for="gaji">Salary</label>
                <input type="text" id="Salaryupdt" name="Salaryupdt" placeholder="Input Salary" autocomplete="off">
            </div>
            <button type="submit" class="btnsend">SEND</button>
        </form>
    </div>    
    <script>
        document.getElementById('ins').addEventListener('send', function() {
            window.location.href = 'index1.php';
        });
    </script>
</body>
</html>