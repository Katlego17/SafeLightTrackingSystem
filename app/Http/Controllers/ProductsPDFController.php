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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
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

        return $pdf->download('productssummary.pdf');
    }
}
