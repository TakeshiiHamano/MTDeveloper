@extends('layouts.layout')
@section('title')
    MTDeveloper Ica
@stop
@section('body')
<section id="section02" class="demo section02">
  <div class="container">
  <br> <br>
    <div class="col-sm-6">
      <div class="wow slideInDown" data-wow-duration="1s">
        <img src="img/quienes_somos.png" alt="" height="50px">
        <h2>Quienes somos?</h2>
        <p>Somos un Club de Estudiantes o Comunidad Académica encargada de la difusión de tecnologías Microsoft y entrenamiento de estudiantes para que se puedan desarrollar en el mundo de la computación e informática, teniendo como objetivo lograr la formación de profesionales de calidad.</p>
      </div>
      <br>
      <div class="wow slideInDown" data-wow-duration="1s">
        <img src="img/mision.png" alt="" height="50px">
        <h2>Misión</h2>
        <p>Compartir recursos tecnológicos y seguir aprendiendo con todos los miembros de nuestra comunidad amantes de la tecnología.</p>
      </div>
      <br>
      <div class="wow slideInDown" data-wow-duration="1s">
        <img src="img/vision.png" alt="" height="50px">
        <h2>Visión</h2>
        <p>Tener un buen staff que esten preparados para la enseñanza y motivación hacia los demás estudiantes, además de crecer tanto en el campo de Comunidades Microsoft Peru y regional.</p>
      </div>
    </div>
    <div class="col-sm-6 fig">
      <figure><img class="wow zoomIn" src="img/presentation.png" alt="" height="400px" ></figure>
    </div>
  </div>
  <a class="icon" href="#section03"><span></span>Scroll</a>
</section>

<section id="section03" class="demo section03">
    <div class="content" style="text-align: center; padding-top: 50px;">
      <h1 style="margin: 0px;color:black;">MTDTeam</h1>
    </div>
    <br>
    <div class="contein" style="">
      <div class="content2" style="text-align: -webkit-center;"></div>
        <div class="container" style="text-align: center; padding-right: 100px;">
          <ul class="pagination" style="margin-top: 20px; z-index: 2; position: absolute;">
          <li><a class="demo1" style=" color: gray; border-radius: 35px;">1</a></li>
          <li><a class="demo2" style=" color: gray;border-radius: 35px;">2</a></li>
          <li class="disabled"><a class="demo" style=" color: gray;border-radius: 35px;">3</a></li>
          <li class="disabled"><a class="demo" style=" color: gray;border-radius: 35px;">4</a></li>
          <li class="disabled"><a class="demo" style=" color: gray;border-radius: 35px;">5</a></li>
        </ul>
        </div>
        
    </div>
    
 
  <a class="icon" href="#section04"><span></span>Scroll</a>
</section>

<section id="section04" class="demo">
<div class="content" style="text-align: center; padding-top: 100px; padding-bottom: 20px;">
      <h1 style="margin: 0px;color: white;">MTDSocial</h1>
    </div>
    <br>
  <div class="container"">
  <div class="row" style="margin: 0px;">
    <div class="col-md-6" style="padding-right: 50px; z-index: 2; ">
      <a class="twitter-timeline" href="https://twitter.com/mtdeveloperica" data-height="500" style="box-shadow: 0 7px 25px 5px #000000;"></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="col-md-6" style="padding-left: 80px; z-index: 2;">
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmtdeveloper%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=907147109334860" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" style="box-shadow: 0 7px 25px 5px #000000;"></iframe>
    </div>
    </div>
</div>
  <a class="icon" href="#section05"><span></span>Scroll</a>
