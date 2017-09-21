<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{!! asset('global/plugins/respond.min.js') !!}"></script>
<script src="{!! asset('global/plugins/excanvas.min.js') !!}"></script>
<!--[endif]-->
<script src="{!! asset('global/plugins/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/jquery-migrate.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/moment.min.js') !!}" type="text/javascript"></script>
<!-- Momentjs -->
<script src="{!! asset('global/plugins/jquery-migrate.min.js') !!}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{!! asset('global/plugins/jquery-ui/jquery-ui.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/jquery.blockui.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/jquery.cokie.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/uniform/jquery.uniform.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/bootbox/bootbox.min.js') !!}" type="text/javascript"></script>

<script src="{!! asset('global/plugins/jquery-fancybox/jquery.fancybox-1.3.4.pack.js') !!}" type="text/javascript"></script>

<script src="{!! asset('global/plugins/select2/select2.min.js') !!}" type="text/javascript"></script>

<!-- Data table -->
<script src="{!! asset('global/plugins/datatables/media/js/jquery.dataTables.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') !!}" type="text/javascript"></script>
<!-- Data table -->

<script src="{!! asset('global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/jquery-validation/js/jquery.validate.js') !!}" type="text/javascript"></script>
<script src="{!! asset('global/plugins/jquery-validation/js/additional-methods.js') !!}" type="text/javascript"></script>

<script src="{!! asset('admin_assets/scripts/validate-custom-method.js') !!}" type="text/javascript"></script>
<script src="{!! asset('admin_assets/scripts/main.js') !!}" type="text/javascript"></script>

<!-- Tiny mce and file manager -->
<script src="{{asset('tinymce/jquery.tinymce.min.js')}}"></script>
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
<!-- END CORE PLUGINS -->
<script src="{!! asset('global/scripts/metronic.js') !!}" type="text/javascript"></script>
<script src="{!! asset('admin_assets/scripts/layout.js') !!}" type="text/javascript"></script>
<script src="{!! asset('admin_assets/scripts/quick-sidebar.js') !!}" type="text/javascript"></script>
<script src="{!! asset('admin_assets/scripts/demo.js') !!}" type="text/javascript"></script>
<script>
    tinymce.init({
        selector: "textarea.editor",theme: "modern",width: '100%',height: 300,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
        ],
        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
        image_advtab: true ,

        external_filemanager_path:"{{url('tinymce/filemanager')}}/",
        filemanager_title:"Responsive Filemanager" ,
        external_plugins: { "filemanager" : "{{url('tinymce')}}/filemanager/plugin.min.js"}
    });
</script>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features

    });
</script>
@yield('js')
<!-- END JAVASCRIPTS -->