<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model 
{
    
        protected $table = 'tbpelajaran';
        protected $primaryKey = 'kd_pelajaran';
        protected $returnType = 'array';
        protected $allowedFields = ['kd_pelajaran','nama_mapel','semester'];

        public function search($x)
        {
                return $this->table('tbpelajaran')->like('kd_pelajaran', $x)->orLike('nama_mapel', $x)->orLike('semester', $x);   
        }

    
}