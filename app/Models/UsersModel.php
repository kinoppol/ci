<?php namespace App\Models; // กำหนด namespace
use CodeIgniter\Model; // เรียกใช้งาน Model class
class UsersModel extends Model 
{
    protected $_table = 'userdata';
    public function getUsers(){
        $builder = $this->db->table($this->_table);
        $query = $builder->get();
        return $query->getResultArray();
        // $result->fetch_assco();
    }

    public function addUser($userdata=array()){
        $builder = $this->db->table($this->_table);
        $builder->insert($userdata);
        $error=$this->db->error();
        return $error['code'];
    }
}