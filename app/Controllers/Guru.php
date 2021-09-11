<?php 

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
	public function index()
	{
		$a = new GuruModel();
		$pencarian = $this->request->getVar('cari');

		if($pencarian){
			$hasil = $a->search($pencarian);
		} else {
			$hasi = $a;
		}
		$data = [
			'index' => $a->paginate(3,'guru_pages'),
			'pager' => $a->pager
		];
		//$b = $a->findAll();
		//$data = ['dataguru' => $b];
		echo view('guru/guru', $data);
	}

	public function input()
	{
		return view('guru/input_guru');
	}
	public function insertData()
	{
		$a = new GuruModel();
		$a->insert([
			'Kd_guru' => $this->request->getVar('Kd_guru'),
			'Nama_guru' => $this->request->getVar('Nama_guru'),
			'NIK' => $this->request->getVar('NIK'),
			'tempat_tanggal_lahir' => $this->request->getVar('tempat_tanggal_lahir'),
			'alamat' => $this->request->getVar('alamat')
		]);
		return redirect()->to('../Guru/index');
	}
	public function edit($Kd_guru)
	{
		$a = new GuruModel();
		$b = $a->find($Kd_guru);
		$data['guru'] = $b;
		echo view('Guru/edit_guru', $data);
	}
	public function proses_edit($Kd_guru)
	{
		$a = new GuruModel();
		$a->update($Kd_guru, [
			'Kd_guru' => $this->request->getVar('Kd_guru'),
			'Nama_guru' => $this->request->getVar('Nama_guru'),
			'NIK' => $this->request->getVar('NIK'),
			'tempat_tanggal_lahir' => $this->request->getVar('tempat_tanggal_lahir'),
			'alamat' => $this->request->getVar('alamat')
		]);
		return redirect()->to('../Guru/index');
	}
	public function hapus($Kd_guru)
	{
		$a = new GuruModel();
		$a->delete($Kd_guru);
		return redirect()->to('../Guru/index');
	}

	//--------------------------------------------------------------------

}
