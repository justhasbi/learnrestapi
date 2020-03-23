<?php 
class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Book_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->Book_model->getAllBook();
        if( $this->input->post('keyword') ) {
            $data['buku'] = $this->Book_model->cariDataBuku();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('book/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Buku';

        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('jenis_buku', 'Jenis Buku', 'required');
        $this->form_validation->set_rules('nama_pengarang', 'Nama Pengarang', 'required');
        $this->form_validation->set_rules('jml_halaman', 'Jumlah Halaman', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('book/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Book_model->tambahDataBuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Book');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataBuku($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Book');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Buku';
        $data['buku'] = $this->Book_model->getBookById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('book/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mahasiswa';
        $data['buku'] = $this->Book_model->getBookById($id);
        $data['jenis_buku'] = [
            'Novel', 
            'Biografi', 
            'Sastra', 
            'Religi', 
            'Komik',
            'Tutorial'
        ];

        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('jenis_buku', 'Jenis Buku', 'required');
        $this->form_validation->set_rules('nama_pengarang', 'Nama Pengarang', 'required');
        $this->form_validation->set_rules('jml_halaman', 'Jumlah Halaman', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('book/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Book_model->ubahDataBuku();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Book');
        }
    }

}