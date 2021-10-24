<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $name;
    public $price ;
    public $vol;
    public $image = "default.jpg";
    public $description;
    public $description2;
    public $bidang;
    public $seksi;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'required'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->bidang = $post["bidang"];
        $this->seksi = $post["seksi"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->vol = $post["vol"];
        $this->image = $this->_uploadImage();
        $this->description = $post["description"];
        $this->description2 = $post["description2"];
        $this->db->insert($this->_table, $this);
        
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->bidang = $post["bidang"];
        $this->seksi = $post["seksi"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->vol = $post["vol"];


        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        
        $this->description = $post["description"];
        $this->description2 = $post["description2"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("product_id" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'doc|docx|png|jpg|pdf';
    $config['file_name']            = $this->product_id;
    $config['overwrite']			= true;
    $config['max_size']             = '0'; 
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
 
    return "default.jpg";
}


private function _deleteImage($id)
{
    $product = $this->getById($id);
    if ($product->image != "default.jpg") {
	    $filename = explode(".", $product->image)[0];
		return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    }
}

   

    
}
