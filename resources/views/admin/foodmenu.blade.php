<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Food Menu</title>
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

    <div style="position: relative; top: 60px; right: -150px">

      <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
          <label for="">Title</label>
          <input type="text" name="title" placeholder="Write a title" required style="color: black">
        </div>

        <div>
          <label for="">Price</label>
          <input type="num" name="price" placeholder="Price" required style="color: black">
        </div>

        <div>
          <label for="">Image</label>
          <input type="file" name="image" required style="color: black">
        </div>

        <div>
          <label for="">Description</label>
          <input type="text" name="description" placeholder="Desciption" required style="color: black">
        </div>

        <div>
          <input type="submit" value="Save">
        </div>

      </form>

      <div>
          <table bgcolor="black">
              <tr>
                  <th style="padding: 30px">Food Name</th>
                  <th style="padding: 30px">Price</th>
                  <th style="padding: 30px">Description</th>
                  <th style="padding: 30px">Image</th>
                  <th style="padding: 30px">Action</th>
                  <th style="padding: 30px">Action2</th>

              </tr>

              @foreach ($data as $data)

              <tr align="center">
                  <td>{{$data->title}}</td>
                  <td>{{$data->price}}</td>
                  <td>{{$data->description}}</td>
                  <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                  <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                  <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
              </tr>

              @endforeach
          </table>
      </div>

    </div>



    </div>

    @include("admin.adminscript")
  </body>
</html>
</body>
</html>
