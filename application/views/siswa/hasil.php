<?php
$this->load->view('siswa/header');
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
              <h2 class="mb-0 text-primary">Hasil Test "<?= $this->session->userdata("user_nama") ?>"</h2>
            </div>
<!--             <div class="pull-right">
              <a href="" class="btn btn-sm btn-success"><i class="fa fa-download"></i> DOWNLOAD</a>
            </div> -->
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          
          <table class="table align-items-center table-flush" >
            <thead class="thead-light">
              <tr>
                <th scope="col" width="20px">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Pre Test</th>
                <th scope="col">Pos Test</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mengenal karakteristik pribadi</td>
                <td>

                  <?php
                  $user_bro = $this->session->userdata('user_name');
                  // var_dump($user_bro);
                  ?>
                  <?php foreach ($pre1 as $hasil): ?>
                    
                    <?php
                    if(($hasil->username == $user_bro) && (!$hasil->id_kategori == 1)){
                      echo "0";
                    }else if (($hasil->username == $user_bro) && ($hasil->id_kategori == 1)) {
                      echo $hasil->total_jawab;
                    }
                    // if($user_bro != ""){
                    //   if($user_bro == $hasil->username && $hasil->id_kategori == '1'){
                    //     echo $hasil->total_jawab;
                    //   }else if($user_bro != $hasil->username or $hasil->id_kategori != '1'){
                    //     echo "a";
                    //   }
                    // }else{
                    //   echo "username tidak ditemukan";
                    // }

                    ?>

                  <?php endforeach; ?>
                </td>
                <td>



<!--                   <?php foreach ($post_kat1 as $hasil): ?>
                    <?php $post1=$hasil->total_jawab;?> 
                    <?= $hasil->total_jawab;?>
                    <?php endforeach; ?> -->
                  </td>
                  <td>
<!--                     <?php 
                    if($post1==''){
                      echo "Belum Mengisi";
                    }elseif($pre1<$post1){
                      echo "Meningkat";
                    }elseif($pre1==$post1){
                      echo "Sama";
                    }elseif($pre1>$post1){
                      echo "Menurun";
                    }else{
                      echo "Belum Mengisi";
                    }
                    ?> -->
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Menetapkan tujuan karir</td>
                  <td>
<!--                   <?php foreach ($pre_kat2 as $hasil): ?>
                    <?php $pre2=$hasil->total_jawab;?> 
                    <?= $hasil->total_jawab;?>
                    <?php endforeach; ?> -->

<!--                     <?php foreach ($username as $data): ?>
                      <?= $data->username;?>
                      <?php endforeach; ?> -->
                    </td>
                    <td>
<!--                   <?php foreach ($post_kat2 as $hasil): ?>
                    <?php $post2=$hasil->total_jawab;?> 
                    <?= $hasil->total_jawab;?>
                    <?php endforeach; ?> -->
                  </td>
                  <td>
<!--                     <?php 
                    if($post2==''){
                      echo "Belum Mengisi";
                    }elseif($pre2<$post2){
                      echo "Meningkat";
                    }elseif($pre2==$post2){
                      echo "Sama";
                    }elseif($pre2>$post2){
                      echo "Menurun";
                    }else{
                      echo "Belum Mengisi";
                    }
                    ?> -->
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Menilai ketrampilan</td>
                  <td>
           <!--          <?php foreach ($username as $data): ?>
                      <?= $data->username;?>
                    <?php endforeach; ?> -->

<!--                   <?php foreach ($pre_kat3 as $hasil): ?>
                    <?php $pre3=$hasil->total_jawab;?> 
                    <?= $hasil->total_jawab;?>
                    <?php endforeach; ?> -->
                  </td>
                  <td>
<!--                   <?php foreach ($post_kat3 as $hasil): ?>
                    <?php $post3=$hasil->total_jawab;?> 
                    <?= $hasil->total_jawab;?>
                    <?php endforeach; ?> -->
                  </td>
                  <td>
<!--                     <?php 
                    if($post3==''){
                      echo "Belum Mengisi";
                    }elseif($pre3<$post3){
                      echo "Meningkat";
                    }elseif($pre3==$post3){
                      echo "Sama";
                    }elseif($pre3>$post3){
                      echo "Menurun";
                    }else{
                      echo "Belum Mengisi";
                    }
                    ?> -->
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Membuat perencanaan karir</td>
                  <td>
