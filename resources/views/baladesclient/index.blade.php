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
.bouton{
    display: flex;
}
.image{
    width: 5px;
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
        padding-bottom: 40px;
        background: skyblue;
       }
    </style>
    <head> 
    <body>
    @extends('baladesclient.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Balades  </h2>
                    </div>
                    <div class="card-body">
                         
                        <br/>
                        <br/>
                        <div class="table-responsive">
                             
                                
                                <table class="center"><thead>
    <tr class="th_color">
        <th class="att">Title</th>
        <th  class="att">description</th>
        <th class="att" >nb de personne</th>
        <th class="att" >categorie</th>
        <th class="att" >prix</th>
        <th  class="att">remise</th> 
        <th  class="att">image</th>
        
        <th>Action</th>



    </tr>
                                </thead>
                                <tbody>
                                @foreach($balades as $item)
                                    <tr> 
                <td  class="att">{{$item->title}}</td>
        <td  class="att">{{$item->description}}</td>
    
        <td  class="att"> {{$item->quantity}}</td> 
        <td  class="att">{{$item->category}}</td>
        <td  class="att">{{$item->price}}</td>
        <td  class="att">{{$item->discount_price}}</td>
         
        <td>     
                <div class="image">
                    <img src="{{ asset('images/' .  $item->image) }}" alt="Wooden Chair Previw" />
        
            </div> </td>
                                        <td class="bouton">
                                            
                                            <a class="att" href="{{ url('/balade/' . $item->id) }}" title="View balade"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
    
  <a class="att" href="{{ url('/balade/' . $item->id . '/edit') }}" title="Edit balade"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/balade' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete balade" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form> 

                                           
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
<body>
    </html>