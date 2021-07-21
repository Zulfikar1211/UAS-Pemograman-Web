<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Iuran_model;
use App\Models\Warga_model;

class Iuran extends Controller
{
    public function index()
    {
        $model = new Iuran_model;
        $data['title'] = 'Data Iuran';
        $data['getIuran'] = $model->getIuran();
        echo view('header', $data);
        echo view('iuran/iuran', $data);
        echo view('footer', $data);
    }

    public function tambah()
    {
        $model = new Warga_model;
        $data['getWarga'] = $model->getWarga();   
        $data['title'] = 'Tambah Data Iuran';
        echo view('header', $data);
        echo view('iuran/tambah_data_iuran', $data);
        echo view('footer', $data);
    }

    public function add()
    {
        $model = new Iuran_model;
        $data = array(
            'keterangan' => $this->request->getPost('keterangan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'jumlah' => $this->request->getPost('jumlah'),
            'warga_nik' => $this->request->getPost('warga_nik')
        );
        $model->saveIuran($data);
        echo '<script>
                alert("Sukses Tambah Data Iuran");
                window.location="'.base_url('iuran').'"
            </script>';

    }
}