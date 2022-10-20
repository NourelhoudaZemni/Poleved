 
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        .div_center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top:30px; 
    }
    .font_size{
       font-size: 40px;
       padding-bottom: 40px;    }
       .text_color{
      color:  black;
       padding-bottom: 20px;    }
       
       label{
      display: inline-block;
     width:    200px;}
     .div_design{
display: flex;
        padding-bottom: 15px;
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
      <!-- partial:partials/_sidebar.html -->
 
      <!-- partial -->
      <div class="container-fluid page-body-wrapper"> 
  
        <div class="main-panel">
            <div class="content-wrapper">
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
{{session()->get('message')}}
    </div>
    @endif
            <div class="div_center">
                    <h1 class="font_size"> Ajouter une balade</h1>
                    <form action="{{url('ajouter_balade')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="div_design">
                    <label> Titre</label>
                        <input class="text_color" type="text" name="title" placeholder="nom de la balade" required="">
                    </div>
                    <div class="div_design">
                    <label> Description </label>
                        <input class="text_color" type="text" name="description" placeholder="description" required=""> 
                    </div>

                    <div class="div_design">
                    <label> Prix </label>
                        <input class="text_color" type="number" name="price" placeholder="prix" required=""> 
                    </div>

                    <div class="div_design">
                    <label> Nombre de personne </label>
                        <input class="text_color" type="number" name="quantity" placeholder="nombre de personne" required=""> 
                    </div>
                    <div class="div_design">
                    <label> Réduction </label>
                        <input class="text_color" type="number" name="discount_price" placeholder="reduction"> 
                    </div>

                    <div class="div_design">
                    <label> Categorie </label>
                       <select class="text_color" name="category">
                       <option value="" selected=""> Ajouter une catégorie</option>
                       @foreach ($category as $category)
                        <option value="{{$category ->category_name}}"> {{$category -> category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="div_design">
                    <label> Photo </label>
                        <input  type="file" name="image"  > 
                    </div>
                     <div> 
                     <input type="submit" class="btn btn-primary"   value="Add Balade">
                     </div>
                       
    </form>
                </div>
             
            </div> 
      </div> 
 
    </div> 
    @include('admin.script')
   <!-- End custom js for this page -->
  </body>
</html>