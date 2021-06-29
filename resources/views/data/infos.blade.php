@extends('master_adm')
@section('css')
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/datetimepicker/css/DateTimePicker.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/j_timepicker/css/jquery.timepicker.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/clockpicker/css/jquery-clockpicker.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/datatables/css/scroller.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/datatables/css/colReorder.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/datatables/css/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/css/plugincss/responsive.dataTables.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/wow/css/animate.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/sweetalert/css/sweetalert2.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/css/pages/sweet_alert.css" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="tmpl_adm/css/pages/tables.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/css/pages/portlet.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/css/pages/advanced_components.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/daterangepicker/css/daterangepicker.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/datepicker/css/bootstrap-datepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/datetimepicker/css/DateTimePicker.min.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/clockpicker/css/jquery-clockpicker.css" />
    <link type="text/css" rel="stylesheet" href="tmpl_adm/vendors/j_timepicker/css/jquery.timepicker.css" />
    <!--End of page level styles-->
@endsection
@section('active-dt')
    active
@endsection
@section('judul')
    Data Booking
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
                    <div class="card-header bg-white">
                        <i class="fa fa-database"></i>Data Booking
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
                                        <th>Nama Acara</th>
                                        <th>No Rek</th>
                                        <th>Nama Rek</th>
                                        <th>Foto Bukti</th>
                                        <th>Absen</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($data != null)
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ !empty($data->na_event) ? $data->na_event : $data->na_workshop }}
                                                </td>
                                                <td>{{ $data->nomor_rek }}</td>
                                                <td>{{ $data->nama_rek }}</td>
                                                <td><img src="{{ pkg_upload($data->folder) }}"
                                                        style="max-width: 150px; max-height: 150px" sizes="50px"></td>
                                                <td>{{ $data->absen == 0 ? 'Belum' : 'Sudah' }}</td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="modal fade slideExpandUp" id="m-edit-data" role="dialog"
                                aria-labelledby="Modallabel3dsign">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content ">
                                        <div class="modal-header bg-info ">
                                            <h4 class="modal-title text-white" id="Modallabel3dsign">Edit Data Golongan</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form action="/golongan/edit" method="post" class="login_validator">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label for="email" class="col-form-label"> Nama Golongan</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon input_email"><i
                                                                        class="fa fa-bars text-primary"></i></span>
                                                                <input type="text" class="id" name="id" hidden>
                                                                <input type="text" class="form-control  form-control-md"
                                                                    id="e-nama" name="nama_golongan"
                                                                    placeholder="Nama Golongan" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="col-form-label"> Harga</label>
                                                            <div class="input-group">
                                                                <span class="input-group-addon input_email"><i
                                                                        class="fa fa-money text-primary"></i></span>
                                                                <input type="text" class="form-control  form-control-md"
                                                                    id="e-harga" name="harga" placeholder="Harga" required>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-info" type="submit">Simpan</button>
                                                </form>
                                                <button class="btn btn-default" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection
@section('js_adm')

    <script type="text/javascript" src="tmpl_adm/vendors/wow/js/wow.min.js"></script>
    <script type="text/javascript" src="tmpl_adm/vendors/sweetalert/js/sweetalert2.min.js"></script>

    <script type="text/javascript" src="tmpl_adm/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="tmpl_adm/vendors/autosize/js/jquery.autosize.min.js"></script>
    <script type="text/javascript" src="tmpl_adm/vendors/jasny-bootstrap/js/inputmask.js"></script>
    <script type="text/javascript" src="tmpl_adm/vendors/datetimepicker/js/DateTimePicker.min.js"></script>
    <script type="text/javascript" src="tmpl_adm/vendors/j_timepicker/js/jquery.timepicker.min.js"></script>
    <script type="text/javascript" src="tmpl_adm/vendors/clockpicker/js/jquery-clockpicker.min.js"></script>
    <script type="text/javascript" src="tmpl_adm/vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
@endsection
