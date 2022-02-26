<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -150px">

      <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
          <label for="">Title</label>
          <input type="text" name="title" value="{{$data->title}}" required style="color: black">
        </div>

        <div>
          <label for="">Price</label>
          <input type="num" name="price" value="{{$data->price}}" required style="color: black">
        </div>


        <div>
            <label for="">Description</label>
            <input type="text" name="description" value="{{$data->description}}" required style="color: black">
        </div>

        <div>
          <label for="">Old Image</label>
          <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">
        </div>

        <div>
          <label for="">New Image</label>
          <input type="file" name="image" required style="color: black">
        </div>

        <div>
          <input type="submit" value="Update">
        </div>

      </form>

    </div>

    </div>

    @include("admin.adminscript")
  </body>
</html>
