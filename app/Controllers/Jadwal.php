<?php 

namespace App\Controllers;

use App\Models\JdwlModel;

class Jadwal extends BaseController
{

	public function index()
	{
		$a = new JdwlModel();
		$pencarian = $this->request->getVar('cari');

		if($pencarian){
			$hasil = $a->search($pencarian);
		} else {
			$hasil = $a;
		}
		$data = [
			'index' => $a->paginate(3, 'jdwl_pages'),
			'pager' => $a->pager
		];
		//$b = $a->findAll();
		//$data = ['datajdwl' => $b];
		echo view('jadwal/jadwal', $data);
	}
	public function input()
	{
		return view('jadwal/input_jadwal');
	}
	public function simpan()
	{
		$a = new JdwlModel();
		$a->insert([
			'kd_jadwal' => $this->request->getVar('kd_jadwal'),
			'hari_tanggal' => $this->request->getVar('hari_tanggal'),
			'mapel' => $this->request->getVar('mapel'),
			'kd_guru' => $this->request->getVar('kd_guru'),
			'kd_kelas' => $this->request->getVar('kd_kelas')
		]);
		return redirect()->to('../Jadwal/index');
	}
	
	public function datajdwl()
	{
		/*$a = new JdwlModel();
		$b = $a->findAll();
		$data = ['datajdwl' => $b];
		echo view('jadwal/jadwal', $data);*/
	}
	public function edit($kd_jadwal)
	{
		$a = new JdwlModel();
		$b = $a->find($kd_jadwal);
		$data['jdwl'] = $b;
		echo view('jadwal/edit_jadwal', $data);
	}
	public function proses_edit($kd_jadwal)
	{
		$a = new JdwlModel();
		$a->update($kd_jadwal, [
			'kd_jadwal' => $this->request->getVar('kd_jadwal'),
			'hari_tanggal' => $this->request->getVar('hari_tanggal'),
			'mapel' => $this->request->getVar('mapel'),
			'kd_guru' => $this->request->getVar('kd_guru'),
			'kd_kelas' => $this->request->getVar('kd_kelas')
		]);
		return redirect()->to('../Jadwal/index');
	}
	public function hapus($kd_jadwal)
	{
		$a = new JdwlModel();
		$a->delete($kd_jadwal);
		return redirect()->to('../Jadwal/index');
	}

	//--------------------------------------------------------------------

}
