<?php

namespace App\Models;

use CodeIgniter\Model;

class JdwlModel extends Model 
{
    
        protected $table = 'tbjadwal';
        protected $primaryKey = 'kd_jadwal';
        protected $returnType = 'array';
        protected $allowedFields = ['kd_jadwal','hari_tanggal','mapel','kd_guru','kd_kelas'];

    public function search($x)
{
        return $this->table('tbjadwal')->like('kd_jadwal', $x)->orLike('hari_tanggal', $x)->orLike('mapel', $x)->orLike('kd_guru',$x)->orLike('kd_kelas',$x);
}
}
