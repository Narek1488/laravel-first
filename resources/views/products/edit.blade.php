@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" onclick="history.back()" }}"> Back</a>
        </div>
    </div>
</div>


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>images:</strong>
                @for( $i = 0; $i < count($product->img); $i++)
                    <div style="width: 200px; display:inline-block">
                        <i class="fa fa-times-circle fa-lg" aria-hidden="true" id="delete_image" style="cursor:pointer;"></i>
                        <img src="{{ asset('uploads/'.$product->img[$i]) }}" width="100%">
                    </div>
                    @endfor

                    <p><input type="file" accept="image/*" name="image[]" id="file" onchange="loadFile(event)" style="display: none;" multiple></p>
                    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                    <p><img id="output" width="200" /></p>

                    <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('output');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                <select name="category">
                    @foreach($categoryes as $category)
                    @if($product->category_id == $category['id'])
                    <option value="{{ $category['id'] }}" selected="selected">{{ $category['name'] }} </option>
                    @else
                    <option value="{{ $category['id'] }}">{{ $category['name'] }} </option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

<script>
    $(document).on('click', "#delete_image", function() {
        $(this).parent('div').remove();
        let img = $(this).siblings('img').attr("src").split(/(\\|\/)/g).pop();
        $('.form-group').last().append('<input type="text" name="delete_img[]" value="' + img + '" style="display: none;">');
    })
</script>

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection