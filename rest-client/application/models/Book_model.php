<?php 

use GuzzleHttp\Client;

class Book_model extends CI_model {
    public function getAllBook()
    {
        // return $this->db->get('buku')->result_array();
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/REST-CI/rest-server/index.php/api/book');
        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getBookById($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/REST-CI/rest-server/index.php/api/book', [
            'query' => [
                'id_buku' => $id
            ]
        ]);
        
        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];

        // return $this->db->get_where('buku', ['id_buku' => $id])->row_array();
    }

    public function tambahDataBuku()
    {
        $client = new Client();
        $response = $client->request('POST', 'http://localhost/REST-CI/rest-server/index.php/api/book', [
            'form_params' => [
                "judul_buku"        => $this->input->post('judul_buku', true),
                "jenis_buku"        => $this->input->post('jenis_buku', true),
                "nama_pengarang"    => $this->input->post('nama_pengarang', true),
                "jml_halaman"       => $this->input->post('jml_halaman', true)
            ]
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result;

        // $this->db->insert('buku', $data);
    }

    public function hapusDataBuku($id)
    {
        $client = new Client();
        // $this->db->delete('buku', ['id' => $id]);
        $response = $client->request('DELETE', 'http://localhost/REST-CI/rest-server/index.php/api/book', [
            'form_params' => [
                'id_buku' => $id
            ]
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataBuku()
    {
        $client = new Client();
        $response = $client->request('PUT', 'http://localhost/REST-CI/rest-server/index.php/api/book', [
            'form_params' => [
                "judul_buku"        => $this->input->post('judul_buku', true),
                "jenis_buku"        => $this->input->post('jenis_buku', true),
                "nama_pengarang"    => $this->input->post('nama_pengarang', true),
                "jml_halaman"       => $this->input->post('jml_halaman', true)
            ]
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result;
    }

}