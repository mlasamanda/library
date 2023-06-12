<?php
namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminCrude extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= User::orderBy('id','asc')->paginate(5);
        return view('admin.index', compact('students',));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email' => 'required',
            'nation'=>'required',
            'mobile' =>'required',
            'role'=>'required',
      
        ]);
        $student = new user();
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->email = $request->email;
        $student->nation = $request->nation;
        $student->mobile = $request->mobile;
        $student->role = $request->role;
        $student->password= Hash::make('12345');
        $input = $request->all();
         $student->save();
        return redirect()->route('admin.index')
            ->with('success','New User has been created successfully.');
    }
     
    
    public function show($id)
    {
        $students=User::find($id);
        return view('admin.show')->with('students', $students);
    }
   

    public function edit($id)
    {
        $students = User::find($id);
        return view('admin.edit')->with('student', $students);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personinfo $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'nation' => 'required',
            'mobile' => 'required',
            'role'=>'required',
        ]);
        $student = User::find($id);
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->email = $request->email;
        $student->nation = $request->nation;
        $student->mobile= $request->mobile;
        $student->role=$request->role;
        $student->update();
        return redirect()->route('admin.index')
            ->with('success','Details Has Been updated successfully');
    }
   
    public function destroy($id)
    {
    $company=User::find($id);
    $company->delete();
        return redirect()->route('admin.index')
            ->with('success','Company has been deleted successfully');
    }
}
