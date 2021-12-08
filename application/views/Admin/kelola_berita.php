<!-- <link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.css') ?>"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/DataTables/datatables.min.css') ?>">
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Berita</h1>
    </div>
    <a href="<?php echo base_url('Admin/Berita/Tambah_berita') ?>" class="btn btn-primary mb-3">Tambah Berita</a>
    <?php echo $this->session->flashdata('pesan') ?>
    <table id="table_id" class="table table-hover table-striped table-bordered">
      <thead>
        <th>No</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Tanggal Publish</th>
        <th>aksi</th>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          foreach ($berita as $br) :
        ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $br->judul; ?></td>
            <td><span class="badge badge-primary"><?php echo $br->nama_kategori; ?></span></td>
            <td><?php echo date('d-m-Y', strtotime($br->tanggal)) ?></td>
            <td>
            <a href="<?php echo base_url('Admin/Berita/detail_berita/').$br->id_berita; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
              <a href="<?php echo base_url('Admin/Berita/update/').$br->id_berita; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
              <a href="<?php echo base_url('Admin/Berita/hapus/').$br->id_berita; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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