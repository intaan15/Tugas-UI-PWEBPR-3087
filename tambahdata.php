<?php
require_once 'model.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newname = $_POST['newname'];
    $newphone = $_POST['newphone'];
    $newsalary = $_POST['newsalary'];
    Warehouse::insert($newname, $newphone, $newsalary);

    echo '<script>window.location.href = "index1.php";</script>';
    exit;
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
            <div class="atas"><p>Clothing Warehouse</p></div>
            <img class="bawah" src="assets/bg1.png" alt="">
        </div>
        <form class="pertama" id="ins" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="formregis">
                <label for="nama1">Staff Name</label>
                <input type="text" id="newname" name="newname" placeholder="Input Staff" autocomplete="off">
            </div>
            <div class="formregis">
                <label for="Nomer">Phone Number</label>
                <input type="text" id="newphone" name="newphone" placeholder="Input Phone Number" autocomplete="off">
            </div>
            <div class="formregis">
                <label for="gaji">Salary</label>
                <input type="text" id="newsalary" name="newsalary" placeholder="Input Salary" autocomplete="off">
            </div>
            <button type="submit" class="btnsend">SEND</button>
        </form>
    </div>    
    <script>
        document.getElementById('ins').addEventListener('submit', function() {
            window.location.href = 'index1.php';
        });
    </script>
</body>
</html>