@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">

<section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Result Settings</h2>
                </header>
                
        <div class="academic_info">
        <h5>
        <i class="fa-solid fa-circle-info"></i>   Result Settings
        </h5>

        <div class="container">

        <div class="row mt-3 mb-4">
            
            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck">Student Photo</h6>
                </div>
            </div>

            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" checked id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck"> Merit List Subjects</h6>
                </div>
            </div>

        </div>

        <div class="row mt-3 mb-4">
            
            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck">Watermark Background</h6>
                </div>
            </div>

            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" checked id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck"> Part Percent</h6>
                </div>
            </div>

        </div>


        <div class="row mt-3 mb-4">
            
            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck">Comment Show</h6>
                </div>
            </div>

            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" checked id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck"> Medium Show</h6>
                </div>
            </div>

        </div>


        <div class="row mt-3 mb-4">
            
            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck">topBanner</h6>
                </div>
            </div>

            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" checked id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck"> Manual Attendance</h6>
                </div>
            </div>

        </div>

        <div class="row mt-3 mb-4">
            
            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck"> Total Subject Fail Count</h6>
                </div>
            </div>

            <div class="col-6">
                <div class="sms_div">
                    <label class="switch" for="checkbox">
                    <input type="checkbox" checked id="checkbox" />
                    <div class="slider round"></div>
                    </label>
                    <h6 class="checkbox_txt" id="printCheck">Merit By Marks</h6>
                </div>
            </div>

        </div>


        </div>

        </div>

        <div class="academic_info">

        <div class="container">

            <div class="row mt-3 mb-4">
                
                <div class="col-6">
                    <label for="">Left Signature</label>
                    <input type="file" name=""  id="file">
                        <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label>
                </div>

                <div class="col-6">
                    <label for="">Right Signature</label>
                    <input type="file" name=""  id="file">
                    <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label>
            </div>

                <div class="col-6 mt-4">
                    <label for="">Center Signature</label>
                    <input type="file" name=""  id="file">
                    <label for="file" id="fileCustom" class="add_messageFile"><i class="fa-solid fa-camera"></i> Choose Photo</label>
            </div>

            </div>

            </div>
        </div>
        </div>

        <div class="academic_info">


        <div class="container">

            <div class="row mt-3 mb-4">
                
                <div class="col-6">
                <label for="">Body Font Size</label>
                    <select name="" id="">
                        <option value="">4</option>
                        <option value="">6</option>
                        <option value="">8</option>
                        <option value="" selected>10</option>
                        <option value="">12</option>
                        <option value="">14</option>
                        <option value="">16</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="">Body Font Style</label>
                    <select name="" id="">
                        <option value="">Regular</option>
                        <option value="">Italic</option>
                        <option value="">Bold</option>
                    </select>
                </div>

                <div class="col-6 mt-3">
                    <label for="">Body Font Color</label>
                    <input type="color" name="" id="">
                </div>

                <div class="col-6 mt-3">
                    <label for="">GPA Color</label>
                    <input type="color" name="" id="">
                </div>

            </div>

            <div class="row mt-3 mb-4">
                
                <div class="col-6">
                    <label for="">Institute Name Color</label>
                    <input type="color" name="" id="">
                </div>

                <div class="col-6">
                    <label for="">Remarks & Progress Color</label>
                    <input type="color" name="" id="">
                </div>

            </div>

            <div class="row mt-3 mb-4">
                
            
                <div class="col-6">
                    <label for="">Table Header Color</label>
                    <input type="color" name="" id="">
                </div>

                <div class="col-6">
                    <label for="">Table Footer Color</label>
                    <input type="color" name="" id="">
                </div>

            </div>


            <div class="row mt-3 mb-4">
                
                <div class="col-6">
                    <label for="">Fail Letter Grade Color</label>
                    <input type="color" name="" id="">
                </div>

                <div class="col-6">
                    <label for="">Fail Part Marks Color</label>
                    <input type="color" name="" id="">
                </div>

            </div>

        </div>
        </div>


        <p class="text-center">
        <a href="#" class="btn btn-primary px-5">Update</a>
        <a href="#" class="btn cancel_btn px-5 text-white">Cancel</a>
        </p>                 

        </div>    
</section>
</div>
@endsection