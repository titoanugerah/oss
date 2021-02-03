<div class="panel-header bg-danger-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Nusa Penida 2</h2>
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
            <div class="card-title">Jadwal Hari Ini (<?php echo date('d-M-Y'); ?>) </div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"></div>
            <div class="card-body">
              <table  class="display datatable1">
                <thead>
                  <tr>
                    <th>Jam</th>
                    <th>Nama Kegiatan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody >
                  <?php foreach ($event1 as $item):  ?>
                  <tr>
                    <th><?php echo $item->starttime.' s/d '.$item->endtime; ?></th>
                    <th><?php echo "<a data-toggle ='modal' data-target='#examplemodal$item->id'> $item->name </a>"; ?></th>
                    <th><?php if($item->isfinish==0){echo "Belum terlaksana"; } else {echo "Sudah Terlaksana";} ?></th>
                    
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-md-12">
      <div class="row">
        <div class="card full-height  col-md-12">
          <div class="card-header">
            <div class="card-title">Jadwal Bulan Ini</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"></div>
            <div class="card-body">
            <table  class="display datatable1">
              <thead>
                <tr>
                  <th>Jadwal</th>
                  <th>Nama Kegiatan</th>
                  <th>Panitia</th>
                  <th>Tipe Kegiatan</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody >
                  <?php $i=1;foreach ($history as $item): ?>
                    <tr>
                      <th><?php echo $item->date.', '.$item->start_time.' s/d '.$item->end_time; ?></th>
                      <th><?php echo $item->name; ?></th>
                      <th><?php echo $item->remark; ?></th>
                      <th><?php echo $item->event_type; ?></th>
                      <th><button type="button" data-toggle="modal" data-target="#examplemodal<?php echo $item->id; ?>" class="btn btn-info">Detail</button></th>
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
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Selamat Datang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <img src="https://www.getsockeye.com/hubfs/scheduling.svg" alt="" style="width:450px"> 
          <p>Selamat datang lalalala</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >OK</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<?php foreach ($history as $item):  ?>

<div class="modal fade" id="examplemodal<?php echo $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $item->name;?>
        <br>  
        <?php echo $item->start_day.','.$item->start_time.' - '.$item->end_time ;?>
        <br>  
        <?php echo 'Penyelenggara : '.$item->remark;?>
        <br>  
      <br>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"  >OK</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>
