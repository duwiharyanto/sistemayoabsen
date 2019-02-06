
        <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Form Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                <div class="modal-body">
                    <form action="tambah_pegawai.php" method="POST">
                        <div class="form-group">
                            <label for="user">ID Slack:</label><br>
                            <input type="text" class="form-control" name="user" placeholder="User" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="namaSlack">Nama Slack:</label><br>
                            <input type="text" class="form-control" name="namaSlack" placeholder="Slack name">
                        </div>
                    <div class="modal-footer">
                        <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
</div>
