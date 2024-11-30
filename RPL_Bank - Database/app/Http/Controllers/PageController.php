<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AkunAdminInstansi;
use App\Models\Mahasiswa;
use App\Models\SettingHarga;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function login_admin()
    {
        return view("LoginAdmin");
    }
    public function login_pendi()
    {
        return view('LoginPendi');
    }

    public function saveAkun(Request $request)
    {
        // Validasi data
        $request->validate([
            'no_telp' => 'required|numeric',
            'email' => 'required|email|unique:akun_admin_instansi',
            'username_instansi' => 'required',
            'password_instansi' => 'required|min:8',
        ]);

        // Simpan ke database
        AkunAdminInstansi::create([
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'username_instansi' => $request->username_instansi,
            'password_instansi' => Hash::make($request->password_instansi),
        ]);

        // Redirect dengan pesan sukses
        return redirect('/')->with('success', 'Registrasi berhasil!');
    }

    public function checkNIM(Request $request)
    {
        $exists = Mahasiswa::where('nim', $request->nim)->exists();

        if ($exists) {
            return response()->json(['exists' => true, 'message' => 'NIM sudah digunakan.']);
        }

        return response()->json(['exists' => false]);
    }

    public function checkEmail(Request $request)
    {
        $exists = Mahasiswa::where('email_mhs', $request->email)->exists();

        if ($exists) {
            return response()->json(['exists' => true, 'message' => 'Email sudah digunakan.']);
        }

        return response()->json(['exists' => false]);
    }

    public function checkTelpon(Request $request)
    {
        $exists = Mahasiswa::where('no_telp_mhs', $request->telpon)->exists();

        if ($exists) {
            return response()->json(['exists' => true, 'message' => 'Nomor telepon sudah digunakan.']);
        }

        return response()->json(['exists' => false]);
    }

    public function tambahMhs(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|email|unique:mahasiswa,email_mhs',
            'telpon' => 'required|numeric|unique:mahasiswa,no_telp_mhs',
        ]);

        Mahasiswa::create([
            'nim' => $validatedData['nim'],
            'nama_mhs' => $validatedData['nama'],
            'alamat_mhs' => $validatedData['alamat'],
            'gender_mhs' => $validatedData['gender'],
            'email_mhs' => $validatedData['email'],
            'no_telp_mhs' => $validatedData['telpon'],
            'id_univ' => 1000,
        ]);

        return redirect()->back()->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function updateprice(Request $request)
    {
        $validated = $request->validate([
            'spp' => 'required|numeric|min:0',
            'kesehatan' => 'required|numeric|min:0',
            'fasilitas' => 'required|numeric|min:0',
            'hrg_sks' => 'required|numeric|min:0',
        ]);

        // Simpan harga ke database
        foreach ($validated as $key => $value) {
            // Asumsi ada tabel settings dengan key dan value
            DB::table('settings')->updateOrInsert(['key' => $key], ['value' => $value]);
        }

        return back()->with('success', 'Harga berhasil diperbarui!');
    }

    public function showSettingHarga()
    {
        $prices = SettingHarga::where('id_univ', 1000)->first();
        return view('SettingHarga', compact('prices'));
    }

    public function updatePrices(Request $request)
    {
        $validated = $request->validate([
            'spp' => 'required|numeric|min:0',
            'kesehatan' => 'required|numeric|min:0',
            'fasilitas' => 'required|numeric|min:0',
            'hrg_sks' => 'required|numeric|min:0',
        ]);

        SettingHarga::updateOrCreate(
            ['id_univ' => 1],
            $validated
        );

        return back()->with('success', 'Harga berhasil diperbarui!');
    }
    public function settingHarga()
    {
        $prices = SettingHarga::where('id_univ', 1000)->first();

        if (!$prices) {
            return redirect()->back()->with('error', 'Data harga tidak ditemukan!');
        }

        return view('SettingHarga', compact('prices'));
    }

    public function daftarMahasiswa()
    {
        // Ambil data mahasiswa dengan id_univ = 1
        $mahasiswa = Mahasiswa::where('id_univ', 1000)->get();
        return view('DftMhs', compact('mahasiswa'));
    }
    public function editMahasiswa(Request $request)
    {
        $validatedData = $request->validate([
            'id_mhs' => 'required|exists:mahasiswa,id', // pastikan ID valid
            'nama_mhs' => 'required',
            // validasi lainnya
        ]);
    
        $mahasiswa = Mahasiswa::findOrFail($request->id_mhs);
        $mahasiswa->update($validatedData);
    
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');

        // // Cari mahasiswa berdasarkan ID
        // $mahasiswa = Mahasiswa::findOrFail($id);

        // // Return view dengan data mahasiswa
        // return response()->json($mahasiswa);
    }

    public function updateMahasiswa(Request $request, $id)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_mhs' => 'required|string|max:255',
            'alamat_mhs' => 'required|string|max:255',
            'gender_mhs' => 'required|string|max:10',
            'email_mhs' => 'required|email',
            'no_telp_mhs' => 'required|string|max:20',
        ]);

        // Cari mahasiswa dan update
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($validated);

        return redirect()->back()->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroyMahasiswa($nim)
    {
        // Find the mahasiswa by ID
        $mahasiswa = Mahasiswa::find($nim);

        // Check if mahasiswa exists
        if (!$mahasiswa) {
            return redirect()->back()->with('error', 'Mahasiswa not found.');
        }

        // Delete mahasiswa
        $mahasiswa->delete();

        // Redirect with success message
        return redirect()->back()->with('success', 'Mahasiswa deleted successfully.');
    }
}