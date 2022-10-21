 
<!DOCTYPE html>
<html lang="en">
  <head>

  <style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .input_color{
        color:black;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top:30px;
        border: 3px solid white;
    }
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller"> 

        <div class="main-panel">
            <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
                <div class="div_center">
                    <h1 class="h2_"> Add category</h1>
                    <form action="{{url('add_category')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Write category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add category">
                    </form>

<table class="center">
<tr>
<td> Category name</td>
<td> Action </td>
</tr> 

@foreach($data as $data)
<tr>
<td>  {{$data-> category_name}}</td>
<td> 
<a onclick="return confirm('Are you to delete')" 
class="btn btn-danger" 
href="{{url('delete_category', $data->id)}}"> DELETE </a>
</td>
</tr>
@endforeach
</table>
                </div>
            </div>
            
        </div>
 
</div>
  </body>
</html>