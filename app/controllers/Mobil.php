<?php

namespace App\Controllers;

use App\Core\Controller;

class Mobil extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Mobil();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('mobil/index', $data);
	}

	public function input()
	{
		$this->dashboard('mobil/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/mobil');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('mobil/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/mobil');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/mobil');
	}
}