<?php
$this->load->view('guru/header');
?>

<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<!-- Header -->
<div class="header pb-8 pt-5 pt-md-0">
</div>
<div class="container-fluid mt--9">
  <div class="row mt-2">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="mb-0 text-primary">Hasil Test Semua Siswa</h2>
            </div>
<!--             <div class="pull-right">
              <a href="" class="btn btn-sm btn-success"><i class="fa fa-download"></i> DOWNLOAD</a>
            </div> -->
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush" id="example">
            <thead class="thead-light">
              <tr>
                <th scope="col" width="20px">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nilai</th>
                <th scope="col">Waktu Mengerjakan</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>1</td>
                <td>Najib Ibrahim</td>
                <td>Pre Test Kategori 1</td>
                <td>30</td>
                <td>2020-06-27 08:16:16</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Najib Ibrahim</td>
                <td>Pre Test Kategori 2</td>
                <td>25</td>
                <td>2020-06-27 08:24:02</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Najib Ibrahim</td>
                <td>Pre Test Kategori 3</td>
                <td>35</td>
                <td>2020-06-27 08:28:12</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Najib Ibrahim</td>
                <td>Pre Test Kategori 4</td>
                <td>66</td>
                <td>2020-06-27 08:46:00</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Najib Ibrahim</td>
                <td>Post Test Kategori 1</td>
                <td>32</td>
                <td>2020-06-27 08:59:12</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Najib Ibrahim</td>
                <td>Post Test Kategori 2</td>
                <td>28</td>
                <td>2020-06-27 09:04:32</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Najib Ibrahim</td>
                <td>Post Test Kategori 3</td>
                <td>42</td>
                <td>2020-06-27 09:18:12</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Najib Ibrahim</td>
                <td>Post Test Kategori 4</td>
                <td>73</td>
                <td>2020-06-27 09:40:42</td>
              </tr>

            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>


  <?php
  $this->load->view('footer');
  ?>