@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
    <section class="es-form-area">
        <div class="card">
            <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                <h2 class="text-white mb-0">Academic Calender</h2>
            </header>
            <div class="branch_edit">
    
                <div class="row">
                    <div class="col-md-4">
                        <div class="holiday_list">
                            <h4><i class="fa-solid fa-plus"></i> Add Event By Dragging</h4>
                          
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">Activities</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Holidays</a>
                                </li>
                            </ul>
    
                            <div class="holidays_name">
                                <ul>
                                    <li><a href="#">Exam</a></li>
                                    <li><a href="#">Annual Farewall</a></li>
                                    <li><a href="#">Summer Holiday</a></li>
                                    <li><a href="#">Exam Notice</a></li>
                                    <li><a href="#">Eid Ul Fitor</a></li>
                                    <li><a href="#">Victory Day</a></li>
                                    <li><a href="#">Eid Ul Azha</a></li>
                                </ul>
                            </div>
    
    
                        </div>
                    </div>
    
                    <div class="col-md-8">
                        <div class="container-fluid">
                           <div id='calendar'></div>
                         </div>
                    </div>
    
                </div>
    
            </div>
        </div>    
    </section>

</div>
@endsection