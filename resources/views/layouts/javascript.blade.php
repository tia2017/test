
<script>window.jQuery || document.write('<script src="{{ asset('assets/src/js/vendor/jquery-3.3.1.min.js') }}"><\/script>')</script>
<script src="{{ asset('assets/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/plugins/form-fields-repeater/repeater.js') }}"></script>
<script src="{{ asset('assets/plugins/mohithg-switchery/dist/switchery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/screenfull/dist/screenfull.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/d3/dist/d3.min.js') }}"></script>
<script src="{{ asset('assets/plugins/c3/c3.min.js') }}"></script>
<script src="{{ asset('assets/js/tables.js') }}"></script>
<script src="{{ asset('assets/js/widgets.js') }}"></script>
<script src="{{ asset('assets/js/charts.js') }}"></script>
<script src="{{ asset('assets/dist/js/theme.min.js') }}"></script>
<script src="{{ asset('assets/js/form-components.js') }}"></script>
<script src="{{ asset('assets/js/form-advanced.js') }}"></script>
<script src="{{ asset('assets/js/form-picker.js') }}"></script>
<script src="{{ asset('assets/js/jquery-minicolors/jquery.minicolors.min.js') }}"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<!-- BEGIN::Repeater -->
<script>
    $("#repeater").createRepeater({
        showFirstItemToDefault: true,
    });
</script>
<!-- END::Repeater -->

<!--BEGIN pop up files -->
<script>
    $(document).ready(function(){
        $('.popupimage').click(function(event){
            event.preventDefault();
            $('.modal a').attr('href', $(this).attr('href'))
            $('.modal').modal('show');
        });
    });
    </script>
<!-- END pop up -->