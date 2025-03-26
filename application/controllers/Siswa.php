<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model'); // Memanggil model siswa
        $this->load->helper('url', 'form'); // Mengaktifkan helper URL dan Form
        $this->load->library('session'); // Menggunakan session untuk flash message
    }

    // Menampilkan semua data siswa
    public function index()
{
    $this->load->library('pagination');

    $config['base_url'] = site_url('siswa/index');
    $config['total_rows'] = $this->Siswa_model->get_total_siswa();
    $config['per_page'] = 10; // Jumlah data per halaman
    $config['uri_segment'] = 3;

    // Styling Pagination
    $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');

    $this->pagination->initialize($config);

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data['siswa'] = $this->Siswa_model->get_siswa_pagination($config['per_page'], $page);
    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('siswa_view', $data);
}

    // Menampilkan form tambah siswa
    public function tambah()
    {
        $this->load->view('siswa_tambah');
    }

    // Simpan data siswa ke database
    public function simpan()
    {
        $data = [
            'nama'   => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp'  => $this->input->post('no_hp')
        ];

        $this->Siswa_model->insert_siswa($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambahkan!</div>');
        redirect('siswa');
    }

    // Menampilkan form edit siswa
    public function edit($id)
    {
        $data['siswa'] = $this->Siswa_model->get_siswa_by_id($id);

        if (!$data['siswa']) {
            show_404();
        }

        $this->load->view('siswa_edit', $data);
    }

    // Proses update data siswa
    public function update()
{
    $id = $this->input->post('id');
    $data = [
        'nama' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat'),
        'no_hp' => $this->input->post('no_hp')
    ];
    $this->db->where('id', $id);
    $this->db->update('siswa', $data);

    redirect('siswa');
}


    // Hapus siswa dengan ID tertentu
    public function hapus($id)
{
    $this->db->where('id', $id);
    $this->db->delete('siswa');

    redirect('siswa');
}


    // Hapus cache (opsional)
    public function clear_cache()
    {
        $this->output->delete_cache();
        echo "Cache berhasil dihapus!";
    }
}
