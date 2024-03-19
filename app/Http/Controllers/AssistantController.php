<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;

class AssistantController extends Controller
{
    public function index()
    {
        return view('assistant.index');
    }

    public function getAssistant(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('name', 'email', \DB::raw("DATE_FORMAT(created_at, '%d-%m-%Y') as formatted_date"))->where('role', 'Assistant')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $btn = '<ul class="list-unstyled hstack gap-1 mb-0"><li data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><a href="patient/'.$row->id.'/edit" class="btn btn-sm btn-soft-info"><i class="mdi mdi-pencil-outline"></i></a></li><li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" onclick="setDelete('.$row->id.')"><a href="#jobDelete" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger"><i class="mdi mdi-delete-outline"></i></a></li></ul>';
                //     return $btn;
                // })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function assistantPatient()
    {
        return view('assistant.assistant-patient');
    }

    public function getAssistantPatient(Request $request)
    {
        if ($request->ajax()) {
            $data = Patient::where('user_id', Auth::user()->id);
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('status', function ($status) {
                    return $status->status == 1 ? 'Active' : 'Inactive';
                })
                ->addColumn('button', function($row){
                    $button = '<a href="care-plan/'.$row->id.'" class="btn btn-primary w-md">Care Plan</a>';
                    return $button;
                })
                ->rawColumns(['status', 'button'])
                ->make(true);
        }
    }
}
