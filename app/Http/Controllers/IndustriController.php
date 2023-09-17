<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\FamilyProduct;
use App\Models\Industri;
use App\Models\Product;


class IndustriController extends Controller
{
    //
    public function index($id) {
        $dats['industri'] = Industri::find($id);
        $dats['family_product'] = FamilyProduct::where('id_industri', $id)->get();
        $firstFam = FamilyProduct::where('id_industri', $id)->first();
        $dats['product'] = Product::where('id_family_product', $firstFam->id)->get();

        return view('industriproduk', $dats);
    }

    public function industriproduk($id, $fam) {
        $data['product'] = Product::where('id_family_product', $fam)->get();

        return response()->json($data);
    }
}
