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
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody >
                  <?php foreach ($event1 as $item):  ?>
                  <tr>
                    <th><?php echo $item->starttime.' s/d '.$item->endtime; ?></th>
                    <th><?php echo "<a data-toggle ='modal' data-target='#examplemodals$item->id'> $item->name </a>"; ?></th>
                    <th><?php if($item->isfinish==0){echo "Belum terlaksana"; } elseif($item->isfinish==1) {echo "Sudah Terlaksana";} else {echo 'Dibatalkan';} ?></th>
                    <th><button type="button" data-toggle="modal" data-target="#examplemodals<?php echo $item->id; ?>" class="btn btn-info">Detail</button>  </th>

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
            <div class="card-title">Jadwal Per Bulan</div>
            <div class="d-flex flex-wrap justify-content-around pb-2 pt-4"></div>
            <div class="card-body">
          <form method="post">
            <div class="form-group">
              <label for="">Pilih Bulan</label>
              &nbsp;&nbsp;&nbsp;&nbsp;

              <select name="month" value="">
                <option value="01" <?php if(date('m')=="01"){echo 'selected';} ?>>Januari</option>
                <option value="02" <?php if(date('m')=="02"){echo 'selected';} ?>>Februari</option>
                <option value="03" <?php if(date('m')=="03"){echo 'selected';} ?>>Maret</option>
                <option value="04" <?php if(date('m')=="04"){echo 'selected';} ?>>April</option>
                <option value="05" <?php if(date('m')=="05"){echo 'selected';} ?>>Mei</option>
                <option value="06" <?php if(date('m')=="06"){echo 'selected';} ?>>Juni</option>
                <option value="07" <?php if(date('m')=="07"){echo 'selected';} ?>>Juli</option>
                <option value="08" <?php if(date('m')=="08"){echo 'selected';} ?>>Agustus</option>
                <option value="09" <?php if(date('m')=="09"){echo 'selected';} ?>>September</option>
                <option value="10" <?php if(date('m')=="10"){echo 'selected';} ?>>Oktober</option>
                <option value="11" <?php if(date('m')=="11"){echo 'selected';} ?>>November</option>
                <option value="12" <?php if(date('m')=="12"){echo 'selected';} ?>>Desember</option>
              </select>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <select name="year" value="">
                <option value="2020" <?php if(date('Y')=="2020"){echo 'selected';} ?>>2020</option>
                <option value="2021" <?php if(date('Y')=="2021"){echo 'selected';} ?>>2021</option>
                <option value="2022" <?php if(date('Y')=="2022"){echo 'selected';} ?>>2022</option>
              </select>
              &nbsp;&nbsp;&nbsp;&nbsp;

              <button type='submit' name='findByMonth' value='findByMonth' class="btn btn-info btn-sm">Cari</button>
            </div>
          </form>
          
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
                      <th><button type="button" data-toggle="modal" data-target="#examplemodal<?php echo $item->id; ?>" class="btn btn-info">Detail</button> <a class="btn btn-danger" href=" <?php echo base_url('deleteHistory/'.$item->id); ?>">Hapus</a>   </th>
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

<?php foreach ($event as $item):  ?>

<div class="modal fade" id="examplemodals<?php echo $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <?php echo $item->startday.','.$item->starttime.' - '.$item->endtime ;?>
        <br>  
        <?php echo 'Penyelenggara : '.$item->remark;?>
        <br>  
        <?php echo 'Status : '.$item->isfinish==1?"Sudah Terlaksana":"Belum Terlaksana";?>
        <br>
        Petugas : 
        <?php 
          foreach($schedule as $sch){
            if($sch->event_id == $item->id){
              echo $sch->name.' ,';
            } else {
              continue;
            }
          }
        ?>

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
