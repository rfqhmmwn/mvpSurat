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
                        <?php foreach ($get->get_data() as $row) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['surat']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <!-- <td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							    </td> -->
                            </tr>
                        <?php endforeach; ?>
					</tbody>
				</table>    

                            
		</div>        
    </div>
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="index.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" required name="nama">
						</div>
						<div class="form-group">
							<label>Surat</label>
							<input type="text" class="form-control" required name="surat">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea type="text" class="form-control" required name="alamat"></textarea>
						</div>			
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add" name="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- <div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div> -->
</body>
</html>