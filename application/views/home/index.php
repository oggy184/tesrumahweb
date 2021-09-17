<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>Welcome,
            <span style="font-size: medium;"><?= $this->session->userdata('email') ?></span>
        </h1>
        <a href="<?= base_url('auth/logout') ?>" class="btn btn-sm btn-danger my-3">Logout</a>
    </div>
    <div class="row">
        <div class="col-2">
            <a class="btn btn-secondary btn-sm my-3" data-bs-toggle="collapse" href="#collapseExample" role="button">
                Create User Data
            </a>
        </div>
        <form action="" method="post" class="collapse" id="collapseExample">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="name" name="name" required>
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Job</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="job" name="job" required>
            </div>

            <button type="button" class="btn btn-primary btn-sm btn-create">Create</button>
        </form>
    </div>

    <div class="row">
        <!-- Modal -->
        <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editdataLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body ">
                        <input type="hidden" class="form-control" id="editid" name="editid" required>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="editname" name="editname" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Job</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="editjob" name="editjob" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-upt">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5 userdata"></div>
</div>