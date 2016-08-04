<?php
class Jspams extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','pagination','form_validation','upload'));
        $this->load->model('m_jspams');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index($offset=0,$order_column='nama_desa',$order_type='asc'){
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='nama_desa';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['jspams']=$this->m_jspams->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Sumber Air Baku";
        
        $config['base_url']=site_url('jspams/index/');
        $config['total_rows']=$this->m_jspams->jumlah();
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
            $this->template->display('jspams/index',$data);
    }

    function tambah(){
        $data['title']="Tambah Data Jenis & Sistem Penyediaan Air Minum dan Sanitasi";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama_desa=$this->input->post('nama_desa');
            $cek=$this->m_jspams->cek($nama_desa);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-warning'>Nama desa sudah digunakan</div>";
                $this->template->display('jspams/tambah',$data);
            }else{

                $info=array(
                    'nama_desa'=>$this->input->post('nama_desa'),
                    'jenis_opsi'=>$this->input->post('jenis_opsi'),
                    'sumber_energi'=>$this->input->post('sumber_energi'),
                    'pma_unit'=>$this->input->post('pma_unit'),
                    'pma_stat'=>$this->input->post('pma_stat'),
                    'sgdkl_unit'=>$this->input->post('sgdkl_unit'),
                    'sgdkl_stat'=>$this->input->post('sgdkl_stat'),
                    'sbdlm_unit'=>$this->input->post('sbdlm_unit'),
                    'sbdlm_stat'=>$this->input->post('sbdlm_stat'),
                    'sbdkl_unit'=>$this->input->post('sbdkl_unit'),
                    'sbdkl_stat'=>$this->input->post('sbdkl_stat'),
                    'tappdam_unit'=>$this->input->post('tappdam_unit'),
                    'tappdam_stat'=>$this->input->post('tappdam_stat'),
                    'intake_unit'=>$this->input->post('intake_unit'),
                    'intake_stat'=>$this->input->post('intake_stat'),
                    'spl_unit'=>$this->input->post('spl_unit'),
                    'spl_stat'=>$this->input->post('spl_stat'),
                    'gi_unit'=>$this->input->post('gi_unit'),
                    'gi_stat'=>$this->input->post('gi_stat'),
                    'bpah_unit'=>$this->input->post('bpah_unit'),
                    'bpah_stat'=>$this->input->post('bpah_stat'),
                    'ma_unit'=>$this->input->post('ma_unit'),
                    'ma_stat'=>$this->input->post('ma_stat'),
                    'hu_unit'=>$this->input->post('hu_unit'),
                    'hu_stat'=>$this->input->post('hu_stat'),
                    'sr_unit'=>$this->input->post('sr_unit'),
                    'sr_stat'=>$this->input->post('sr_stat'),
                    'bp_unit'=>$this->input->post('bp_unit'),
                    'bp_stat'=>$this->input->post('bp_stat'),
                    'ku_unit'=>$this->input->post('ku_unit'),
                    'ku_stat'=>$this->input->post('ku_stat'),
                    'pt_unit'=>$this->input->post('pt_unit'),
                    'pt_stat'=>$this->input->post('pt_stat'),
                    'pd_unit'=>$this->input->post('pd_unit'),
                    'pd_stat'=>$this->input->post('pd_stat'),
                    'bpt_unit'=>$this->input->post('bpt_unit'),
                    'bpt_stat'=>$this->input->post('bpt_stat'),
                    'kvrk_unit'=>$this->input->post('kvrk_unit'),
                    'kvrk_stat'=>$this->input->post('kvrk_stat'),
                    'kap_unit'=>$this->input->post('kap_unit'),
                    'kap_stat'=>$this->input->post('kap_stat'),
                    'prp_unit'=>$this->input->post('prp_unit'),
                    'prp_stat'=>$this->input->post('prp_stat'),
                    'perja_unit'=>$this->input->post('perja_unit'),
                    'perja_stat'=>$this->input->post('perja_stat'),
                    'ggp_unit'=>$this->input->post('ggp_unit'),
                    'ggp_stat'=>$this->input->post('ggp_stat'),
                    'bptb_unit'=>$this->input->post('bptb_unit'),
                    'bptb_stat'=>$this->input->post('bptb_stat'),
                    'ctps_unit'=>$this->input->post('ctps_unit'),
                    'ctps_stat'=>$this->input->post('ctps_stat'),
                    'spal_unit'=>$this->input->post('spal_unit'),
                    'spal_stat'=>$this->input->post('spal_stat'),
                    'jamse_unit'=>$this->input->post('jamse_unit'),
                    'jamse_stat'=>$this->input->post('jamse_stat'),
                    'jamke_unit'=>$this->input->post('jamke_unit'),
                    'jamke_stat'=>$this->input->post('jamke_stat'),
                    'mck_unit'=>$this->input->post('mck_unit'),
                    'mck_stat'=>$this->input->post('mck_stat'),
                    'tst_unit'=>$this->input->post('tst_unit'),
                    'tst_stat'=>$this->input->post('tst_stat')

                );
                $this->m_jspams->simpan($info);
                redirect('jspams/index/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('jspams/tambah',$data);
        }
    }
    
    
    function edit($id){
        $data['title']="Edit Data Jenis & Sistem Penyediaan Air Minum dan Sanitasi";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $nama_desa=$this->input->post('nama_desa');
            
            $info=array(
                    'nama_desa'=>$this->input->post('nama_desa'),
                    'jenis_opsi'=>$this->input->post('jenis_opsi'),
                    'sumber_energi'=>$this->input->post('sumber_energi'),
                    'pma_unit'=>$this->input->post('pma_unit'),
                    'pma_stat'=>$this->input->post('pma_stat'),
                    'sgdkl_unit'=>$this->input->post('sgdkl_unit'),
                    'sgdkl_stat'=>$this->input->post('sgdkl_stat'),
                    'sbdlm_unit'=>$this->input->post('sbdlm_unit'),
                    'sbdlm_stat'=>$this->input->post('sbdlm_stat'),
                    'sbdkl_unit'=>$this->input->post('sbdkl_unit'),
                    'sbdkl_stat'=>$this->input->post('sbdkl_stat'),
                    'tappdam_unit'=>$this->input->post('tappdam_unit'),
                    'tappdam_stat'=>$this->input->post('tappdam_stat'),
                    'intake_unit'=>$this->input->post('intake_unit'),
                    'intake_stat'=>$this->input->post('intake_stat'),
                    'spl_unit'=>$this->input->post('spl_unit'),
                    'spl_stat'=>$this->input->post('spl_stat'),
                    'gi_unit'=>$this->input->post('gi_unit'),
                    'gi_stat'=>$this->input->post('gi_stat'),
                    'bpah_unit'=>$this->input->post('bpah_unit'),
                    'bpah_stat'=>$this->input->post('bpah_stat'),
                    'ma_unit'=>$this->input->post('ma_unit'),
                    'ma_stat'=>$this->input->post('ma_stat'),
                    'hu_unit'=>$this->input->post('hu_unit'),
                    'hu_stat'=>$this->input->post('hu_stat'),
                    'sr_unit'=>$this->input->post('sr_unit'),
                    'sr_stat'=>$this->input->post('sr_stat'),
                    'bp_unit'=>$this->input->post('bp_unit'),
                    'bp_stat'=>$this->input->post('bp_stat'),
                    'ku_unit'=>$this->input->post('ku_unit'),
                    'ku_stat'=>$this->input->post('ku_stat'),
                    'pt_unit'=>$this->input->post('pt_unit'),
                    'pt_stat'=>$this->input->post('pt_stat'),
                    'pd_unit'=>$this->input->post('pd_unit'),
                    'pd_stat'=>$this->input->post('pd_stat'),
                    'bpt_unit'=>$this->input->post('bpt_unit'),
                    'bpt_stat'=>$this->input->post('bpt_stat'),
                    'kvrk_unit'=>$this->input->post('kvrk_unit'),
                    'kvrk_stat'=>$this->input->post('kvrk_stat'),
                    'kap_unit'=>$this->input->post('kap_unit'),
                    'kap_stat'=>$this->input->post('kap_stat'),
                    'prp_unit'=>$this->input->post('prp_unit'),
                    'prp_stat'=>$this->input->post('prp_stat'),
                    'perja_unit'=>$this->input->post('perja_unit'),
                    'perja_stat'=>$this->input->post('perja_stat'),
                    'ggp_unit'=>$this->input->post('ggp_unit'),
                    'ggp_stat'=>$this->input->post('ggp_stat'),
                    'bptb_unit'=>$this->input->post('bptb_unit'),
                    'bptb_stat'=>$this->input->post('bptb_stat'),
                    'ctps_unit'=>$this->input->post('ctps_unit'),
                    'ctps_stat'=>$this->input->post('ctps_stat'),
                    'spal_unit'=>$this->input->post('spal_unit'),
                    'spal_stat'=>$this->input->post('spal_stat'),
                    'jamse_unit'=>$this->input->post('jamse_unit'),
                    'jamse_stat'=>$this->input->post('jamse_stat'),
                    'jamke_unit'=>$this->input->post('jamke_unit'),
                    'jamke_stat'=>$this->input->post('jamke_stat'),
                    'mck_unit'=>$this->input->post('mck_unit'),
                    'mck_stat'=>$this->input->post('mck_stat'),
                    'tst_unit'=>$this->input->post('tst_unit'),
                    'tst_stat'=>$this->input->post('tst_stat')

                );
            //update data jspams
            $this->m_jspams->update($nama_desa,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            //tampilkan data jspams
            $data['jspams']=$this->m_jspams->cek($id)->row_array();
            $this->template->display('jspams/edit',$data);
        }else{
            $data['jspams']=$this->m_jspams->cek($id)->row_array();
            $data['message']="";
            $this->template->display('jspams/edit',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $detail=$this->m_jspams->cek($kode)->result();
        $this->m_jspams->hapus($kode);
    }
    
    function cari(){
        $data['title']="Pencarian";
        $cari=$this->input->post('cari');
        $cek=$this->m_jspams->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['jspams']=$cek->result();
            $this->template->display('jspams/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['jspams']=$cek->result();
            $this->template->display('jspams/cari',$data);
        }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('nama_desa','Nama Desa','required|max_length[50]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
}
