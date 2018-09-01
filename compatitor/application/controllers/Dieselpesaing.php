<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dieselpesaing extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Diesel_pesaing_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $dieselpesaing = $this->Diesel_pesaing_model->get_all();

        $data = array(
            'dieselpesaing_data' => $dieselpesaing
        );

        $this->template->load('template','dieselpes/dieselpesaing_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Diesel_pesaing_model->get_by_id($id);
        if ($row) {
            $data = array(
            'model' => $row->model,
            'gambar' => $row->gambar,
            'capacity' => $row->capacity,
            'center' => $row->center,
            'powertype' => $row->powertype,
            'operatorposition' => $row->operatorposition,
            'tiretype' => $row->tiretype,
            'maxforkheight' => $row->maxforkheight,
            'engine' => $row->engine,
            'ratedpower' => $row->ratedpower,
            'ratedtorque' => $row->ratedtorque,
            'noofcylinder' => $row->noofcylinder,
            'piston' => $row->piston,
            'fueltank' => $row->fueltank,
            'transmission' => $row->transmission,
            'stage' => $row->stage,
            'operating' => $row->operating,
            'travelling' => $row->travelling,
            'lifting' => $row->lifting,
            'lowering' => $row->lowering,
            'gradeability' => $row->gradeability,
            'turning' => $row->turning,
            'tilt' => $row->tilt,
            'noise' => $row->noise,
            'vehicle' => $row->vehicle,
            'overalllength' => $row->overalllength,
            'width' => $row->width,
            'guardheight' => $row->guardheight,
            'tire' => $row->tire,
            'freeliftdua' => $row->freeliftdua,
            'freelift3' => $row->freelift3,
            'digital' => $row->digital,
            'feature' => $row->feature,
            );
            $this->template->load('template','dieselpes/dieselpesaing_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dieselpesaing'));
        }
    }

   

    public function create() 
    {
        
        $data = array(
            'button' => 'Create',
            'action' => site_url('dieselpesaing/insert'),
            // 'dd_tempat' => $this->Diesel_pesaing_model->dd_tempat(),
            // 'tempat_selected' => $this->input->post('tempat') ? $this->input->post('tempat') : '',
            'model' => set_value('model'),
            'gambar' => set_value('gambar'),
            'capacity' => set_value('capacity'),
            'center' => set_value('center'),
            'powertype' => set_value('powertype'),
            'operatorposition' => set_value('operatorposition'),
            'tiretype' => set_value('tiretype'),
            'maxforkheight' => set_value('maxforkheight'),
            'engine' => set_value('engine'),
            'ratedpower' => set_value('ratedpower'),
            'ratedtorque' => set_value('ratedtorque'),
            'noofcylinder' => set_value('noofcylinder'),
            'piston' => set_value('piston'),
            'fueltank' => set_value('fueltank'),
            'transmission' => set_value('transmission'),
            'stage' => set_value('stage'),
            'operating' => set_value('operating'),
            'travelling' => set_value('travelling'),
            'lifting' => set_value('lifting'),
            'lowering' => set_value('lowering'),
            'gradeability' => set_value('gradeability'),
            'turning' => set_value('turning'),
            'tilt' => set_value('tilt'),
            'noise' => set_value('noise'),
            'vehicle' => set_value('vehicle'),
            'overalllength' => set_value('overalllength'),
            'width' => set_value('width'),
            'guardheight' => set_value('guardheight'),
            'tire' => set_value('tire'),
            'freeliftdua' => set_value('freeliftdua'),
            'freelift3' => set_value('freelift3'),
            'digital' => set_value('digital'),
            'feature' => set_value('feature'),
        );
        $this->template->load('template','dieselpes/dieselpesaing_form', $data);
    }


    function createaksi()
    {
        $this->form_validation->set_error_delimiters('<div id="error">', '</div>');
        $this->_rules();
                if ($this->form_validation->run() == TRUE){
        $data = array(
            
                'model' => $this->input->post('model'),
                'capacity' => $this->input->post('capacity'),
                'center' => $this->input->post('center'),
                'powertype' => $this->input->post('powertype'),
                'operatorposition' => $this->input->post('operatorposition'),
                'tiretype' => $this->input->post('tiretype'),
                'maxforkheight' => $this->input->post('maxforkheight'),
                'engine' => $this->input->post('engine'),
                'ratedpower' => $this->input->post('ratedpower'),
                'ratedtorque' => $this->input->post('ratedtorque'),
                'noofcylinder' => $this->input->post('noofcylinder'),
                'piston' => $this->input->post('piston'),
                'fueltank' => $this->input->post('fueltank'),
                'transmission' => $this->input->post('transmission'),
                'stage' => $this->input->post('stage'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lowering' => $this->input->post('lowering'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'noise' => $this->input->post('noise'),
                'vehicle' => $this->input->post('vehicle'),
                'overalllength' => $this->input->post('overalllength'),
                'width' => $this->input->post('width'),
                'guardheight' => $this->input->post('guardheight'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelift3' => $this->input->post('freelift3'),
                'digital' => $this->input->post('digital'),
                'feature' => $this->input->post('feature'),
                     
        );
        $this->Diesel_pesaing_model->create_data($data);
        redirect('dieselpesaing');
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
            if ($this->Diesel_pesaing_model->valid_id($model) == TRUE)
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
        $row = $this->Diesel_pesaing_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dieselpesaing/updateaksi'),
                'model' => set_value('model', $row->model),
                'gambar' => set_value('gambar', $row->gambar),
                'capacity' => set_value('capacity', $row->capacity),
                'center' => set_value('center', $row->center),
                'powertype' => set_value('powertype', $row->powertype),
                'operatorposition' => set_value('operatorposition', $row->operatorposition),
                'tiretype' => set_value('tiretype', $row->tiretype),
                'maxforkheight' => set_value('maxforkheight', $row->maxforkheight),
                'engine' => set_value('engine', $row->engine),
                'ratedpower' => set_value('ratedpower', $row->ratedpower),
                'ratedtorque' => set_value('ratedtorque', $row->ratedtorque),
                'noofcylinder' => set_value('noofcylinder', $row->noofcylinder),
                'piston' => set_value('piston', $row->piston),
                'fueltank' => set_value('fueltank', $row->fueltank),
                'transmission' => set_value('transmission', $row->transmission),
                'stage' => set_value('stage', $row->stage),
                'operating' => set_value('operating', $row->operating),
                'travelling' => set_value('travelling', $row->travelling),
                'lifting' => set_value('lifting', $row->lifting),
                'lowering' => set_value('lowering', $row->lowering),
                'gradeability' => set_value('gradeability', $row->gradeability),
                'turning' => set_value('forkh', $row->turning),
                'tilt' => set_value('tilt', $row->tilt),
                'noise' => set_value('noise', $row->noise),
                'vehicle' => set_value('ratedtorque', $row->vehicle),
                'overalllength' => set_value('overalllength', $row->overalllength),
                'width' => set_value('width', $row->width),
                'guardheight' => set_value('guardheight', $row->guardheight),
                'tire' => set_value('tire', $row->tire),
                'freeliftdua' => set_value('freeliftdua', $row->freeliftdua),
                'freelift3' => set_value('freelift3', $row->freelift3),
                'digital' => set_value('digital', $row->digital),
                'feature' => set_value('feature', $row->feature),
                );
            $this->template->load('template','dieselpes/dieselpesaing_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dieselpesaing'));
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
                'operatorposition' => $this->input->post('operatorposition',TRUE),
                'tiretype' => $this->input->post('tiretype',TRUE),
                'maxforkheight' => $this->input->post('maxforkheight',TRUE),
                'engine' => $this->input->post('engine',TRUE),
                'ratedpower' => $this->input->post('ratedpower',TRUE),
                'ratedtorque' => $this->input->post('ratedtorque',TRUE),
                'noofcylinder' => $this->input->post('noofcylinder',TRUE),
                'piston' => $this->input->post('piston',TRUE),
                'fueltank' => $this->input->post('fueltank',TRUE),
                'transmission' => $this->input->post('transmission',TRUE),
                'stage' => $this->input->post('stage',TRUE),
                'operating' => $this->input->post('operating',TRUE),
                'travelling' => $this->input->post('travelling',TRUE),
                'lifting' => $this->input->post('lifting',TRUE),
                'lowering' => $this->input->post('lowering',TRUE),
                'gradeability' => $this->input->post('gradeability',TRUE),
                'turning' => $this->input->post('turning',TRUE),
                'tilt' => $this->input->post('tilt',TRUE),
                'noise' => $this->input->post('noise',TRUE),
                'vehicle' => $this->input->post('vehicle',TRUE),
                'overalllength' => $this->input->post('overalllength',TRUE),
                'width' => $this->input->post('width',TRUE),
                'guardheight' => $this->input->post('guardheight',TRUE),
                'tire' => $this->input->post('tire',TRUE),
                'freeliftdua' => $this->input->post('freeliftdua',TRUE),
                'freelift3' => $this->input->post('freelift3',TRUE),
                'digital' => $this->input->post('digital',TRUE),
                'feature' => $this->input->post('feature',TRUE),
                
                );

            $this->Diesel_pesaing_model->update($this->input->post('model', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dieselpesaing'));
        }
    }

   
    
    public function delete($id) 
    {
        $row = $this->Diesel_pesaing_model->get_by_id($id);

        if ($row) {
            $this->Diesel_pesaing_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dieselpesaing'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dieselpesaing'));
        }
    }

    public function _rules() 
    {
        $this->form_validation->set_rules('model', 'model', 'trim|required|xss_clean|callback_valid_id');
        $this->form_validation->set_rules('capacity', 'capacity', 'trim|required|xss_clean');
        $this->form_validation->set_rules('center', 'center', 'trim|required|xss_clean');
        $this->form_validation->set_rules('powertype', 'powertype', 'trim|required|xss_clean');
        $this->form_validation->set_rules('operatorposition', 'operatorposition', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tiretype', 'tiretype', 'trim|required|xss_clean');
        $this->form_validation->set_rules('maxforkheight', 'maxforkheight', 'trim|required|xss_clean');
        $this->form_validation->set_rules('engine', 'engine', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ratedpower', 'ratedpower', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ratedtorque', 'ratedtorque', 'trim|required|xss_clean');
        $this->form_validation->set_rules('noofcylinder', 'noofcylinder', 'trim|required|xss_clean');
        $this->form_validation->set_rules('piston', 'piston', 'trim|required|xss_clean');
        $this->form_validation->set_rules('fueltank', 'fueltank', 'trim|required|xss_clean');
        $this->form_validation->set_rules('transmission', 'transmission', 'trim|required|xss_clean');
        $this->form_validation->set_rules('stage', 'stage', 'trim|required|xss_clean');
        $this->form_validation->set_rules('operating', 'operating', 'trim|required|xss_clean');
        $this->form_validation->set_rules('travelling', 'travelling', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lifting', 'lifting', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lowering', 'lowering', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gradeability', 'gradeability', 'trim|required|xss_clean');
        $this->form_validation->set_rules('turning', 'turning', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tilt', 'tilt', 'trim|required|xss_clean');
        $this->form_validation->set_rules('noise', 'noise', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicle', 'vehicle', 'trim|required|xss_clean');
        $this->form_validation->set_rules('overalllength', 'overalllength', 'trim|required|xss_clean');
        $this->form_validation->set_rules('width', 'width', 'trim|required|xss_clean');
        $this->form_validation->set_rules('guardheight', 'guardheight', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tire', 'tire', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freeliftdua', 'freeliftdua', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freelift3', 'freelift3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('digital', 'digital', 'trim|required|xss_clean');
        $this->form_validation->set_rules('feature', 'feature', 'trim|required|xss_clean');
       
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

     public function _ruless() 
    {
        $this->form_validation->set_rules('model', 'model', 'trim|required|xss_clean');
        $this->form_validation->set_rules('capacity', 'capacity', 'trim|required|xss_clean');
        $this->form_validation->set_rules('center', 'center', 'trim|required|xss_clean');
        $this->form_validation->set_rules('powertype', 'powertype', 'trim|required|xss_clean');
        $this->form_validation->set_rules('operatorposition', 'operatorposition', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tiretype', 'tiretype', 'trim|required|xss_clean');
        $this->form_validation->set_rules('maxforkheight', 'maxforkheight', 'trim|required|xss_clean');
        $this->form_validation->set_rules('engine', 'engine', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ratedpower', 'ratedpower', 'trim|required|xss_clean');
        $this->form_validation->set_rules('ratedtorque', 'ratedtorque', 'trim|required|xss_clean');
        $this->form_validation->set_rules('noofcylinder', 'noofcylinder', 'trim|required|xss_clean');
        $this->form_validation->set_rules('piston', 'piston', 'trim|required|xss_clean');
        $this->form_validation->set_rules('fueltank', 'fueltank', 'trim|required|xss_clean');
        $this->form_validation->set_rules('transmission', 'transmission', 'trim|required|xss_clean');
        $this->form_validation->set_rules('stage', 'stage', 'trim|required|xss_clean');
        $this->form_validation->set_rules('operating', 'operating', 'trim|required|xss_clean');
        $this->form_validation->set_rules('travelling', 'travelling', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lifting', 'lifting', 'trim|required|xss_clean');
        $this->form_validation->set_rules('lowering', 'lowering', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gradeability', 'gradeability', 'trim|required|xss_clean');
        $this->form_validation->set_rules('turning', 'turning', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tilt', 'tilt', 'trim|required|xss_clean');
        $this->form_validation->set_rules('noise', 'noise', 'trim|required|xss_clean');
        $this->form_validation->set_rules('vehicle', 'vehicle', 'trim|required|xss_clean');
        $this->form_validation->set_rules('overalllength', 'overalllength', 'trim|required|xss_clean');
        $this->form_validation->set_rules('width', 'width', 'trim|required|xss_clean');
        $this->form_validation->set_rules('guardheight', 'guardheight', 'trim|required|xss_clean');
        $this->form_validation->set_rules('tire', 'tire', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freeliftdua', 'freeliftdua', 'trim|required|xss_clean');
        $this->form_validation->set_rules('freelift3', 'freelift3', 'trim|required|xss_clean');
        $this->form_validation->set_rules('digital', 'digital', 'trim|required|xss_clean');
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
                'operatorposition' => $this->input->post('operatorposition'),
                'tiretype' => $this->input->post('tiretype'),
                'maxforkheight' => $this->input->post('maxforkheight'),
                'engine' => $this->input->post('engine'),
                'ratedpower' => $this->input->post('ratedpower'),
                'ratedtorque' => $this->input->post('ratedtorque'),
                'noofcylinder' => $this->input->post('noofcylinder'),
                'piston' => $this->input->post('piston'),
                'fueltank' => $this->input->post('fueltank'),
                'transmission' => $this->input->post('transmission'),
                'stage' => $this->input->post('stage'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lowering' => $this->input->post('lowering'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'noise' => $this->input->post('noise'),
                'vehicle' => $this->input->post('vehicle'),
                'overalllength' => $this->input->post('overalllength'),
                'width' => $this->input->post('width'),
                'guardheight' => $this->input->post('guardheight'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelift3' => $this->input->post('freelift3'),
                'digital' => $this->input->post('digital'),
                'feature' => $this->input->post('feature'),
                   
                );

 
                $this->Diesel_pesaing_model->create_data($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('dieselpesaing'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $er_upload=$this->upload->display_errors();
               echo '<script type="text/javascript"> alert("Tipe File Tidak Sama/Ukuran File Terlalu Besar") 
                window.location = "'.base_url().'dieselpesaing'.'" </script>';
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
                'operatorposition' => $this->input->post('operatorposition'),
                'tiretype' => $this->input->post('tiretype'),
                'maxforkheight' => $this->input->post('maxforkheight'),
                'engine' => $this->input->post('engine'),
                'ratedpower' => $this->input->post('ratedpower'),
                'ratedtorque' => $this->input->post('ratedtorque'),
                'noofcylinder' => $this->input->post('noofcylinder'),
                'piston' => $this->input->post('piston'),
                'fueltank' => $this->input->post('fueltank'),
                'transmission' => $this->input->post('transmission'),
                'stage' => $this->input->post('stage'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lowering' => $this->input->post('lowering'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'noise' => $this->input->post('noise'),
                'vehicle' => $this->input->post('vehicle'),
                'overalllength' => $this->input->post('overalllength'),
                'width' => $this->input->post('width'),
                'guardheight' => $this->input->post('guardheight'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelift3' => $this->input->post('freelift3'),
                'digital' => $this->input->post('digital'),
                'feature' => $this->input->post('feature'),
               );
 
               @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('model'=>$md); //array where query sebagai identitas pada saat query dijalankan
               $this->Diesel_pesaing_model->get_update($data,$where); //akses model untuk menyimpan ke database
 
              
               redirect('dieselpesaing'); //jika berhasil maka akan ditampilkan view vupload
 
           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               echo '<script type="text/javascript"> alert("Tipe File Tidak Sama/Ukuran File Terlalu Besar") 
                window.location = "'.base_url().'dieselpesaing'.'" </script>';
               //redirect('upload/edit'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
           $data = array(
                 'model' => $this->input->post('model'),
                 //'gambar' => $gbr['file_name'],
                'capacity' => $this->input->post('capacity'),
                'center' => $this->input->post('center'),
                'powertype' => $this->input->post('powertype'),
                'operatorposition' => $this->input->post('operatorposition'),
                'tiretype' => $this->input->post('tiretype'),
                'maxforkheight' => $this->input->post('maxforkheight'),
                'engine' => $this->input->post('engine'),
                'ratedpower' => $this->input->post('ratedpower'),
                'ratedtorque' => $this->input->post('ratedtorque'),
                'noofcylinder' => $this->input->post('noofcylinder'),
                'piston' => $this->input->post('piston'),
                'fueltank' => $this->input->post('fueltank'),
                'transmission' => $this->input->post('transmission'),
                'stage' => $this->input->post('stage'),
                'operating' => $this->input->post('operating'),
                'travelling' => $this->input->post('travelling'),
                'lifting' => $this->input->post('lifting'),
                'lowering' => $this->input->post('lowering'),
                'gradeability' => $this->input->post('gradeability'),
                'turning' => $this->input->post('turning'),
                'tilt' => $this->input->post('tilt'),
                'noise' => $this->input->post('noise'),
                'vehicle' => $this->input->post('vehicle'),
                'overalllength' => $this->input->post('overalllength'),
                'width' => $this->input->post('width'),
                'guardheight' => $this->input->post('guardheight'),
                'tire' => $this->input->post('tire'),
                'freeliftdua' => $this->input->post('freeliftdua'),
                'freelift3' => $this->input->post('freelift3'),
                'digital' => $this->input->post('digital'),
                'feature' => $this->input->post('feature'),
           );
 
           $where =array('model'=>$md); //array where query sebagai identitas pada saat query dijalankan
           $this->Diesel_pesaing_model->get_update($data,$where); //akses model untuk menyimpan ke database
 
          
           redirect('dieselpesaing'); /* jika berhasil maka akan kembali ke home upload */
       }
   }
    

}

/* End of file Buku.php */
/* Location: ./application/fueltanklers/Buku.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-04-06 11:21:06 */
/* http://harviacode.com */