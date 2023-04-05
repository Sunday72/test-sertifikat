@php
    function huruf($key, $id)
    {
        $data = App\Models\Certificate::with('student')
            ->where('id', $id)
            ->first();
        
        $huruf = '';

        if ($data->$key >= 80) {
            $huruf = 'A';
            return $huruf;
        } elseif ($data->$key >= 68 and $data->$key < 80) {
            $huruf = 'B';
            return $huruf;
        } elseif ($data->$key < 68) {
            $huruf = 'C';
            return $huruf;
        }
    }
@endphp

<!doctype html>
<html lang="en">

<head>
    <title>Sertifikat</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            background-image: url('img/bg-sertif.png');
            background-size: cover;
        }

        #nama {
            font-family: serif;
        }

        /* table */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>

    {{-- LOGO --}}
    <div class="text-center mt-5">
        <img src="img/logo-unj.png" alt="Logo UNJ" width="100">
        <img src="img/logo-pustikom.png" alt="Logo PUSTIKOM" width="100">
    </div>

    {{-- TITLE --}}
    <span class="text-center fw-bold d-block" style="font-size: 70px; color: #4F4F4F;">CERTIFICATE</span>

    {{-- NAMA --}}
    <div class="text-center">
        <p class="mt-3" style="color: #1E1E1E;">diberikan kepada :</p>
        <span id="nama" style="font-size: 50px;">{{ $data->student->nama_lengkap }}</span>
    </div>
    <div style="width: 700px; border-top: 2px solid #1E1E1E; margin: 16px auto;">
        <div class="mt-2">
            <span>{{ $data->student->sekolah }}</span>
            <span class="float-end">{{ $data->student->jurusan }}</span>
        </div>
    </div>

    {{-- PREDIKAT --}}
    <div class="text-center mt-5">
        <p>Telah melaksanakan Peraktek Kerja Lapangan di UPT TIK Universitas Negeri Jakarta dengan predikat <br>
            <b class="mt-2 d-block">{{ $data->predikat }}</b>
        </p>
    </div>


    {{-- TTD --}}
    <div class="text-center mt-5">
        <span class="d-block">Jakarta, {{ $created_at }}</span>
        <span class="d-block">Kepala UPT TIK,</span>
        <img src="img/ttd.png" alt="TTD" height="100px">
        <span class="d-block">Dr. Uwes Anis Cheruman, M.Pd</span>
        <span style="color: #505050">NIP.197403112002121001</span>
    </div>



















    {{-- ------------------- PAGE 2 --------------------- --}}

    {{-- TABEL NILAI --}}
    <div class="container mt-5" style="page-break-before: always;">
        <table align="center">
            <thead style="background: #4FB1AD;">
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Parameter</th>
                    <th colspan="2">Nilai</th>
                </tr>
                <tr>
                    <th>Angka</th>
                    <th>Huruf</th>
                </tr>
            </thead>
            <tbody style="background: #eaeaea">
                {{-- A --}}
                <tr>
                    <th>A.</th>
                    <th colspan="3">KEDISIPLINAN</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ketepatan Waktu</td>
                    <th>{{ $data->ketepatan_waktu }}</th>
                    <th>{{ huruf('ketepatan_waktu', $data->id) }}</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tanggung Jawab Terhadap Tugas</td>
                    <th>{{ $data->tanggung_jawab }}</th>
                    <th>{{ huruf('tanggung_jawab', $data->id) }}</th>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kehadiran/Absensi</td>
                    <th>{{ $data->kehadiran }}</th>
                    <th>{{ huruf('kehadiran', $data->id) }}</th>
                </tr>
                {{-- B --}}
                <tr>
                    <th>B.</th>
                    <th colspan="3">PRESTASI KERJA</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Keterampilan Kerja</td>
                    <th>{{ $data->keterampilan_kerja }}</th>
                    <th>{{ huruf('keterampilan_kerja', $data->id) }}</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kualitas Hasil Kerja</td>
                    <th>{{ $data->kualitas_hasil_kerja }}</th>
                    <th>{{ huruf('kualitas_hasil_kerja', $data->id) }}</th>
                </tr>
                {{-- C --}}
                <tr>
                    <th>C.</th>
                    <th colspan="3">KEMAMPUAN BERADAPTASI</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kemampuan Berkomunikasi</td>
                    <th>{{ $data->komunikasi }}</th>
                    <th>{{ huruf('komunikasi', $data->id) }}</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kerja Sama</td>
                    <th>{{ $data->kerja_sama }}</th>
                    <th>{{ huruf('kerja_sama', $data->id) }}</th>
                </tr>
                {{-- D --}}
                <tr>
                    <th>D.</th>
                    <th colspan="3">LAIN-LAIN</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Memiliki Rasa Percaya Diri</td>
                    <th>{{ $data->percaya_diri }}</th>
                    <th>{{ huruf('percaya_diri', $data->id) }}</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Penampilan/Kerapihan</td>
                    <th>{{ $data->penampilan }}</th>
                    <th>{{ huruf('penampilan', $data->id) }}</th>
                </tr>
            </tbody>
        </table>
        <div class="row mt-4">
            <div style="float: right;">
                <table align="center">
                    <thead style="background: #4FB1AD;">
                        <tr>
                            <th>TOTAL NILAI</th>
                            <th>RATA-RATA</th>
                            <th>HURUF</th>
                        </tr>
                    </thead>
                    <tbody style="background: #eaeaea">
                        <tr>
                            <td>{{ $sumNilai }}</td>
                            <td>{{ $average }}</td>
                            <th>
                                @if ($average >= 80)
                                    A
                                @elseif ($average < 80 AND $average >= 68)
                                    B
                                @else
                                    C
                                @endif
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <label>Ketentuan Penilaian</label>
                <ol type="1">
                    <li>Nilai 80 - 100 = A</li>
                    <li>Nilai 68 - 79 = B</li>
                    <li>Nilai 50 - 67 = C</li>
                </ol>
            </div>
        </div>
    </div>





























    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
