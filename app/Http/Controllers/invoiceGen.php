<?php

namespace App\Http\Controllers;
use App\Models\productInvoice;
use Illuminate\Http\Request;
use PDF;
class invoiceGen extends Controller
{
    public function generatePDF()
    {
        $products = productInvoice::get();

        $data = [
            'companyName' => 'ABC Company',
            'companyAddress' =>'123 Street Address, City, State, Zip/Post
            Website, Email Address',
            'date' => date('m/d/Y'),
            'dueDate' => date('m/d/Y' , strtotime('+30day')),

            'products' => $products
        ];

        $pdf = PDF::loadView('pdfView', $data);

        return $pdf->download('productsInvoice.pdf');
    }
}
