<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url ('assets')?>/admin/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url ('assets')?>/admin/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url ('assets')?>/admin/dashboard.css" rel="stylesheet">

    <!-- datatables css -->
    <link href="<?php echo base_url ('assets/datatables/datatables.min.css') ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url ('assets')?>/admin/ie-emulation-modes-warning.js.download"></script>


<script src="<?php echo base_url('assets/jquery/')?>Chart.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>dasn
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php $this->load->view('template/menu_atas'); ?>


    <div class="container-fluid">


      <div class="row">

<?php $this->load->view('template/menu_samping'); ?>
          
<?php $content ?>

          </div>

          </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Dashboard Template for Bootstrap_files/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Dashboard Template for Bootstrap_files/holder.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>
  

    <!-- jquery -->
    <script type="text/javascript" href="<?php echo base_url () ?>assets/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" href="<?php echo base_url () ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- datatables -->
    <script type="text/javascript" href="<?php echo base_url () ?>assets/datatables/datatables.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" href="<?php echo base_url () ?>custom/js/home.js"></script>


    <!-- <script src="dashboard/js/jquery-1.11.1.min.js"></script> -->
<script src ="<?php echo base_url() ?>dashboard/datatables/jquery.min.js"></script>
<script src ="<?php echo base_url() ?>dashboard/datatables/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#nama').DataTable();
    $('#tableKota').DataTable();
    $('#tableNama').DataTable();
    $('#tableJabatan').DataTable();
    $('#tableKelamin').DataTable();
});
</script>
    <script src="<?php echo base_url() ?>dashboard/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>dashboard/js/chart.min.js"></script>
    <script src="<?php echo base_url() ?>dashboard/js/chart-data.js"></script>
    <script src="<?php echo base_url() ?>dashboard/js/easypiechart.js"></script>
    <script src="<?php echo base_url() ?>dashboard/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url() ?>dashboard/js/bootstrap-datepicker.js"></script>
    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
    <script src="<?php echo base_url() ?>custom/js/home.js"></script>


</body></html>