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

    <link type="text/css" rel="stylesheet" href="summernote/summernote.css" />
@endsection
@section('active-dt')
    active
@endsection
@section('judul')
    Data Sekolah
@endsection
@section('logo-judul')
    fa-bars
@endsection
@section('content')
    <div class="inner bg-light lter bg-container">
        <div class="row">
            <div class="col-12 data_tables">
                <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                            </button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card-header bg-white">
                        <i class="fa fa-database"></i>Data Sekolah
                    </div>
                    <div class="card-block p-t-25">
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="m-t-25">
                                <div class="pull-sm-right">
                                    <div class="tools pull-sm-right"></div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
                                    <tr>
                                        <th>Nama Sekolah</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Foto</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($data != null)
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->nama_sekolah }}</td>
                                                <td>{{ $data->visi }}
                                                </td>
                                                <td>{{ $data->misi }}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ pkg_infos($data->foto) }}"
                                                        target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <div class="hidden-sm hidden-xs action-buttons"
                                                        style="text-align: center;">
                                                        <a data-id="{{ $data->id }}" class="green" id="edit-data">
                                                            <i style="color: green"
                                                                class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- END EXAMPLE1 TABLE PORTLET-->
                        <!-- BEGIN EXAMPLE4 TABLE PORTLET-->
                        <div class="card m-t-35" style="display: none;">
                            <div class="card-block p-t-10">
                                <div class=" m-t-25">
                                    <table class="table table-striped table-bordered table-hover " id="sample_6">
                                        <thead>
                                            <tr>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END EXAMPLE4 TABLE PORTLET-->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade slideExpandUp" id="m-edit-data" role="dialog" aria-labelledby="Modallabel3dsign">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header bg-info ">
                    <h4 class="modal-title text-white" id="Modallabel3dsign">Edit Data Sekolah
                    </h4>
                </div>
                <div class="modal-body body-edit">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
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

    <script type="text/javascript" src="summernote/summernote.js"></script>

    <script>
        $("#edit-data").click(function() {

            var id = $(this).data('id');
            $.ajax({
                type: 'GET',
                url: "infos/" + id + "/edit"
            }).then(function(data) {
                if (data) {

                    $('.body-edit').html(data);
                    $("#m-edit-data").modal('show');
                    if ($("#m-edit-data").hasClass('show')) {
                        console.log('ok');

                        $('.datepicker').datepicker({
                            format: 'yyyy-mm-dd',
                            todayHighlight: true,
                            autoclose: true,
                            orientation: "top"
                        });
                    }
                }
            });
        });

    </script>

@endsection
