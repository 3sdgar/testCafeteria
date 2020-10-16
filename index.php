<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
?>



<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" >
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
   
    <link rel="shortcut icon" href="https://i.pinimg.com/236x/86/7a/d9/867ad91e7377935a1aea5a543544e1ce.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="js/jquery-3.1.0.min.js"></script>


    <title>CoFfee Shop</title>


<style>

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

body{

    background-image: url("img/f2.jpg"); 
}


.login{
    background-color:rgba(0,0,0,0.0); 
    width: 80vh; 
    margin-left: auto;
    margin-right:auto; 
    margin-top:30vh; 
    text-align:center;
    padding: 3%;
    border-radius: 25px;

}


#nav{

    background-color:rgba(30,30,30); 
    color: white;

}

.box{



    
}


.process{

background-color:rgba(39,39,39); 
min-height: 80vh;
max-height:80vh;
color: white;
margin:1%;
padding-top:10%;
padding-bottom:10%;
border-radius: 5px;

}

.subBox{

    background-color:rgba(68,68,68); 
    width:90%;
    margin-left:auto;
    margin-right:auto;
    margin-top:10%;
    padding:5%;
    border-radius: 8px;
   
  
}

#products{

  position: absolute;
  left: 0px;
  top: 0px;
  background-color:rgba(39,39,39,0.8);
  width:100%;
  height: 100%;
  color:white;
  z-index: 1000;
}

#formulario{
background: white;
width:70%;
min-height: 90%;
color:black;
margin-left:auto;
margin-right:auto;
margin-top:2%;
border-radius:15px;
box-shadow:4px 5px 9px black;
padding: 2%;
}


#payment{

position: absolute;
left: 0px;
top: 0px;
background-color:rgba(39,39,39,0.8);
width:100%;
height: 100%;
color:white;
z-index: 1000;
}


#paymentData{
background: black;
width:40%;
min-height: 90%;
color:black;
margin-left:auto;
margin-right:auto;
margin-top:2%;
box-shadow:4px 5px 9px black;
padding: 2%;
}


</style>

</head>
<body>

<div id="products">

 <div id="formulario">
 
 <h2>Crear pedido</h2>
 <hr>

 <div class="form-group">
    <label for="nombre">Nombre del Cliente</label>
    <input type="text" class="form-control" id="nombre"  placeholder="Digite el nombre del Cliente">
  </div>
  <div id="listaProductos"></div>
  <div id="added"></div>
 </div>
<hr>
</div>

<div id="main" ></div>
<div id="payment"><div>
<div id="paymentData"></div>
</body>
</html>


<script>

$(document).ready(function(){
    
    document.getElementById("payment").style.display = "none"; 
    cerrarPro();
     login();
     product();
     
});//docReady


cerrarPayment = function(){

document.getElementById("payment").style.display = "none"; 
$("#paymentData").html(html);
}

payment = function(id){

html=`

<div class="container" id="" style="padding:none; margin:none; border-bottom:solid white; 12px " >
<div class="row">
<div id="" class="col-7 col-md-7" style="padding:2%;">
<div style="color:white;"> 
<img src="img/lista.svg" width="40"style="background:white;">  &nbsp; &nbsp;   <strong>45456</strong>    
</div>
</div>

<div id="" class="col-5 col-md-5" style="padding:2%;">
<img src="img/cerrar.svg" width="40"style="background:white; border-radius:100%; position:absolute; top:-6vh; right:-6vh;" onclick="cerrarPayment()">

<div style="color:white;"> 
<img src="img/user.svg" width="40"style="background:white;">  &nbsp; efemenias   
</div>
</div>

</div>
</div>




<div class="container" id=""  style="padding:none; margin:none; border-bottom:solid white; 12px "  >
<div class="row">

`;




   document.getElementById("payment").style.display = "inline"; 
    
for (let i = 0; i < arrayUsers.length; i++) {


if(arrayUsers[i].id == id){ 

pedido = arrayUsers[i];

// alert(arrayTemp[n].id+"     "+pedido.items[i].id);
ids = [];
totalPrice = 0;
for (let j = 0; j < pedido.items.length; j++) {
    

for (let h = 0; h < arrayTemp.length; h++) {
   
   if( pedido.items[j].id == arrayTemp[h].id ){

    array = arrayTemp[h];
 
    totalPrice += array.price;

      html += `
      
    <div class="container" id="" style=" background-color:rgba(3,3,3); margin:1%;">
    <div class="row">

    <div id="" class="col-4 col-md-4" style="padding:2%; color: white;">
    <div >
   
    <img src="`+array.image+`" style="width:90%; height:165px;" >

    </div>
    </div>

    <div id="" class="col-4 col-md-4" style="padding:2%; color: white;">
    <div >
   
    <p> `+array.name+`</p>
    <p>₡ `+array.description+`</p>
    <p>₡ `+array.price+`</p>
    
    </div>
    </div>


    </div>
    </div>
      `;



   }//if
    
}//for


    
}//forj

}//if

}//fori

html += `    
    </div>
    </div>`;

   
    html += `
      
    <div class="container" id="" style=" background-color:rgba(3,3,3); margin-top:3%;">
    <div class="row">

    <div id="" class="col-8 col-md-8" style="padding:2%; color: white;">
    <div >
   
        <h4>TOTAL</h4>
        <h4>`+totalPrice+`</h4>

    </div>
    </div>


    <div id="" class="col-4 col-md-4" style="padding:2%; color: white;">
    <div >
   
    <button type="button"  class="btn btn-success btn-lg"  onclick="cerrarPayment()" >Pagar</button>

    </div>
    </div>


      </div>
      </div>`;



 $("#paymentData").html(html);


}


