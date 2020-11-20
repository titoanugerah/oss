<div class="panel-header bg-danger-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Tambah Pekerja</h2>
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
          <form class="" action="<?php echo base_url('createManpower') ?>" method="post">

            <div class="card-header">
              <div class="card-title">Identitas Pekerja</div>
              <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">

              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Nama Karyawan</label>
                    <input type="text" class="form-control" name="name" value="" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="" maxlength="8" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="" maxlength="8" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Hak Akses</label>
                    <select class="form-control" name="role_id">
                      <?php foreach ($role as $item): ?>
                        <option class="form-control" value="<?php echo $item->id ?>"><?php echo $item->name; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Nomor HP</label>
                    <input type="text" class="form-control" name="phone" value="" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label>Departemen</label>
                    <select class="form-control" name="department_id">
                      <?php foreach ($department as $item): ?>
                        <option class="form-control" value="<?php echo $item->id ?>"><?php echo $item->name; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="button" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>

        </div>

      </div>
    </div>

  </div>
