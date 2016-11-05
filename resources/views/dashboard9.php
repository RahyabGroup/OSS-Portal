<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="pagetype";
$param['userid']=3;
$param['page']=0;
$param['count']=30;
try {
 print_r($myExample->getTasks($param));
}catch(Exception $e)
{
 echo $e->getMessage();
}

?>



<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>
(function ( $ ) {
  $.fn.ddHeroSlider = function() {

      $('div.hero-slide:gt(0)').hide();
       
      var slide = ['firstSlide', 'secondSlide', 'thirdSlide', 'fourthSlide'];
      var startindex=0;
      var divSlide = $('div.hero-slide');
      var divPagin = $('a.hero-pagination');
      var arrow = $('a.hero-arrow-right');

      autoheroslideshow = setInterval(function(){

          startindex++;
          if (startindex == slide.length) {startindex=0;}
          divSlide.removeClass('active').fadeOut();
          divPagin.removeClass('active');
          $('a.hero-pagination[data-link=' + slide[startindex] + ']').addClass('active'); 
          $('div.hero-slide[data-slide=' + slide[startindex] + ']').addClass('active').fadeIn();
  
      }, 2500) //End auto slide show
      
      divPagin.click(function(e){

          e.preventDefault();
          clearInterval(autoheroslideshow);
          var currLink = $(this).data('link'); 
          divSlide.removeClass('active').fadeOut();
          divPagin.removeClass('active');
          $('a.hero-pagination[data-link=' + currLink + ']').addClass('active'); 
          $('div.hero-slide[data-slide=' + currLink + ']').addClass('active').fadeIn();
    
      })// End pagination function

      arrow.click(function(e){

          e.preventDefault();
          clearInterval(autoheroslideshow);

          var nextDiv = $('div.hero-slide.active').next(divSlide);
          var nextPagin = $('a.hero-pagination.active').next(divPagin);
          var theIndex = nextDiv.index();

          if (theIndex <= 3) {
              divSlide.not(nextDiv).removeClass('active').fadeOut();
              divPagin.not(nextPagin).removeClass('active');
              nextDiv.addClass('active').fadeIn();
              nextPagin.addClass('active');
                } else {
                  divSlide.not(nextDiv).removeClass('active').fadeOut();
                  divPagin.not(nextPagin).removeClass('active');
                  $('div.hero-slide:first').addClass('active').fadeIn();
                  $('a.hero-pagination:first').addClass('active');
                }

      })// End arrow function

  };//End hero slider main function

  $(window).resize(function() {
   if(!Modernizr.mq('(min-width:440px)') ){
    clearInterval(autoheroslideshow);
    } 
  }) //End window resize

  $(window).trigger('resize');

}( jQuery ));


</body>
</html>
