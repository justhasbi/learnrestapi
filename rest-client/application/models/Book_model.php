<?php 

class Book_model extends CI_model {
    public function getAllBook()
    {
        return $this->db->get('buku')->result_array();
    }

    public function tambahDataBuku()
    {
        $data = [
            "judul_buku" => $this->input->post('judul_buku', true),
            "jenis_buku" => $this->input->post('jenis_buku', true),
            "nama_pengarang" => $this->input->post('nama_pengarang', true),
            "jml_halaman" => $this->input->post('jml_halaman', true)
        ];

        $this->db->insert('buku', $data);
    }

    public function hapusDataBuku($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('buku', ['id' => $id]);
    }

    public function getBookById($id)
    {
        return $this->db->get_where('buku', ['id_buku' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "judul_buku" => $this->input->post('judul_buku', true),
            "jenis_buku" => $this->input->post('jenis_buku', true),
            "nama_pengarang" => $this->input->post('nama_pengarang', true),
            "jml_halaman" => $this->input->post('jml_halaman', true)
        ];

        $this->db->where('id_buku', $this->input->post('id_buku'));
        $this->db->update('buku', $data);
    }

    public function cariDataBuku()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul_buku', $keyword);
        $this->db->or_like('jenis_buku', $keyword);
        $this->db->or_like('nama_pengarang', $keyword);
        $this->db->or_like('jml_halaman', $keyword);
        return $this->db->get('buku')->result_array();
    }
}