addRequestTothequeue = function (){

    
   if(document.getElementById("nombre").value.trim() == ''){

    alert('Por favor agregue el nombre del cliente');
  
   }else{

    if(totalpayment == 0){

    alert("Aun no ha agregado ningun producto a la lista");

    }else{

   

     //   console.log(arrayProducts);


    }//f
   }//if



}//func


arrayProducts= [];
ind=0;
totalpayment=0;
listTemp ='';
htmlTemp= ``;

function addProduct(i){


    array = arrayTemp[i];
   
      totalpayment += array.price; 

    jsonValue = {"item": array.id};
    arrayProducts[ind] = jsonValue;
   // console.log(arrayProducts);

     listTemp += `<li class="list-group-item">`+array.name+`  | ₡  <strong style="color:red">`+array.price+`</strong></li>`;
     htmlTemp= `<ul class="list-group list-group-flush">`+listTemp+`</ul>`;
     
     $("#totalToPay").html(" &nbsp; &nbsp; Total ₡  "+totalpayment);
     $("#added").html(htmlTemp);
    ind++;

    
}


cerrarPro = function (){ 
    
document.getElementById("products").style.display = "none"; 
ind=0;
totalpayment=0;
listTemp ='';
htmlTemp= ``;
$("#totalToPay").html(" &nbsp; &nbsp; Total ₡  "+totalpayment);
$("#added").html(htmlTemp);
    
    }


arrayTemp = [];
product = function (){

$.ajax({
  url:"php.php?n=5",
  type:  "POST", 
  dataType: "json",
  }).done(function(data) { console.log(data);

    arrayData = data.items;
    arrayTemp = arrayData;
   html = `
  
  <div class="container" >
    <div class="row">`;

    for (let i = 0; i < arrayData.length; i++) {
  
    id = arrayData[i].id;
    array = arrayData[i];

    html +=`   
    <div id="" class="col-4 col-md-4" style="padding:2%;">
    <div style="box-shadow:1px 5px 7px black; padding:1%; border-radius:2%;" title="`+array.description+`">
    <center>
    <img src="`+array.image+`" style="width:90%; height:165px;" >
    <hr>
    <p> `+array.name+`</p>
    <p>₡ `+array.price+`</p>

    <button type="button" 
           id="agregarPro" 
           class="btn btn-primary btn-lg btn-block"
           onClick="addProduct(`+i+`)"
           >agregar</button>



    </center>
    </div>
    
    </div>
  `;

    }//for


    html +=`   &nbsp; &nbsp; 

    <button type="button" 
           class="btn btn-success btn-lg" 
           onclick="addRequestTothequeue()"
           >agregar pedido a la cola</button>
            &nbsp;
    <button type="button" 
           class="btn btn-danger btn-lg" 
           onclick="cerrarPro()"
           >cancelar</button>
           &nbsp; &nbsp; 
           <div id="totalToPay" style="text-align:right;  font-size: 150%; color:red"> &nbsp; &nbsp; Total ₡ 0</div>
    </div>
    </div>`;

    $("#listaProductos").html(html);
    


})//ajax

}

function deleteData(id){

var data ="id="+id;

$.ajax({
  url:"php.php?n=4",
  type:  "POST", 
//   dataType: "json",
  data: data,
  }).done(function(data) { alert(data);  acceder();

})//ajax


}

createOrder = function(){

    document.getElementById("products").style.display = "inline";

    $.ajax({
      url:"php.php?n=",
      type:  "POST", 
       //   dataType: "json",
      // data: data,
      }).done(function(data) {  acceder();

})//ajax


}


function allowDrop(ev) {
  ev.preventDefault();
}

temporalId = '';
function drag(ev,id) {

  temporalId = id;
 // alert(temporalId);
}


