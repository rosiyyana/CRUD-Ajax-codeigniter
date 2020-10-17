<div class="table-responsive">
  <table class="table table-hover">
    <tr class="bg-danger">
      <th class="text-center">NO</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>TENo. TeleponLP</th>
      <th>Alamat</th>
      <th colspan="2" class="text-center">Aksi</span></th>
    </tr>
    <?php
        $no = 1;
    foreach($model as $data){
    ?>
      <tr>
        <td class="align-middle text-center"><?php echo $no; ?></td>
        <td class="align-middle"><?php echo $data->nama; ?></td>
        <td class="align-middle"><?php echo $data->jenis_kelamin; ?></td>
        <td class="align-middle"><?php echo $data->telp; ?></td>
        <td class="align-middle"><?php echo $data->alamat; ?></td>
        <td class="align-middle text-center">
              <a href="javascript:void();" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#form-modal" class="btn btn-warning btn-form-ubah">Edit</a>
              <input type="hidden" class="nama-value" value="<?php echo $data->nama; ?>">
              <input type="hidden" class="jeniskelamin-value" value="<?php echo $data->jenis_kelamin; ?>">
              <input type="hidden" class="telp-value" value="<?php echo $data->telp; ?>">
              <input type="hidden" class="alamat-value" value="<?php echo $data->alamat; ?>">
        </td>
        <td class="align-middle text-center">
          <a href="javascript:void();" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#delete-modal" class="btn btn-danger btn-alert-hapus">Hapus</a>
        </td>
      </tr>
    <?php
      $no++; 
    }
    ?>
  </table>
</div>

