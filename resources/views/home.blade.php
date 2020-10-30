@extends('plantilla')
@section('content')
<div class="container">


    <center>
<h2 style="margin-top: 5%">Sistema Institucional de Administración de estadía</h2>


        <form action="accionesLogin.php" style="border-style: ridge; width:500px; height: 450px; margin-top: 30px; margin-bottom: 10px; border-style:double; ;border-color: #8C1E34" >
  <div class="imgcontainer" style="margin-top: 10px;">
    <center><img src="/images/loginimagen.png" alt="loginimagen.png" class="avatar"></center>
    
  </div>
  <br>

  
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="" id="usuario" required>
    <br>
    <br>
      
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="" id="pwd" required>
    <br>
      


     <!--<input type="button" value ="Entrar" id="submit" onclick="validar($('#usuario').val(), $('#pwd').val())"/>-->
     <input type="button" value ="Entrar" id="submit" onclick="validar($('#usuario').val(), $('#pwd').val())" style="border-style: ridge; width:150px; height: 25px; margin-top: 50px; margin-bottom: 10px; border-style:double;"/>


    <!--<button type="submit">Login</button>-->
    <table id="Table" style="text-align: center; border:1px double #CECEF6"></table>
  
</form></center>
    
</div>


@endsection