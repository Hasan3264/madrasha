<?php

namespace App\Http\Controllers;

use App\Models\AcademicHoliday;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AcademicHolidayController extends Controller
{
    public function index()
    {
        $holidays = AcademicHoliday::all();

        return view("backend.academic_holiday.index", ["holidays" => $holidays]);
    }
    public function createForm()
    {
        return view("backend.academic_holiday.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'type' => ['required', 'unique:academic_holidays'],
            'title' => ['required', 'unique:academic_holidays'],
            'status' => ['required', 'unique:academic_holidays'],
        ]);
        AcademicHoliday::insert([
            'type' => $request->type,
            'title' => $request->title,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Holiday added successfully!');
    }
    public function view($id)
    {
        $holiday = AcademicHoliday::find($id);
        return view("backend.academic_holiday.view", ["holiday" => $holiday]);
    }
    public function editForm($id)
    {
        $holiday = AcademicHoliday::find($id);
        return view("backend.academic_holiday.edit", ["holiday" => $holiday]);
    }
    public function update(Request $request, $id)
    {
        $holiday = AcademicHoliday::find($id);
        $holiday->type = $request->input("type");
        $holiday->title = $request->input("title");
        $holiday->status = $request->input("status");
        $holiday->update();
        return back()->with('success', 'Holiday updated successfully!');
    }
    public function delete($id)
    {
        AcademicHoliday::find($id)->delete();
        return back()->with('success', 'Holiday deleted successfully!');
    }
}
