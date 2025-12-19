<?php
    include 'inc/admin/header.php';      
    $admin = new admin;
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 text-gray-800 ">Data</h1>
            <?php 
                session_message();
            ?>
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($admin->get_data() as $row) : ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['surat']; ?></td>
                                    <td><?php echo $row['alamat']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                         <a href="admin.php?action=hapus&id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                         <a href="form_edit_data.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php
                                if(isset($_GET['action']) == 'hapus' && isset($_GET['id'])) 
                                    {   
                                        $id = $_GET['id'];
                                        $admin->delete_data($id);                            
                                    }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php
    include 'inc/admin/footer.php';   
?>

