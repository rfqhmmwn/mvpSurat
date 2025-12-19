<?php
    include 'inc/admin/header.php';   
    $admin = new admin;

    $get_id = $_GET['id'];
    $data = $admin->get_data_by_id($get_id);

    if (isset($_POST['submit']) == TRUE) {
        $nama = $_POST['nama'];
        $surat = $_POST['surat'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];

        $admin->edit_data($nama, $surat, $alamat, $status);
    }
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-4 text-gray-800">Form Edit Data</h1>
            <a href="admin.php" class="btn btn-primary btn-sm d-sm-inline-block d-none"><i class="fas fa-chevron-left"></i> kembali</a>
        </div>
        <div class="card">
            <form action="form_edit_data.php?id=<?php echo $get_id;?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for ="exampleInputName">Nama</label>
                        <input type="text" type="nama" name="nama" value="<?php echo $data['nama'];?>" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for ="exampleInputDescription">Jenis Surat</label>
                        <input type="text" name="surat" value="<?php echo $data['surat'] ?>" class="form-control" id="exampleInputDescriptio" aria-describedby="suratHelp" placeholder="Enter surat">
                    </div>
                    <div class="form-group">
                        <label for ="exampleInputDescription">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control" id="exampleInputDescriptio" aria-describedby="alamatHelp" placeholder="Enter alamat">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending" <?php if ($data['status'] == 'pending') echo 'selected'; ?>>
                                    Pending
                                </option>
                                <option value="accept" <?php if ($data['status'] == 'accept') echo 'selected'; ?>>
                                    Accept
                                </option>
                                <option value="canceled" <?php if ($data['status'] == 'canceled') echo 'selected'; ?>>
                                    Canceled
                                </option>
                            </select>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->

<?php
    include 'inc/admin/footer.php';   
?>


