@extends('layouts.main')

@section('style') 
<style>
.card {
    padding: 10px;
}
</style>
@endsection  

@section('modal') 

@endsection  

@section('content')
<div class="main" style="background-image: url('{{url('')}}/img/bg1.png')">
    <div class="register">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0 flex-grow-1">สมัครสมาชิก</h4>
                <div class="row mt-3">
                    <div class="col-6">
                        <div>
                            <label for="placeholderInput" class="form-label">User ID</label>
                            <input type="password" class="form-control" id="placeholderInput" placeholder="User ID">
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <label for="placeholderInput" class="form-label">Password</label>
                            <input type="password" class="form-control" id="placeholderInput" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div>
                            <label for="placeholderInput" class="form-label">ชื่อ</label>
                            <input type="password" class="form-control" id="placeholderInput" placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div>
                            <label for="placeholderInput" class="form-label">นามสกุล</label>
                            <input type="password" class="form-control" id="placeholderInput" placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <div>
                            <label for="placeholderInput" class="form-label">อายุ</label>
                            <input type="password" class="form-control" id="placeholderInput" placeholder="อายุ">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <h4>รสนิยมอาหารที่ชื่นชอบ</h4>
                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-warning mb-3">
                            <input class="form-check-input" type="checkbox" id="formCheck9" checked>
                            <label class="form-check-label" for="formCheck9">
                                อาหารไทย
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-warning mb-3">
                            <input class="form-check-input" type="checkbox" id="formCheck9" checked>
                            <label class="form-check-label" for="formCheck9">
                                อาหารญี่ปุ่น
                            </label>
                        </div>
                    </div>
                    <div class="col-4">

                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-warning mb-3">
                            <input class="form-check-input" type="checkbox" id="formCheck9" checked>
                            <label class="form-check-label" for="formCheck9">
                                อาหารฟาสต์ฟู้ด
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-warning mb-3">
                            <input class="form-check-input" type="checkbox" id="formCheck9" checked>
                            <label class="form-check-label" for="formCheck9">
                                อาหารเพื่อสุขภาพ
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('script')  

@endsection