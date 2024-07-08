<?php
namespace App\Controllers;

use App\Models\MaterialModel;
use CodeIgniter\Controller;

class MaterialController extends Controller
{
    public function index()
    {
        $model = new MaterialModel();
        $data['materials'] = $model->findAll();

        return view('materials/index', $data);
    }

    public function create()
    {
        return view('materials/create');
    }

    public function store()
    {
        $model = new MaterialModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok_barang' => $this->request->getPost('stok_barang')
        ];
        $model->save($data);

        return redirect()->to('/materials');
    }

    public function edit($id)
    {
        $model = new MaterialModel();
        $data['material'] = $model->find($id);

        return view('materials/edit', $data);
    }

    public function update($id)
    {
        $model = new MaterialModel();
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok_barang' => $this->request->getPost('stok_barang')
        ];
        $model->update($id, $data);

        return redirect()->to('/materials');
    }

    public function delete($id)
    {
        $model = new MaterialModel();
        $model->delete($id);

        return redirect()->to('/materials');
    }
}

class SidebarController extends Controller
{
    public function index()
    {
        return view('sidebar');
    }
}
