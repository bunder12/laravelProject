<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freebet;
use App\Models\Chanel;

class FreebetControler extends Controller
{
    public function post(Request $request){
        $ref = $_SERVER['HTTP_REFERER'];
        // dd($ref);
        $checkLocation = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $ip = $checkLocation->ip;
        $data = $request->validate([
            'idGame' => 'required',
            'chanel' => 'required',
            'event' => 'required',
            'web' => 'required',
            'typeMember' => 'required',
        ]);
        $data['ip'] = $ip;
        $data['status'] = 0;
        Freebet::create($data);
        return redirect($ref)->with('success', 'Berhasil Isi Freebet');
    }

    public function getData(){
        $data = Freebet::all();
        return view('welcome', ['data' => $data]);
    }

    public function getDataFreebet(){
        $data = Freebet::all();
        return view('freebet', ['data' => $data]);
    }

    public function getDataSearch(Request $request){
        $search = $request->search;
        $member = Freebet::where('idGame', 'like', "%".$search."%")->paginate();
        return view('welcome', ['data' => $member]);
    }

    public function formfreebet($id){
        Chanel::findOrFail($id);
        return view('formfreebet');
    }

    public function delete($id){
        Freebet::where('id', $id)->delete();
        return redirect('/freebet-member')->with('success', 'Data Berhasil di Hapus');
    }

    public function tolak($id){
        $data = Freebet::findOrFail($id);
        $data->status = -1;
        $data->update();
        return redirect('/freebet-member')->with('success', 'Freebet Berhasil ditolak');
    }

    public function setujui($id){
        $data = Freebet::findOrFail($id);
        $data->status = 1;
        $data->update();
        return redirect('/freebet-member')->with('success', 'Freebet Berhasil diSetujui');
    }

    public function getDataChanel(){
        $data = Chanel::all();
        return view('form', ['data' => $data]);
    }
}
