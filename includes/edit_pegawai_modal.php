<!-- Edit -- >

<div class="modal fade" id="edit_<?php echo $data['idSlack']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                <div class="modal-body">
                    <form action="edit_pegawai.php" method="POST">
                        <div class="form-group">
                            <label for="idSlack">ID:</label><br>
                            <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>" placeholder="ID Slack" required>
                        </div>
                        <div class="form-group">
                            <label for="namaSlack">Nama Slack:</label><br>
                            <input type="text" class="form-control" name="namaSlack" value="<?php echo $data['namaSlack']; ?>" placeholder="Slack name">
                        </div>
                    <div class="modal-footer">
                        <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>
