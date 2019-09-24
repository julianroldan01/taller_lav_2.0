@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
                <h2><center> MUESTRA DE PRODUCTOS</center></h2>
            <div class="pull-right">
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $product->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $product->precio }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detalle:</strong>
                {{ $product->detalle }}
            </div>
        </div>
    </div>
@endsection