<?php
namespace App\Http\Controllers;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Book::orderBy('id','asc')->paginate(5);
        return view('books.index', compact('students',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('books.create');
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
            'name' => 'required',
            'author' => 'required',
            'year'=>'required',
      
        ]);
        $student = new Book();
        $student->name = $request->name;
        $student->author = $request->author;
        $student->year = $request->year;    
        $input = $request->all();
         $student->save();
        return redirect()->route('book.index')
            ->with('success','New User has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students=Book::find($id);
        return view('books.show')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Book::find($id);
        return view('books.edit')->with('student', $students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
             
        ]);
        $student = Book::find($id);
        $student->name = $request->name;
        $student->author = $request->author;
        $student->year = $request->year;
        $student->update();
        return redirect()->route('book.index')
            ->with('success','Details Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=book::find($id);
        $student->delete();
        return redirect()->route('book.index')
            ->with('success','Book has been deleted successfully');
    }
    
}
