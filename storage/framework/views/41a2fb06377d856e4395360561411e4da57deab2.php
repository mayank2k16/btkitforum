<html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>FarCon</title>

    <!-- Vendor CSS -->
    <link href="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">

    <link href="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">

    <link href="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">
 <link href="<?php echo e(URL::to('assets')); ?>/vendors/bootgrid/jquery.bootgrid.min.css" rel="stylesheet">
   <link href="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/chosen/chosen.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="<?php echo e(URL::to('assets')); ?>/css/app.min.1.css" rel="stylesheet">

    <link href="<?php echo e(URL::to('assets')); ?>/css/app.min.2.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <!--Start Header-->
    <header id="header" class="clearfix" style="background-color:#4CAF50">
        <ul class="header-inner">
            <?php if(!Auth::guest()): ?>
            <li id="menu-trigger" data-trigger="#sidebar">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>
            <?php endif; ?>

            <li class="logo hidden-xs">
                <a href="<?php echo e(URL::to('/dashboard')); ?>">F0rum Admin Page</a>
            </li>


        <li class="pull-right">
            <ul class="top-menu">
                <?php if(Auth::guest()): ?>


                <li>
                    <a href="<?php echo e(url('/login')); ?>"><span class="tm-label">Login</span></a>
                </li>
                <?php else: ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="">
                            <span class="tm-label"><?php echo e(Auth::user()->name); ?><span class="caret"></span> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm pull-right">
                            <div class="listview">
                                <a class="lv-item" href="<?php echo e(url('/logout')); ?>" id="logout" > Logout</a>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </li>
            </ul>
        <!--<div class="pm-body clearfix">
                            <ul class="tab-nav tn-justified">
                                <li class="active waves-effect list"><a href="<?php echo e(url('/')); ?>">Registered Users</a></li>
                                <li class="waves-effect list"><a href="<?php echo e(url('orders')); ?>">Orders</a></li>
                                <li class="waves-effect list"><a href="<?php echo e(url('items')); ?>">Item list</a></li>
                                <li class="waves-effect list"><a href="<?php echo e(url('add_item')); ?>">Add Item</a></li>
                                <li class="waves-effect list"><a href="<?php echo e(url('feedbacks')); ?>">Feedbacks</a></li>
                            </ul>


                            </div>-->

    </header>
    <!-- End Header -->


    <!-- Start Sidebar-->
    <?php if(!Auth::guest()): ?>
    <section>
        <aside id="sidebar" class="sidebar c-overflow">

<!--Start sidebar links -->
            <ul class="main-menu">

                <li><a href="<?php echo e(url('/users')); ?>"><i class="zmdi zmdi-accounts-list"></i>Customer list</a></li>

                <li class="sub-menu">

                    <a href=""><i class="zmdi zmdi-format-list-bulleted zmdi-hc-fw"></i>Mechants</a>
                    <ul>
                        <li><a href="<?php echo e(url('requests')); ?>"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>Show Requests</a></li>
                        <li><a href="<?php echo e(url('merchants')); ?>"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>Show Merchants</a></li>

                    </ul>
                </li>

                <li class="sub-menu">

                    <a href=""><i class="zmdi zmdi-local-mall zmdi-hc-fw"></i>Orders</a>

                    <ul>
                        <li><a href="<?php echo e(url('orders')); ?>"><i class="zmdi zmdi-fullscreen zmdi-hc-fw"></i>See Orders</a></li>
                        <li><a href="<?php echo e(url('create/order')); ?>"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i> Create Order</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo e(url('feedbacks')); ?>"><i class="zmdi zmdi-comments zmdi-hc-fw"></i>Feedbacks</a></li>
                <li><a href="<?php echo e(url('quotations')); ?>"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i>Quotations</a></li>

                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-storage zmdi-hc-fw"></i>Inventory</a>
                    <ul>

                        <li><a href="<?php echo e(url('items')); ?>"><i class="zmdi zmdi-check zmdi-hc-fw"></i> See Items</a></li>
                        <li><a href="<?php echo e(url('item/add')); ?>"><i class="zmdi zmdi-plus-square zmdi-hc-fw"></i> Add Item</a></li>
                        <li><a href="<?php echo e(url('combo')); ?>"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> See Combos</a></li>
                        <li><a href="<?php echo e(url('combo/add')); ?>"><i class="zmdi zmdi-plus-circle-o zmdi-hc-fw"></i> Add Combo</a></li>
                         <li><a href="<?php echo e(url('bulkitem')); ?>"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>Show Bulk Item</a></li>
                        <li><a href="<?php echo e(url('bulkprices')); ?>"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-fw"></i>Add Bulk Item</a></li>
                       </ul>
                </li>
                <li><a href="<?php echo e(url('discounts')); ?>"><i class="zmdi zmdi-alert-polygon zmdi-hc-fw"></i>Discount</a></li>
                <li><a href="<?php echo e(url('offers')); ?>"><i class="zmdi zmdi-label zmdi-hc-fw"></i>Offers</a></li>
                <li class="sub-menu">
                    <a href=""><i class="zmdi zmdi-washing-machine zmdi-hc-fw"></i>Referral</a>
                    <ul>
                        <li><a href="<?php echo e(url('referral/offers')); ?>"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Offers</a></li>
                        <li><a href="<?php echo e(url('referral/options')); ?>"><i class="zmdi zmdi-layers zmdi-hc-fw"></i> Swap Options</a></li>
                    </ul>
                </li>

                <li><a href="<?php echo e(url('promo')); ?>"><i class="zmdi zmdi-pin-assistant zmdi-hc-fw"></i>Promo codes</a></li>

                                  <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">click</button></li>

