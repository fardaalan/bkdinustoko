<?php

namespace App\Controllers;

use App\Models\VoucherModel;

class Home extends BaseController
{
    public function index()
    {
        $voucherModel = new VoucherModel();
        $vouchers = $voucherModel->findAll();
        return view('home', [
            'vouchers' => $vouchers
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
