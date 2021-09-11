<?php

namespace App\Models;

use CodeIgniter\Model;

class KlsModel extends Model 
{
    
        protected $table = 'tbKelas';
        protected $primaryKey = 'kd_kelas';
        protected $returnType = 'array';
        //protected $useSoftDeletes = 'true';
        protected $allowedFields = ['kd_kelas','nama_kelas','jurusan','wali_kelas'];
    
       public function search($x)
       {

        return $this->table('tbKelas')->like('kd_kelas', $x)->orLike('nama_kelas', $x)->orLike('jurusan', $x)->orLike('wali_kelas',$x);
        
       }
}