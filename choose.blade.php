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
<div class="main" style="background-image: url('{{url('')}}/img/bg3.png')">
    <div class="row">
        <div class="col-6">
            </button><button type="button" class="btn btn-success btn-animation waves-effect waves-light btn-lg" data-text="คำนวณแคลอรี่ตามอาหารที่คุณทาน"><span>คำนวณแคลอรี่ตามอาหารที่คุณทาน</span></button>
        </div>
        <div class="col-6">
            </button><button type="button" class="btn btn-success btn-animation waves-effect waves-light btn-lg" data-text="คำนวณแคลอรี่ในแต่ละมื้อของคุณ"><span>คำนวณแคลอรี่ในแต่ละมื้อของคุณ</span></button>
        </div>
    </div>
</div>  
@endsection 

@section('script')  

@endsection