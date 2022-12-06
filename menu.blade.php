@extends('layouts.main')

@section('style') 
<style>
    *{
        padding: 0.1px;
    }
    .main {
        width: 1050px;
        height: 800px;
        margin: 5rem auto;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2)
    }
    </style>
@endsection  

@section('modal') 

@endsection  

@section('content')
<div class="main" style="background-image: url('{{url('')}}/img/bg4.png')">
    <div class="content">
        <h1>Brand</h1>
        <h4>รายการอาหาร</h4>
        <div class="menu">
                <div class="row mt-3">
                    <div class="col-6">
                        <h3>รายการที่ 1</h3>
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" id="basiInput">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h3>รายการที่ 2</h3>
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" id="basiInput">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h3>รายการที่ 3</h3>
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" id="basiInput">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <h3>รายการที่ 4</h3>
                    </div>
                    <div class="col-6">
                        <input type="password" class="form-control" id="basiInput">
                    </div>
                </div>
                <button type="button" class="btn btn-success btn-animation waves-effect waves-light btn-lg mt-3" data-text="คำนวณ"><span>คำนวณ</span></button>
        </div>
    </div>
</div> 
@endsection 

@section('script')  

@endsection