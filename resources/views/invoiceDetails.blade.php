<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Invoice assignement</title>
<link rel="stylesheet" href = "assests/css/bootstrap.min.css"/>
    </head>
    <body class="container">
        <form  action = "{{route('product.store')}}" class=" md-3 py-3" method = "POST">
            @csrf


            <div class = "container py-3">
            <label for = "name"> Product Name</label>
            <input type = "text" placeholder = "Enter Product Name" name = "name" id = "name" class = "form-control  @error('name') is-invalid @endError"/>
            @error('name')
            <p class = "invalid-feedback">{{$message}}</p>
            @enderror
</div>
            <div class = "container py-3">
            <label for = "rate"> Product Rate</label>
            <input type = "text" placeholder = "Enter Product Rate" id = "rate" name = "rate" class = "form-control @error('rate') is-invalid @endError"/>
            @error('rate')
            <p class = "invalid-feedback">{{$message}}</p>
            @enderror
</div>
            <div class = "container py-3">
            <label for = "qty"> Product Qty</label>
            <input type = "text" placeholder = "Enter Product Qty" id = "qty" name = "qty" class = "form-control @error('qty') is-invalid @endError "/>
            @error('qty')
            <p class = "invalid-feedback">{{$message}}</p>
            @enderror
</div>
<button class = "text-white btn btn-primary" >Add product</button>
<!-- <input type = "submit" placeholder = "Enter Product Qty" id = "qty"  value = "Add product" /> -->


</form>
          @if(Session::has('success'))
        <div class = "alert alert-success">
        {{Session::get('success')}}
        <div>
        @endif
<div class="card border-0 shadow-lg">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Product Name
                    </th>
                    <th>
                        Rate
                    </th>
                    <th>
                        Qty
                    </th>
                </tr>
                @if($products->isNotEmpty())
                @foreach($products as $key => $value)


                <tr>
                    <td>
                        {{$value->id}}
                    </td>
                    <td>
                        {{$value->ItemName}}
                    </td>
                    <td>
                        {{$value->ItemPrice}}
                    </td>
                    <td>
                        {{$value->ItemQty}}
                    </td>

                </tr>
                 @endforeach
                @else
                <tr>
                <td colspan = "6" >Recod Not Found</td>
                <tr>
                @endif
            </table>
        </div>
    </div>
    <a href={{route('pdfGen')}} class="btn btn-primary btn-sm"> print</a>
    </body>
</html>
