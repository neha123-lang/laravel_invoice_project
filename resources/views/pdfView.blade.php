<!DOCTYPE html>
<html>
<head>
    <title>product Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $companyName }}</h1>
    <p>{{ $companyAddress }}</p>
    <p> invoice Date : {{ $date }}</p>
    <p> Due Date  : {{$dueDate}}</p>

   <h2>Product Details</h2>

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


            </table>

</body>
</html>
