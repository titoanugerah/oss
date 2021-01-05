<center>
    <h1>Agenda Kegiatan Hari Ini</h1>

</center>

<!-- <div class="row">
    <img  src="https://www.getsockeye.com/hubfs/scheduling.svg" alt="" style="width:500px;height:500px">    

</div> -->

<div>   

<table  class="display datatable col-md-6">
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
                    <th><?php if($item->name!=""){echo '<a class="btn btn-info" href="'.base_url('editEvent/'.$item->id).'">Edit</a>  '.'<a class="btn btn-danger" href="'.base_url('deleteEvent/'.$item->id).'">Hapus</a>  ';} ?></th>

                </tr>
                <?php $i++;endforeach; ?>
            </tbody>
        </table>
        
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

