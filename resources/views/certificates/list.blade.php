<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <a href="{{ route('students.index') }}">Students</a>
    <a href="{{ route('certificates.index') }}">Certificate</a>
    <hr>
    <h2>Students</h2>
    <hr>

    <table border="1" cellspacing=0 cellpadding=5>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sekolah</th>
                <th>Jurusan</th>
                <th>tgl selesai</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->nama_lengkap }}</td>
                    <td>{{ $student->sekolah }}</td>
                    <td>{{ $student->jurusan }}</td>
                    <td>{{ $student->tgl_selesai }}</td>
                    <td>
                        <a href="{{ route('certificates.generate', $student->id) }}">Create Certificate</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>