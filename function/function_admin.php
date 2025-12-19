<?php
class admin
{
    //groups
    // function get_groups() {
    //     global $db;
    //     $query = $db->query("SELECT * FROM `groups`");
    //     return $query->fetch_all(MYSQLI_ASSOC);
    // }

    function get_data() {
        global $db;
        $query = $db->query("SELECT * FROM `data`");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // function delete_groups($id) {
    //     global $db;
    //     $query = "DELETE FROM `groups` WHERE id = $id";
    //     $db->query($query);
    //     $_SESSION['message'] = "Groups berhasil dihapus.";

    //     echo '<script>window.location.href = "groups.php"</script>';
    // }

    function delete_data($id) {
        global $db;
        $query = $db->prepare("DELETE FROM `data` WHERE id = :id");
        $query->execute(['id' => $id]);
        $_SESSION['message'] = "Data berhasil dihapus.";

        echo '<script>window.location.href = "groups.php"</script>';
    }
}
?>