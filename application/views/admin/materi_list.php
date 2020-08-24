<?php
$this->load->view('admin/header');
?>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9">
    <div class="row mt-2">
      <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="mb-0 text-primary">Data Materi</h2>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url(); ?>admin/materi/tambah" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> TAMBAH MATERI</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush" id="example">
              <thead class="thead-light">
                <tr>
                  <th scope="col" width="20px">No</th>
                  <th>Nama Materi</th>
                  <th>Hak Akses</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($data as $materi): ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $materi['nama_materi']; ?></td>
                  <td><?php echo $materi['akses']; ?></td>
                  <td>
                    <a href="<?= base_url(); ?>assets/login/materi/<?= $materi['nama_file'];?>" class="btn btn-sm btn-success">DOWNLOAD</a>
                    <a href="<?php echo site_url('admin/materi/edit/'.$materi['id_materi']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="<?php echo site_url('admin/materi/hapus/'.$materi['id_materi']) ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <?php
  $this->load->view('footer');
  ?>