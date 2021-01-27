@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered " style="table-layout: fixed;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ชื่อรายการ</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col">วันที่สร้าง</th>
                            <th scope="col">อัพเดตครั้งสุดท้าย</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr>
                            <td class="align-middle overflow-hidden">{{$data->name}}</td>
                            <td class="align-middle overflow-hidden">{{$data->type}}</td>
                            <td class="align-middle overflow-hidden">{{$data->amount}}</td>
                            <td class="align-middle overflow-hidden">{{$data->created_at->toDateString()}}</td>
                            <td class="align-middle overflow-hidden">{{$data->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <h2>เดือน {{$month}} </h2>
                    <h2>รวมรายรับ {{$income}} </h2>
                    <h2>รวมรายจ่าย {{$pay}} </h2>
                    <h2>คงเหลือ {{$total}} </h2>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
