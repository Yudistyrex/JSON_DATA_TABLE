<?php

namespace App\Http\Controllers;

use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(){
        $file = Storage::get("public/viewData.json");
        $datas = json_decode($file, true);
        return view ('welcome',compact('datas'));
    }

    public function indox($id){
        $file = Storage::get("public/viewData.json");
        $datas = json_decode($file, true);
        $data = [];

        foreach ($datas['data'] as $key => $d){
            if($d['id'] == $id){
                $data = $d;
                break;
            }
        }
        return view ('edit',compact('data'));
    }


    public function det($id){
        $file = Storage::get("public/viewData.json");
        $datas = json_decode($file, true);
        $data = [];

        foreach ($datas['data'] as $key => $d){
            if($d['id'] == $id){
                $data = $d;
                break;
            }
        }
        return view ('detail',compact('data'));
    }


    public function input(Request $request){

        $file = Storage::get("public/viewData.json");
        $data = json_decode($file, true);

        $input = array(
                'id' => $request->id,
                'productID' => $request->productID,
                'productName' => $request->productName,
                'amount' => $request->amount,
                'customerName' => $request->customer,
                'amount' => $request->amount,
                'customerName' => $request->customerName,
                'status' => $request->status,
                'transactionDate' => $request->transactionDate,
                'createBy' => $request->createBy,
                'createOn' => $request->createOn
        );

        $data['data'][] = $input;

        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $data = Storage::put("public/viewData.json", $jsonfile);

        return redirect('/');


    }


    // public function update(Request $request){

    //     $file = Storage::get("public/viewData.json");
    //     $data = json_decode($file, true);

    //     foreach ($data['data'] as $key => $d) {
    //         // Perbarui data kedua
    //         if ($d['id'] === 1373) {
    //             $data['data'][$key]['productName'] = 'Kondom Bocor';
    //         }
    //     }

    //     $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    //     $data = Storage::put("public/viewData.json", $jsonfile);

    //     return redirect('/');




    // }

    public function update($id,Request $request){

        $file = Storage::get("public/viewData.json");
        $data = json_decode($file, true);



        foreach ($data['data'] as $key => $d) {
            if ($d['id'] == $id) {

                $data['data'][$key]['productID'] = $request->productID;
                $data['data'][$key]['productName'] = $request->productName;
                $data['data'][$key]['amount'] = $request->amount;
                $data['data'][$key]['customerName'] = $request->customerName;
                $data['data'][$key]['status'] = $request->status;
                $data['data'][$key]['transactionDate'] = $request->transactionDate;
                $data['data'][$key]['createBy'] = $request->createBy;
                $data['data'][$key]['createOn'] = $request->createOn;
            }
        }

        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        $data = Storage::put("public/viewData.json", $jsonfile);

        return redirect('/');


    }


}
