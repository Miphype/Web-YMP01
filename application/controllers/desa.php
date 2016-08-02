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
                    'kota'=>$this->input->post('kota'),
                    'jml_dusun'=>$this->input->post('jml_dusun'),
                    'jml_penduduk_jw'=>$this->input->post('jml_penduduk_jw'),
                    'jml_penduduk_kk'=>$this->input->post('jml_penduduk_kk'),
                    'jml_penduduk_p'=>$this->input->post('jml_penduduk_p'),
                    'jmlp_amlayak_kk'=>$this->input->post('jmlp_amlayak_kk'),
                    'jmlp_amlayak_ds'=>$this->input->post('jmlp_amlayak_ds'),
                    'jmlp_amsp'=>$this->input->post('jmlp_amsp'),
                    'jml_sr_sr'=>$this->input->post('jml_sr_sr'),
                    'jml_sr_kk'=>$this->input->post('jml_sr_kk'),
                    'p_pasimas'=>$this->input->post('p_pasimas'),
                    'p_pasimas_st'=>$this->input->post('p_pasimas_st'),
                    'p_dak'=>$this->input->post('p_dak'),
                    'p_dak_st'=>$this->input->post('p_dak_st'),
                    'pnpm_kota'=>$this->input->post('pnpm_kota'),
                    'pnpm_kota_st'=>$this->input->post('pnpm_kota_st'),
                    'pnpm_desa'=>$this->input->post('pnpm_desa'),
                    'pnpm_desa_st'=>$this->input->post('pnpm_desa_st'),
                    'swadaya'=>$this->input->post('swadaya'),
                    'swadaya_st'=>$this->input->post('swadaya_st'),
                    'lainnya'=>$this->input->post('lainnya'),
                    'lainnya_ds'=>$this->input->post('lainnya_ds'),
                    'lainnya_st'=>$this->input->post('lainnya_st'),
                    'jmlp_jsp'=>$this->input->post('jmlp_jsp'),
                    'jmlp_jssp'=>$this->input->post('jmlp_jssp'),
                    'jmlp_jss'=>$this->input->post('jmlp_jss'),
                    'jmlp_pps'=>$this->input->post('jmlp_pps'),
                    'jmlp_mss'=>$this->input->post('jmlp_mss'),
                    'jmlp_p3r'=>$this->input->post('jmlp_p3r'),
                    'jmlp_ms'=>$this->input->post('jmlp_ms'),
                    'jmlp_mskba'=>$this->input->post('jmlp_mskba'),
                    'jmlp_msklk'=>$this->input->post('jmlp_msklk'),
                    'jmlp_msdklk'=>$this->input->post('jmlp_msdklk'),
                    'jml_wirastbm'=>$this->input->post('jml_wirastbm'),
                    'jml_wirastbm_p'=>$this->input->post('jml_wirastbm_p'),
                    'jml_wirastbm_a'=>$this->input->post('jml_wirastbm_a'),
                    'jml_wirastbm_ap'=>$this->input->post('jml_wirastbm_ap'),
                    'jmls_pstbm'=>$this->input->post('jmls_pstbm'),
                    'matapencaharian'=>$this->input->post('matapencaharian'),
                    'matapencaharian_dll'=>$this->input->post('matapencaharian_dll'),
                    'rr_penghasilan'=>$this->input->post('rr_penghasilan'),
                    'rr_airminum'=>$this->input->post('rr_airminum'),
                    'tipe_wil'=>$this->input->post('tipe_wil')
                );
                $this->m_desa->simpan($info);
                redirect('desa/index/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('desa/tambah',$data);
        }
    }
    
    
    function edit($id){
        $data['title']="Edit Data Desa";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama_desa=$this->input->post('nama_desa');
            
            $info=array(
                    'nama_desa'=>$this->input->post('nama_desa'),
                    'kecamatan'=>$this->input->post('kecamatan'),
                    'kota'=>$this->input->post('kota'),
                    'jml_dusun'=>$this->input->post('jml_dusun'),
                    'jml_penduduk_jw'=>$this->input->post('jml_penduduk_jw'),
                    'jml_penduduk_kk'=>$this->input->post('jml_penduduk_kk'),
                    'jml_penduduk_p'=>$this->input->post('jml_penduduk_p'),
                    'jmlp_amlayak_kk'=>$this->input->post('jmlp_amlayak_kk'),
                    'jmlp_amlayak_ds'=>$this->input->post('jmlp_amlayak_ds'),
                    'jmlp_amsp'=>$this->input->post('jmlp_amsp'),
                    'jml_sr_sr'=>$this->input->post('jml_sr_sr'),
                    'jml_sr_kk'=>$this->input->post('jml_sr_kk'),
                    'p_pasimas'=>$this->input->post('p_pasimas'),
                    'p_pasimas_st'=>$this->input->post('p_pasimas_st'),
                    'p_dak'=>$this->input->post('p_dak'),
                    'p_dak_st'=>$this->input->post('p_dak_st'),
                    'pnpm_kota'=>$this->input->post('pnpm_kota'),
                    'pnpm_kota_st'=>$this->input->post('pnpm_kota_st'),
                    'pnpm_desa'=>$this->input->post('pnpm_desa'),
                    'pnpm_desa_st'=>$this->input->post('pnpm_desa_st'),
                    'swadaya'=>$this->input->post('swadaya'),
                    'swadaya_st'=>$this->input->post('swadaya_st'),
                    'lainnya'=>$this->input->post('lainnya'),
                    'lainnya_ds'=>$this->input->post('lainnya_ds'),
                    'lainnya_st'=>$this->input->post('lainnya_st'),
                    'jmlp_jsp'=>$this->input->post('jmlp_jsp'),
                    'jmlp_jssp'=>$this->input->post('jmlp_jssp'),
                    'jmlp_jss'=>$this->input->post('jmlp_jss'),
                    'jmlp_pps'=>$this->input->post('jmlp_pps'),
                    'jmlp_mss'=>$this->input->post('jmlp_mss'),
                    'jmlp_p3r'=>$this->input->post('jmlp_p3r'),
                    'jmlp_ms'=>$this->input->post('jmlp_ms'),
                    'jmlp_mskba'=>$this->input->post('jmlp_mskba'),
                    'jmlp_msklk'=>$this->input->post('jmlp_msklk'),
                    'jmlp_msdklk'=>$this->input->post('jmlp_msdklk'),
                    'jml_wirastbm'=>$this->input->post('jml_wirastbm'),
                    'jml_wirastbm_p'=>$this->input->post('jml_wirastbm_p'),
                    'jml_wirastbm_a'=>$this->input->post('jml_wirastbm_a'),
                    'jml_wirastbm_ap'=>$this->input->post('jml_wirastbm_ap'),
                    'jmls_pstbm'=>$this->input->post('jmls_pstbm'),
                    'matapencaharian'=>$this->input->post('matapencaharian'),
                    'matapencaharian_dll'=>$this->input->post('matapencaharian_dll'),
                    'rr_penghasilan'=>$this->input->post('rr_penghasilan'),
                    'rr_airminum'=>$this->input->post('rr_airminum'),
                    'tipe_wil'=>$this->input->post('tipe_wil')
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
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_desa->cek($kode)->result();
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
