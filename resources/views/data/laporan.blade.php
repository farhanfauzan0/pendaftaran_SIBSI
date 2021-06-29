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
    <!--End of page level styles-->
@endsection
@section('active-dt')
    active
@endsection
@section('judul')
    Laporan Pendaftar
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
                        <i class="fa fa-database"></i>Data Pendaftar
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
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Nama Ibu</th>
                                        <th>Tempat Lahir Ibu</th>
                                        <th>Tanggal Lahir Ibu</th>
                                        <th>Alamat Ibu</th>
                                        <th>Nama Ayah</th>
                                        <th>Tempat Lahir Ayah</th>
                                        <th>Tanggal Lahir Ayah</th>
                                        <th>Alamat Ayah</th>
                                        <th>KK</th>
                                        <th>Ijazah</th>
                                        <th>Rapot Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($data != null)
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->nama }}</td>
                                                <td>{{ $data->tempat_lahir }}</td>
                                                <td>{{ $data->tgl_lahir }}</td>
                                                <td>{{ $data->alamat }}</td>
                                                <td>{{ $data->nama_ibu }}</td>
                                                <td>{{ $data->tempat_lahir_ibu }}</td>
                                                <td>{{ $data->tgl_lahir_ibu }}</td>
                                                <td>{{ $data->alamat_ibu }}</td>
                                                <td>{{ $data->nama_ayah }}</td>
                                                <td>{{ $data->tempat_lahir_ayah }}</td>
                                                <td>{{ $data->tgl_lahir_ayah }}</td>
                                                <td>{{ $data->alamat_ayah }}</td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ pkg_upload($data->no_telp, $data->kk) }}"
                                                        target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ pkg_upload($data->no_telp, $data->ijazah) }}"
                                                        target="_blank">View</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary"
                                                        href="{{ pkg_upload($data->no_telp, $data->nilai_rapot_akhir) }}"
                                                        target="_blank">View</a>
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
                    <h4 class="modal-title text-white" id="Modallabel3dsign">Edit Data Pendaftar
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
@endsection
