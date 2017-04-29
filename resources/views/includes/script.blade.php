<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
{{ Html::script('js/jquery.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}

<!-- DataTable -->
{{ Html::script('resources/jquery.dataTables.js') }}
{{ Html::script('dataTables/dataTables.responsive.min.js') }}
{{ Html::script('resources/syntax/shCore.js') }}

{{ Html::script('js/waves.js') }}
{{ Html::script('js/wow.min.js') }}
{{ Html::script('js/jquery.nicescroll.js') }}
{{ Html::script('js/jquery.scrollTo.min.js') }}
{{ Html::script('assets/chat/moment-2.2.1.js') }}
{{ Html::script('assets/jquery-sparkline/jquery.sparkline.min.js') }}
{{ Html::script('assets/jquery-detectmobile/detect.js') }}
{{ Html::script('assets/fastclick/fastclick.js') }}
{{ Html::script('assets/jquery-slimscroll/jquery.slimscroll.js') }}
{{ Html::script('assets/jquery-blockui/jquery.blockUI.js') }}

<!-- sweet alerts -->
{{ Html::script('assets/sweet-alert/sweet-alert.min.js') }}
{{ Html::script('assets/sweet-alert/sweet-alert.init.js') }}

<!-- flot Chart -->
{{-- {{ Html::script('assets/flot-chart/jquery.flot.js') }}
{{ Html::script('assets/flot-chart/jquery.flot.time.js') }}
{{ Html::script('assets/flot-chart/jquery.flot.tooltip.min.js') }}
{{ Html::script('assets/flot-chart/jquery.flot.resize.js') }}
{{ Html::script('assets/flot-chart/jquery.flot.pie.js') }}
{{ Html::script('assets/flot-chart/jquery.flot.selection.js') }}
{{ Html::script('assets/flot-chart/jquery.flot.stack.js') }}
{{ Html::script('assets/flot-chart/jquery.flot.crosshair.js') }} --}}

<!-- Counter-up -->
{{ Html::script('assets/counterup/waypoints.min.js') }}
{{ Html::script('assets/counterup/jquery.counterup.min.js') }}

<!-- CUSTOM JS -->
{{ Html::script('js/jquery.app.js') }}

<!-- Dashboard -->
{{-- {{ Html::script('js/jquery.dashboard.js') }} --}}

<!-- Chat -->
{{ Html::script('js/jquery.chat.js') }}

<!-- Todo -->
{{ Html::script('js/jquery.todo.js') }}

<!-- tinymce -->
{{ Html::script('tinymce/tinymce.min.js') }}

<script type="text/javascript">
    /* ==============================================
    Counter Up
    =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
    });
</script>
