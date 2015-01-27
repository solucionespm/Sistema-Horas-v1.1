<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>SPM .::. <?= $title; ?></title>
  
  <?php
    if($title=='Tasks'){
  ?>
    <link href="<?= base_url('assets/timepicker/jquery.datetimepicker.css'); ?>" rel="stylesheet">  
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-timepicker.min.css'); ?>" />
  <?php
    }elseif($title=='Prepaid'){
  ?>
    <link href="<?= base_url('assets/timepicker/jquery.datetimepicker.css'); ?>" rel="stylesheet">  
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-timepicker.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/dialog/dialog.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/dialog/dialog-jamie.css'); ?>" />
  <?php
    }
  ?>  
  

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">    
  <link href="<?= base_url('assets/css/sweet-alert.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.default.css'); ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/hover.css'); ?>" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1 class="bounceInDown animated"><span>[</span> S<i class="fa fa-cog" style="color: #f79b1c;"></i>luciones PM <span>]</span></h1>
    </div><!-- logopanel -->
    
    <div class="leftpanelinner">
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="<?= base_url('assets/images/photos/user.jpg'); ?>" class="media-object">
                <div class="media-body">
                    <h4>Edwin Orellana</h4>
                    <span>"Admin"</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="<?= ($title=='Dashboard')?'active':''; ?>"><a href="<?= base_url('admin'); ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="<?= ($title=='Client')?'active':''; ?>"><a href="<?= base_url('cliente'); ?>"><i class="glyphicon glyphicon-user"></i> <span>Client</span></a></li>
        <li class="<?= ($title=='Tasks')?'active':''; ?>"><a href="<?= base_url('tasks'); ?>"><i class="fa fa-calendar"></i> <span>Tasks</span></a></li>
        <li class="nav-parent <?= ($title=='Prepaid')?'active':''; ?>"><a href="#"><i class="fa fa-credit-card"></i> <span>Prepaids</span></a>
          <ul class="children">
            <li class="<?= ($subtitle=='Hours')?'active':''; ?>"><a href="<?= base_url('prepaid/hours'); ?>"><i class="fa fa-caret-right"></i> Hours</a></li>
          </ul>
        </li>
        <li class="nav-parent <?= ($title=='Reports')?'active':''; ?>"><a href="#"><i class="fa fa-print"></i> <span>Reports</span></a>
          <ul class="children">
            <li class="<?= ($subtitle=='Reports Hours')?'active':''; ?>"><a href="<?= base_url('reports/list_hours'); ?>"><i class="fa fa-caret-right"></i> Hours</a></li>
            <li><a href="form-layouts.html"><i class="fa fa-caret-right"></i> Total</a></li>
            <li><a href="form-layouts.html"><i class="fa fa-caret-right"></i> Billing</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/images/photos/user.jpg'); ?>" alt="" />
                Edwin Orellana
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="<?= base_url('admin'); ?>"><i class="glyphicon glyphicon-user"></i> Dashboard</a></li>
                <li><a href="<?= base_url('cliente'); ?>"><i class="glyphicon glyphicon-user"></i> Client</a></li>
                <li><a href="<?= base_url('tasks'); ?>"><i class="glyphicon glyphicon-cog"></i> Tasks</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <?= $this->load->view($content . '_view', $datosArray, true); ?>
    
  </div><!-- mainpanel -->
  
  <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
        <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
        <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>
        
    <!-- Tab panes -->
    
  </div><!-- rightpanel -->
  
</section>



<script src="<?= base_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery-migrate-1.2.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/modernizr.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.sparkline.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/toggles.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/retina.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.cookies.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery-ui-1.10.3.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/sweet-alert.min.js'); ?>"></script>

<script>
    var base="<?= base_url(); ?>";
</script>

<?php
if($title=='Tasks'){
?>
<script src="<?= base_url('assets/js/bootstrap-timepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.mousewheel.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom-tasks.js'); ?>"></script>
<script>
jQuery(document).ready(function(){
    jQuery('#fromTime').timepicker({minuteStep: 30, showMeridian: false});
    jQuery('#toTime').timepicker({minuteStep: 30, showMeridian: false});
    jQuery('#datepicker').datepicker();
});
</script>
<?php
}elseif($title=='Prepaid'){
?>
<script src="<?= base_url('assets/js/bootstrap-timepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.mousewheel.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom-prepaid.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/snap.svg-min.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/modernizr.custom.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/classie.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/dialogFx.js'); ?>"></script>
<script>
jQuery(document).ready(function(){
        
    jQuery('#fechaLoad').datepicker();
    jQuery('#datepickerFrom').datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 2,
            onClose: function( selectedDate ) {
            $( "#datepickerTo" ).datepicker( "option", "minDate", selectedDate );
            }
        });
    jQuery('#datepickerTo').datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 2,
            onClose: function( selectedDate ) {
            $( "#dateFrom" ).datepicker( "option", "maxDate", selectedDate );
            }
        });
    
        (function() {

				var dlgtrigger = document.querySelector( '[data-dialog]' ),

					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
					// svg..
					morphEl = somedialog.querySelector( '.morph-shape' ),
					s = Snap( morphEl.querySelector( 'svg' ) ),
					path = s.select( 'path' ),
					steps = { 
						open : morphEl.getAttribute( 'data-morph-open' ),
						close : morphEl.getAttribute( 'data-morph-close' )
					},
					dlg = new DialogFx( somedialog, {
						onOpenDialog : function( instance ) {
							// animate path
							setTimeout(function() {
								path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
							}, 250 );
						},
						onCloseDialog : function( instance ) {
							// animate path
							path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
						}
					} );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

			})();
});
</script>
<?php
}elseif($title=='Reports'){
?>
<script src="<?= base_url('assets/js/bootstrap-timepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.mousewheel.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom-reports.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/snap.svg-min.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/modernizr.custom.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/classie.js'); ?>"></script>
<script src="<?= base_url('assets/dialog/dialogFx.js'); ?>"></script>
<script>
jQuery(document).ready(function(){
        
    jQuery('#fechaLoad').datepicker();
    jQuery('#datepickerFrom').datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 2,
            onClose: function( selectedDate ) {
            $( "#datepickerTo" ).datepicker( "option", "minDate", selectedDate );
            }
        });
    jQuery('#datepickerTo').datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 2,
            onClose: function( selectedDate ) {
            $( "#dateFrom" ).datepicker( "option", "maxDate", selectedDate );
            }
        });
    
//        (function() {
//
//            var dlgtrigger = document.querySelector( '[data-dialog]' ),
//
//                    somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
//                    // svg..
//                    morphEl = somedialog.querySelector( '.morph-shape' ),
//                    s = Snap( morphEl.querySelector( 'svg' ) ),
//                    path = s.select( 'path' ),
//                    steps = { 
//                            open : morphEl.getAttribute( 'data-morph-open' ),
//                            close : morphEl.getAttribute( 'data-morph-close' )
//                    },
//                    dlg = new DialogFx( somedialog, {
//                            onOpenDialog : function( instance ) {
//                                    // animate path
//                                    setTimeout(function() {
//                                            path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
//                                    }, 250 );
//                            },
//                            onCloseDialog : function( instance ) {
//                                    // animate path
//                                    path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
//                            }
//                    } );
//
//            dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
//
//    })();
});
</script>
<?php
}
?>



<script src="<?= base_url('assets/js/custom.js'); ?>"></script>

</body>
</html>
