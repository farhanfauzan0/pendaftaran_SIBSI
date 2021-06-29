<link href="Bocor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/tmpl_admin/vendors/datepicker/css/bootstrap-datepicker.min.css" />
<link type="text/css" rel="stylesheet" href="/tmpl_admin/vendors/sweetalert/css/sweetalert2.min.css" />
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    body {
        background: #456;
        font-family: "Open Sans", sans-serif;
    }

    .login {
        width: 500px;
        margin: 16px auto;
        font-size: 16px;
    }

    /* Reset top and bottom margins from certain elements */
    .login-header,
    .login p {
        margin-top: 0;
        margin-bottom: 0;
    }

    /* The triangle form is achieved by a CSS hack */
    .login-triangle {
        width: 0;
        margin-right: auto;
        margin-left: auto;
        border: 12px solid transparent;
        border-bottom-color: #28d;
    }

    .login-header {
        background: #28d;
        padding: 20px;
        font-size: 1.4em;
        font-weight: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
    }

    .login-container {
        background: #ebebeb;
        padding: 12px;
    }

    /* Every row inside .login-container is defined with p tags */
    .login p {
        padding: 12px;
    }

    .login input {
        box-sizing: border-box;
        display: block;
        width: 100%;
        border-width: 1px;
        border-style: solid;
        padding: 16px;
        outline: 0;
        font-family: inherit;
        font-size: 0.95em;
    }

    .login input[type="email"],
    .login input[type="password"] {
        background: #fff;
        border-color: #bbb;
        color: #555;
    }

    /* Text fields' focus effect */
    .login input[type="email"]:focus,
    .login input[type="password"]:focus {
        border-color: #888;
    }

    .login input[type="submit"] {
        background: #28d;
        border-color: transparent;
        color: #fff;
        cursor: pointer;
    }

    .login input[type="submit"]:hover {
        background: #17c;
    }

    /* Buttons' focus effect */
    .login input[type="submit"]:focus {
        border-color: #05a;
    }

</style>
@if (session('status'))
    <h2 class="login-header">{{ session('jdl') }} {{ session('mssg') }} <a style="color: rgb(60, 214, 60)"
            href="{{ route('login.index') }}">
            Login </a></h2>
@endif
<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Pendaftaran Siswa</h2>

    <form class="login-container" action="{{ route('pendaftaran.post') }}" method="post"
        enctype='multipart/form-data'>
        @csrf
        <div class="row">
            <div class="col-12">
                <p><input type="text" name="nama" placeholder="Nama" required></p>
                <p><input type="text" name="tmp_lahir" placeholder="Tempat Lahir" required></p>
                <p><input type="text" readonly class="datepicker" name="tgl_lahir" placeholder="Tanggal Lahir" required>
                </p>
                <p><input type="text" name="alamat" placeholder="Alamat" required></p>
            </div>
            <div class="col-6">
                <p><input type="text" name="nama_ibu" placeholder="Nama Ibu" required></p>
                <p><input type="text" name="tmp_lahir_ibu" placeholder="Tempat Lahir Ibu" required></p>
                <p><input type="text" readonly class="datepicker" name="tgl_lahir_ibu" placeholder="Tanggal Lahir Ibu"
                        required>
                </p>
                <p><input type="text" name="alamat_ibu" placeholder="Alamat Ibu" required></p>
            </div>
            <div class="col-6">
                <p><input type="text" name="nama_ayah" placeholder="Nama Ayah" required></p>
                <p><input type="text" name="tmp_lahir_ayah" placeholder="Tempat Lahir Ayah" required></p>
                <p><input type="text" readonly class="datepicker" name="tgl_lahir_ayah" placeholder="Tanggal Lahir Ayah"
                        required></p>
                <p><input type="text" name="alamat_ayah" placeholder="Alamat Ayah" required></p>
            </div>
        </div>
        <div class="form-group">
            <p style="text-align: center"><label style="margin-bottom: -17px">Kartu Keluarga</label></p>
            <p><input type="file" name="kk" placeholder="KK" required></p>
        </div>
        <div class="form-group">
            <p style="text-align: center"><label style="margin-bottom: -17px">Ijazah</label></p>
            <p><input type="file" name="ijazah" placeholder="Ijazah" required></p>
        </div>
        <div class="form-group">
            <p style="text-align: center"><label style="margin-bottom: -17px">Nilai Rapot Akhir</label></p>
            <p><input type="file" name="nilai_rapot" placeholder="Nilai Raport" required></p>
        </div>
        <p><input type="submit" value="Daftar"></p>
    </form>
</div>
<script type="text/javascript" src="{{ asset('/tmpl_admin/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::To('/') }}/tmpl_admin/vendors/datepicker/js/bootstrap-datepicker.min.js">
</script>
<script type="text/javascript" src="/tmpl_admin/vendors/sweetalert/js/sweetalert2.min.js"></script>
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        orientation: "top"
    });

</script>

@if (session('success'))
    <script>
        swal({
            title: 'Selamat!',
            text: "Data berhasil disimpan",
            type: 'success'
        }).then(function() {
            window.location.reload();
        });

    </script>
@endif
