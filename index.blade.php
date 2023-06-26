<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
        <h1 style="color:red">List Of Item</h1>
        <div style="padding: 20px 0px">
            <a href="{{url("item/them")}}">AddNew</a>
        </div>
        <table class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Function</th>
            </tr>
            @foreach($rs as $data)
            <tr>
                <td>{{$data -> ID}}</td>
                <td>{{$data -> Name}}</td> 
                <td>{{$data -> Price}}</td>
                <td>
                    <a href="{{url("item/sua/{$data -> ID}")}}">Update</a>
                  <a href="{{url("item/xoa/{$data -> ID}")}}">Delete</a>
                </td>
            </tr>
            @endforeach
           
        </table>
    </body>
</html>