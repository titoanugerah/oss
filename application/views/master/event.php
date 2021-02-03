<div class="panel-header bg-danger-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Kegiatan</h2>
      </div>
      <div class="ml-md-auto py-2 py-md-0">
        <a href="<?php echo base_url('resetEvent'); ?>" class="btn btn-white btn-border btn-round mr-2" >Perbarui Kegiatan</a>
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
            <div class="card-title">Data Kegiatan</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
            </div>
            <table  class="display datatable">
              <thead>
                <tr>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Nama Kegiatan</th>
                  <th>Tipe Kegiatan</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody >
                  <?php $i=1;foreach ($event as $item): ?>
                    <tr>
                      <th><?php echo $item->day; ?></th>
                      <th><?php echo $item->start.' s/d '.$item->end; ?></th>
                      <th><?php echo $item->name; ?></th>
                      <th><?php echo $item->event_type; ?></th>
                      <th><?php if ($item->event_type!="" && $item->isfinish == 0){echo '<a class="btn btn-success" href="'.base_url('finishEvent/'.$item->id).'">Selesai</a> ';} ?></th>

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

