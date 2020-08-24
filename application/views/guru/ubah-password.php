<?php
$this->load->view('guru/header');
?>
<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">
</div>
<div class="container-fluid mt--9">
  <div class="row">
    <div class="col-lg-12">
      <div class="card bg-secondary shadow border-0">
        <div class="card-body">
          <div class="col">
            <h2 class="mb-3 text-primary">UBAH PASSWORD</h2>
          </div>
          <form action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" value="<?php echo $this->session->userdata("user_nama") ?>" name="nama" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" value="<?php echo $this->session->userdata("user_ket") ?>" name="ket" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control form-control-alternative" value="Username : <?php echo $this->session->userdata("user_name") ?>" name="username" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="password" class="form-control form-control-alternative" placeholder="Masukkan Password Baru" name="password" required>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary my-2" name="simpan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php
  $this->load->view('footer');
  ?>