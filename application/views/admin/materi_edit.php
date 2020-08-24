<?php
$this->load->view('admin/header');
?>


<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">

</div>
<!-- <div class="container-fluid mt--7"> -->
  <div class="container-fluid mt--9">
    <div class="row">
      <div class="col-lg-12">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body">
            <div class="col">
              <h2 class="mb-3 text-primary">EDIT MATERI</h2>
            </div>

            <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
              <div class="row">

                <input type="hidden" name="id_materi" value="<?= $id_materi; ?>">

                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-alternative" value="<?= $nama_materi;?>" name="nama_materi" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-control form-control-alternative" name="akses">
                      <option>- Hak Akses -</option>
                      <option value="Siswa">Siswa</option>
                      <option value="Guru">Guru</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="custom-file">
                    <label for="a">Upload File : </label>
                    <input type="file" id="a" name="nama_file">
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