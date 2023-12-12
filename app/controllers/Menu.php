<?php

namespace App\Controllers;

use App\Core\Controller;

class Menu extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Menu();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('menu/index', $data);
	}

	public function input()
	{
		$this->dashboard('menu/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/menu');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('menu/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/menu');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/menu');
	}
}