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


        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label for="">Name</label>
                <input style="color: blue" type="text" name="name" required="" placeholder="Enter Chef's name">
            </div>

            <div>
                <label for="">Specialty</label>
                <input style="color: blue" type="text" name="speciality" required="" placeholder="Enter Chef's speciality">
            </div>

            <div>
                <input type="file" name="image" required="">
            </div>

            <div>

                <input type="submit" value="Save">
            </div>
        </form>

        <div>

        <table bgcolor="Black">
            <tr>
                <th style="padding: 30px">Chef Name</th>
                <th style="padding: 30px">Speciality</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action 2</th>
            </tr>

            @foreach ($data as $data)


            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->speciality}}</td>
                <td><img height="100" width="100" src="/chefimage/{{$data->image}}" alt=""></td>
                <td><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
                <td><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
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