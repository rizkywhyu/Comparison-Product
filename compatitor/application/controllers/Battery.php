<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Battery extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Battery_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $battery = $this->Battery_model->get_all();

        $data = array(
            'battery_data' => $battery
        );

        $this->template->load('template','battery/battery_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Battery_model->get_by_id($id);
        if ($row) {
            $data = array(
    		'model' => $row->model,
            'gambar' => $row->gambar,
    		'capacity' => $row->capacity,
    		'center' => $row->center,
    		'powertype' => $row->powertype,
    		'operator' => $row->operator,
            'tiretype' => $row->tiretype,
    		'forkheight' => $row->forkheight,
            'batmin' => $row->batmin,
            'batcap' => $row->batcap,
            'drive' => $row->drive,
            'handling' => $row->handling,
            'steering' => $row->steering,
            'control' => $row->control,
            'operating' => $row->operating,
            'travelling' => $row->travelling,
            'lifting' => $row->lifting,
            'lower' => $row->lower,
            'gradeability' => $row->gradeability,
            'turning' => $row->turning,
            'tilt' => $row->tilt,
            'vehicle' => $row->vehicle,
            'lengthtofork' => $row->lengthtofork,
            'width' => $row->width,
            'guard' => $row->guard,
            'tire' => $row->tire,
            'freeliftdua' => $row->freeliftdua,
            'freelifttiga' => $row->freelifttiga,
            'display' => $row->display,
            'feature' => $row->feature,
    	    );
            $this->template->load('template','battery/battery_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('battery'));
        }
    }

   

    public function create() 
    {
        
        $data = array(
            'button' => 'Create',
            'action' => site_url('battery/insert'),
            // 'dd_tempat' => $this->Battery_model->dd_tempat(),
            // 'tempat_selected' => $this->input->post('tempat') ? $this->input->post('tempat') : '',
    	    'model' => set_value('model'),
            'gambar' => set_value('gambar'),
    	    'capacity' => set_value('capacity'),
    	    'center' => set_value('center'),
    	    'powertype' => set_value('powertype'),
    	    'operator' => set_value('operator'),
            'tiretype' => set_value('tiretype'),
    	    'forkheight' => set_value('forkheight'),
            'batmin' => set_value('batmin'),
            'batcap' => set_value('batcap'),
            'drive' => set_value('drive'),
            'handling' => set_value('handling'),
            'steering' => set_value('steering'),
            'control' => set_value('control'),
            'operating' => set_value('operating'),
            'travelling' => set_value('travelling'),
            'lifting' => set_value('lifting'),
            'lower' => set_value('lower'),
            'gradeability' => set_value('gradeability'),
            'turning' => set_value('turning'),
            'tilt' => set_value('tilt'),
            'vehicle' => set_value('vehicle'),
            'lengthtofork' => set_value('lengthtofork'),
            'width' => set_value('width'),
            'guard' => set_value('guard'),
            'tire' => set_value('tire'),
            'freeliftdua' => set_value('freeliftdua'),
            'freelifttiga' => set_value('freelifttiga'),
            'display' => $this->input->post('display'),
            'feature' => set_value('feature'),
    	);
        $this->template->load('template','battery/battery_form', $data);
    }


    function createaksi()
    {
        $this->form_validation->set_error_delimiters('<div id="error">', '</div>');
        $this->_rules();
                if ($this->form_validation->run() == TRUE){
        $data = array(
            
                'model' => $this->input->post('model'),
                'gambar' => $this->input->post('gambar'),
                'capacity' => $this->input->post('capacity'),
                'center' => $this->input->post('center'),
                'powertype' => $this->input->post('powertype'),
                'operator' => $this->input->post('operator'),
                'tiretype' => $this->input->post('tiretype'),
                'forkheight' => $this->input->post('forkheight'),
                'batmin' => $this->input->post('batmin'),
                'batcap' => $this->input->post('batcap'),
                'drive' => $this->input->post('drive'),
                'handling' => $this->input->post('handling'),
                'steering' => $this->input->post('steering'),
                'control' => $this->input->post('control'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lower' => $this->input->post('lower'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'vehicle' => $this->input->post('vehicle'),
                'lengthtofork' => $this->input->post('lengthtofork'),
                'width' => $this->input->post('width'),
                'guard' => $this->input->post('guard'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelifttiga' => $this->input->post('freelifttiga'),
                'display' => $this->input->post('display'),
                'feature' => $this->input->post('feature'),
                     
        );
        $this->Battery_model->create_data($data);
        redirect('battery');
    }
        else {
                $this->create();
             
        }
    }
        /**
     * Cek apakah $nip valid, agar tidak ganda
     */
        function valid_id($model)
        {
            if ($this->Battery_model->valid_id($model) == TRUE)
            {
                
                // echo 'valid_id', "kode guruadm dengan Kode $kodeguru sudah terdaftar";
                $this->form_validation->set_message('valid_id', "Model dengan $model sudah terdaftar");
                return FALSE;
            }
            else
            {
                return TRUE;

            }
        }
    
   
    
    public function update($id) 
    {
        $row = $this->Battery_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('battery/updateaksi'),
        		'model' => set_value('model', $row->model),
                'gambar' => set_value('gambar', $row->gambar),
        		'capacity' => set_value('capacity', $row->capacity),
        		'center' => set_value('center', $row->center),
        		'powertype' => set_value('powertype', $row->powertype),
        		'operator' => set_value('operator', $row->operator),
                'tiretype' => set_value('tiretype', $row->tiretype),
        		'forkheight' => set_value('forkheight', $row->forkheight),
                'batmin' => set_value('batmin', $row->batmin),
                'batcap' => set_value('batcap', $row->batcap),
                'drive' => set_value('drive', $row->drive),
                'handling' => set_value('handling', $row->handling),
                'steering' => set_value('steering', $row->steering),
                'control' => set_value('control', $row->control),
                'operating' => set_value('operating', $row->operating),
                'travelling' => set_value('travelling', $row->travelling),
                'lifting' => set_value('lifting', $row->lifting),
                'lower' => set_value('lower', $row->lower),
                'gradeability' => set_value('gradeability', $row->gradeability),
                'turning' => set_value('turning', $row->turning),
                'tilt' => set_value('tilt', $row->tilt),
                'vehicle' => set_value('vehicle', $row->vehicle),
                'lengthtofork' => set_value('lengthtofork', $row->lengthtofork),
                'width' => set_value('width', $row->width),
                'guard' => set_value('drive', $row->guard),
                'tire' => set_value('tire', $row->tire),
                'freeliftdua' => set_value('freeliftdua', $row->freeliftdua),
                'freelifttiga' => set_value('freelifttiga', $row->freelifttiga),
                'display' => set_value('display', $row->display),
                'feature' => set_value('feature', $row->feature),
        	    );
            $this->template->load('template','battery/battery_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('battery'));
        }
    }
    
    public function update_action() 
    {
        $this->_ruless();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('model', TRUE));
        } else {
            $data = array(
        
        		'model' => $this->input->post('model',TRUE),
        		'capacity' => $this->input->post('capacity',TRUE),
        		'center' => $this->input->post('center',TRUE),
        		'powertype' => $this->input->post('powertype',TRUE),
                'operator' => $this->input->post('operator',TRUE),
                'tiretype' => $this->input->post('tiretype',TRUE),
                'forkheight' => $this->input->post('forkheight',TRUE),
                'batmin' => $this->input->post('batmin',TRUE),
                'batcap' => $this->input->post('batcap',TRUE),
                'drive' => $this->input->post('drive',TRUE),
                'handling' => $this->input->post('handling',TRUE),
                'steering' => $this->input->post('steering',TRUE),
                'control' => $this->input->post('control',TRUE),
                'operating' => $this->input->post('operating',TRUE),
                'travelling' => $this->input->post('travelling',TRUE),
                'lifting' => $this->input->post('lifting',TRUE),
                'lower' => $this->input->post('lower',TRUE),
                'gradeability' => $this->input->post('gradeability',TRUE),
                'turning' => $this->input->post('turning',TRUE),
                'tilt' => $this->input->post('tilt',TRUE),
                'vehicle' => $this->input->post('vehicle',TRUE),
                'lengthtofork' => $this->input->post('lengthtofork',TRUE),
                'width' => $this->input->post('width',TRUE),
                'guard' => $this->input->post('guard',TRUE),
                'tire' => $this->input->post('tire',TRUE),
                'freeliftdua' => $this->input->post('freeliftdua',TRUE),
                'freelifttiga' => $this->input->post('freelifttiga',TRUE),
                'display' => $this->input->post('display',TRUE),
                'feature' => $this->input->post('feature',TRUE),
                
        	    );

            $this->Battery_model->update($this->input->post('model', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('battery'));
        }
    }

   
    
    public function delete($id) 
    {
        $row = $this->Battery_model->get_by_id($id);

        if ($row) {
            $this->Battery_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('battery'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('battery'));
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('model', 'model', 'trim|required|xss_clean|callback_valid_id');
    	$this->form_validation->set_rules('capacity', 'capacity', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gambar', 'gambar', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('center', 'center', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('powertype', 'powertype', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('operator', 'operator', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tiretype', 'tiretype', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('forkheight', 'forkheight', 'trim|required|xss_clean');
        $this->form_validation->set_rules('batmin', 'batmin', 'trim|required|xss_clean');
        $this->form_validation->set_rules('batcap', 'batcap', 'trim|required|xss_clean');
        $this->form_validation->set_rules('drive', 'drive', 'trim|required|xss_clean');
        $this->form_validation->set_rules('handling', 'handling', 'trim|required|xss_clean');
        $this->form_validation->set_rules('steering', 'steering', 'trim|required|xss_clean');
        $this->form_validation->set_rules('control', 'control', 'trim|required|xss_clean');
        $this->form_validation->set_rules('operating', 'operating', 'trim|required|xss_clean');
        $this->form_validation->set_rules('travelling', 'travelling', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lifting', 'lifting', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lower', 'lower', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gradeability', 'gradeability', 'trim|required|xss_clean');
        $this->form_validation->set_rules('turning', 'turning', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tilt', 'tilt', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicle', 'vehicle', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lengthtofork', 'lengthtofork', 'trim|required|xss_clean');
        $this->form_validation->set_rules('width', 'width', 'trim|required|xss_clean');
        $this->form_validation->set_rules('guard', 'guard', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tire', 'tire', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freeliftdua', 'freeliftdua', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freelifttiga', 'freelifttiga', 'trim|required|xss_clean');
        $this->form_validation->set_rules('display', 'display', 'trim|required|xss_clean');
        $this->form_validation->set_rules('feature', 'feature', 'trim|required|xss_clean');
       
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

     public function _ruless() 
    {
        $this->form_validation->set_rules('model', 'model', 'trim|required|xss_clean');
        $this->form_validation->set_rules('capacity', 'capacity', 'trim|required|xss_clean');
        $this->form_validation->set_rules('center', 'center', 'trim|required|xss_clean');
        $this->form_validation->set_rules('powertype', 'powertype', 'trim|required|xss_clean');
        $this->form_validation->set_rules('operator', 'operator', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tiretype', 'tiretype', 'trim|required|xss_clean');
        $this->form_validation->set_rules('forkheight', 'forkheight', 'trim|required|xss_clean');
        $this->form_validation->set_rules('batmin', 'batmin', 'trim|required|xss_clean');
        $this->form_validation->set_rules('batcap', 'batcap', 'trim|required|xss_clean');
        $this->form_validation->set_rules('drive', 'drive', 'trim|required|xss_clean');
        $this->form_validation->set_rules('handling', 'handling', 'trim|required|xss_clean');
        $this->form_validation->set_rules('steering', 'steering', 'trim|required|xss_clean');
        $this->form_validation->set_rules('control', 'control', 'trim|required|xss_clean');
        $this->form_validation->set_rules('operating', 'operating', 'trim|required|xss_clean');
        $this->form_validation->set_rules('travelling', 'travelling', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lifting', 'lifting', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lower', 'lower', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gradeability', 'gradeability', 'trim|required|xss_clean');
        $this->form_validation->set_rules('turning', 'turning', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tilt', 'tilt', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicle', 'vehicle', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lengthtofork', 'lengthtofork', 'trim|required|xss_clean');
        $this->form_validation->set_rules('width', 'width', 'trim|required|xss_clean');
        $this->form_validation->set_rules('guard', 'guard', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tire', 'tire', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freeliftdua', 'freeliftdua', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freelifttiga', 'freelifttiga', 'trim|required|xss_clean');
        $this->form_validation->set_rules('display', 'display', 'trim|required|xss_clean');
        $this->form_validation->set_rules('feature', 'feature', 'trim|required|xss_clean');
       
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


    
    
    

     public function insert(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './gambar/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = 2048; //maksimum besar file 2M
        $config['max_width']  = 1288; //lebar maksimum 1288 px
        $config['max_height']  = 768; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         if($_FILES['filefoto']['name'])
        {
             
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $inputFileName = 'gambar/'.$gbr['file_name'];
                // $this->form_validation->set_error_delimiters('<div id="error">', '</div>');
                // $this->_rules();
                //  if ($this->form_validation->run() == TRUE){
                $data = array(
                  // 'nm_gbr' =>$gbr['file_name'],
                  // 'tipe_gbr' =>$gbr['file_type'],
                  // 'ket_gbr' =>$this->input->post('textket')
                  'model' => $this->input->post('model'),
                'gambar' => $gbr['file_name'],
                'capacity' => $this->input->post('capacity'),
                'center' => $this->input->post('center'),
                'powertype' => $this->input->post('powertype'),
                'operator' => $this->input->post('operator'),
                'tiretype' => $this->input->post('tiretype'),
                'forkheight' => $this->input->post('forkheight'),
                'batmin' => $this->input->post('batmin'),
                'batcap' => $this->input->post('batcap'),
                'drive' => $this->input->post('drive'),
                'handling' => $this->input->post('handling'),
                'steering' => $this->input->post('steering'),
                'control' => $this->input->post('control'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lower' => $this->input->post('lower'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'vehicle' => $this->input->post('vehicle'),
                'lengthtofork' => $this->input->post('lengthtofork'),
                'width' => $this->input->post('width'),
                'guard' => $this->input->post('guard'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelifttiga' => $this->input->post('freelifttiga'),
                'display' => $this->input->post('display'),
                'feature' => $this->input->post('feature'),
                   
                );

 
                $this->Battery_model->create_data($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('battery'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $er_upload=$this->upload->display_errors();
               echo '<script type="text/javascript"> alert("Tipe File Tidak Sama/Ukuran File Terlalu Besar") 
                window.location = "'.base_url().'battery'.'" </script>';
                //redirect('battery'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

     public function updateaksi(){
 
       $this->load->library('upload');// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $path   = './gambar/'; //path folder
       $config['upload_path'] = $path; //variabel path untuk config upload
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = 2048; //maksimum besar file 2M
       $config['max_width']  = 1288; //lebar maksimum 1288 px
       $config['max_height']  = 768; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
       $this->upload->initialize($config);
 
       $md      = $this->input->post('model'); /* variabel id gambar */
       $filelama   = $this->input->post('filelama'); /* variabel file gambar lama */
 
       if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                  'model' => $this->input->post('model'),
                'gambar' => $gbr['file_name'],
                'capacity' => $this->input->post('capacity'),
                'center' => $this->input->post('center'),
                'powertype' => $this->input->post('powertype'),
                'operator' => $this->input->post('operator'),
                'tiretype' => $this->input->post('tiretype'),
                'forkheight' => $this->input->post('forkheight'),
                'batmin' => $this->input->post('batmin'),
                'batcap' => $this->input->post('batcap'),
                'drive' => $this->input->post('drive'),
                'handling' => $this->input->post('handling'),
                'steering' => $this->input->post('steering'),
                'control' => $this->input->post('control'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lower' => $this->input->post('lower'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'vehicle' => $this->input->post('vehicle'),
                'lengthtofork' => $this->input->post('lengthtofork'),
                'width' => $this->input->post('width'),
                'guard' => $this->input->post('guard'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelifttiga' => $this->input->post('freelifttiga'),
                'display' => $this->input->post('display'),
                'feature' => $this->input->post('feature'),
 
               );
 
               @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('model'=>$md); //array where query sebagai identitas pada saat query dijalankan
               $this->Battery_model->get_update($data,$where); //akses model untuk menyimpan ke database
 
              
               redirect('battery'); //jika berhasil maka akan ditampilkan view vupload
 
           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               echo '<script type="text/javascript"> alert("Tipe File Tidak Sama/Ukuran File Terlalu Besar") 
                window.location = "'.base_url().'battery'.'" </script>';
               //redirect('upload/edit'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
           $data = array(
                'model' => $this->input->post('model'),
                //'gambar' => $this->input->post('gambar'),
                'capacity' => $this->input->post('capacity'),
                'center' => $this->input->post('center'),
                'powertype' => $this->input->post('powertype'),
                'operator' => $this->input->post('operator'),
                'tiretype' => $this->input->post('tiretype'),
                'forkheight' => $this->input->post('forkheight'),
                'batmin' => $this->input->post('batmin'),
                'batcap' => $this->input->post('batcap'),
                'drive' => $this->input->post('drive'),
                'handling' => $this->input->post('handling'),
                'steering' => $this->input->post('steering'),
                'control' => $this->input->post('control'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lower' => $this->input->post('lower'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'vehicle' => $this->input->post('vehicle'),
                'lengthtofork' => $this->input->post('lengthtofork'),
                'width' => $this->input->post('width'),
                'guard' => $this->input->post('guard'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelifttiga' => $this->input->post('freelifttiga'),
                'display' => $this->input->post('display'),
                'feature' => $this->input->post('feature'),
           );
 
           $where =array('model'=>$md); //array where query sebagai identitas pada saat query dijalankan
           $this->Battery_model->get_update($data,$where); //akses model untuk menyimpan ke database
 
          
           redirect('battery'); /* jika berhasil maka akan kembali ke home upload */
       }
   }

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-06 11:21:06 */
/* http://harviacode.com */