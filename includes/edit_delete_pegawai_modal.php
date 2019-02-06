<!-- Edit -- >
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit_<?php echo $data['idSlack']; ?>">Edit</button>    
<div class="modal fade" id="edit_<?php echo $data['idSlack']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                <div class="modal-body">
                    <form action="update_pegawai.php" method="POST">

                    	<input type="hidden" class="form-control" name="idSlack" value="<?php echo $data['idSlack'];?>">

                        <div class="form-group">
                            <label for="id">ID:</label><br>
                            <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="namaSlack">Nama Slack:</label><br>
                            <input type="text" class="form-control" name="namaSlack" value="<?php echo $data['namaSlack']; ?>">
                        </div>
                    <div class="modal-footer">
                        <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="edit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>


<div class="modal fade" id="delete<?php echo $data['idSlack']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Pegawai</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $data['idSlack'].' '.$data['namaSlack']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_pegawai.php?idSlack=<?php echo $data['idSlack']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
