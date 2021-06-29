<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            size: 7in 7.25in;
            /* margin: 27mm 16mm 27mm 16mm; */
        }

    </style>
</head>

<body>
    <p style="text-align: center">
        <label style="font-size: 20px; color: red">BUKTI PENDAFTARAN</label>
    </p>
    <table style="border-collapse: collapse; width: 100%" border="1">
        <tbody>
            <tr>
                <td style="width: 50%; font-weight: bold; text-align: center;" colspan="2">DATA DIRI SISWA</td>
            </tr>
            <tr>
                <td style="width: 50%">
                    <p><label style="font-size: 13px">Nama Siswa</label><br /><label
                            style="font-weight: bold">{{ $data->nama }}</label></p>
                    <p>
                        <label style="font-size: 13px">Tempat Lahir</label><br />
                        <label style="font-weight: bold">{{ $data->tempat_lahir }}</label>
                    </p>
                </td>
                <td style="width: 50%">
                    <p>
                        <label style="font-size: 13px">Tanggal Lahir</label><br />
                        <label style="font-weight: bold">{{ $data->tgl_lahir }}</label>
                    </p>
                    <p>
                        <label style="font-size: 13px">Alamat</label><br />
                        <label style="font-weight: bold">{{ $data->alamat }}</label>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 50%; font-weight: bold; text-align: center;" colspan="2">DATA IBU</td>
            </tr>
            <tr>
                <td style="width: 50%">
                    <p><label style="font-size: 13px">Nama Ibu</label><br /><label
                            style="font-weight: bold">{{ $data->nama_ibu }}</label></p>
                    <p>
                        <label>Tempat Lahir</label><br />
                        <label style="font-weight: bold">{{ $data->tempat_lahir_ibu }}</label>
                    </p>
                </td>
                <td style="width: 50%">
                    <p>
                        <label style="font-size: 13px">Tanggal Lahir</label><br />
                        <label style="font-weight: bold">{{ $data->tgl_lahir_ibu }}</label>
                    </p>
                    <p>
                        <label style="font-size: 13px">Alamat</label><br />
                        <label style="font-weight: bold">{{ $data->alamat_ibu }}</label>
                    </p>
                </td>
            </tr>
            <tr>
                <td style="width: 50%; font-weight: bold; text-align: center;" colspan="2">DATA AYAH</td>
            </tr>
            <tr>
                <td style="width: 50%">
                    <p><label style="font-size: 13px">Nama Ayah</label><br /><label
                            style="font-weight: bold">{{ $data->nama_ayah }}</label></p>
                    <p>
                        <label style="font-size: 13px">Tempat Lahir</label><br />
                        <label style="font-weight: bold">{{ $data->tempat_lahir }}</label>
                    </p>
                </td>
                <td style="width: 50%">
                    <p>
                        <label style="font-size: 13px">Tanggal Lahir</label><br />
                        <label style="font-weight: bold">{{ $data->tgl_lahir_ayah }}</label>
                    </p>
                    <p>
                        <label style="font-size: 13px">Alamat</label><br />
                        <label style="font-weight: bold">{{ $data->alamat_ayah }}</label>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
