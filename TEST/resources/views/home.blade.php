@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('รายการ') }}
                    <a href="/createData"> <button class="btn btn-success float-right">สร้างรายการ</button></a>
                </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered " style="table-layout: fixed;">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ชื่อรายการ</th>
                                    <th scope="col">ประเภท</th>
                                    <th scope="col">จำนวน</th>
                                    <th scope="col">วันที่สร้าง</th>
                                    <th scope="col">อัพเดตครั้งสุดท้าย</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
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
                                    <td class="align-middle text-center">
                                        <a href="createData/{{$data->id}}/edit" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="createData/{{$data->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
