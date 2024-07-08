<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\InvoiceModel;
use CodeIgniter\Controller;

class OrdersController extends Controller
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->invoiceModel = new InvoiceModel();
    }


// Fungsi untuk menampilkan detail order
public function show($id)
{
    $order = $this->orderModel->find($id);

    if (!$order) {
        // Handle jika pesanan tidak ditemukan
        return redirect()->to('/orders')->with('error', 'Order not found.');
    }

    return view('order_detail', ['order' => $order]);
}


    public function index()
    {
        $data = [
            'orders' => $this->orderModel->findAll(),
        ];

        return view('orders/index', $data);
    }

    public function create()
    {
        return view('orders/create');
    }

    public function store()
    {
        $this->orderModel->save([
            'custid' => $this->request->getPost('custid'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'quantity' => $this->request->getPost('quantity'),
            'nama_customer' => $this->request->getPost('nama_customer'),
            'alamat_customer' => $this->request->getPost('alamat_customer'),
            'tanggal_pesanan' => $this->request->getPost('tanggal_pesanan'),
            'total_harga' => $this->request->getPost('total_harga')
        ]);

        return redirect()->to('/orders');
    }

    public function edit($id)
    {
        $data = [
            'order' => $this->orderModel->find($id),
        ];

        return view('orders/edit', $data);
    }

    public function update($id)
    {
        $this->orderModel->update($id, [
            'custid' => $this->request->getPost('custid'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'quantity' => $this->request->getPost('quantity'),
            'nama_customer' => $this->request->getPost('nama_customer'),
            'alamat_customer' => $this->request->getPost('alamat_customer'),
            'tanggal_pesanan' => $this->request->getPost('tanggal_pesanan'),
            'total_harga' => $this->request->getPost('total_harga')
        ]);

        return redirect()->to('/orders');
    }

    public function delete($id)
    {
        $this->orderModel->delete($id);
        return redirect()->to('/orders');
    }

    public function invoice($id)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($id);

        if (!$order) {
            // Handle jika pesanan tidak ditemukan
            return redirect()->to('/orders')->with('error', 'Order not found.');
        }

        // Tampilkan informasi pesanan pada halaman invoice
        return view('orders/invoice_view', ['order' => $order]);
    }

     // Fungsi untuk membuat invoice
     public function createInvoice($orderId)
     {
         // Ambil data order dari model (misalnya OrderModel)
         $orderModel = new OrderModel();
         $order = $orderModel->find($orderId);
     
         if (!$order) {
             // Handle jika order tidak ditemukan
             return redirect()->to('/orders')->with('error', 'Order not found.');
         }
     
         // Simpan data order ke dalam tabel invoices
         $invoiceData = [
             'custid' => $order['custid'],
             'nama_barang' => $order['nama_barang'],
             'quantity' => $order['quantity'],
             'nama_customer' => $order['nama_customer'],
             'alamat_customer' => $order['alamat_customer'],
             'tanggal_pesanan' => $order['tanggal_pesanan'],
             'total_harga' => $order['total_harga'],
             'created_at' => date('Y-m-d H:i:s')
         ];
     
         $invoiceModel = new InvoiceModel();
         $invoiceModel->insert($invoiceData);
     
         // Redirect atau tampilkan halaman invoice yang baru saja dibuat
         return redirect()->to('/invoices')->with('success', 'Invoice created successfully.');
     }
     


     
}
