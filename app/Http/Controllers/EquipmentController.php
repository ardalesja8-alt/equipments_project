<?php
namespace App\Http\Controllers;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index() { $equipments = Equipment::latest()->paginate(10); return view('equipments.index', compact('equipments')); }
    public function create() { return view('equipments.create'); }
    public function store(Request $request) {
        $request->validate(['name'=>'required','details'=>'required','quantity'=>'required|numeric','price'=>'required|numeric']);
        Equipment::create($request->all());
        return redirect()->route('equipments.index')->with('success','Equipment added!');
    }
    public function show(Equipment $equipment) { return view('equipments.show', compact('equipment')); }
    public function edit(Equipment $equipment) { return view('equipments.edit', compact('equipment')); }
    public function update(Request $request, Equipment $equipment) {
        $request->validate(['name'=>'required','details'=>'required','quantity'=>'required|numeric','price'=>'required|numeric']);
        $equipment->update($request->all());
        return redirect()->route('equipments.index')->with('success','Equipment updated!');
    }
    public function destroy(Equipment $equipment) { $equipment->delete(); return redirect()->route('equipments.index')->with('success','Equipment deleted!'); }
}