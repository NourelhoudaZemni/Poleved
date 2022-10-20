<!DOCTYPE html>
<html>
<head> 

<style type="text/css">
.center{
    margin:auto;
    width: 50%;
    border: 2px solid white;
    margin-top: 40px;
}
.att{ 
    margin:auto;
    padding:30px;
    text-align:center;
}
.font_size{
    text-align:center;
    padding-top: 20px;
       font-size: 40px;
       padding-bottom: 40px;    }
       .th_color{
        background: skyblue;
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
@include('admin.sidebar')
@include('admin.header') 

        
<div class="main-panel">
            <div class="content-wrapper">

            <h1 class="font_size"> Les balades</h1>
<table class="center">
    <tr class="th_color">
        <th class="att">Title</th>
        <th class="att">description</th>
        <th class="att">nb de personne</th>
        <th class="att">categorie</th>
        <th class="att">prix</th>
        <th class="att">remise</th>
        <th class="att">image</th>
        
        <th class="att">Action</th>



    </tr>
    @foreach($balade as $balade)
    <tr>
        <td class="att">{{$balade->title}}</td>
        <td class="att">{{$balade->description}}</td>
    
        <td class="att"> {{$balade->quantity}}</td> 
        <td class="att">{{$balade->category}}</td>
        <td class="att">{{$balade->price}}</td>
        <td class="att">{{$balade->discount_price}}</td>
        
        <td class="att">{{$balade->price}}</td> 
        <td> 
        <button class="btn btn-danger"  onclick="return confirm('Are you to delete')" 

        href="{{url('delete_balade', $balade->id)}}"> DELETE </button>
</td>

    </tr>
    @endforeach
</table>
</div>
</div>
@include('admin.script') 
</body>
</html>