</section>
<section id="section05" class="demo">
 <div class="content" style="text-align: center; padding-top: 80px;">
      <h1 style="margin: 0px;color:black;">MTDTools</h1>
    </div>
  <div class="container" style="padding-top: 30px;">
    <div class="row" style="text-align: center;">
      <a  href="https://mva.microsoft.com/" target="_blank"><div class="col-sm-3 wow fadeInDown" style="position: relative; z-index: 1;" >
      <img src="../img/mva.png" width="250px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
      <h2>Microsoft Virtual Academy</h2>
      <p style="color: black;"> Desarrolle sus habilidades y avance su carrera.</p>
      </div></a>
      <a  href="https://channel9.msdn.com/" target="_blank"><div class="col-sm-3 wow fadeInDown" style="position: relative; z-index: 1;" >
      <img src="../img/channel9.png" width="250px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
      <h2>Channel9</h2>
      <p style="color: black;">Traemos adelante a la gente detrás de nuestros productos y los conectamos con los que los usamos.</p>
      </div></a>
      <a  href="https://bizspark.microsoft.com/" target="_blank"><div class="col-sm-3 wow fadeInDown" style="position: relative; z-index: 1;" >
      <img src="../img/bizpark.png" width="250px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
      <h2>BizSpark</h2>
      <p style="color: black;">Programa global que ayuda a las startups a tener éxito, dándoles acceso gratuito a tecnologías Microsoft. </p>
      </div></a>
      <a  href="https://www.microsoft.com/about/philanthropies/youthspark/youthsparkhub/" target="_blank"><div class="col-sm-3 wow fadeInDown" style="position: relative; z-index: 1;" >
      <img src="../img/youthspark.png" width="250px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
      <h2>YouthSpark</h2>
      <p style="color: black;">Iniciativa global para aumentar el acceso de todos los jóvenes a la informática.</p>
      </div></a>
    </div>
    <div class="row" style="text-align: center;">
      <a  href="https://login.microsoftonline.com/" target="_blank"><div class="col-sm-4 wow fadeInDown"  style="position: relative; z-index: 1;">
      <img src="../img/off365.png" width="250px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
      <h2>Office 365</h2>
      <p style="color: black;">Plataforma que proporciona un conjunto de software de productividad.</p>
      </div></a>
      <a  href="https://portal.azure.com/" target="_blank"><div class="col-sm-4 wow fadeInDown"  style="position: relative; z-index: 1;">
      <img src="../img/azure.png" width="250px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
      <h2>Microsoft Azure</h2>
      <p style="color: black;">Plataforma informática en la nube de nivel empresarial abierta y flexible.</p>
      </div></a>
      <a  href="https://imagine.microsoft.com/" target="_blank"><div class="col-sm-4 wow fadeInDown"  style="position: relative; z-index: 1;">
      <img src="../img/imagine.png" width="250px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
      <h2>Microsoft Imagine</h2>
      <p style="color: black;">Traiga sus ideas a la vida. Descubra cómo los estudiantes desarrolladores pueden unirse a Microsoft Imagine.</p>
      </div></a>
    </div>
  </div>
  <a class="icon" href="#section06"><span></span>Scroll</a>
</section>
<section id="section06" class="demo">
  <div class="content" style="text-align: center; padding-top: 80px;">
      <h1 style="margin: 0px;color: white;">MTDContact</h1>
    </div>
  <a class="icon" href="#section07"><span></span>Scroll</a>
  <div class="container" style="z-index: 1;position: relative;">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-3">
          <div class="panel panel-default" style="height: 400px; width: 550px; ">
            <div class="panel-heading">
              <h3 class="panel-title">LLena todos los campos para contactarte.</h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nombre">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Apellidos">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <input type="text" name="ciclo" id="ciclo" class="form-control input-sm" placeholder="Ciclo">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <input type="text" name="universidad" id="universidad" class="form-control input-sm" placeholder="Universidad">
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="">Si eres de la UNICA, bríndanos tu código de estudiante:</label>
                    </div>
                 </div>   
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="codigo" id="codigo" class="form-control input-sm" placeholder="20093131">
                    </div>
                  </div>
                </div>
                <input type="submit" value="Register" class="btn btn-info btn-block">
              
              </form>
            </div>
          </div>
        </div>
  </div>
  </div>
</section>
<section id="section07" class="demo">
<div class="content" style="text-align: center; padding-top: 80px;">
      <h1 style="margin: 0px;color: black;">MTDUbication</h1>
    </div>
  <div class="container wow flipInY" style="padding-top: 30px;">
    <img src="../img/ubication.png" width="100%" height="500px" alt="" style="box-shadow: 0 7px 25px 5px #9b9b9b;">
  </div>
</section>
@stop
      
   
    
    