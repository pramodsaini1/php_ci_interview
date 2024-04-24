 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Record extends CI_Model{
    public function insert($data){
        $this->db->insert("register",$data);
        return true;
    }
    public function check($email,$pass){
        $this->db->select("*");
        $this->db->from("register");
        $this->db->where("email",$email);
        foreach($this->db->get()->result() as $row){
            if($row->password==$pass){
                return true;
            }
            else{
                return false;
            }
        }
    }
    public function get_record($email){
        $this->db->select("*");
        $this->db->from("register");
        $this->db->where("email",$email);
        return $this->db->get()->result();
    }
    public function update_img($data,$code){
        $this->db->where("user_id",$code);
        $this->db->update("register",$data);
        return true;
    }
    public function user_info($code){
        $this->db->select("*");
        $this->db->from("register");
        $this->db->where("user_id",$code);
        return $this->db->get()->result();
    }
    public function update_record($data,$code){
        $this->db->where("user_id",$code);
        $this->db->update("register",$data);
        return true;
    }
}
 ?>