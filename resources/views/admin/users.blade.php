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
      <table class="table">
  <thead>
    <tr>
      <th style="padding: 30px">Name</th>
      <th scope="padding: 30px">Email</th>
      <th scope="padding: 30px">Role</th>
      <th scope="padding: 30px">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $data)
      <tr align="center">
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->role}}</td>
          <td> 
              @if($data->role=="User")
              <a class="btn btn-primary" href="{{url('/deleteuser' ,$data->id)}}">Delete</a>&nbsp;
             
              @else
              <a class="btn btn-primary"> Not Allowed</a>
              @endif
</td>
@endforeach
  </tbody>
</table>
</div>

</div>

      @include("admin.adminscript")
    </body>


