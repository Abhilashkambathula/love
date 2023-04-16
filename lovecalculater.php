
<!DOCTYPE html>
<html>
<head>
 <title>Love Calculater</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<style >
 body{
  background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(./giphy.gif);
  background-repeat: no-repeat;
  font-family: sans-serif;
  background-position: center;
  background-size: cover;
  width: 100%;
  height: 100vh;
  position: relative;
 }
 header{
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
 
 .form-group{
    margin-top: 40px;
    
 }

 fieldset{
   
   background-image: linear-gradient(red,blue,orange,white);
}
 @media only screen and (min-height: 667px, min-width:335) {
    fieldset{
    margin: 0 auto;
    text-align: center;
    width: 80%;
    height: 30vh;
    background-image: linear-gradient(red,blue,orange);
 }
 }
 @media only screen and (max-height: 1024px, min-width:667) {
    fieldset{
    width: 30%;
    text-align: center;
    height: 90vh;
    background-image: linear-gradient(red,blue,orange);
 }
 }
 input{
    color: whitesmoke;
    width: 0px;
    height: 30px;
    background-image: url(./user1.jpeg);
 }
 button{
    background-color:lightblue;
    width: 100px;
    height: 30px;
    border: none;
    font-size: large;
    border-radius: 5px;
 }
</style>
</head>
<body>
   <header>
<center>
<form method="love.php" action="POST">
<div class="card w-50 m-auto text-center ">
  <div class="card-header bg-danger text-white"></div>
  <fieldset>
    <legend>LOVE CALCULATOR</legend>
  
  <div class="card-body">
   <form class="form-inline w-75 m-auto">
    <div class="form-group">
     <input type="text" name="first_name" class="form-control text-center" placeholder="Your Name" id="name" >
    </div>
    <div class="pl-4 pr-4">
    <span> + </span>
    </div>
    <div class="form-group">
     <input type="text" name="second_name" class="form-control text-center" placeholder=" His/Her Name" id="lname">
    </div>
   </form> <br>
    <div class="w-70 m-auto">
     <button  class="btn btn-success w-50" onclick="checkloveper()"> Click </button>
    </div>
    <br>
    <div>
    <input type="text" name="" placeholder="LOVE PERCENTAGE" class="form-control text-center w-25 m-auto" id="lovevalue">
    </div>
  </div> 
  <br>
  <div class="card-footer ">God Bless Your RelationShip</div>
</fieldset>
</div>
</form>
</center>
</header>


<script>
 function checkloveper(){

  var name = document.getElementById('name').value;
  var lname = document.getElementById('lname').value;

  if(name == ""){
   alert('Please enter your name');
  }else if (name.length <=2 ) {
   alert('Min lenght is 3')
  }else if(!isNaN(name)){
   alert('Numbers are not allowed');
  }

  else if(lname == ""){
   alert('Please enter your love name');
  }else if (lname.length <=2 ) {
   alert('Min lenght is 3')
  }else if(!isNaN(lname)){
   alert('Numbers are not allowed');
  }
  else{
  var lovdata = Math.random() * 100;
  lovdata = Math.floor(lovdata);
  document.getElementById('lovevalue').value = lovdata + "%"; 
  }
  
 }
</script>
</body>

</html>