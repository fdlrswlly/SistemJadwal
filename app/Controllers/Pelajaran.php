<?php namespace App\Controllers;

use App\Models\PelajaranModel;

class Pelajaran extends BaseController
{
	public function index()
	{
		$a = new PelajaranModel();
		$pencarian = $this->request->getVar('cari');

		if($pencarian){
			$hasil = $a->search($pencarian);
		} else {
			$hasil = $a;
		}
		$data = [
			'index' => $a->paginate(3, 'pelajaran_pages'),
			'pager' => $a->pager
		];
		//$b = $a->findAll();
		//$data = ['datapelajaran' => $b];
		echo view('pelajaran/pelajaran', $data);
	}
	public function input()
	{
		return view('pelajaran/input_pelajaran');
	}
	public function insertdata()
	{
		$a = new PelajaranModel();
		$a->insert([
			'kd_pelajaran' => $this->request->getVar('kd_pelajaran'),
			'nama_mapel' => $this->request->getVar('nama_mapel'),
			'semester' => $this->request->getVar('semester')
		]);
	
		return redirect()->to('../pelajaran/index');
	}
	public function edit($kd_pelajaran)
	{
		$a = new PelajaranModel();
		$b = $a->find($kd_pelajaran);
		$data['pelajaran'] = $b;
		echo view('pelajaran/edit_pelajaran', $data);
	}
	public function proses_edit($kd_pelajaran)
	{
		$a = new PelajaranModel();
		$a->update($kd_pelajaran, [
			'kd_pelajaran' => $this->request->getVar('kd_pelajaran'),
			'nama_mapel' => $this->request->getVar('nama_mapel'),
			'semester' => $this->request->getVar('semester')
		]);
		return redirect()->to('../pelajaran/index');
	}
	public function hapus($kd_pelajaran)
	{
			$a = new PelajaranModel();
			$a->delete($kd_pelajaran);
			return redirect()->to('../Pelajaran/index');
	}
	//--------------------------------------------------------------------

}
