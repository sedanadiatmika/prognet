<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\DB;

class CourierController extends Controller
{
    public function __construct()
    {
       $this->middleware(['auth:admin','authAdmin:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courier['couriers'] = Courier::orderby('id','desc')->paginate(5);
        return view('couriers.home', $courier);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('couriers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $messages = [
            'required' => ':attribute Wajib Diisi',
            'max' => ':attribute Harus Diisi maksimal :max karakter',
            'min' => ':attribute Harus Diisi minimum :min karakter',
            'string' => ':attribute Hanya Diisi Huruf dan Angka',
            'confirmed' => ':attribute Konfirmasi Password Salah',
            'unique' => ':attribute Username sudah ada',
            'email' => 'attribute Format Email Salah',
        ];

        $this->validate($request,[
            'code' => 'required|unique:couriers|max:100',
            'title' => 'required|max:100',
        ],$messages);

        $courier = new Courier;
        $courier->code = $request->code;
        $courier->title = $request->title;
        $courier->save();
        return Redirect::to('couriers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courier  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $couriers = Courier::find($id);
        return view('couriers.show', compact('couriers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courier  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['courier'] = Courier::where($where)->first();
        return view('couriers.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courier  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute Wajib Diisi',
            'max' => ':attribute Harus Diisi maksimal :max karakter',
            'min' => ':attribute Harus Diisi minimum :min karakter',
            'string' => ':attribute Hanya Diisi Huruf dan Angka',
            'confirmed' => ':attribute Konfirmasi Password Salah',
            'unique' => ':attribute Username sudah ada',
            'email' => 'attribute Format Email Salah',
        ];

        $this->validate($request,[
            'code' => 'required|max:100',
            'title' => 'required|max:100',
        ],$messages);

        $update = [
            'code' => $request->code,
        ];


        $update = [
            'title' => $request->title,
        ];

        Courier::where('id', $id)->update($update);
        return Redirect::to('couriers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courier  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Courier::where('id', $id)->delete();
        return Redirect::to('couriers');
    }

    public function soft_delete($id){
        $courier = Courier::find($id);
        $courier->delete();
        return Redirect::to('couriers');
    }

    public function trash(){
        $couriers['couriers'] = DB::table('couriers')->where('deleted_at','!=',NULL)->orderby('id', 'desc')->paginate(5);
        return view('couriers.trash', $couriers);
    }

    public function restore($id){
        $courier = Courier::onlyTrashed()->where('id',$id);
        $courier->restore();
        return Redirect::to('couriers-trash');
    }

    public function restore_all(){
        $courier = Courier::onlyTrashed();
        $courier->restore();
        return Redirect::to('couriers-trash');   
    }

    public function delete($id){
        $courier = Courier::onlyTrashed()->where('id', $id);
        $courier->forceDelete();
        return Redirect::to('couriers-trash');
    }

    public function delete_all($id){
        $courier = Courier::onlyTrashed();
        $courier->forceDelete();
        return Redirect::to('couriers-trash');
    }
}
