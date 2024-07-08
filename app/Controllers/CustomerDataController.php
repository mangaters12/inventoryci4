<?php

namespace App\Controllers;

use App\Models\CustomerDataModel;

class CustomerDataController extends BaseController
{
    public function index()
    {
        $customerDataModel = new CustomerDataModel();
        $data['customers'] = $customerDataModel->findAll();

        return view('customers/index', $data);
    }
}
