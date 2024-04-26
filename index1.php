<?php
require_once 'model.php';
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    Warehouse::delete($deleteId);
    header("Location: index1.php");
    exit;
}
$arr = Warehouse::select()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image.png" href="assets/baymax.png">
    <title>Intaan</title>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
      <i id="btn"><span class="material-symbols-outlined">menu</span></i>
      <i id="cancel"><span class="material-symbols-outlined">close</span></i>
    </label>
    <div class="sidebar">
    <header>Clothing Warehouse</header>
  <ul>
    <li><a href="#"><i></i>Dashboard</a></li>
    <li><a href="index.php"><i></i>Staff</a></li>
    <li><a href="#"><i></i>Stock</a></li>
    <li><a href="login.php"><i></i>Logout</a></li>
  </ul>
</div>
<div class="container1">
    <div class="bar">
        <p class="bar1">Clothing Warehouse</p>
        <a class="logout" href="login.php">LOGOUT</a>
    </div>
    <h1 class="hider">Staff Warehouse</h1>
    <div class="tambah">
        <a class="tadd" href="tambahdata.php">Add Staff<span class="material-symbols-outlined">library_add</span></a>
    </div>
    <div class="container2">
        <div class="tabel">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Staff Name</th>
                    <th>Phone Number</th>
                    <th>Salary</th>
                    <th>Customize</th>
                </tr>               
                <?php 
                    for ($i = 0; $i < count($arr['ID']); $i++) {
                ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td class="nama1"><?= $arr['Name'][$i] ?></td>
                            <td><?= $arr['Phone'][$i] ?></td>
                            <td><?= $arr['Salary'][$i] ?></td>
                            <td class="btncrud">
                                <a class="tupd" href="gantidata.php?id=<?= $arr['ID'][$i] ?>">Update<span class="material-symbols-outlined">cycle</span></a>
                                <a class="tdlt" href="index1.php?delete_id=<?= $arr['ID'][$i] ?>" onclick="return confirm('Delete?')">Delete<span class="material-symbols-outlined">delete</span></a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </table>
            <div class="bar2">
                <a class="logout2" href="login.php">LOGOUT</a>
            </div>
            <div class="copy">
                <p>&copy; 2024 IntaanLailatul. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
</body>        
</html>