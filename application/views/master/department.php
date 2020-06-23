<div class="panel-header bg-danger-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Departemen</h2>
      </div>
      <div class="ml-md-auto py-2 py-md-0">
        <a href="<?php echo base_url('addDepartment'); ?>" class="btn btn-white btn-border btn-round mr-2" >Tambah departmen</a>
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
            <table  class="display datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Departemen</th>
                  <th>Deskripsi</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody >
                  <?php $i=1;foreach ($department as $item): ?>
                    <tr>
                      <th><?php echo $i; ?></th>
                      <th><?php echo $item->name; ?></th>
                      <th><?php echo $item->description; ?></th>
                      <th><?php echo '<a class="btn btn-info" href="'.base_url('editDepartment/'.$item->id).'">Edit</a>  '; ?></th>

                    </tr>
                  <?php $i++;endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