function drop(ev,state) {

   if(state == "complete"){ payment(temporalId); }

     var data ="state="+state+"&id="+temporalId;

    console.log(temporalId);

$.ajax({
      url:"php.php?n=2",
      type:  "POST", 
   //   dataType: "json",
      data: data,
      }).done(function(data) { acceder();

})//ajax

}

arrayUsers = [];
acceder = function () {
   
    url = "https://iitd7euw75.execute-api.us-east-1.amazonaws.com/services/orders/getOrders";

    data = "url="+url;
  

    $.ajax({
          url:"php.php?n=1",
          type:  "POST", 
          dataType: "json",
          data: data,
          }).done(function(data) {    
              
              console.log(data);
              
              arrayData = data.items;
              arrayUsers = arrayData;
              box1 = '';
              box2 = '';
              box3 = '';
              box4 = '';

              pName= '';
              total= 0;
              htmlProduct='';
              
    
          for (let i = 0; i < arrayData.length; i++) {


            for (let j = 0; j < arrayTemp.length; j++) {
            
              
                if(arrayTemp[j].id == arrayData[i].items[0].id){

                    pName  = arrayTemp[j].name;
                    total += arrayTemp[j].price;
                    

                    htmlProduct += `<p>`+pName+`</p>`;
                }//if
                
            }//forj

             
              id     = arrayData[i].id;
              state  = arrayData[i].state;
              user   = arrayData[i].user;
 
              boxHtml = `
              
              <div  id="`+id+`" class="subBox"  draggable="true" ondragstart="drag(event,'`+id+`')"   ondblclick="deleteData('`+id+`')">
                   <p>45456  &nbsp; <em style="color:#98956F; right:13%; position:absolute;">efemenias</em></p>
                   <hr style="background:white">
                  <center> `+htmlProduct+`</center>
                  </div>     
              `;


              switch (state) {
                 
                  case "pending":   box1 += boxHtml;  break;
                  case "working":   box2 += boxHtml;  break;
                  case "finished":  box3 += boxHtml;  break;
                  case "complete":  box4 += boxHtml;  break;
        
              } // case of
              
          }//for

    html = `
    
    <div class="container-fluid" id="nav" >
    <div class="row">
     
    <div id="" class="col-10 col-md-10">
    <img src="img/coffeeshop.png" style="width:23%">
    <input type="button" value="create Order" onclick=" createOrder()">
    </div>

    <div id="" class="col-2 col-md-2" style="padding-top:1%;">
    <img src="img/buscar.svg" width="40"style="color:green;">
    <img src="img/marcador.svg" width="40"style="color:green;">
    <img src="img/user.svg" width="40"style="color:green;">
    </div>  
    
    
    </div>
    </div>

    <br>

    <div class="container-fluid" >
     <div class="row">
    
     <div id="" class="col-3 col-md-3 box">
        <div class="process"  ondrop="drop(event,'pending')" ondragover="allowDrop(event)">
          <center><h5>COLA</h5></center>    
              <div class="box"> `+box1+` </div>
         </div>
   </div>

   <div id="" class="col-3 col-md-3 ">
        <div class="process"  ondrop="drop(event,'working')" ondragover="allowDrop(event)">
          <center><h5>PREPARACIÓN</h5></center>
               <div class="box"> `+box2+` </div>
         </div>
   </div>

   <div id="" class="col-3 col-md-3 box">
        <div class="process"  ondrop="drop(event,'finished')" ondragover="allowDrop(event)">
          <center><h5>FINALIZADO</h5></center>
               <div class="box"> `+box3+` </div>
         </div>
   </div>

   <div id="" class="col-3 col-md-3 box">
        <div class="process"  ondrop="drop(event,'complete')" ondragover="allowDrop(event)">
          <center><h5>ENTREGADO</h5></center>
                <div class="box"> `+box4+` </div>
         </div>
   </div>


     </div>   
     </div>
    
    `;


    $("#main").html(html);
    $("body").css("background-image", "none");
    $("body").css("background-color", "black");
    
    

          
}) //ajax
}//acceder


login = function () {

    html = `
   
   <div class="container" >
   <div class="row">
   
   <div class="login"  style="">
  
   <img src="img/coffeeshop.png">
   <br>
  
   <button type="button" 
           id="logButton" 
           class="btn btn-primary btn-lg btn-block" 
           style="background-color: rgb(255, 255, 255); border:none; color:black"
           onClick="acceder()"
           >Acceder</button>

<br>
   <button type="button" 
           class="btn btn-primary btn-lg" 
           style="background-color: rgb(138, 119, 85); border:none;" 
           >Registro</button>

   <button type="button" 
           class="btn btn-success btn-lg" 
           style="taxt-aling:right;"
           >Login</button>

   </div>
   </div>

   </div>
   </div>

`;

//style="background-color: rgb(138, 119, 85); border:none;"  <img src="img/icono.png" alt="">

$("#main").html(html);

}


</script>