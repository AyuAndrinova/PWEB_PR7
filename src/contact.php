<?php

require_once 'database.php';

class Contact{
    static function select(){
        global $conn;
        $sql = "SELECT * FROM `tb_owner_toko`";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value){
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert($ID, $No, $Owner) {
        global $conn;
        $sql = "INSERT INTO`tb_owner_toko`(ID, No, Owner) VALUES(?,?,?)";
        $stnt = $conn->prepare($sql);
        $stnt->bind_param("sss", $ID, $No, $Owner);
        $stnt->execute();
        $result = $stnt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function update($ID, $No, $Owner) {
        global $conn;
        $sql = "UPDATE `tb_owner_toko` SET No=?, Owner=? WHERE ID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $No, $Owner, $ID);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function delete($ID) {
        global $conn;
        $sql = "DELETE FROM `tb_owner_toko` WHERE ID=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $ID);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }
}
?>