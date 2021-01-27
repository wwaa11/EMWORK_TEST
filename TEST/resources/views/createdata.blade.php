@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>รายการ</h1>
                @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

                <form action="/createData" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="menuName">ชื่อรายการ</label>
                        <input type="text" name="name" class="form-control">

                    </div>
                    <label for="menuPrice">จำนวน</label>
                    <div class="input-group mb-3">
                        <input type="text" inputmode="numeric" name="amount" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text">บาท</span>
                        </div>
                    </div>
                    <label for="type">Type</label>
                    <div class="input-group mb-3">
                        <select class="form-control" id="type" name="type" type="text">
                            <option>รายรับ</option>
                            <option>รายจ่าย</option>
                        </select>
                    </div>

                    <a href="/" class="btn btn-danger">ยกเลิก</a>
                    <button type="submit" class="btn btn-primary float-right">เพื่ม</button>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
