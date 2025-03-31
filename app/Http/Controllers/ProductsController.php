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
    //Views
    public function index(){
        GeneralController::renderHeader([
            "tittle" => "Products",
            "submodule" => 1
        ]);

        echo view("components.product.list", []);
        GeneralController::renderFooter(["components/product/list"], "", 2, 2);
    }

    //Get

    //Post
    public function listByCompany(Request $request){
        $list = Product::with(['category'])
        ->where('company_id', session('company_id'))
        ->when(filled($request->state), fn($q) => $q->where('status', $request->state))
        ->when(filled($request->code), fn($q) => $q->where('code', $request->code))
        ->when(filled($request->category), fn($q) => $q->where('category_id', $request->category))
        ->when(filled($request->name), fn($q) => $q->where('name', 'like', "{$request->name}%"))
        ->paginate(15);

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
            $product->code = $request->code;
            $product->description = $request->description;
            $product->category_id = $request->category;
            $product->price = Intval($request->price);
            $product->status = ($request->active)? 1 : 0;
            $product->company_id = session('company_id');
            
            
            if(isset($request->image)){
                $imageHelper = new ImageHelper();
                $path = 'assets/images_company/company_'.session('company_id'); // Carpeta donde se guardará la imagen
                $imageName = $imageHelper->resizeAndSaveImage($request->image, $path, width: 600);
                $product->image =$imageName;
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
