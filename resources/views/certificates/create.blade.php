<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificates | Create</title>
</head>

<body>
    <a href="javascript:history.back()">Back</a>
    <br><br>

    <h2>ADD NEW CERTIFICATE</h2>

    <form action="{{ route('certificates.store') }}" method="POST">
        @csrf
        <input type="hidden" name="student_id" value="{{ $student->id }}">

        <label for="nama_lengkap">Nama Lengkap :</label>
        <input type="text" value="{{ $student->nama_lengkap }}" disabled><br>

        <label for="sekolah">Sekolah :</label>
        <input type="text" value="{{ $student->sekolah }}" disabled><br>
        
        <label for="jurusan">Jurusan :</label>
        <input type="text" value="{{ $student->jurusan }}" disabled><br><br>
        
        <label for="ketepatan_waktu">ketepatan_waktu :</label>
        <input type="number" name="ketepatan_waktu" id="ketepatan_waktu"><br>

        <label for="tanggung_jawab">tanggung_jawab :</label>
        <input type="number" name="tanggung_jawab" id="tanggung_jawab"><br>

        <label for="kehadiran">kehadiran :</label>
        <input type="number" name="kehadiran" id="kehadiran"><br>

        <label for="keterampilan_kerja">keterampilan_kerja :</label>
        <input type="number" name="keterampilan_kerja" id="keterampilan_kerja"><br>

        <label for="kualitas_hasil_kerja">kualitas_hasil_kerja :</label>
        <input type="number" name="kualitas_hasil_kerja" id="kualitas_hasil_kerja"><br>

        <label for="komunikasi">komunikasi :</label>
        <input type="number" name="komunikasi" id="komunikasi"><br>

        <label for="kerja_sama">kerja_sama :</label>
        <input type="number" name="kerja_sama" id="kerja_sama"><br>

        <label for="percaya_diri">percaya_diri :</label>
        <input type="number" name="percaya_diri" id="percaya_diri"><br>

        <label for="penampilan">penampilan :</label>
        <input type="number" name="penampilan" id="penampilan"><br>

        <label for="predikat">predikat :</label>
        <select name="predikat" id="predikat">
            <option value="Sangat Baik">Sangat Baik</option>
            <option value="Baik">Baik</option>
            <option value="Buruk">Buruk</option>
            <option value="Sangat Buruk">Sangat Buruk</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