<!--                     <?php foreach ($username as $data): ?>
                      <?= $data->username;?>
                      <?php endforeach; ?> -->

<!--                   <?php foreach ($pre_kat4 as $hasil): ?>
                    <?php $pre4=$hasil->total_jawab;?> 
                    <?= $hasil->total_jawab;?>
                    <?php endforeach; ?> -->
                  </td>
                  <td>
<!--                   <?php foreach ($post_kat4 as $hasil): ?>
                    <?php $post4=$hasil->total_jawab;?> 
                    <?= $hasil->total_jawab;?>
                    <?php endforeach; ?> -->
                  </td>
                  <td>
<!--                     <?php 
                    if($post4==''){
                      echo "Belum Mengisi";
                    }elseif($pre4<$post4){
                      echo "Meningkat";
                    }elseif($pre4==$post4){
                      echo "Sama";
                    }elseif($pre4>$post4){
                      echo "Menurun";
                    }else{
                      echo "Belum Mengisi";
                    }
                    ?> -->
                  </td>
                </tr>
              </tbody>
              <thead>
                <tr>
                  <td width="20px"></td>
                  <td><b>Total</b></td>
                  <td><b>
<!--                     <?php 
                    $total_pre=$pre1+$pre2+$pre3+$pre4;
                    echo $total_pre;
                    ?> --> 
                  </b></td>
                  <td><b>
<!--                     <?php 
                    $total_post=$post1+$post2+$post3+$post4;
                    echo $total_post;
                    ?>  -->
                  </b></td>
                  <td><b>Meningkat</b></td>
                </tr>
              </thead>
            </table>
            <div class="col">
              <hr class="my-4" />
              <p><b><b>Pre Test</b></b></p>
              <p style="text-align: justify;">
<!--                 <?php 
                $total_pre=$pre1+$pre2+$pre3+$pre4;
                if($total_pre==''){
                  echo "Belum Mengisi";
                }elseif($total_pre<='80'){
                  echo "Anda sangat tidak memahami kemampuan dan kapasitas serta Minat dan Bakat Anda. Segera lakukan eksplorasi karir dan Segera sadari. Konsultasikan Perencanaan Karir Anda";
                }elseif($total_pre<='120'){
                  echo "Anda Kurang memahami Kondisi Minat dan Bakat serta potensi diri, Konsultasikan apa yang akan Anda rencanakan dalam Karir Anda";
                }elseif($total_pre<='150'){
                  echo "Anda Mampu memahami kondisi diri terkait kelebihan dan kekurangan Perencanaan Karir Anda, silakan lebih mengeksplorasi kemampuan Anda";
                }elseif($total_pre<='180'){
                  echo "Anda Sangat Mampu menguasai kondisi diri terkait kelebihan dan kelemahan dalam perencanaan karir Anda, Lanjutkan Perjuangan Anda dan Konsultasikan ke Guru BK Anda";
                }else{
                  echo "Belum Mengisi";
                }
                ?> -->
              </p>
              <hr class="my-4" />

              <p><b><b>Post Test</b></b></p>
              <p style="text-align: justify;">
<!--                 <?php 
                $total_post=$post1+$post2+$post3+$post4;
                if($total_post==''){
                  echo "Belum Mengisi";
                }elseif($total_post<='80'){
                  echo "Anda sangat tidak memahami kemampuan dan kapasitas serta Minat dan Bakat Anda. Segera lakukan eksplorasi karir dan Segera sadari. Konsultasikan Perencanaan Karir Anda";
                }elseif($total_post<='120'){
                  echo "Anda Kurang memahami Kondisi Minat dan Bakat serta potensi diri, Konsultasikan apa yang akan Anda rencanakan dalam Karir Anda";
                }elseif($total_post<='150'){
                  echo "Anda Mampu memahami kondisi diri terkait kelebihan dan kekurangan Perencanaan Karir Anda, silakan lebih mengeksplorasi kemampuan Anda";
                }elseif($total_post<='180'){
                  echo "Anda Sangat Mampu menguasai kondisi diri terkait kelebihan dan kelemahan dalam perencanaan karir Anda, Lanjutkan Perjuangan Anda dan Konsultasikan ke Guru BK Anda";
                }else{
                  echo "Belum Mengisi";
                }
                ?> -->
              </p>
              <hr class="my-4" />
            </div>


          </div>
        </div>
      </div>
    </div>


    <?php
    $this->load->view('footer');
    ?>