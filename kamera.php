<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModalCenterKamera"><i class="fa fa-table mr-3"></i>Tambah Data</button>
<br>
<table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">KODE KAMERA</th>
            <th scope="col">MERK</th>
            <th scope="col">TAHUN</th>
            <th scope="col">TIPE</th>
            <th scope="col">GARANSI</th>
            <th scope="col">HARGA</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody id="table_kamera">

    </tbody>

</table>
<div class="modal fade" id="exampleModalCenterKamera" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formKamera">
                <div class="form-group">
                        <label for="exampleFormControlInput1">KODE KAMERA</label>
                        <input type="text" class="form-control" name="createKODE" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">MERK</label>
                        <input type="text" class="form-control" name="createMERK" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">TAHUN</label>
                        <input type="text" class="form-control" name="createTAHUN" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">TIPE</label>
                        <input type="text" class="form-control" name="createTIPE" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">GARANSI</label>
                        <input type="text" class="form-control" name="createGARANSI" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">HARGA</label>
                        <input type="text" class="form-control" name="createHARGA" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addKamera" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterKamera" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Kamera</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formKamera">
                <input type="hidden" name="updateNIP">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">MERK</label>
                        <input type="text" class="form-control" name="updateMERK" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">TAHUN</label>
                        <input type="text" class="form-control" name="updateTAHUN" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">TIPE</label>
                        <input type="text" class="form-control" name="updateTIPE" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">GARANSI</label>
                        <input type="text" class="form-control" name="updateGARANSI" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">HARGA</label>
                        <input type="text" class="form-control" name="updateHARGA" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-primary updateKamera " data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>