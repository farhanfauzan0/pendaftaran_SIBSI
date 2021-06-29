<div class="row">
    <div class="col-md-12">
        <form action="{{ route('data.update', ['data' => $data->id]) }}" method="post" class="login_validator"
            enctype='multipart/form-data'>
            {{ csrf_field() }}
            @method('PATCH')
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Nama</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" class="id" name="id" hidden>
                            <input type="text" value="{{ $data->nama }}" class="form-control  form-control-md"
                                id="e-nama" name="nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Tempat Lahir</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->tempat_lahir }}" class="form-control  form-control-md"
                                id="e-nama" name="tempat_lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Tanggal Lahir</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->tgl_lahir }}"
                                class="form-control datepicker form-control-md" id="e-nama" name="tgl_lahir" required
                                readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Alamat</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->alamat }}" class="form-control  form-control-md"
                                id="e-nama" name="alamat" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Nama Ibu</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" class="id" name="id" hidden>
                            <input type="text" value="{{ $data->nama_ibu }}" class="form-control  form-control-md"
                                id="e-nama" name="nama_ibu" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Tempat Lahir Ibu</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->tempat_lahir_ibu }}"
                                class="form-control  form-control-md" id="e-nama" name="tempat_lahir_ibu" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Tanggal Lahir Ibu</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->tgl_lahir_ibu }}"
                                class="form-control datepicker form-control-md" id="e-nama" name="tgl_lahir_ibu"
                                required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Alamat Ibu</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->alamat_ibu }}" class="form-control  form-control-md"
                                id="e-nama" name="alamat_ibu" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Nama Ayah</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" class="id" name="id" hidden>
                            <input type="text" value="{{ $data->nama_ayah }}" class="form-control  form-control-md"
                                id="e-nama" name="nama_ayah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Tempat Lahir Ayah</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->tempat_lahir_ayah }}"
                                class="form-control  form-control-md" id="e-nama" name="tempat_lahir_ayah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Tanggal Lahir Ayah</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->tgl_lahir_ayah }}"
                                class="form-control datepicker form-control-md" id="e-nama" name="tgl_lahir_ayah"
                                required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Alamat Ayah</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="text" value="{{ $data->alamat_ayah }}" class="form-control  form-control-md"
                                id="e-nama" name="alamat_ayah" required>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="email" class="col-form-label"> KK (kosongkan jika tidak akan dirubah)</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="file" class="form-control  form-control-md" id="e-nama" name="kk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Ijazah (kosongkan jika tidak akan dirubah)</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="file" class="form-control  form-control-md" id="e-nama" name="ijazah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label"> Nilai Rapot Terakhir (kosongkan jika tidak akan
                            dirubah)</label>
                        <div class="input-group">
                            <span class="input-group-addon input_email"><i class="fa fa-bars text-primary"></i></span>
                            <input type="file" class="form-control  form-control-md" id="e-nama" name="rapot_terakhir">
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
