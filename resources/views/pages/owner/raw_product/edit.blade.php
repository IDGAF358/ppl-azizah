@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-5 text-gray-800">Edit Bahan Baku</h1>

        <!-- DataTales Example -->
        <form action="{{ route("owner.raw-product.update", $raw_product_owner->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Nama Bahan Baku</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $raw_product_owner->RawProduct->name }}">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah Bahan Baku</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $raw_product_owner->quantity }}">
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Satuan Bahan Baku</label>
                <select class="form-control" aria-label="Default select example" name="unit">
                    <option {{ $raw_product_owner->unit === "Kilogram" ? 'selected' : '' }} value="Kilogram">Kilogram</option>
                    <option {{ $raw_product_owner->unit === "Liter" ? 'selected' : '' }} value="Liter">Liter</option>
                    <option {{ $raw_product_owner->unit === "Ton" ? 'selected' : '' }} value="Ton">Ton</option>
                    <option {{ $raw_product_owner->unit === "Buah" ? 'selected' : '' }} value="Buah">Buah</option>
                    <option {{ $raw_product_owner->unit === "Pack" ? 'selected' : '' }} value="Pack">Pack</option>
                    <option {{ $raw_product_owner->unit === "Piece" ? 'selected' : '' }} value="Piece">Piece</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Simpan</button>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
