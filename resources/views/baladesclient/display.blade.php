<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap');

* {
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #131313;
}

.container {
    position: relative;
}

.container .card {
    position: relative;
    width: 320px;
    height: 450px;
    background: #232323;
    border-radius: 20px;
    overflow: hidden;
}

.container .card:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #1BBFE9;
    clip-path: circle(150px at 80% 20%);
    transition: 0.5s ease-in-out;
}

.container .card:hover:before {
    clip-path: circle(300px at 80% -20%);
}

.container .card:after {
    content: "Balade";
    position: absolute;
    top: 50%; 
    font-size: 5em;
    font-weight: 800;
    font-style: italic;
    color: rgba(255, 255, 255, 0.04);

}

.container .card .imgBx {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    width: 100%;
    height: 100%;
    transition: .5s;
}

.container .card:hover .imgBx {
    top: 0%;
    transform: translateY(-25%);
    /* bug  */
}

.container .card .imgBx img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(20deg);
    width: 270px;
}

.container .card .contentBx {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    text-align: center;
    transition: 1s;
    z-index: 90;
}

.container .card:hover .contentBx {
    height: 210px;
}

.container .card .contentBx h2 {
    position: relative;
    font-weight: 600;
    letter-spacing: 1px;
    color: #fff;
}

.container .card .contentBx .size,
.container .card .contentBx .color {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px 20px;
    transition: .5s;
    opacity: 0;
    visibility: hidden;
}

.container .card:hover .contentBx .size {
    opacity: 1;
    visibility: visible;
    transition-delay: .5s;
}

.container .card:hover .contentBx .color {
    opacity: 1;
    visibility: visible;
    transition-delay: .6s;
}

.container .card .contentBx .size h3,
.container .card .contentBx .color h3 {
    color: white;
    font-weight: 300;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: 10px;
}

.container .card .contentBx .size span {
    width: 26px;
    height: 26px;
    text-align: center;
    line-height: 26px;
    font-size: 14px;
    display: inline-block;
    color: #111;
    background: #fff;
    margin: 0 5px;
    transition: .5s;
    color: #111;
    border-radius: 4px;
    cursor: pointer;
}

.container .card .contentBx .size span:hover {  /* other bug */
    background: #B90000;
}

.container .card .contentBx .color span {
 
    background: #ff0;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.container .card .contentBx .color span:nth-child(2) {
     background: #1BBFE9;
}

.container .card .contentBx .color span:nth-child(3) {
     background: #1B2FE9;
}

.container .card .contentBx .color span:nth-child(4) {
     background: #080481;
}

.container .card .contentBx a {
    display: inline-block;
    padding: 10px 20px;
    background: #fff;
    border-radius: 4px;
    margin-top: 10px;
    text-decoration: none;
    font-weight: 600;
    color: #111;
    opacity: 0;
    transform: translateY(50px);
    transition: .5s;
}

.container .card:hover .contentBx a {
    opacity: 1;
    transform: translateY(0px);
    transition-delay: .7s;
} 

h1 {
  text-color:black;
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F; 
}

.box {
  width: 10%;
  
  
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
   background: black;
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
.flex{
    display:flex;
}
</style>
 
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/styles.css">
 

</head>

<body>
@foreach($balade as $balade)
    <div class="container">
        <div class="card">
            <div class="imgBx">
                <img src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5782.png" alt="nike-air-shoe">
            </div>

            <div class="contentBx">

            <h3>{{$balade->title}}</h3>

                <div class="size">
                <h3>Category: {{$balade->category}}</h3>
                </div>

                <div class="color">

                    <h3>Prix : {{$balade->price}}</h3>
                   
<br/>
<br>
</br>

<div class="color">
<h3>discount price : {{$balade->discount_price}}</h3>
</div> 

                </div>
                <div class="box">
	<a class="button" href="#popup1">Let me Pop up</a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Here i am</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
            <div class="flex">
           <div> Description : {{$balade->description}}</div>
           <div>  <h3>Place dispo : {{$balade->quantity}}</h3></div>
</div>
       
		</div>
        <div class="content">

</div> 
	</div>
</div>
            </div>

        </div>
    </div>
    @endforeach

</body>

</html>