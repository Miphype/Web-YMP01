<?php
class Sab extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','pagination','form_validation','upload'));
        $this->load->model('m_sab');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='nama_desa',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='nama_desa';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['sab']=$this->m_sab->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Sumber Air Baku";
        
        $config['base_url']=site_url('sab/index/');
        $config['total_rows']=$this->m_sab->jumlah();
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
            $this->template->display('sab/index',$data);
    }

    function tambah(){
        $data['title']="Tambah Data Sumber Air Baku";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama_desa=$this->input->post('nama_desa');
            $cek=$this->m_sab->cek($nama_desa);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-warning'>Nama desa sudah digunakan</div>";
                $this->template->display('sab/tambah',$data);
            }else{

                $info=array(
                    'nama_desa'=>$this->input->post('nama_desa'),
                    'sab_ipam'=>$this->input->post('sab_ipam'),
                    'stat_klsab'=>$this->input->post('stat_klsab'),
                    'jarak_abdp'=>$this->input->post('jarak_abdp'),
                    'kapsat_sipam'=>$this->input->post('kapsat_sipam'),
                    'kapsat_ipam'=>$this->input->post('kapsat_ipam'),
                    'kualitas'=>$this->input->post('kualitas'),
                    'kontinu'=>$this->input->post('kontinu'),
                    'kuantitas'=>$this->input->post('kuantitas')
                );
                $this->m_sab->simpan($info);
                redirect('sab/index/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('sab/tambah',$data);
        }
    }
    
    
    function edit($id){
        $data['title']="Edit Data Sumber Air Baku";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama_desa=$this->input->post('nama_desa');
            
            $info=array(
                    'nama_desa'=>$this->input->post('nama_desa')
                );
            //update data sumber air baku
            $this->m_sab->update($nama_desa,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            //tampilkan data sumber air baku
            $data['sab']=$this->m_sab->cek($id)->row_array();
            $this->template->display('sab/edit',$data);
        }else{
            $data['sab']=$this->m_sab->cek($id)->row_array();
            $data['message']="";
            $this->template->display('sab/edit',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_sab->cek($kode)->result();
        $this->m_sab->hapus($kode);
    }
    
    function cari(){
        $data['title']="Pencarian";
        $cari=$this->input->post('cari');
        $cek=$this->m_sab->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['sab']=$cek->result();
            $this->template->display('sab/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['sab']=$cek->result();
            $this->template->display('sab/cari',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('nama_desa','Nama Desa','required|max_length[50]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}
