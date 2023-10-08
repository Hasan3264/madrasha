<?php


use App\Http\Controllers\backend\hr_module\{EmployeetypeController, DesignationController, WorkingShiftController, EmployeeController, TypeController};
use App\Http\Controllers\backend\routine\RoutineController;
use App\Http\Controllers\{ProfileController,TestimonialController, InstituteController, branchController, AcademicHolidayController,frontendController};
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Academic\AllsessionAcademicController;
use App\Http\Controllers\backend\student_module\StudentController;
use App\Http\Controllers\backend\finance_reports_module\FinanceReportsController;
use App\Http\Controllers\backend\payroll_module\{PayrollHeadController, EmployeePayscaleController, EmployeesSalaryChartController, EmployeesSalaryController};
use App\Http\Controllers\ExamSetting\ExamsettingController;
use App\Models\allsts;
use App\Models\apply;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//registerHAME
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [frontendController::class, 'index']);
Route::get('/apply', [frontendController::class, 'applyIndex'])->name('apply.index');
Route::post('/apply/sub', [frontendController::class, 'apply'])->name('apply');
Route::post('/input/sTudentTeacherStaff', [frontendController::class, 'inputsts'])->name('input.sts');
Route::get('/delete/{id}', [frontendController::class, 'deleteapply'])->name('applay.delete');
//about us
Route::get('/about', [frontendController::class, 'aboutIndex'])->name('about.index');
//braking news
Route::get('/braking', [frontendController::class, 'brakingIndex'])->name('braking.index');
//board Result
Route::get('/resutBoard', [frontendController::class, 'boardresult'])->name('boardresult');
//academic
Route::get('/AcademicBoard', [frontendController::class, 'AcademicBoardresult'])->name('AcademicBoardresult');
//gallry
Route::get('/gallry', [frontendController::class, 'gallary'])->name('gallary');
//boarddirector
Route::get('/boardOfdirector', [frontendController::class, 'boarddirector'])->name('boarddirector');
//notice
Route::get('/notice', [frontendController::class, 'notice'])->name('notice');
//notice
Route::get('/teachers', [frontendController::class, 'teachers'])->name('teachers.index');


//deshboard start

