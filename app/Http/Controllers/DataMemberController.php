<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseHelper;
use App\Models\DataMember;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class DataMemberController extends Controller
{
    public function dataMember()
    {
        $dataMembers = DataMember::all();

        return view('dataMember', [
            'title' => "Data Member Page",
            'dataMembers' => $dataMembers,
        ]);
    }

    public function createDataMember(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'nomorWa' => 'required|string|max:15|unique:data_members,whatsapp',
                'alamat' => 'required|string|max:255',
                'jenisKelamin' => 'required|in:L,P',
            ]);

            $dataMember = new DataMember();
            $dataMember->member_id = $this->generateUniqueMemberId();
            $dataMember->name = $validatedData['name'];
            $dataMember->whatsapp = $validatedData['nomorWa'];
            $dataMember->alamat = $validatedData['alamat'];
            $dataMember->jenis_kelamin = $validatedData['jenisKelamin'];
            $dataMember->foto = $validatedData['foto'] ?? null;
            $dataMember->save();

            $response = [
                'content' => 'Data member berhasil disimpan',
                'status' => 200,
                'data' => $dataMember
            ];
            $request->session()->flash('response', $response);

            return redirect('/dataMember');
            // return $response;
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->errors();

            $firstErrors = array_map(function($errorArray) {
                return $errorArray[0];
            }, $errors);

            $response = [
                'content' => 'Data member gagal disimpan',
                'status' => 422,
                'data' => $firstErrors
            ];
            $request->session()->flash('response', $response);

            return redirect('/dataMember');
            // return $response;
        } catch (\Exception $e) {
            $response = [
                'content' => 'Data member gagal disimpan',
                'status' => 500,
                'data' => null
            ];
            $request->session()->flash('response', $response);

            return redirect('/dataMember');
        }
    }
    
    private function generateUniqueMemberId()
    {
        do {
            $memberId = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        } while (DataMember::where('member_id', $memberId)->exists());

        return $memberId;
    }
}
