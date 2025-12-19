<?php
    include 'inc/admin/header.php';      
    $admin = new admin;
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 mb-2 text-gray-800 ">Data</h1>
            <?php 
                session_message();
            ?>
            <a data-toggle="modal" data-target="#addEmployeeModal" class="btn btn-primary d-sm-inline-block d-none">Add</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jenis Surat</th>
                                <th>Alamat</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                        $data = $admin->get_data();
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
                                        elseif ($row['status'] == 'Accept') echo 'status-approved';
                                        elseif ($row['status'] == 'Canceled') echo 'status-rejected';
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

    </div>
    <!-- /.container-fluid -->




    <!-- Add Modal -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="index.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Data</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
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

<?php
    include 'inc/admin/footer.php';   
?>