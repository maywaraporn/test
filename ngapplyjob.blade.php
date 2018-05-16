@extends('layouts.master')
@section('title', 'Newgen Airways Apply Job')
@section('titlemeta')

@endsection
@section('css')
    <style>
        .thead-light th{
            font-weight: normal;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        @if ( session()->has('message') )
            <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="col-lg-12" align="center">
            <img src="../images/job.png" width="100%">
            <div align="center" style="top:40px;"><h3><br>Job Application Form</h3></div>
            <div align="center" style="top:40px;"><h4>NewGen Airways Company Limited</h4></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <small>1. กรุณากรอกข้อมูลให้ครบถ้วนทุกข้อโดยละเอียด</small><br>
                <small>2. ผู้ที่เขียนภาษาอังกฤษได้โปรดกรอกใบสมัครเป็นภาษาอังกฤษ</small>
            </div>
            <div class="col-lg-6">
                <small>1. All requested information must be finished and completed</small><br>
                <small>2. Application that are able to write English should complete the application in English</small>
            </div>
        </div>
        <br><hr>

        <form action="/insert" method="post">
            {{ csrf_field()}}
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="position_st">ตำแหน่งงานที่สมัคร / Position Applied For</label>
                    <input type="text" class="form-control" id="position_st" name="position_st" placeholder="1.">
                </div>
                <div class="form-group col-md-6">
                    <label for="position_nd">ตำแหน่งงานที่สมัคร / Position Applied For</label>
                    <input type="text" class="form-control" id="position_nd" name="position_nd" placeholder="2.">
                </div>
                <div class="form-group col-md-6">
                    <label for="salary">เงินเดือนที่ต้องการ </label>
                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Expected Salary">
                </div>
                <div class="form-group col-md-6">
                    <label for="startdate">วันที่พร้อมจะเริ่มงาน </label>
                    <input type="date" class="form-control" id="startdate" name="startdate" placeholder="Available Start Date">
                </div>
            </div>

            <hr>
            {{--  ประวัติส่วนบุคคล Personal Data  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>ประวัติส่วนบุคคล Personal Data</b></h6>
            </div>
            <div class="form-row">
                <div class="form-group col-md-9">
                  <label for="fullname">ชื่อ-นามสกุล</label>
                  <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Name - Surname">
                </div>
                <div class="form-group col-md-3" style="padding-left: 15px;">
                    <label for="sex">เพศ / Sex</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="sex" value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">ชาย/Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="sex" value="2">
                        <label class="form-check-label" for="exampleRadios2">หญิง/Female</label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="birthdate">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Date of Birth">
                </div>
                <div class="form-group col-md-2">
                    <label for="age">อายุ</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age">
                </div>
                <div class="form-group col-md-3">
                    <label for="race">เชื้อชาติ</label>
                    <input type="text" class="form-control" id="race" name="race" placeholder="Race">
                </div>
                <div class="form-group col-md-3">
                    <label for="nationality">สัญชาติ</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
                </div>
                <div class="form-group col-md-2">
                    <label for="religion">ศาสนา</label>
                    <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion">
                </div>
                <div class="form-group col-md-2">
                    <label for="birthplace">จังหวัดที่เกิด</label>
                    <input type="text" class="form-control" id="birthplace" name="birthplace" placeholder="Place of Birth">
                </div>
                <div class="form-group col-md-2">
                    <label for="height">ส่วนสูง</label>
                    <input type="number" class="form-control" id="height" name="height" placeholder="Height (cms)">
                </div>
                <div class="form-group col-md-2">
                    <label for="weight">น้ำหนัก</label>
                    <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight (kgs)">
                </div>
                <div class="form-group col-md-2">
                    <label for="complexion">สีผิว</label>
                    <input type="text" class="form-control" id="complexion" name="complexion" placeholder="Complexion">
                </div>
                <div class="form-group col-md-2">
                    <label for="mark">ตำหนิ/แผลเป็น</label>
                    <input type="text" class="form-control" id="mark" name="mark" placeholder="Identifying Mark">
                </div>
                <div class="form-group col-md-6">
                    <label for="idcard">เลขประจำตัวประชาชน</label>
                    <input type="number" class="form-control" id="idcard" name="idcard" placeholder="Identification Card No.">
                </div>
                <div class="form-group col-md-3">
                    <label for="issued">ออกให้ ณ / Issued by</label>
                    <input type="text" class="form-control" id="issued" name="issued" placeholder=".">
                </div>
                <div class="form-group col-md-3">
                    <label for="expiry">หมดอายุ / Expiry Date</label>
                    <input type="date" class="form-control" id="expiry" name="expiry" placeholder="">
                </div>
                <div class="form-group col-md-9">
                    <label for="address_idcard">ที่อยู่ตามบัตรประชาชน</label>
                    <input type="text" class="form-control" id="address_idcard" name="address_idcard" placeholder="Address on Identification Card">
                </div>
                <div class="form-group col-md-3">
                    <label for="tel_st">โทรศัพท์ / Tel.No.</label>
                    <input type="number" class="form-control" id="tel_st" name="tel_st" placeholder="Enter Tel.No. 10 digits">
                </div>
                <div class="form-group col-md-12">
                    <label for="address_present">ที่อยู่ปัจจุบันที่สามารถติดต่อได้สะดวก</label>
                    <input type="text" class="form-control" id="address_present" name="address_present" placeholder="Present address and telephone number when be able to contact conveniently">
                </div>
                <div class="form-group col-md-3">
                    <label for="tel_home">โทรศัพท์บ้าน / Tel.No.</label>
                    <input type="number" class="form-control" id="tel_home" name="tel_home" placeholder="Enter Tel.No. 10 digits">
                </div>
                <div class="form-group col-md-3">
                    <label for="mobile_st">โทรศัพท์เคลื่อนที่ / Mobile Number</label>
                    <input type="number" class="form-control" id="mobile_st" name="mobile_st" placeholder="Enter mobile 10 digits">
                </div>
                <div class="form-group col-md-3">
                    <label for="mobile_nd">โทรศัพท์เคลื่อนที่ / Mobile Number</label>
                    <input type="number" class="form-control" id="mobile_nd" name="mobile_nd" placeholder="Enter mobile 10 digits">
                </div>
                <div class="form-group col-md-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">ชนิดของที่อยู่ผู้สมัคร
                    Type of residence</div>
                <div class="col-md-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">ของตนเอง [Own house]</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2">
                        <label class="form-check-label" for="inlineCheckbox2">เช่า/หอพัก [Rent/Apartment]</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                        <label class="form-check-label" for="inlineCheckbox3">กับเพื่อน/ญาติ [With friend/Relative]</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="4">
                        <label class="form-check-label" for="inlineCheckbox3">ที่อยู่ราชการ [Official house]</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="5">
                        <label class="form-check-label" for="inlineCheckbox3">อื่นๆ [Other]</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="father_name">ชื่อบิดา</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Father's Name">
                </div>
                <div class="form-group col-md-2">
                    <label for="father_age">อายุ</label>
                    <input type="number" class="form-control" id="father_age" name="father_age" placeholder="Age">
                </div>
                <div class="form-group col-md-2">
                    <label for="father_nationality">สัญชาติ</label>
                    <input type="text" class="form-control" id="father_nationality" name="father_nationality" placeholder="Nationality">
                </div>
                <div class="form-group col-md-2">
                    <label for="father_job">อาชีพ</label>
                    <input type="text" class="form-control" id="father_job" name="father_job" placeholder="Occupation">
                </div>
                <div class="form-group col-md-6">
                    <label for="mother_name">ชื่อมารดา</label>
                    <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Mother's Name">
                </div>
                <div class="form-group col-md-2">
                    <label for="mother_age">อายุ</label>
                    <input type="number" class="form-control" id="mother_age" name="mother_age" placeholder="Age">
                </div>
                <div class="form-group col-md-2">
                    <label for="mother_nationality">สัญชาติ</label>
                    <input type="text" class="form-control" id="mother_nationality" name="mother_nationality" placeholder="Nationality">
                </div>
                <div class="form-group col-md-2">
                    <label for="mother_job">อาชีพ</label>
                    <input type="text" class="form-control" id="mother_job" name="mother_job" placeholder="Occupation">
                </div>
            </div>
                
            <div class="form-group row">
                <div class="col-md-2">สถานภาพสมรส
                    Marital Status</div>
                <div class="col-md-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">โสด Single</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2">
                        <label class="form-check-label" for="inlineCheckbox2">แต่งงาน Married</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                        <label class="form-check-label" for="inlineCheckbox3">หย่า Divorced</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="4">
                        <label class="form-check-label" for="inlineCheckbox3">ม่าย Widowed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="5">
                        <label class="form-check-label" for="inlineCheckbox3">แยกกันอยู่ Separated</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="6">
                        <label class="form-check-label" for="inlineCheckbox3">
                            จำนวนบุตร Number of children
                            <input type="number" id="no_child" name="no_child" style="width: 49px; height: 26px;"> คน
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="spouse_name">ชื่อคู่สมรส</label>
                    <input type="text" class="form-control" id="spouse_name" name="spouse_name" placeholder="Spouse's Name">
                </div>
                <div class="form-group col-md-2">
                    <label for="spouse_age">อายุ</label>
                    <input type="number" class="form-control" id="spouse_age" name="spouse_age" placeholder="Age">
                </div>
                <div class="form-group col-md-2">
                    <label for="spouse_nationality">สัญชาติ</label>
                    <input type="text" class="form-control" id="spouse_nationality" name="spouse_nationality" placeholder="Nationality">
                </div>
                <div class="form-group col-md-2">
                    <label for="spouse_job">อาชีพ</label>
                    <input type="text" class="form-control" id="spouse_job" name="spouse_job" placeholder="Occupation">
                </div>
                <div class="form-group col-md-6">
                    <label for="spouse_empname">ชื่อสถานที่ทำงานคู่สมรส</label>
                    <input type="text" class="form-control" id="spouse_empname" name="spouse_empname" placeholder="Spouse Employer's Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="spouse_jobat">สถานที่ทำงานคู่สมรส</label>
                    <input type="text" class="form-control" id="spouse_jobat" name="spouse_jobat" placeholder="Address">
                </div>

                <div class="col-md-12">จำนวนพี่น้องรวมทั้งตัวท่าน/Number of Brother & Sister Include applicant :</div>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class="thead-light">
                            <th>คนที่<br>No.</th>
                            <th>ชื่อ-นามสกุล<br>Name-Surname</be></th>
                            <th>อายุ<br>Age</th>
                            <th>อาชีพ/ตำแหน่ง<br>Occupation/Position</th>
                            <th>บริษัท<br>Company</th>
                            <th>เบอร์โทรศัพท์ติดต่อ<br>Contact Number</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="number" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{--  การศึกษา Education  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>การศึกษา Education</b></h6>
            </div>
            {{--  Education 1  --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">การศึกษาสูงสุด</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Highest Education">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">ปีที่เข้าศึกษา</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Admission Year">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">ปีที่จบศึกษา</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Graduate Year">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">สถาบัน</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Institution">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">คณะ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Faculty">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">สาขา</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Major">
                </div>
                <div class="form-group col-md-4">
                    <label for="name">คุณวุฒิ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Graduate Degree">
                </div>
                <div class="form-group col-md-2">
                    <label for="name">เกรดเฉลี่ย</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Graduate Year">
                </div>
            </div>

            <hr>

            <div class="form-row">  
                {{--  Education 2  --}}
                <div class="form-group col-md-6">
                    <label for="name">การศึกษาระดับรองลงมา</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Education">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">ปีที่เข้าศึกษา</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Admission Year">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">ปีที่จบศึกษา</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Graduate Year">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">สถาบัน</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Institution">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">คณะ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Faculty">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">สาขา</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Major">
                </div>
                <div class="form-group col-md-4">
                    <label for="name">คุณวุฒิ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Graduate Degree">
                </div>
                <div class="form-group col-md-2">
                    <label for="name">เกรดเฉลี่ย</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Graduate Year">
                </div>
            </div>

            {{--  ประสบการณ์ทำงาน Record of Previous Employment  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>ประสบการณ์ทำงาน Record of Previous Employment</b></h6>
            </div>
            {{--  Company 1  --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">ชื่อบริษัท</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Company's Name">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">เข้าทำงานเมื่อ</label>
                    <input type="date" class="form-control" id="name" name="name" placeholder="Start Working Date">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">ลาออกเมื่อ</label>
                    <input type="date" class="form-control" id="name" name="name" placeholder="Resigned Date">
                </div>
                <div class="form-group col-md-12">
                    <label for="name">สถานที่ตั้งบริษัทและเบอร์ติดต่อ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Previous company's address and contact number">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">ตำแหน่งเริ่มต้น</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Starting Position">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">ตำแหน่งสุดท้ายก่อนลาออก</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Last Position">
                </div>
                <div class="form-group col-md-2">
                    <label for="name">เงินเดือนล่าสุด</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Latest Salary">
                </div>
                <div class="form-group col-md-12">
                    <label for="name">เหตุผลที่ลาออก</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Reason of Resignation">
                </div>
            </div>

            <hr>

            {{--  Company 2  --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">ชื่อบริษัท</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Company's Name">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">เข้าทำงานเมื่อ</label>
                    <input type="date" class="form-control" id="name" name="name" placeholder="Start Working Date">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">ลาออกเมื่อ</label>
                    <input type="date" class="form-control" id="name" name="name" placeholder="Resigned Date">
                </div>
                <div class="form-group col-md-12">
                    <label for="name">สถานที่ตั้งบริษัทและเบอร์ติดต่อ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Previous company's address and contact number">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">ตำแหน่งเริ่มต้น</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Starting Position">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">ตำแหน่งสุดท้ายก่อนลาออก</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Last Position">
                </div>
                <div class="form-group col-md-2">
                    <label for="name">เงินเดือนล่าสุด</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Latest Salary">
                </div>
                <div class="form-group col-md-12">
                    <label for="name">ลักษณะงานที่รับผิดชอบ</label>
                    <input type="textarea" class="form-control" id="name" name="name" placeholder="Job Notes, tasks performed">
                </div>
                <div class="form-group col-md-12">
                    <label for="name">เหตุผลที่ลาออก</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Reason of Resignation">
                </div>
            </div>

            <hr>

            {{--  Company 3  --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">ชื่อบริษัท</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Company's Name">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">เข้าทำงานเมื่อ</label>
                    <input type="date" class="form-control" id="name" name="name" placeholder="Start Working Date">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">ลาออกเมื่อ</label>
                    <input type="date" class="form-control" id="name" name="name" placeholder="Resigned Date">
                </div>
                <div class="form-group col-md-12">
                    <label for="name">สถานที่ตั้งบริษัทและเบอร์ติดต่อ</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Previous company's address and contact number">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">ตำแหน่งเริ่มต้น</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Starting Position">
                </div>
                <div class="form-group col-md-5">
                    <label for="name">ตำแหน่งสุดท้ายก่อนลาออก</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Last Position">
                </div>
                <div class="form-group col-md-2">
                    <label for="name">เงินเดือนล่าสุด</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Latest Salary">
                </div>
                <div class="form-group col-md-12">
                    <label for="name">เหตุผลที่ลาออก</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Reason of Resignation">
                </div>
            </div>

            {{--  ความสามารถทางภาษา Languages Ability  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>ความสามารถทางภาษา Languages Ability</b></h6>
            </div>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="thead-light">
                        <th>ภาษาต่างประเทศ<br>Languages</th>
                        <th>ความเข้าใจ<br>Understanding</be></th>
                        <th>การพูด<br>Speaking</th>
                        <th>การอ่าน<br>Reading</th>
                        <th>การเขียน<br>writing</th>
                        <th>พิมพ์ดีด<br>Typing Speed</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder="1."></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Thai</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder="2."></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">English</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="">
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder="3."></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Computer</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="">
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{--  การฝึกอบรมพัฒนา - ดูงาน และอื่นๆ (Training, Development and Others)  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>การฝึกอบรมพัฒนา - ดูงาน และอื่นๆ (Training, Development and Others)</b></h6>
            </div>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="thead-light">
                        <th>หัวข้อการฝึกอบรม<br>Training Subject</th>
                        <th>สถาบันการฝึกอบรม<br>Institution</be></th>
                        <th>ระยะเวลา<br>Duration</th>
                        <th>ประกาศนียบัตร/ใบอนุญาต<br>Certificate / License</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{--  อื่นๆ Others  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>อื่นๆ Others</b></h6>
            </div>
            <div class="form-group row">
                <div class="col-md-4">สถานภาพทางทหาร / Military Status</div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">เกณฑ์แล้ว / Yes</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option5">
                        <label class="form-check-label" for="inlineCheckbox3">
                            ยังไม่ได้เกณฑ์ถึงกำหนดเมื่อ
                            <input type="text" id="name" name="name" style="width: 110px; height: 26px;">
                            ยกเว้น เพราะ
                            <input type="text" id="name" name="name" style="width: 120px; height: 26px;">
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8">ท่านเคยเข้ารับการรักษาพยาบาลเนื่องจากการเจ็บป่วยร้ายแรง ผ่าตัด พิการทางร่างกายหรือไม่ 
                    <br> Have you ever been hospitalized because of serious illness, had any operation or are you physically disabled?</div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">ไม่เคย / No</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">เคย / Yes</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">ท่านเคยต้องโทษหรือไม่ 
                    <br> Have you ever been arrested?</div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">ไม่เคย / No</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">เคย / Yes
                            เพราะ
                            <input type="text" id="name" name="name" style="width: 200px; height: 26px;">
                            {{--  Please describe  --}}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">ท่านมียานพาหนะส่วนตัวหรือไม่ 
                    <br> Do you have your own vehicle?</div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">ไม่มี / No</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">มี / Yes
                            ชนิด
                            <input type="text" id="name" name="name" style="width: 150px; height: 26px;">
                            หมายเลขทะเบียน
                            <input type="text" id="name" name="name" style="width: 120px; height: 26px;">
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">ท่านมีใบขับขี่หรือไม่ 
                    <br> Do you have a driving lecense?</div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">ไม่มี / No</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">มี / Yes
                            ชนิด
                            <input type="text" id="name" name="name" style="width: 150px; height: 26px;">
                            เลขที่
                            <input type="text" id="name" name="name" style="width: 120px; height: 26px;">
                        </label>
                    </div>
                </div>
            </div>

            {{--  บุคคลที่สามารถติดต่อกรณีฉุกเฉิน Emergency Contact  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>บุคคลที่สามารถติดต่อกรณีฉุกเฉิน Emergency Contact</b></h6>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">ชื่อ-นามสกุล</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name-Surname">
                </div>
                <div class="form-group col-md-2">
                    <label for="name">ความสัมพันธ์</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Relationship">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputName">Email address</label>
                    <input type="email" class="form-control" id="inputName" placeholder="">
                </div>
                <div class="form-group col-md-9">
                    <label for="inputAddress2">สถานที่ติดต่อ</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Place to contact">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputName">เบอร์โทรศัพท์</label>
                    <input type="number" class="form-control" id="inputName" placeholder="Telephone Number">
                </div>
            </div>

            {{--  บุคคลที่สามารถรับรองที่ไม่ใช่ญาติ Personal References (Please do not list relative)  --}}
            <div class="col-md-12" style="background-color: #a8d1ff">
                <h6 align="center"><b>บุคคลที่สามารถรับรองที่ไม่ใช่ญาติ Personal References (Please do not list relative)</b></h6>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="name">ชื่อ-นามสกุล</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name-Surname">
                </div>
                <div class="form-group col-md-4">
                    <label for="name">อาชีพ</label>
                    <input type="number" class="form-control" id="name" name="name" placeholder="Occupation">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress2">ที่อยู่ที่สามารถติดต่อบุคคลรับรองได้ หรือสถานที่ทำงาน</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Place to contact">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">เบอร์โทรศัพท์</label>
                    <input type="number" class="form-control" id="inputName" placeholder="Telephone Number">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Email address</label>
                    <input type="email" class="form-control" id="inputName" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8">ญาติ หรือบุคคลรู้จักในบริษัทนี้หรือไม่
                    Names of relatives or acquaintances in Newgen Airways</div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">มี Yes</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">ไม่มี No</label>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class="thead-light">
                            <th>ชื่อ<br>Name</th>
                            <th>ตำแหน่ง<br>Position</be></th>
                            <th>ฝ่าย<br>Department</th>
                            <th>ความสัมพันธ์<br>Relationship</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder="1."></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder="2."></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                                <td><input type="text" class="form-control" id="name" name="name" placeholder=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-lg-12">
                    <small>ข้าพเจ้าขอให้คำรับรองว่าข้อความรายละเอียดต่างๆ ที่กรอกไว้ในใบสมัครงานนี้ถูกต้องตามความเป็นจริงทุกประการ 
                        หากข้อความใดเป็นเท็จหรือมีการตรวจพบในภายหลัง บริษัท ฯ มีสิทธิพิจารณาเลิกจ้างข้าพเจ้าได้ทันที 
                        และข้าพเจ้ายินดีที่จะปฏิบัติตามกฎระเบียบข้อบังคับของบริษัท ฯ ทุกประการ</small>
                </div>
                <div class="col-lg-12">
                    <small>I hereby certify that every answer to the questions herein and all other information 
                        otherwise given are true and correct I understand that any incorrect or false statements 
                        will be sufficient cause for dismissal at any time.</small>
                </div>
                
                <div class="form-group form-check"><br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><small>I agree to comply with all of the existing and forthcoming order,
                        rules and regulations of the company.</small></label>
                </div>
            </div>
                
                <button type="submit" name="submit" value="Add" class="btn btn-primary">Confirm</button>
              </form>



    </div>
@endsection

@section('js')

@endsection