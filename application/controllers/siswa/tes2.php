<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        //cek session dan level user
        if($this->admin->is_role() != "siswa"){
            redirect("login/");
        }
    }

    public function index()
    {
        $data = $this->Pengisi_Model->getTest1('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test1', $data);
    }

    public function pre1()
    {
        $data = $this->Pengisi_Model->getTest1('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test1', $data);

    }

    public function tambah_pre1()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        // $jawaban=$_POST['jawaban'];
        $j1=$_POST['j1'];
        $j2=$_POST['j2'];
        $j3=$_POST['j3'];
        $j4=$_POST['j4'];
        $j5=$_POST['j5'];
        $j6=$_POST['j6'];
        $j7=$_POST['j7'];
        $j8=$_POST['j8'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'       => $j1,
            'j2'       => $j2,
            'j3'       => $j3,
            'j4'       => $j4,
            'j5'       => $j5,
            'j6'       => $j6,
            'j7'       => $j7,
            'j8'       => $j8,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_1',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                // alert("Melanjutkan ke Pre Test Berikutnya"); 
                document.location= 'pre2';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function pre2()
    {
        $data = $this->Pengisi_Model->getTest2('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test2', $data);

    }

    public function tambah_pre2()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        $j1=$_POST['j1'];
        $j2=$_POST['j2'];
        $j3=$_POST['j3'];
        $j4=$_POST['j4'];
        $j5=$_POST['j5'];
        $j6=$_POST['j6'];
        $j7=$_POST['j7'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'       => $j1,
            'j2'       => $j2,
            'j3'       => $j3,
            'j4'       => $j4,
            'j5'       => $j5,
            'j6'       => $j6,
            'j7'       => $j7,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_2',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'pre3';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function pre3()
    {
        $data = $this->Pengisi_Model->getTest3('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test3', $data);

    }

    public function tambah_pre3()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        $j1=$_POST['j1'];
        $j2=$_POST['j2'];
        $j3=$_POST['j3'];
        $j4=$_POST['j4'];
        $j5=$_POST['j5'];
        $j6=$_POST['j6'];
        $j7=$_POST['j7'];
        $j8=$_POST['j8'];
        $j9=$_POST['j9'];
        $j10=$_POST['j10'];
        $j11=$_POST['j11'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'       => $j1,
            'j2'       => $j2,
            'j3'       => $j3,
            'j4'       => $j4,
            'j5'       => $j5,
            'j6'       => $j6,
            'j7'       => $j7,
            'j8'       => $j8,
            'j9'       => $j9,
            'j10'       => $j10,
            'j11'       => $j11,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_3',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'pre4';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function pre4()
    {
        $data = $this->Pengisi_Model->getTest4('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/pre-test4', $data);

    }

    public function tambah_pre4()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        $j1=$_POST['j1'];   $j2=$_POST['j2'];
        $j3=$_POST['j3'];   $j4=$_POST['j4'];
        $j5=$_POST['j5'];   $j6=$_POST['j6'];
        $j7=$_POST['j7'];   $j8=$_POST['j8'];
        $j9=$_POST['j9'];   $j10=$_POST['j10'];
        $j11=$_POST['j11']; $j12=$_POST['j12'];
        $j13=$_POST['j13']; $j14=$_POST['j14'];
        $j15=$_POST['j15']; $j16=$_POST['j16'];
        $j17=$_POST['j17']; $j18=$_POST['j18'];
        $j19=$_POST['j19'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'  => $j1,  'j2'  => $j2,
            'j3'  => $j3,  'j4'  => $j4,
            'j5'  => $j5,  'j6'  => $j6,
            'j7'  => $j7,  'j8'  => $j8,
            'j9'  => $j9,  'j10' => $j10,
            'j11' => $j11, 'j12' => $j12,
            'j13' => $j13, 'j14' => $j14,
            'j15' => $j15, 'j16' => $j16,
            'j17' => $j17, 'j18' => $j18,
            'j19' => $j19,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_4',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                alert("Terima kasih telah mengerjakan Pre Test"); document.location= '../Dashboard';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    // -----------------

    public function post1()
    {
        $data = $this->Pengisi_Model->getTest1('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test1', $data);

    }

    public function tambah_post1()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        // $jawaban=$_POST['jawaban'];
        $j1=$_POST['j1'];
        $j2=$_POST['j2'];
        $j3=$_POST['j3'];
        $j4=$_POST['j4'];
        $j5=$_POST['j5'];
        $j6=$_POST['j6'];
        $j7=$_POST['j7'];
        $j8=$_POST['j8'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'       => $j1,
            'j2'       => $j2,
            'j3'       => $j3,
            'j4'       => $j4,
            'j5'       => $j5,
            'j6'       => $j6,
            'j7'       => $j7,
            'j8'       => $j8,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_1',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                // alert("Melanjutkan ke Pre Test Berikutnya"); 
                document.location= 'post2';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function post2()
    {
        $data = $this->Pengisi_Model->getTest2('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test2', $data);

    }

    public function tambah_post2()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        $j1=$_POST['j1'];
        $j2=$_POST['j2'];
        $j3=$_POST['j3'];
        $j4=$_POST['j4'];
        $j5=$_POST['j5'];
        $j6=$_POST['j6'];
        $j7=$_POST['j7'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'       => $j1,
            'j2'       => $j2,
            'j3'       => $j3,
            'j4'       => $j4,
            'j5'       => $j5,
            'j6'       => $j6,
            'j7'       => $j7,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_2',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'post3';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function post3()
    {
        $data = $this->Pengisi_Model->getTest3('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test3', $data);

    }

    public function tambah_post3()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        $j1=$_POST['j1'];
        $j2=$_POST['j2'];
        $j3=$_POST['j3'];
        $j4=$_POST['j4'];
        $j5=$_POST['j5'];
        $j6=$_POST['j6'];
        $j7=$_POST['j7'];
        $j8=$_POST['j8'];
        $j9=$_POST['j9'];
        $j10=$_POST['j10'];
        $j11=$_POST['j11'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'       => $j1,
            'j2'       => $j2,
            'j3'       => $j3,
            'j4'       => $j4,
            'j5'       => $j5,
            'j6'       => $j6,
            'j7'       => $j7,
            'j8'       => $j8,
            'j9'       => $j9,
            'j10'       => $j10,
            'j11'       => $j11,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_3',$data);
        if ($tambah>0) {
            ?>
            <script>
                document.location= 'post4';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

    public function post4()
    {
        $data = $this->Pengisi_Model->getTest4('tbl_soal');
        $data = array('data' => $data);

        $this->load->view('siswa/post-test4', $data);

    }

    public function tambah_post4()
    {
        $username=$_POST['username'];
        $tipe=$_POST['tipe'];
        $j1=$_POST['j1'];   $j2=$_POST['j2'];
        $j3=$_POST['j3'];   $j4=$_POST['j4'];
        $j5=$_POST['j5'];   $j6=$_POST['j6'];
        $j7=$_POST['j7'];   $j8=$_POST['j8'];
        $j9=$_POST['j9'];   $j10=$_POST['j10'];
        $j11=$_POST['j11']; $j12=$_POST['j12'];
        $j13=$_POST['j13']; $j14=$_POST['j14'];
        $j15=$_POST['j15']; $j16=$_POST['j16'];
        $j17=$_POST['j17']; $j18=$_POST['j18'];
        $j19=$_POST['j19'];
        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("Y-m-d H:i:s");

        $data = array(
            'username' => $username,
            'tipe'     => $tipe,
            'j1'  => $j1,  'j2'  => $j2,
            'j3'  => $j3,  'j4'  => $j4,
            'j5'  => $j5,  'j6'  => $j6,
            'j7'  => $j7,  'j8'  => $j8,
            'j9'  => $j9,  'j10' => $j10,
            'j11' => $j11, 'j12' => $j12,
            'j13' => $j13, 'j14' => $j14,
            'j15' => $j15, 'j16' => $j16,
            'j17' => $j17, 'j18' => $j18,
            'j19' => $j19,
            'waktu'    => $waktu
        );
        $tambah = $this->Pengisi_Model->tambah('pengisi_4',$data);
        if ($tambah>0) {
            // redirect('admin/akun');
            ?>
            <script>
                alert("Terima kasih telah mengerjakan Post Test"); document.location= '../Dashboard';
            </script>
            <?php
        }
        else{
            echo "Gagal disimpan";
        }
    }

}