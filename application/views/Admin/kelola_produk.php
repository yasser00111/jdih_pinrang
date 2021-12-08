<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css') ?>">
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Produk</h1>
    </div>
    <a href="<?php echo base_url('Admin/Produk/Tambah_produk') ?>" class="btn btn-primary mb-3">Tambah Produk</a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table id="table_id" class="table table-hover table-striped table-bordered">
      <thead>
        <th>No</th>
        <th>Nomor</th>
        <th>Tahun</th>
        <th>Tentang</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          foreach ($produk as $prd) :
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $prd->nomor; ?></td>
            <td><?php echo $prd->tahun; ?></td>
            <td><?php echo $prd->tentang; ?></td>
            <td>
              <a href="<?php echo base_url('Admin/Produk/update/').$prd->id; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
              <a href="<?php echo base_url('Admin/Produk/hapus/').$prd->id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
              <a href="" class="btn btn-sm btn-white"></a>
            </td>
          </tr>
        <?php endforeach; ?>  
      </tbody>
    </table>
  </section>
</div>

  <script src="<?php echo base_url('assets/DataTables/datatables.js') ?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#table_id').DataTable();
    } );
  </script>