<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificates</title>
</head>

<body>
    <a href="{{ route('students.index') }}">Students</a>
    <a href="{{ route('certificates.index') }}">Certificate</a>
    <hr>
    <h2>Certificates</h2>
    <hr>

    @if (session()->has('addCertificateSuccess'))
        <span style="color: green">{{ session('addCertificateSuccess') }}</span>
        <br><br>
    @endif

    <a href="list">Add New</a>
    <br><br>

    <table border="1" cellspacing=0 cellpadding=5>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sekolah</th>
                <th>Jurusan</th>
                <th>Predikat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!$certificates->isEmpty())
                @foreach ($certificates as $certificate)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $certificate->student->nama_lengkap }}</td>
                        <td>{{ $certificate->student->sekolah }}</td>
                        <td>{{ $certificate->student->jurusan }}</td>
                        <td>{{ $certificate->predikat }}</td>
                        <td>
                            <a href="{{ route('certificates.show', $certificate->id) }}">Open</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">No Certif Found</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>

</html>
