<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\frontmodel\Product;
use DB;

class IndexController extends Controller
{
  public function index()
  {
    $productVariations = DB::table('products_json')->select('details')->get();
    return view('front/index', [
      'filters' => function ($type, $variants, $variantId) {
        $output = [];
        switch ($type) {
          case 'color':
            $output = $this->_filterColor($variants, $variantId);
          break;
          case 'size':
            $output = $this->_filterSize($variants, $variantId);
          break;
          case 'sale':
            $priceSaleDetails = $variants;
            $output = $this->_filterSalePercent($priceSaleDetails, $variantId);
          break;
          default:
          break;
        }
        return $output;
      },
      'products' => $this->_compileProducts($productVariations)
    ]);
  }

  public function products($variantId)
  {
    // die($variantId);
    return response()->json(json_decode(DB::table('products_json')->select('details')->where('slug', $variantId)->first()->details, true));
  }

  private function _compileProducts($products = [])
  {
    return $products;
  }

  private function _filterSalePercent($priceSaleDetails, $variantId)
  {
    $filter = array_filter($priceSaleDetails, function ($saleDetail) use($variantId) {
      return ($saleDetail['id'] == $variantId);
    });
    // print_r($filter);die;
    if (empty($filter)) {
      return '30%';
    } else {
      preg_match('/\d+%/', current($filter)['details'], $match);
      return current($match);
    }
  }

  private function _filterColor($variants, $variantId)
  {
    // print_r(array_unique(array_column($variants, 'option1')));die;
    return array_values(array_unique(array_column($variants, 'option1')));
  }

  private function _filterSize($variants, $variantId)
  {
    return array_column($this->_filterCommonVariants($variants, $variantId), 'option2');
  }

  private function _filterCommonVariants($variants, $variantId)
  {
    return array_filter($variants, function ($variant) use ($variantId) {
      return in_array($variantId, $variant['featured_image']['variant_ids']);
    });
  }

}