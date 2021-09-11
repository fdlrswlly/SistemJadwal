<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model 
{
    
        protected $table = 'tbguru';
        protected $primaryKey = 'Kd_guru';
        protected $returnType = 'array';
        protected $allowedFields = ['Kd_guru','Nama_guru','NIK','tempat_tanggal_lahir','alamat'];

        public function search($x)
        {
                return $this->table('tbguru')->like('Kd_guru', $x)->orLike('Nama_guru', $x)->orLike('NIK', $x)->orLike('tempat_tanggal_lahir',$x)->orLike('alamat',$x);
        }
    
}

