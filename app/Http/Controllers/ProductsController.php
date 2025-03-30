<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GeneralController;
use Intervention\Image\Facades\Image;

use App\Helpers\ImageHelper;

//Models
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        GeneralController::renderHeader([
            "tittle" => "Products",
            "submodule" => 1
        ]);

        echo view("components.product.list", [
            ]);

        $scripts = [
            "components/product/list",
        ];
        GeneralController::renderFooter($scripts, "", 2, 2);
    }

    public function listByCompany(){
        $list = Product::with(['category'])
        ->where('company_id', session('company_id'))
        ->get();

        return $list;
    }

    public function addUpdateProducts(Request $request){

        DB::beginTransaction();
        try {
            if(isset($request->id)){
                $product = Product::findOrFail($request->id);
                $type = "Actualizado";
            }else{
                $product = new Product;
                $type = "Creado";
            }
            $product->name = $request->name;
            $product->description = $request->description;
            $product->category_id = $request->category;
            $product->price = Intval($request->price);
            $product->is_active = ($request->active)? 1 : 0;
            $product->branch_id = session('branch_id');
            $product->company_id = session('company_id');
            
            
            if(isset($request->image)){
                $imageHelper = new ImageHelper();
                $path = 'assets/images_company/company_'.session('company_id'); // Carpeta donde se guardará la imagen
                $imageName = $imageHelper->resizeAndSaveImage($request->image, $path, width: 600);
                $product->img =$imageName;
            }
            $product->save();
            DB::commit();
            return response()->json([
                'status' => '200', 'message' => $type.' exitosamente', 'data' => $product
            ], 200);

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => '403', 'message' => $e->getMessage()
            ], 403);
        }

    }
}
