<?php
require_once 'config.php';

class Warehouse {
    static function select(){
        global $conn;
        $sql = "SELECT * FROM warehouse";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function selectById($id) {
        global $conn;
        $sql = "SELECT * FROM warehouse WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    static function insert( $Name, $Phone, $Salary) {
        global $conn;
        $sql = "INSERT INTO warehouse(Name, Phone, Salary) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $Name, $Phone, $Salary);
        $stmt->execute();
    }
    static function update($id, $Nameupdt, $Phoneupdt, $Salaryupdt) {
        global $conn;
        $sql = "UPDATE warehouse SET Name = ?, Phone = ?, Salary = ? WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssi', $Nameupdt, $Phoneupdt, $Salaryupdt, $id);
        $stmt->execute();
    }
    static function delete($id) {
        global $conn;
        $sql = "DELETE FROM warehouse WHERE ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $id);
        $stmt->execute();
    }
}

?>