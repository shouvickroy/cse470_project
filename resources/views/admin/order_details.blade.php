@extends('admin/layout')

@section('container')
{{session('message')}};
<h1 class="m-b-15">Order Details</h1>

<div class="row m-t-30">
<div class="col-md-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Sale Price <br>(Per piece in BDT)</th>
                    <th>Unit</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $list)
                <tr>
                    <td>{{$list->id}}</td>
                    <td>
                        <img src="{{asset('uploads/products/'.$list->imagePath)}}" width="70px;" height="70px;" alt="{{$list->product_name}}">
                    </td>
                    <td>{{$list->product_name}}</td>
                    <td>{{$list->sale_price}}</td>
                    <td>{{$list->amount}}</td>
                    <td>{{$list->price}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
    </div>
</div>

@endsection
