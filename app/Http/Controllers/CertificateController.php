<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use Carbon\Carbon;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::with('student')->get();

        return view('certificates.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certificates.create');
    }
    
    public function generate(Student $student){
        return view('certificates.create', compact('student'));
    }

    /**
     * List Student
     */
    public function list(){
        $students = DB::table('students')->where('progres', 'active')->get();

        return view('certificates.list', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {
        Certificate::create($request->except('_token'));
        Student::where('id', $request->student_id)->update(['progres' => 'finished']);

        return redirect()->route('certificates.index')->with('addCertificateSuccess', 'Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        $data = Certificate::with('student')->where('id', $certificate->id)->first();
        $sumNilai = $data->ketepatan_waktu;
        $sumNilai += $data->tanggung_jawab;
        $sumNilai += $data->kehadiran;
        $sumNilai += $data->keterampilan_kerja;
        $sumNilai += $data->kualitas_hasil_kerja;
        $sumNilai += $data->komunikasi;
        $sumNilai += $data->kerja_sama;
        $sumNilai += $data->percaya_diri;
        $sumNilai += $data->penampilan;

        $average = $sumNilai / 9;
        $average = round($average, 2);

        $created_at = Carbon::parse($data->created_at)->format('d F Y');

        $pdf = Pdf::loadView('template', compact('data', 'sumNilai', 'average', 'created_at'));
        $pdf->set_paper('letter', 'landscape');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
