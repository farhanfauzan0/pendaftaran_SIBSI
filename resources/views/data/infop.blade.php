@extends('master')
@section('css')
    <!--plugin styles-->
    {{-- <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/select2/css/select2.min.css" /> --}}
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/datetimepicker/css/DateTimePicker.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/j_timepicker/css/jquery.timepicker.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/clockpicker/css/jquery-clockpicker.css" />
    {{-- <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/datatables/css/scroller.bootstrap.min.css" />
   <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/datatables/css/colReorder.bootstrap.min.css" /> --}}
    {{-- <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/datatables/css/dataTables.bootstrap.min.css" /> --}}
    <link type="text/css" rel="stylesheet" href="tmpl_admin/css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/css/plugincss/responsive.dataTables.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/wow/css/animate.css" />
    {{-- <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css" /> --}}
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/sweetalert/css/sweetalert2.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/css/pages/sweet_alert.css" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    {{-- <link type="text/css" rel="stylesheet" href="tmpl_admin/css/pages/tables.css" /> --}}
    <link type="text/css" rel="stylesheet" href="tmpl_admin/css/pages/portlet.css" />
    {{-- <link type="text/css" rel="stylesheet" href="tmpl_admin/css/pages/advanced_components.css" /> --}}
    {{-- <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/daterangepicker/css/daterangepicker.css" /> --}}
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/datepicker/css/bootstrap-datepicker.min.css" />
    <link type="text/css" rel="stylesheet"
        href="tmpl_admin/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/datetimepicker/css/DateTimePicker.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/clockpicker/css/jquery-clockpicker.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_admin/vendors/j_timepicker/css/jquery.timepicker.css" />
    <link type="text/css" rel="stylesheet" href="summernote/summernote-bs4.css" />
@endsection
@section('active-dt')
    active
@endsection
@section('judul')
    Informasi Pendaftaran
@endsection
@section('logo-judul')
    fa-bars
@endsection
@section('content')
    <div class="inner bg-light lter bg-container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('infop.update', ['infop' => $data->id]) }}">
                    @method('PUT')
                    @csrf
                    <p style="text-align: center; font-weight: bold; font-size: 25px">PROSEDUR PENDAFTARAN</p>
                    <textarea class="summernote" name="prosedur">{{ $data->prosedur }}</textarea>
                    <br>
                    <p style="text-align: center; font-weight: bold; font-size: 25px">SYARAT PENDAFTARAN</p>
                    <textarea class="summernote" name="syarat">{{ $data->syarat }}</textarea>
                    <br>
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

    <script type="text/javascript" src="tmpl_admin/vendors/wow/js/wow.min.js"></script>
    <script type="text/javascript" src="tmpl_admin/vendors/sweetalert/js/sweetalert2.min.js"></script>

    <script type="text/javascript" src="tmpl_admin/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="tmpl_admin/vendors/autosize/js/jquery.autosize.min.js"></script>
    <script type="text/javascript" src="tmpl_admin/vendors/jasny-bootstrap/js/inputmask.js"></script>
    <script type="text/javascript" src="tmpl_admin/vendors/datetimepicker/js/DateTimePicker.min.js"></script>
    <script type="text/javascript" src="tmpl_admin/vendors/j_timepicker/js/jquery.timepicker.min.js"></script>
    <script type="text/javascript" src="tmpl_admin/vendors/clockpicker/js/jquery-clockpicker.min.js"></script>
    <script type="text/javascript" src="tmpl_admin/vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="summernote/summernote-bs4.js"></script>

    <script>
        // $(".textarea").wysihtml5();
        $(document).ready(function() {
            $('.summernote').summernote();
        });

    </script>

@endsection
