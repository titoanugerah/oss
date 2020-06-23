<div class="panel-header bg-danger-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Departemen</h2>
      </div>
      <div class="ml-md-auto py-2 py-md-0">
        <a href="#" class="btn btn-white btn-border btn-round mr-2" hidden>Manage</a>
      </div>
    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row mt--2">
    <div class="col-md-12">
      <div class="row">

        <div class="card full-height  col-md-12">

          <div class="card-header">
            <div class="card-title">Data Departemen</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
            </div>
            <form class="" action="<?php echo base_url('createDepartment'); ?>" method="post">

            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Nama Departemen</label>
                  <input type="text" class="form-control" name="name" value="">
                </div>
                <div class="form-group col-md-8">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="description" value="">
                </div>

              </div>
            </div>
            <div class="card-footer">
              <button type="submit" name="button" class="btn btn-success">Simpan</button>
              <a class="btn btn-grey" href="<?php echo base_url('department/') ?>">Kembali</a>
            </div>
          </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
