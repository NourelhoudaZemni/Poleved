 
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
     
     </head>
  <body>
    <div class="container-scroller">
       
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
                   
                    
                   
                  
                   
  
                   
                    <form method="post" action="{{ route('balade.store') }}" enctype="multipart/form-data" class="mt-11">
                        @csrf
        


                        <div class="div_design">
                    <label> Titre</label>
                        <input class="text_color" type="text" name="title" placeholder="nom de la balade" >
                                
    @error('title')
    <div class="alert alert-danger"> 
        {{$message}}</div>    
    @enderror
    
    
    
                    </div>
                    <div class="div_design">
                    <label> Description </label>
                        <input class="text_color" type="text" name="description" placeholder="description" > 
                        @error('description')
                   <div class="alert alert-danger"> {{$message}} </div>
                   @enderror
                 </div>

                    <div class="div_design">
                    <label> Prix </label>
                        <input class="text_color" type="number" name="price" placeholder="prix" > 
                        @error('price')
                   <div class="alert alert-danger"> {{$message}} </div>
                   @enderror
                 </div>

                    <div class="div_design">
                    <label> Nombre de personne </label>
                        <input class="text_color" type="number" name="quantity" placeholder="nombre de personne" > 
                        @error('quantity')
                   <div class="alert alert-danger"> {{$message}} </div>
                   @enderror
                 </div> 
                    <div class="div_design">
                    <label> Réduction </label>
                        <input class="text_color" type="number" name="discount_price" placeholder="reduction"> 
                        @error('discount_price')
                   <div class="alert alert-danger"> {{$message}} </div>
                   @enderror
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

                        @error('image')
                   <div class="alert alert-danger"> {{$message}} </div>
                         @enderror
                    </div>

                    <div class="div_design">
                    <label>Start Date</label></br>
                     <input type="date" name="date" id="startdate" class="form-control">
              @error('date')
             <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                    
                     </div>
    <div> 
    <div class="div_design">

                     <input type="submit" class="btn btn-primary"   value="Add Balade">
                     </div>
                       
    </form>
                </div>
             
            </div> 
      </div> 
 
    </div>  
   <!-- End custom js for this page -->
  </body>
</html>