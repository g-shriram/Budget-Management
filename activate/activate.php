<?php
session_start();
$user=$_SESSION['user'];
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Account Activation</title>
<!--
Strategy Template
http://www.templatemo.com/tm-489-strategy
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                                  <!-- Hero slider style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        

        
          


        <section class="tm-section tm-section-3 tm-bg-purple">
            <div class="container-fluid tm-section-3-inner">
                <div class="row center-block text-xs-center tm-section-3-header">
                    <div class="col-xs-12">
					 <h1 class="tm-text-white tm-section-3-title">Activate your Account</h1>
                        <h2 class="tm-text-white tm-section-3-title">Choose your plan</h2>
                        <p class="tm-text-white tm-section-3-description">Curabitur porta scelerisque justo, ut ultrices lacus auctor eget. Proin volutpat eu mi nec consequat. Integer porta tristique quam.</p>      
                    </div>
                </div>
                <div class="row">                    
                    
                    <div class="tm-plan-boxes-container">
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-table-col">
                                
                            <table class="tm-plan">
                                <thead>
                                    <tr>
                                        <th class="text-xs-center tm-plan-table-header">Trial Version</th>
                                    </tr>
                                </thead>
                                <tbody class="tm-bg-light-purple">
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">30 days free trial</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">10 sit amet luctus sapien</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">15 eget sagittis</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">20 aliquam eros nec tortor</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">30 vel suscipit turpis</td></tr>                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-xs-center">
                                         <div id="choose1">   <a class="tm-plan-link tm-plan-link-purple">Choose</a></div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>  

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-table-col">
                            
                            <table class="tm-plan">
                                <thead>
                                    <tr>
                                        <th class="text-xs-center tm-plan-table-header">Titanium Plan</th>
                                    </tr>
                                </thead>
                                <tbody class="tm-bg-light-green">
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">Sed porttitor lobortis</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">20 sit amet luctus sapien</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">25 eget sagittis</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">35 aliquam eros nec tortor</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">45 vel suscipit turpis</td></tr>                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-xs-center">
                                            <div id="choose2">   <a class="tm-plan-link tm-plan-link-purple">Choose</a></div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table> 

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-table-col">

                            <table class="tm-plan">
                                <thead>
                                    <tr>
                                        <th class="text-xs-center tm-plan-table-header">Platinum Plan</th>
                                    </tr>
                                </thead>
                                <tbody class="tm-bg-light-orange">
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">Sed porttitor lobortis</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">30 sit amet luctus sapien</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">40 eget sagittis</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">50 aliquam eros nec tortor</td></tr>
                                    <tr class="tm-plan-table-row"><td class="tm-plan-table-cell">60 vel suscipit turpis</td></tr>                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-xs-center">
                                             <div id="choose3">   <a class="tm-plan-link tm-plan-link-purple">Choose</a></div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table> 

                        </div>

                    </div> <!-- tm-plan-boxes-container -->
            
                </div>
            </div>            
        </section>

      

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-script.js"></script>            <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.touchSwipe.min.js"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        <script>     
	
		function activate_user(str) {
  
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var res=this.responseText;
				alert('Account Activated Successfully...');
				window.location.replace("../home/index.php");
            }
        };
        xmlhttp.open("GET", "activate_user.php?q=" + str, true);
        xmlhttp.send();
    
}
		
		
       $(document).ready(function(){
	   $("#choose1").click(function(){
alert('You have choosen trial version ... ( 30 days left )');
activate_user('1');
});
  $("#choose2").click(function(){
alert('You have choosen Titanium Plan ... ( Unilimited validity/limitted featues )');
activate_user('2');
});
  $("#choose3").click(function(){
alert('You have choosen Platinum Plan ... ( Unilimited validity/Unilimited featues )');
activate_user('3');
});
	 		
  
	   });
            $(document).ready(function(){

                /* Auto play bootstrap carousel 
                * http://stackoverflow.com/questions/13525258/twitter-bootstrap-carousel-autoplay-on-load
                -----------------------------------------------------------------------------------------*/                
                $('.carousel').carousel({
                  interval: 3000
                })

                /* Enable swiping carousel for tablets and mobile
                 * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
                 ---------------------------------------------------------------------------------*/
                if($(window).width() <= 991) {
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                }  

                /* Handle window resize */
                $(window).resize(function(){
                    if($(window).width() <= 991) {
                        $(".carousel-inner").swipe( {
                            //Generic swipe handler for all directions
                            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                                $(this).parent().carousel('next'); 
                            },
                            swipeRight: function() {
                                $(this).parent().carousel('prev'); 
                            },
                            //Default is 75px, set to 0 for demo so any distance triggers swipe
                            threshold:0
                        });
                     }
                });                             
            });

        </script>             

</body>
</html>