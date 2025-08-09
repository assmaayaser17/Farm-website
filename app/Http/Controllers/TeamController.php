<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class TeamController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
           return redirect()->route('home') . '#team';
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'role'  => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('team', 'public');
        }

        Employee::create($data);

          return redirect()->route('home') . '#team';
    }

    public function edit($id)
{
    $employee = Employee::findOrFail($id);
    return view('team.edit', compact('employee'));
}

public function update(Request $request, $id)
{
    $employee = Employee::findOrFail($id);

    $request->validate([
        'name'  => 'required|string|max:255',
        'role'  => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('image')) {
        if ($employee->image && \Storage::disk('public')->exists($employee->image)) {
            \Storage::disk('public')->delete($employee->image);
        }
        $data['image'] = $request->file('image')->store('team', 'public');
    }

    $employee->update($data);

    return redirect()->route('home')->with('success', 'Employee Updated Successfully');
}

public function destroy($id)
{
    $employee = Employee::findOrFail($id);

    if ($employee->image && \Storage::disk('public')->exists($employee->image)) {
        \Storage::disk('public')->delete($employee->image);
    }

    $employee->delete();

    return redirect()->route('home')->with('success','Employee Has been Deleted');
}

}

