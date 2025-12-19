<?php
include "inc/user/header_user.php";
include "inc/config.php";
$get = new user;

if (isset($_POST['submit']) == TRUE) {
    $nama = $_POST['nama'];
    $surat = $_POST['surat'];
    $alamat = $_POST['alamat'];

    $get->add_data($nama, $surat, $alamat);
}
?>

                    <tbody>
                        <?php 
                        $data = $get->get_data();
                        if (count($data) > 0):
                            foreach ($data as $row) : 
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['surat']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td>
                                    <span class="status-badge <?php 
                                        if ($row['status'] == 'Pending') echo 'status-pending';
                                        elseif ($row['status'] == 'Approved') echo 'status-approved';
                                        elseif ($row['status'] == 'Rejected') echo 'status-rejected';
                                        else echo 'status-pending';
                                    ?>">
                                        <?php echo $row['status']; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php 
                            endforeach;
                        else:
                        ?>
                            <tr>
                                <td colspan="5">
                                    <div class="empty-state">
                                        <i class="material-icons">inbox</i>
                                        <p>No data available</p>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="index.php" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Data</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required name="nama" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Surat</label>
                            <input type="text" class="form-control" required name="surat" placeholder="Enter document type">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" required name="alamat" placeholder="Enter address"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-cancel" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn-submit" name="submit">Add Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>