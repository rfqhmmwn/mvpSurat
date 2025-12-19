<?php
class user{
   function get_data() {
        global $db;
        $query = $db->query("SELECT * FROM `data`");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function add_data($nama, $surat, $alamat) {
        global $db;
        $query = $db->prepare("INSERT INTO `data` (id, nama, surat, alamat, status) VALUES (:id, :nama, :surat, :alamat, :status)");
        $query->execute([
            'id' => null,
            'nama' => "$nama",
            'surat' => "$surat",
            'alamat' => "$alamat",
            'status' => "PENDING"
        ]);
        if ($result == true){
            $_SESSION['message'] = "Berhasil menambahkan group.";
        } 
        else {
            $_SESSION['message'] = "gagal menambahkan group.";
        }
        
        echo '<script>window.location.href = "index.php"</script>';
    }
}
?>