Route::get('/dashboard', function () {
    $admittionPanding = apply::all();
    $all = allsts::latest()->get();
    return view('backend.index',[
        'admittionPanding' => $admittionPanding,
        'all' => $all,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


     Route::resource('testimonials', TestimonialController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/institute', [InstituteController::class, 'index'])->name('institute.index');
    Route::post('/institute/input', [InstituteController::class, 'input'])->name('institute.input');
    Route::post('/Ganarel/input', [InstituteController::class, 'ganarel_input'])->name('ganarel.input');
    // Academic Holidays routes

    Route::get('/academic-holiday', [AcademicHolidayController::class, 'index'])->name('academic-holiday.index');
    Route::get('/academic-holiday/create', [AcademicHolidayController::class, 'createForm'])->name('academic-holiday.create');
    Route::post('academic-holiday/store', [AcademicHolidayController::class, 'store'])->name('academic-holiday.store');
    Route::get('/academic-holiday/{id}/view', [AcademicHolidayController::class, 'view'])->name('academic-holiday.view');
    Route::get('/academic-holiday/{id}/edit', [AcademicHolidayController::class, 'editForm'])->name('academic-holiday.edit');
    Route::post('/academic-holiday/{id}/update', [AcademicHolidayController::class, 'update'])->name('academic-holiday.update');
    Route::get('/academic-holiday/{id}/delete', [AcademicHolidayController::class, 'delete'])->name('academic-holiday.delete');

    //    Routine Controller Part

    Route::get('/r.index', [RoutineController::class, 'index'])->name('r.index');
    Route::get('/r.dynamic', [RoutineController::class, 'dynamic'])->name('r.dynamic');
    Route::get('/r.print', [RoutineController::class, 'printindex'])->name('r.print');
    Route::post('/add/routine', [RoutineController::class, 'add_routine'])->name('add.routine');
    Route::post('/View/routine', [RoutineController::class, 'View_routine'])->name('routine.view');
    Route::get('/download', [RoutineController::class, 'download'])->name('download.Routine');
    Route::get('/list', [RoutineController::class, 'list'])->name('list.Routine');
    Route::post('/delete', [RoutineController::class, 'delete'])->name('routine.delete');
    //development part Routine


    Route::get('/r.index',[RoutineController::class,'index'])->name('r.index');
    Route::get('/r.dynamic',[RoutineController::class,'dynamic'])->name('r.dynamic');
    Route::get('/r.print',[RoutineController::class,'printindex'])->name('r.print');
    Route::post('/add/routine',[RoutineController::class,'add_routine'])->name('add.routine');
    Route::post('/View/routine',[RoutineController::class,'View_routine'])->name('routine.view');
    Route::get('/download',[RoutineController::class,'download'])->name('download.Routine');
    Route::get('/list',[RoutineController::class,'list'])->name('list.Routine');
    Route::post('/delete',[RoutineController::class,'delete'])->name('routine.delete');
    Route::post('/inputallroutine',[RoutineController::class,'inputRoute'])->name('input.addall');
    // Students module routes


    //Routine

       //development part Routine



    // Students module routes

    //////// start Students module routes////////
    require __DIR__ . '/student_module.php';
    //////// End Students module routes////////


    //Branch Controller
    Route::controller(branchController::class)->group(function () {
        Route::get('/index', 'index')->name('branch.index');
        Route::get('/branch/add', 'add')->name('branch.add');
        Route::post('/branch/input', 'input_branch')->name('branch.input');
        Route::get('/branch/show/{id}', 'show_branece')->name('branch.show');
        Route::get('/branch/edit/{id}', 'edit_branece')->name('branch.edit');
        Route::post('/branch/edit', 'edit_push')->name('branch.editpush');
        Route::post('/branchdelete', 'branch_delete');
    });

    // Payroll Module routes

    Route::get('/payroll/head', [PayrollHeadController::class, 'index'])->name('payroll-head.index');
    Route::get('/payroll/head/view', [PayrollHeadController::class, 'show'])->name('payroll-head.view');
    Route::get('/payroll/head/add', [PayrollHeadController::class, 'add'])->name('payroll-head.add');
    Route::get('/payroll/head/edit', [PayrollHeadController::class, 'edit'])->name('payroll-head.edit');

    Route::get('/employee/payscale', [EmployeePayscaleController::class, 'index'])->name('employee-payscale.index');
    Route::get('/employee/payscale/view', [EmployeePayscaleController::class, 'show'])->name('employee-payscale.view');
    Route::get('/employee/payscale/add', [EmployeePayscaleController::class, 'add'])->name('employee-payscale.add');
    Route::get('/employee/payscale/edit', [EmployeePayscaleController::class, 'edit'])->name('employee-payscale.edit');

    Route::get('/employee/salary/chart', [EmployeesSalaryChartController::class, 'index'])->name('employee-salary.index');
    Route::get('/employee/salary/view', [EmployeesSalaryChartController::class, 'show'])->name('employee-salary.view');
    Route::get('/employee/salary/add', [EmployeesSalaryChartController::class, 'add'])->name('employee-salary.add');
    Route::get('/employee/salary/edit', [EmployeesSalaryChartController::class, 'edit'])->name('employee-salary.edit');

    Route::get('/employee/salary-sheet/generate', [EmployeesSalaryController::class, 'generateSheet'])->name('employee.salary-sheet.generate');
    Route::get('/employee/salary-report', [EmployeesSalaryController::class, 'report'])->name('employee.salary.report');
    Route::get('/employee/salary-payment', [EmployeesSalaryController::class, 'payment'])->name('employee.salary.payment');
    Route::get('/employee/payslip/print', [EmployeesSalaryController::class, 'payslipPrint'])->name('employee.payslip.print');

    // Financial Reports Routes

    Route::get('/finance-reports/daily-collection', [FinanceReportsController::class, 'dailyCollection'])->name('finance-reports.daily-collection');
    Route::get('/finance-reports/fees-collection', [FinanceReportsController::class, 'feesCollection'])->name('finance-reports.fees-collection');
    Route::get('/finance-reports/students-dues', [FinanceReportsController::class, 'studentsDues'])->name('finance-reports.students-dues');
    Route::get('/finance-reports/students-ledger', [FinanceReportsController::class, 'studentsLedger'])->name('finance-reports.students-ledger');
    Route::get('/finance-reports/students-waiver-report', [FinanceReportsController::class, 'studentsWaiverReport'])->name('finance-reports.students-waiver-report');
    Route::get('/finance-reports/accounts-ledger', [FinanceReportsController::class, 'accountsLedger'])->name('finance-reports.accounts-ledger');
    Route::get('/finance-reports/trial-balance', [FinanceReportsController::class, 'trialBalance'])->name('finance-reports.trial-balance');
    Route::get('/finance-reports/cash-book', [FinanceReportsController::class, 'cashBook'])->name('finance-reports.cash-book');
    Route::get('/finance-reports/bank-book', [FinanceReportsController::class, 'bankBook'])->name('finance-reports.bank-book');
    Route::get('/finance-reports/balance-sheet', [FinanceReportsController::class, 'balanceSheet'])->name('finance-reports.balance-sheet');
    Route::get('/finance-reports/payable-receivable', [FinanceReportsController::class, 'payableReceivable'])->name('finance-reports.payable-receivable');



    // All SESSION ACADDEMIC

    Route::controller(AllsessionAcademicController::class)->prefix('/academic')->group(function () {
        Route::get('/allsection', 'AllSection')->name('allsection');
        Route::get('/createsession', 'CreateSession')->name('createsession');
        Route::POST('/insertsession', 'Insertsession')->name('insertsession');
        Route::get('/allsessionedit/{id}', 'AllSessionEdit')->name('allsessionedit');
        Route::POST('/updatesession/{id}', 'UpdateSessionId')->name('updatesession');
        Route::get('/allsessiondelete/{id}', 'DeleteSessionId')->name('allsessiondelete');
    });

    // All MEDIUM ACADDEMIC

    Route::controller(AllsessionAcademicController::class)->prefix('/academic')->group(function () {
        Route::get('/allmedium', 'AllMedium')->name('allmedium');
        Route::get('/createmedium', 'CreatemMedium')->name('createmedium');
        Route::POST('/insertmedium', 'InsertMedium')->name('insertmedium');
        Route::get('/allmediumedit/{id}', 'AllmediumEdit')->name('allmediumedit');
        Route::POST('/updatemedium/{id}', 'UpdatemediumId')->name('updatemedium');
        Route::get('/allmediumdelete/{id}', 'DeletemediumId')->name('allmediumdelete');
    });

    // ACADEMIC CALENDER

    Route::controller(AllsessionAcademicController::class)->prefix('/academic')->group(function () {
        Route::get('/calender', 'AcademicCalender')->name('academiccalander');
    });

    // All MEDIUM ACADDEMIC


    Route::controller(ExamsettingController::class)->prefix('/exam')->group(function () {

        // EXAM GRADE POINT
        Route::get('/managegrade', 'ManageGrade')->name('managegrade');
        Route::get('/addgrade', 'AddGrade')->name('addgrade');
        Route::POST('/insertgrade', 'InsertGrade')->name('insertgrade');
        Route::get('/gradeedit/{id}', 'GradeEdit')->name('gradeedit');
        Route::POST('/updategrade/{id}', 'UpdateGrade')->name('updategrade');
        Route::get('/gradedelete/{id}', 'GradeDelete')->name('gradedelete');
        Route::get('/gradeshow/{id}', 'GradeShow')->name('gradeshow');

        // EXAM TERMS
        Route::get('/manageexamterms', 'Manageexamterms')->name('manageexamterms');
        Route::get('/addexamterms', 'Addexamterms')->name('addexamterms');
        Route::POST('/insertterms', 'InsertTerms')->name('insertterms');
        Route::get('/showterms/{id}', 'ShowTerms')->name('showterms');
        Route::get('/editterms/{id}', 'EditTerms')->name('editterms');
        Route::POST('/updateexamterms/{id}', 'UpdateExamTerms')->name('updateexamterms');
        Route::get('/deleteterms/{id}', 'DeleteTerms')->name('deleteterms');

        // EXAM PARTS
        Route::get('/manageexamparts', 'Manageexamparts')->name('manageexamparts');
        Route::get('/addexamparts', 'Addexamparts')->name('addexamparts');
        Route::POST('/insertpart', 'InsertPart')->name('insertpart');
        Route::POST('/insertpart', 'InsertPart')->name('insertpart');
        Route::get('/showpart/{id}', 'ShowPart')->name('showpart');
        Route::get('/editpart/{id}', 'EditPart')->name('editpart');
        Route::POST('/updatepart/{id}', 'UpdatePart')->name('updatepart');
        Route::get('/deletepart/{id}', 'DeletePart')->name('deletepart');

        // EXAM ASSIGN
        Route::get('/manageexamassign', 'Manageexamassign')->name('manageexamassign');
        Route::get('/addexamassign', 'Addexamassign')->name('addexamassign');
        Route::POST('/insertassign', 'InsertAssign')->name('insertassign');
        Route::get('/editassign/{id}', 'EditAssign')->name('editassign');
        Route::POST('/updateassign/{id}', 'UpdateAssign')->name('updateassign');
        Route::get('/showassign/{id}', 'ShowAssign')->name('showassign');
        Route::get('/deleteassign/{id}', 'DeleteAssign')->name('deleteassign');

        // EXAM WORKINGDAYS
        Route::get('/manageexamworkingdays', 'Manageexamworkingdays')->name('manageexamworkingdays');
        Route::get('/addexamworkingdays', 'Addexamworkingdays')->name('addexamworkingdays');
        Route::POST('/insertworking', 'InsertWorking')->name('insertworking');
        Route::get('/editworking/{id}', 'Editworking')->name('editworking');
        Route::POST('/updateworking/{id}', 'Updateworking')->name('updateworking');
        Route::get('/showworking/{id}', 'Showworking')->name('showworking');
        Route::get('/deleteworking/{id}', 'Deleteworking')->name('deleteworking');


        // EXAM WORKINGDAYS
        Route::get('/resultsetting', 'ResultSetting')->name('resultsetting');

        // EXAM ExamEligibility
        Route::get('/exameligibility', 'ExamEligibility')->name('exameligibility');

        // EXAM SeatPlan
        Route::get('/examseatplan', 'ExamSeatplan')->name('examseatplan');

        // EXAM Attendance
        Route::get('examattendance', 'ExamAttendance')->name('examattendance');

        // EXAM AttendanceSUbject
        Route::get('examattensubject', 'ExamattenSubject')->name('examattensubject');

        // EXAM AttendanceSUbject
        Route::get('examattenexam', 'ExamattenExam')->name('examattenexam');
    });

    Route::controller(WorkingShiftController::class)->prefix('/hr')->group(function () {
        Route::get('/working-shift', 'allWorkingShifts')->name('workingshifts');
        Route::get('/add-working-shift', 'addWorkingShift')->name('add.workingshift');
        Route::get('/show-working-shift/{id}', 'showWorkingShift')->name('show.workingshift');
        Route::get('/edit-working-shift/{id}', 'editWorkingShift')->name('edit.workingshift');
        //Show Page END
        //Development Part Start
        Route::post('/input', 'input')->name('shift.input');
        Route::post('/edit', 'edit')->name('shift.edit');
        Route::post('/delete', 'delete')->name('shift.delete');
    });

    Route::controller(EmployeeController::class)->prefix('/hr')->group(function () {
        Route::get('/employees', 'allEmployees')->name('all.employees');
        Route::get('/add-employee', 'addEmployee')->name('add.employee');
        Route::post('/store-employee', 'storeEmployee')->name('store.employee');
        Route::get('/show-employee/{id}', 'showEmployee')->name('show.employee');
        Route::get('/edit-employee/{id}', 'editEmployee')->name('edit.employee');
        Route::post('/update-employee/{id}', 'updateEmployee')->name('update.employee');
        Route::get('/delete-employee/{id}', 'deleteEmployee')->name('delete.employee');
        Route::get('/search-employee', 'searchEmployee')->name('search.employee');
        Route::post('/searched-employee', 'searchedEmployee')->name('searched.employee');
        Route::get('/employee-id', 'employeeID')->name('id.employee');
        Route::post('/api/fetch-designation', 'fetchDesignation');
        Route::post('/api/fetch-employees', 'fetchEmployees');
        Route::post('/employee-id-card', 'employeeIDCard')->name('showId.employee');
        Route::post('/employeeId/download', 'downloadId')->name('employee.downloadID');
        Route::get('/export-employee', 'exportEmployee')->name('export.employee');
    });

    Route::controller(EmployeetypeController::class)->prefix('/hr')->group(function () {
        Route::get('/employeetype', 'allEmployeetype')->name('employeetype');
        Route::get('/add-employeetype', 'addEmployeetype')->name('add.employeetype');
        Route::post('/store-employeetype', 'storeEmployeetype')->name('store.employeetype');
        Route::get('/show-employeetype/{id}', 'showEmployeetype')->name('show.employeetype');
        Route::get('/edit-employeetype/{id}', 'editEmployeetype')->name('edit.employeetype');
        Route::post('/update-employeetype/{id}', 'updateEmployeetype')->name('update.employeetype');
        Route::get('/delete-employeetype/{id}', 'deleteEmployeetype')->name('delete.employeetype');
    });

    Route::controller(DesignationController::class)->prefix('/hr')->group(function () {
        Route::get('/designation', 'allDesignation')->name('designations');
        Route::get('/add-designation', 'addDesignation')->name('add.designation');
        Route::post('/store-designation', 'storeDesignation')->name('store.designation');
        Route::get('/show-designation/{id}', 'showDesignation')->name('show.designation');
        Route::get('/edit-designation/{id}', 'editDesignation')->name('edit.designation');
        Route::post('/update-designation/{id}', 'updateDesignation')->name('update.designation');
        Route::get('/delete-designation/{id}', 'deleteDesignation')->name('delete.designation');
    });


});


require __DIR__ . '/auth.php';
require __DIR__ . '/academic_module.php';
require __DIR__ . '/employeattendence.php';
require __DIR__ . '/result.php';
require __DIR__ . '/boucher.php';
require __DIR__ . '/student_attendance.php';
require __DIR__ . '/leave_module.php';
require __DIR__ . '/UserManagement.php';
require __DIR__ . '/Promotion.php';
require __DIR__ . '/finance_module.php';
require __DIR__ . '/student_account.php';
require __DIR__ . '/learning_module.php';
require __DIR__ . '/finance_module.php';
require __DIR__ . '/student_account.php';
require __DIR__ . '/website_module.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
