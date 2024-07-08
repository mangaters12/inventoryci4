<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\InvoiceModel;

class InvoiceController extends BaseController
{
    public function index()
    {
        $invoiceModel = new InvoiceModel();
        $invoices = $invoiceModel->findAll();
        return view('invoices/index', ['invoices' => $invoices]);
    }

    public function create($id)
    {
        $orderModel = new OrderModel();
        $order = $orderModel->find($id);

        if (!$order) {
            return redirect()->to('/orders')->with('error', 'Order not found.');
        }

        $invoiceModel = new InvoiceModel();
        $invoiceData = [
            'order_id' => $order['id'],
            'custid' => $order['custid'],
            'nama_barang' => $order['nama_barang'],
            'quantity' => $order['quantity'],
            'nama_customer' => $order['nama_customer'],
            'alamat_customer' => $order['alamat_customer'],
            'tanggal_pesanan' => $order['tanggal_pesanan'],
            'total_harga' => $order['total_harga'],
        ];
        $invoiceModel->insert($invoiceData);

        return redirect()->to('/invoices')->with('success', 'Invoice created successfully.');
    }

    public function view($id)
    {
        $invoiceModel = new InvoiceModel();
        $invoice = $invoiceModel->find($id);

        if (!$invoice) {
            return redirect()->to('/invoices')->with('error', 'Invoice not found.');
        }

        return view('invoices/invoice_view', ['invoice' => $invoice]);
    }
}
