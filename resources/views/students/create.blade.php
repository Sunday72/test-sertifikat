<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students | Create</title>
</head>

<body>
    <a href="javascript:history.back()">Back</a>
    <br><br>

    <h2>ADD NEW STUDENT</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="nama_lengkap">Nama Lengkap :</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap"><br>

        <label for="sekolah">Sekolah :</label>
        <input type="text" name="sekolah" id="sekolah">
        <span>* contoh: SMK Negeri 12 Jakarta</span><br>
        
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan">
        <span>* contoh: Rekayasa Perangkat Lunak</span><br>
        
        <label for="tgl_selesai">tgl_selesai :</label>
        <input type="date" name="tgl_selesai" id="tgl_selesai"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
