<center>
    <h1>Sistem Penjadwalan Kegiatan Kluster Penida 2</h1>

</center>

<section class="row">
    <div class="col-md-4">   
        <img  src="<?php echo base_url('./assets/picture/wallpaper.jpg'); ?>" alt="" style="width:500px;height:500px">    
    </div>
    <div class="col-md-8">   
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

</section>
