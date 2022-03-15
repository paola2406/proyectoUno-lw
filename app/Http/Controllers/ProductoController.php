<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos =Producto::all();
        return view('productos.indexPro',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.formProducto');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required','min:5'],
            'precio' => 'required',
            'marca' => 'required',
            'tipo' => 'required',
            'url' => 'required',
        ]);

        $producto = new Producto();
        $producto->nombre =$request->nombre;
        $producto->precio=$request->precio;
        $producto->marca=$request->marca;
        $producto->tipo=$request->tipo;
        $producto->url=$request->url;
        $producto->save();
        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //$producto = Producto::where('id',$id)->first();
        return view('productos.showProducto',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {

        return view('productos.formProducto',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => ['required','min:5'],
            'precio' => 'required',
            'marca' => 'required',
            'tipo' => 'required',
            'url' => 'required',
        ]);

        $producto->nombre =$request->nombre;
        $producto->precio=$request->precio;
        $producto->marca=$request->marca;
        $producto->tipo=$request->tipo;
        $producto->url=$request->url;
        $producto->save();
        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('/producto');
    }
}
