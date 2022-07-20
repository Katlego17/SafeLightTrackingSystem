<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;

class ProductsPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateProductsPDF()
    {
        $products = Product::get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('alllightssummary.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatefailedlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','failed')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('failedlightssummary.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateaddedlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','added')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('addedlightssummary.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateprecastedlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','precasted')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('precastinglights.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatecastedlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','casted')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('castinglights.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatepostcastedlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','postcasted')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('postcastedlights.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateassembledlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','assembled')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('assembledlights.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatestoredlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','stored')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('storedlights.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatesoldlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','sold')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('soldlights.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatecommissionedlightsPDF()
    {
        $products = Product::where('CurrentPhase','=','commissioned')->get();

        $data = [
            'title' => 'List of Products',
            'date' => date('d/m/Y'),
            'products' => $products
        ];

        $pdf = PDF::loadView('pdf.productspdf', $data);

        return $pdf->download('commissionedlights.pdf');
    }
}
