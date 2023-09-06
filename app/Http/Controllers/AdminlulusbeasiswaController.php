<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Mpdf\Mpdf;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\pendaftaran_beasiswa;

class AdminlulusbeasiswaController extends Controller
{
    //
    public function index()
    {
        $data = pendaftaran_beasiswa::with('user', 'kategoribeasiswa');
        $result = $data->where('is_active', 1)->get();
        return view('pages.admin.lulusbeasiswa.index', compact('result'));
    }

    public function generatePDF(Request $request)
    {
        $id = $request->input('id');

        // Lakukan query ke database berdasarkan ID
        $result = pendaftaran_beasiswa::with('user', 'kategoribeasiswa')->find($id);

        if (!$result) {
            return redirect()->route('lulusbeasiswa.index')->with('error', 'Data tidak ditemukan');
        }

        // Buat instance mpdf
        $mpdf = new Mpdf();

        // Konten HTML untuk PDF
        $html = view('pages.pdf.pdf', compact('result'))->render();

        // Tambahkan konten ke PDF
        $mpdf->WriteHTML($html);

        // Tambahkan halaman baru
        $mpdf->AddPage();

        // Tambahkan konten gambar berkas ke halaman kedua PDF
        $fileImagePath = public_path('storage/' . $result->ktp_peserta);
        if (file_exists($fileImagePath)) {
            $mpdf->Image($fileImagePath, $x = 10, $y = 10, $w = 100, $h = 100);
        }

        $mpdf->AddPage();

        // Tambahkan konten gambar berkas ke halaman kedua PDF
        $fileImagePath = public_path('storage/' . $result->kartu_identitas);
        if (file_exists($fileImagePath)) {
            $mpdf->Image($fileImagePath, $x = 10, $y = 10, $w = 100, $h = 100);
        }

        $mpdf->AddPage();

        // Tambahkan konten gambar berkas ke halaman kedua PDF
        $fileImagePath = public_path('storage/' . $result->kartu_keluarga);
        if (file_exists($fileImagePath)) {
            $mpdf->Image($fileImagePath, $x = 10, $y = 10, $w = 100, $h = 100);
        }

        $mpdf->AddPage();

        // Tambahkan konten gambar berkas ke halaman kedua PDF
        $fileImagePath = public_path('storage/' . $result->ktp_orangtuapeserta);
        if (file_exists($fileImagePath)) {
            $mpdf->Image($fileImagePath, $x = 10, $y = 10, $w = 100, $h = 100);
        }


        // Render PDF content
        $pdfContent = $mpdf->Output('', 'S');

        // Send the PDF content as a response
        return Response::make($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=data_peserta.pdf',
        ]);
    }
}
