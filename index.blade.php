@extends('layouts.main')

@section('style') 
<style>
    *{
        padding: 0.1px;
    }
    .main {
        width: 1200px;
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
<div class="bg">
    <div class="main" style="background-image: url('{{url('')}}/img/bg1.png')">
        <div class="center">
            <h1>แคลที่คุณคู่ควร</h1>
            <img src="{{url('')}}/img/logo.png" class="img-fluid" alt="user-pic" width="300px">
            <h5>การคุมอาหารในแต่ละวันจะง่ายขึ้น แค่คลิ๊กง่ายๆที่ปุ่มนี้</h5>
            <button type="button" class="btn btn-success btn-animation waves-effect waves-light btn-lg" data-text="Let's Calculate!!"><span>Let's Calculate!!</span></button>
        </div>
    </div>
</div>   
@endsection 

@section('script')  

@endsection