<?php
class Desa extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','pagination','form_validation','upload'));
        $this->load->model('m_desa');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='nama_desa',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='nama_desa';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['desa']=$this->m_desa->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Desa";
        
        $config['base_url']=site_url('desa/index/');
        $config['total_rows']=$this->m_desa->jumlah();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('desa/index',$data);
    }
    
    
    function edit($id){
        $data['title']="Edit Data Desa";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama_desa=$this->input->post('nama_desa');
            
            $info=array(
                'kecamatan'=>$this->input->post('kecamatan'),
                'kota'=>$this->input->post('kota')
            );
            //update data desa
            $this->m_desa->update($nama_desa,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            //tampilkan data desa 
            $data['desa']=$this->m_desa->cek($id)->row_array();
            $this->template->display('desa/edit',$data);
        }else{
            $data['desa']=$this->m_desa->cek($id)->row_array();
            $data['message']="";
            $this->template->display('desa/edit',$data);
        }
    }
    
    
    function tambah(){
        $data['title']="Tambah Data Desa";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama_desa=$this->input->post('nama_desa');
            $cek=$this->m_desa->cek($nama_desa);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-warning'>Nama desa sudah digunakan</div>";
                $this->template->display('desa/tambah',$data);
            }else{

                $info=array(
                    'nama_desa'=>$this->input->post('nama_desa'),
                    'kecamatan'=>$this->input->post('kecamatan'),
                    'kota'=>$this->input->post('kota')
                );
                $this->m_desa->simpan($info);
                redirect('desa/index/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('desa/tambah',$data);
        }
    }
    
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_desa->cek($kode)->result();
	foreach($detail as $det):
	    unlink("assets/img/".$det->image);
	endforeach;
        $this->m_desa->hapus($kode);
    }
    
    function cari(){
        $data['title']="Pencarian";
        $cari=$this->input->post('cari');
        $cek=$this->m_desa->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['desa']=$cek->result();
            $this->template->display('desa/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['desa']=$cek->result();
            $this->template->display('desa/cari',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('nama_desa','Nama Desa','required|max_length[50]');
        $this->form_validation->set_rules('kecamatan','Kecamatan','required|max_length[50]');
        $this->form_validation->set_rules('kota','Kota','required|max_length[50]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}
