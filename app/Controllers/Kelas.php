<?php 

namespace App\Controllers;

use App\Models\KlsModel;

class Kelas extends BaseController


{
	public function index()
	{
		$a = new KlsModel();
		$pencarian = $this->request->getVar('cari');

		if($pencarian){
			$hasil = $a->search($pencarian);
		} else {
			$hasil = $a;
		}
		$data = [
			'index' => $a->paginate(3,'kls_pages'),
			'pager' => $a->pager
		];
		//$b = $a->findAll();
		//$data = ['datakls' => $b];
		echo view('kelas/kelas', $data);
	}
	public function input()
	{
		return view('kelas/input_kelas');
	}
	public function insertData()
	{
		$a = new KlsModel();
		$a->insert([
			'kd_kelas' => $this->request->getVar('kd_kelas'),
			'nama_kelas' => $this->request->getVar('nama_kelas'),
			'jurusan' => $this->request->getVar('jurusan'),
			'wali_kelas' => $this->request->getVar('wali_kelas')
		]);
	
		return redirect()->to('../Kelas/index');
		}
		public function edit($kd_kelas)
		{
			$a = new KlsModel();
			$b = $a->find($kd_kelas);
			$data['kls'] = $b;
			echo view('kelas/edit_kelas', $data);
		}
		public function proses_edit($kd_kelas)
		{
			$a = new KlsModel();
			$a->update($kd_kelas, [
			'kd_kelas' => $this->request->getVar('kd_kelas'),
			'nama_kelas' => $this->request->getVar('nama_kelas'),
			'jurusan' => $this->request->getVar('jurusan'),
			'wali_kelas' => $this->request->getVar('wali_kelas')
		]);
		return redirect()->to('../Kelas/index');
		}
		public function hapus($kd_kelas)
		{
			$a = new KlsModel();
			$a->delete($kd_kelas);
			return redirect()->to('../Kelas/index');
		}

	//--------------------------------------------------------------------

}
