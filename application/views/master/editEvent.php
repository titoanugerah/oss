<div class="panel-header bg-danger-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Tambah Kegiatan</h2>
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
            <div class="card-title">Data Kegiatan</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
            </div>
            <form class="" action="<?php echo base_url('updateEvent/'.$id); ?>" method="post">
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Tipe Kegiatan</label>
                  <select class="form-control" name="event_type_id">
                    <?php foreach ($eventType as $item): ?>
                      <option class="form-control" value="<?php echo $item->id ?>" <?php if($item->id == $event->event_type_id){ echo 'selected';} ?>><?php echo $item->name; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Waktu Mulai</label>
                  <select class="form-control" name="start_id">
                    <?php foreach ($schedule as $item): ?>
                      <option class="form-control" value="<?php echo $item->id ?>" <?php if($item->id == $event->start_id){ echo 'selected';} ?>><?php echo $item->day.' jam '.$item->start.' s/d '.$item->end; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Waktu Selesai</label>
                  <select class="form-control" name="end_id">
                    <?php foreach ($schedule as $item): ?>
                      <option class="form-control" value="<?php echo $item->id ?>" <?php if($item->id == $event->end_id){ echo 'selected';} ?>><?php echo $item->day.' jam '.$item->start.' s/d '.$item->end; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Nama Kegiatan</label>
                  <input type="text" name="name" value="<?php echo $event->name; ?>" class="form-control">
                </div>
                <div class="form-group col-md-8">
                  <label>Keterangan</label>
                  <input type="text" name="remark" value="<?php echo $event->remark; ?>" class="form-control">
                </div>


              </div>
            </div>
            <div class="card-footer">
              <button type="submit" name="button" class="btn btn-success">Simpan</button>
              <a class="btn btn-grey" href="<?php echo base_url('event') ?>">Kembali</a>
            </div>
          </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
