// Attendance.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    // ...

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    // ...
}



// Employee.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // ...

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    // ...
}



use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function monthlyAttendance()
    {
        // Get the current month and year
        $now = Carbon::now();
        $month = $now->month;
        $year = $now->year;

        // Retrieve all employees with their attend and leave counts for the current month
        $employees = Employee::withCount([
            'attendances as attend_count' => function ($query) use ($month, $year) {
                $query->where('attend', 'attend')
                      ->whereMonth('created_at', $month)
                      ->whereYear('created_at', $year);
            },
            'attendances as leave_count' => function ($query) use ($month, $year) {
                $query->where('attend', 'leave')
                      ->whereMonth('created_at', $month)
                      ->whereYear('created_at', $year);
            },
        ])->get();

        return view('monthly-attendance', compact('employees'));
    }
}




<!-- monthly-attendance.blade.php -->

@foreach($employees as $employee)
    <p>Employee ID: {{ $employee->id }}</p>
    <p>Attend Count: {{ $employee->attend_count }}</p>
    <p>Leave Count: {{ $employee->leave_count }}</p>
    <hr>
@endforeach


[{"id":1,"emp_type":"Full-Time","emp_type_id":1,"designation":"Teacher","desg_id":1,"shift":"Day","ws_id":1,"grade":"Grade.1(18000)","rank":"8","emp_id":"EMP-2023011001","device_serial":"device12345","tracking_id":"tracking12345","rfid_no":"rfid12345","joining_date":"2023-06-21","bank_acc_no":"bank_acc-12345","prev_inst":"Premier University","prev_des":"Teacher","created_at":"2023-06-21T12:03:04.000000Z","updated_at":"2023-06-21T12:03:04.000000Z","attend_count":2,"leave_count":0},
{"id":2,"emp_type":"Full-Time","emp_type_id":1,"designation":"Director","desg_id":6,"shift":"Day","ws_id":1,"grade":"Grade.1(18000)","rank":"5","emp_id":"EMP-2023161001","device_serial":"deviceserial2","tracking_id":"trackingid2","rfid_no":"rfidno2","joining_date":"2023-06-03","bank_acc_no":"bank_acc123","prev_inst":"Independent University","prev_des":"Director","created_at":"2023-06-21T12:07:04.000000Z","updated_at":"2023-06-21T12:07:04.000000Z","attend_count":1,"leave_count":0},
{"id":3,"emp_type":"Remote","emp_type_id":5,"designation":"Lecturer","desg_id":4,"shift":"Afternoon","ws_id":2,"grade":"Grade.1(18000)","rank":"9","emp_id":"EMP-2023242005","device_serial":"serial-12345","tracking_id":"tracking123","rfid_no":"rfid12345","joining_date":"2023-06-07","bank_acc_no":"6756567457","prev_inst":"Previous Institute","prev_des":"Teacher","created_at":"2023-06-21T12:13:38.000000Z","updated_at":"2023-06-21T12:13:38.000000Z","attend_count":0,"leave_count":0},
{"id":4,"emp_type":"Contractual","emp_type_id":3,"designation":"Lecturer","desg_id":5,"shift":"Day","ws_id":1,"grade":"Grade.1(18000)","rank":"89","emp_id":"EMP-2023351003","device_serial":"78901","tracking_id":"56789","rfid_no":"67890","joining_date":"2023-06-07","bank_acc_no":"89012","prev_inst":"Chittagong University","prev_des":"90123","created_at":"2023-06-21T12:30:55.000000Z","updated_at":"2023-06-21T12:30:55.000000Z","attend_count":0,"leave_count":0}]