<!-- Modal -->



            </ul>
            <!-- End sidebar links -->
        </aside>


        <input type="hidden" id="hidden" />


    </section>


    <?php endif; ?>
     <!-- End Sidebar -->

      <section>

<br>
<br>
<br>
<br>
             <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
         <h3>Amount Rs. </h3>
         <button type="button" class="btn btn-danger">Edit</button>

          <div id="update">

             <button type="button" class="btn btn-danger">cancel</button>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

            <?php echo $__env->yieldContent('content'); ?>

        </section>
    <!-- Start Page Loader -->
    <div class="page-loader">
        <div class="preloader cyan">
            <svg class="pl-circular" viewBox="25 25 50 50">
                <circle class="plc-path" cx="50" cy="50" r="20" />
            </svg>

            <p>Please wait...</p>
        </div>
    </div>

   <?php echo $__env->yieldContent('footer'); ?>
    <!-- Javascript Libraries -->
<script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="<?php echo e(URL::to('assets')); ?>/vendors/input-mask/input-mask.min.js"></script>
     <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/chosen/chosen.jquery.min.js"></script>

     <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/sparklines/jquery.sparkline.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/Waves/dist/waves.min.js"></script>
 <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/autosize/dist/autosize.min.js"></script>
     <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
       <script src="<?php echo e(URL::to('assets')); ?>/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
      <script src="<?php echo e(URL::to('assets')); ?>/vendors/fileinput/fileinput.min.js"></script>
    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

<script src="<?php echo e(URL::to('assets')); ?>/js/flot-charts/curved-line-chart.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/js/flot-charts/line-chart.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/js/charts.js"></script>

    <script src="<?php echo e(URL::to('assets')); ?>/js/functions.js"></script>
    <script src="<?php echo e(URL::to('assets')); ?>/js/demo.js"></script>
     <script src="<?php echo e(URL::to('assets')); ?>/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>


<script type="text/javascript">
    $('.list').click(function () {
        $('.list').removeClass('active');
        $(this).addClass('acive');
    });
/*

    $('#checkout').click(function(){
        swal({
            title:"Minimum Checkout Amount",
            type:"input",
            showCancelButton:true,
            closeOnConfirm:false,
            animation:"slide-form-top",
            text:"ferrfe",
            html:true,
        },
            function(inputvalue)
             {
               if(inputValue === false)
                   return false;
               else if(inputValue === ""){
                   swal.showInputError("You need to write something");
                   return false;
                   }
               else{

                   $.get(url,{'checkout':inputValue}, function(){
                       swal({ title: "Amount saved",
                               timer: 2000,
                               showConfirmButton:false

                            });
                   });
               }

        });
    });
*/
          $('#sa-title').click(function(){

            });

</script>
    <br><br><br><br><br><br>
<?php echo $__env->yieldContent('footer'); ?>
</body>

</html>
