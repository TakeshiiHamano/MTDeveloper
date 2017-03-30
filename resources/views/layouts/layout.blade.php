<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

  <link rel="icon" href="../img/logo-azul.png">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="containers" >
  <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#section01" style="padding: 0px; width: 250px;"><img src="../img/logo-blanco.png" width="40%" alt=""></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right" >
            <li><a  style="color: white;" href="#section01">Home</a></li>
            <li><a style="color: white;" href="#section02">Presentación</a></li>
            <li><a style="color: white;" href="#section03">Equipo</a></li>
            <li><a style="color: white;" href="#section04">Sociales</a></li>
            <li><a style="color: white;" href="#section05">Herramientas</a></li>
            <li><a style="color: white;" href="#section06">Contáctenos</a></li>
            <li><a style="color: white;" href="#section07">Ubicación</a></li>   
          </ul>
        </div> <!-- /.navbar-collapse -->
        </div>
      </div><!-- /.container -->
    </nav>
    <div class="social">
        <ul>
          <li style="margin-bottom: 13px;"><a href="https://github.com/mtdeveloperica" target="_blank"><img src="img/gh-logo.png" alt="" style="height: 30px;border-radius: 5px;"></a></li>
          <li style="margin-bottom: 13px;"><a href="https://www.facebook.com/mtdeveloper/?ref=aymt_homepage_panel" target="_blank"><img src="img/fb-logo.png" alt="" style="height: 30px; border-radius: 5px;"></a></li>
          <li style="margin-bottom: 13px;"><a href="https://www.instagram.com/mtdeveloperica/" target="_blank"><img src="img/ins-logo.png" alt="" style="height: 30px; border-radius: 5px;"></a></li>
          <li style="margin-bottom: 13px;"><a href="https://www.youtube.com/channel/UCjeiNqRE6qCvJv_TfrdxMdA" target="_blank"><img src="img/yt-logo.png" alt="" style="height: 30px; border-radius: 5px;"></a></li>
          <li><a href="https://twitter.com/mtdeveloperica" target="_blank"><img src="img/tw-logo.png" alt="" style="height: 30px; border-radius: 5px;"></a></li>
        </ul><!-- /.navbar -->  
    </div> 
</div>
<section id="section01" class="demo">
  <div class="container" style="text-align: center; padding-top: 100px;">
    <img src="../img/logo-blanco.png" width="60%"  alt=""> 
  </div>
  <div class="contain" style="text-align: center; padding-top: 100px; padding-right: 100px;">
    <a href="#section06" style="z-index: 2; position: absolute;"><button type="button" class="btn btn-primary btn-lg">Sé parte de nosotros</button></a>
  </div>
  <a class="icon" href="#section02"><span></span>Scroll</a>
  
</section>

@yield('body')
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/javascript.js')}}"></script>
<script src="{{asset('js/jquery.bootpag.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
    $(document).ready(function(){
    var altura = $('.social').offset().top;
    
    $(window).on('scroll', function(){
        if ( $(window).scrollTop() > altura ){
            $('.social').addClass('social-fixed');
        } else {
            $('.social').removeClass('social-fixed');
        }
    });
 
});
</script>
<script> 
wow = new WOW
({ boxClass: 'wow', 
  animateClass: 'animated', 
  offset: 0, 
  mobile: true, 
  live: true })
wow.init();
</script>
  
<script>
  $(function() {
    $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
  });
</script>

<script>
    $(document).ready(function(){  
        $(".content2").load("primero");
    });
    $(".demo1").click(function(){
        $(".content2").load("primero");
    });
    $(".demo2").click(function(){
        $(".content2").load("segundo");
    });
    $(".demo3").click(function(){
        $(".content2").load("tercero");
    });
    $(".demo4").click(function(){
        $(".content2").load("cuarto");
    });
    $(".demo5").click(function(){
        $(".content2").load("quinto");
    });
    $(".demo6").click(function(){
        $(".content2").load("sexto");
    });
    $(".demo7").click(function(){
        $(".content2").load("septimo");
    });
    $(".demo8").click(function(){
        $(".content2").load("octavo");
    });
    $(".demo9").click(function(){
        $(".content2").load("noveno");
    });
    $(".demo10").click(function(){
        $(".content2").load("decimo");
    });
    $(".demo11").click(function(){
        $(".content2").load("once");
    });
    $(".demo12").click(function(){
        $(".content2").load("doce");
    });
    $(".demo13").click(function(){
        $(".content2").load("trece");
    });
    $(".demo14").click(function(){
        $(".content2").load("catorce");
    });
    $(".demo15").click(function(){
        $(".content2").load("quince");
    });
    $(".demo16").click(function(){
        $(".content2").load("dicesiseis");
    });
    $(".demo17").click(function(){
        $(".content2").load("diecisiete");
    });
    $(".demo18").click(function(){
        $(".content2").load("dieciocho");    
    });         
</script>
<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
</body>
</html>	

