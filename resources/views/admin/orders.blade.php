<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
     <div class="container-scroller">

    @include("admin.navbar")



    <div>

        <form action="{{url('/search')}}" method="get" style="padding-left: 400px">

            @csrf

            <input type="text" name="search" style="color: blue">

            <input type="submit" value="Search" class="btn btn-success">
        </form>

    <table>

       <tr align="center" >

        <th style="padding: 50px">Name</th>
        <th style="padding: 50px">Phone</th>
        <th style="padding: 50px">Address</th>
        <th style="padding: 50px">Food Name</th>
        <th style="padding: 50px">Price</th>
        <th style="padding: 50px">Quantity</th>
        <th style="padding: 50px">Total Price</th>

       </tr>

       @foreach ($data as $data)


       <tr align="center" style="background-color: black">
           <td>{{$data->name}}</td>
           <td>{{$data->phone}}</td>
           <td>{{$data->address}}</td>
           <td>{{$data->foodname}}</td>
           <td>{{$data->price}}</td>
           <td>{{$data->quantity}}</td>
           <td>{{$data->price * $data->quantity}}</td>
       </tr>

       @endforeach

    </table>

    </div>

    </div>

    @include("admin.adminscript")
  </body>
</html>

</body>
</html>

