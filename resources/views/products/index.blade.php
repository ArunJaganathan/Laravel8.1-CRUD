@extends('layouts.app')


@section('content')
<style type="text/css">
    .del{
        margin: 0px 0px 0px 15px;
    }
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>

            </div>
            <div class="pull-right">
                @canany(['product-create','product-create1'])
                <a class="btn-sm btn-success float-right" href="{{ route('products.create') }}"> Create New Product</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Category</th>
            <th></th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($products as $product)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>
                {{ Illuminate\Support\Str::limit($product->name, 40) }}
            </td>
	        <td>
                <p class="card-text">{!! Illuminate\Support\Str::limit($product->detail, 50) !!}</p>
            </td>
            <td>

                @if(!empty($product->category->name))   
                {{$product->category->name}} 
                @else
                    --
                @endif
            </td>
            <td></td>
	        <td style="width: 10%">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <!-- <a class="btn-xs btn-info" href="{{ route('products.show',$product->id) }}">Show</a> -->
                    @can('product-edit')
                    <a class="btn-sm btn-primary" href="{{ route('products.edit',$product->id) }}" title="Edit">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn-xs btn-danger " title="Delete">X</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $products->links() !!}



@endsection