<div class="row">
    <div class="col-md-12">
        <form action="{{ route('infos.update', ['info' => $data->id]) }}" method="post" class="login_validator"
            enctype='multipart/form-data'>
            {{ csrf_field() }}
            @method('PATCH')
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Nama Sekolah</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" class="id" name="id" hidden>
                            <input type="text" value="{{ $data->nama_sekolah }}" class="form-control  form-control-md"
                                id="e-nama" name="nama_sekolah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Visi</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->visi }}" class="form-control  form-control-md"
                                id="e-nama" name="visi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Misi</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->misi }}" class="form-control form-control-md"
                                id="e-nama" name="misi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Foto (kosongkan jika tidak akan dirubah)</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="file" class="form-control  form-control-md" id="e-nama" name="foto">
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-info" type="submit">Simpan</button>
        </form>
    </div>
</div>
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        orientation: "top"
    });

</script>
