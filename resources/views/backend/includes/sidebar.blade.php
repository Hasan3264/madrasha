<aside id="sidebar" class="u-sidebar">
            <div class="u-sidebar-inner bg-gradient bdrs-30">
                <header class="u-sidebar-header">
                    <a class="u-sidebar-logo" href="{{route('dashboard')}}">
                        <img class="img-fluid" src="Logo _ Icon/preload.png" width="124px" alt="Stream Dashboard">
                    </a>
                </header>

                @php
                    $route = Route::current()->getName();
                @endphp

                <nav class="u-sidebar-nav">
                    <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                        <!-- Dashboard -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link {{ ($route == 'dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                            </a>
                        </li>
                        <!-- End Dashboard -->

                        <!-- Global Settings -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#attendances">
                                <i class="fa-solid fa-earth-africa u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Global Settings</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="attendances" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('institute.index')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Institute</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('branch.index')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Branch</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link {{ ($route == 'academic-holiday.index') ? 'active' : '' }}" href="{{route('academic-holiday.index')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Academic Holiday</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Global Settings -->

                        <!-- Academic Module -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link {{ ($route == 'allsection') ? 'active' : '' }}" href="#!" data-target="#subMenu1">
                                <i class="fa-solid fa-school u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Academic Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('allmedium') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Medium</span>
                                    </a>
                                </li>


                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('all-shift-list') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Shift List</span>
                                    </a>
                                </li>


                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('all-class-list') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Class List</span>
                                    </a>
                                </li>

                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('all-group') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Group List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('all.subject')}}">
                                        <span class="u-sidebar-nav-menu__item-title">All Subject List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Academic Module -->

                        <!-- Student Module -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#homework">
                                <i class="fa-solid fa-child u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Student Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="homework" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('students.add') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Student Admission</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('students.print-admission-form') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Print Admission Form</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('students.current-students') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Current Student List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Student Module -->

                        <!-- Routine Module -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#questions">
                                <i class="fa-solid fa-table u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Routine Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="questions" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('r.index') }}">
                                        <span class="u-sidebar-nav-menu__item-title">General Routine</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('list.Routine') }}">
                                        <span class="u-sidebar-nav-menu__item-title">List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('r.print') }}">
                                        <span class="u-sidebar-nav-menu__item-title">View/Print Routine</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Routine Module -->

                        <!-- Student Attendance -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#online-exam">
                                <i class="fa-solid fa-child u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Student Attendance</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="online-exam" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">

                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('today_attendance') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Todays Attendance</span>

                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">

                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manual_attendance') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Manual Attendence</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('absent_student') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Absent Student List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('student_attendance_details') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Attendance Details</span>
                                    </a>
                                </li>

                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('daily_attendance_summary') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Daily Attendance Summary</span>
                                    </a>
                                </li>

                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('monthly_attendance_summary') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Monthly Attendance Summary</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End  Student Module -->

                        <!-- Employee Attendence -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#employee">
                                <i class="fa-solid fa-person u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Employee Attendence</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="employee" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">

                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('today')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Todays Attendence</span>

                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('manual')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Manual Attendence</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('details')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Attendence Details</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('dailyDetails')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Daily Attendence Summary</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('monthlyDetails')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Montly Attendence Summary</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End  Employee Module -->

                        <!-- Hr Module -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#marks">
                                <i class="far fa-clipboard u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">HR Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="marks" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('employeetype') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Employee Type</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('designations') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Designation</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('workingshifts') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Working Shift</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('add.employee') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Add Employee</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('all.employees') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Employee List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('search.employee') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Employee's Search</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('id.employee') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Employee's ID Card</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('export.employee') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Employee's Export(Att.)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Hr Module -->

                        <!-- Leave Module  -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#students">
                                <i class="fa-solid fa-right-from-bracket u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Leave Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="students" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('leave_type')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Leave Types</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('leave_entry') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Leave Entry</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('leave') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Manage Leaves</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Leave Module -->

                        <!-- Pay roll Module -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#profile">
                                <i class="fa-solid fa-dollar-sign u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Payroll Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="profile" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('payroll-head.index') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Payroll Head</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('employee-payscale.index') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Employee Payscale</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('employee-salary.index')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Employees Salary Chart</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('employee.salary-sheet.generate')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Generate Salary Sheet</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('employee.salary.payment')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Employees Salary Payment</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('employee.salary.report')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Employees Salary Report</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('employee.payslip.print')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Employees Pay Slip Print</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Pay roll Module -->

                        <!-- Exam Settings -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#exam">
                                <i class="fa-solid fa-copy u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Exam Settings</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="exam" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('managegrade') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Grade Points</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manageexamterms') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Exam Terms</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manageexamparts') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Exam Part</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manageexamassign') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Assign Exam</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manageexamworkingdays') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Working Days</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('resultsetting') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Result Setting</span>
                                    </a>
                                </li>
                                {{-- <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('exameligibility') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Exam Eligibilities</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('examseatplan') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Exam Seat Plan</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('examattendance') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Exam Attn. Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('examattensubject') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Exam Attn.(Subject)</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('examattenexam') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Exam Attn.(Exam)</span>
                                    </a>
                                </li> --}}
                             </ul>
                        </li>
                        <!--  Exam Settings -->

                        <!-- Result Settings -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#result">
                                <i class="fa-solid fa-table u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Result Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="result" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">

                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('blanksheet')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Marks Blank Sheet</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('entrysubject')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Marks Entry (Subject)</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('entryexam')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Marks Entry (Exam)</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('setting')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Result Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Result Settings -->

                        <!--  Result Reports -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#reports">
                                <i class="fa-solid fa-flag u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Result Reports</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="reports" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('maritlist')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Students Merit List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('reportcard')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Students Report Card</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('wise')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Students Wise Transcipt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Result Reports -->

                        <!--  Finance Module -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#finance">
                                <i class="fa-solid fa-dollar-sign u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Finance Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="finance" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('account_head') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Account Head</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Finance Module -->

                        <!--  Student Accounts -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#stuAccount">
                                <i class="fa fa-user u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Student Accounts</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="stuAccount" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('student_admission_fee') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Admission Fees</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('monthly_fee') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Monthly Fees</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('student_fee') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Student Fees</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('student_waiver') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Student Waiver</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('quick_collection') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Quick Collection</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Student Accounts -->

                        <!--  Account Boucher -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#boucher">
                                <i class="fa-solid fa-money-check-dollar u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Accounts Boucher</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="boucher" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('recive')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Recive Boucher(+)</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('paymnet')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Payment Boucher(-)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Account Boucher -->

                        <!--  Finance Reports -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#fireport">
                                <i class="fa-solid fa-flag u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Finance Reports</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="fireport" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.daily-collection') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Daily Collection</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.daily-collection') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Fees Collection</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.students-dues') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Student Dues</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.students-ledger') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Students Ledger</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.students-waiver-report') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Students Waiver</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.accounts-ledger') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Accounts Ledger</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.trial-balance') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Trial Balance</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.cash-book') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Cash Book</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.bank-book') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Bank Book</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.balance-sheet') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Balance Sheet</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('finance-reports.payable-receivable') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Payable/Recivable</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Finance Reports -->

                        <!--  Learning Module -->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#learning">
                                <i class="fa-brands fa-leanpub u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Learning Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="learning" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_live_class') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Live Classes</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('home_work') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Home Work List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('hw_submitted') }}">
                                        <span class="u-sidebar-nav-menu__item-title">H.W Submitted</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('class_work_list') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Class Work List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('cw_submitted') }}">
                                        <span class="u-sidebar-nav-menu__item-title">C.W Submitted</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('lesson_plan') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Leason Plan List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('syllabus') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Academic Syllabus</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Learning Module -->

                        <!--  Website Module -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#website">
                                <i class="fa-solid fa-globe u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Website Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="website" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('slide_show') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Banner</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('message_corner') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Teachers</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_menu') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Menu List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_content') }}">
                                        <span class="u-sidebar-nav-menu__item-title">About Content</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('breaking_news') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Breaking News</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_album') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Album List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_gallery') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Board Of Director List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_news') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Latest News List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_event') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Events List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('facility') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Facility List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('testimonials.index') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Testimonial List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage.about_content') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Add About Page Content</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('TeachContIndex') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Teachers Content</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_notice') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Notice List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_career') }}">
                                        <span class="u-sidebar-nav-menu__item-title">All Career List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('board_result') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Board Result List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_link') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Usefull Link List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{ route('manage_social_media') }}">
                                        <span class="u-sidebar-nav-menu__item-title">Social Media List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Website Module -->

                        <!-- User Managment -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#user">
                                <i class="fa-solid fa-users u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title"> User Managment</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="user" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('studentlist')}}">
                                        <span class="u-sidebar-nav-menu__item-title">All User List</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item d-none">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('studentsms')}}">
                                        <span class="u-sidebar-nav-menu__item-title">SMS User(Students)</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link d-none" href="{{route('employesms')}}">
                                        <span class="u-sidebar-nav-menu__item-title">SMS User(Employees)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  User Managment -->

                        <!-- Promotional Module-->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#promotion">
                                <i class="fa-solid fa-splotch u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Promotional Module</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="promotion" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('mygroup')}}">
                                        <span class="u-sidebar-nav-menu__item-title">My Groups</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('mycontect')}}">
                                        <span class="u-sidebar-nav-menu__item-title">My Contacts</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('inportcontuct')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Import Contacts</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('sendcustomesms')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Send Custom SMS</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="{{route('senddetailsreport')}}">
                                        <span class="u-sidebar-nav-menu__item-title">Send Details Reports</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--  Promotional Module -->

                        <!-- Branch Control-->
                        <li class="u-sidebar-nav-menu__item d-none">
                            <a class="u-sidebar-nav-menu__link active" href="branch_control.html">
                                <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Branch Control</span>
                            </a>
                        </li>
                        <!--  Branch Control -->

                    </ul>
                </nav>
            </div>
        </aside>
