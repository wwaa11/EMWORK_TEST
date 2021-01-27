@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/report/show" method="GET">
                <div class="col-md">
                    <label>เลือกวันที่</label>
                    <div class="form-group">
                        <div class="input-group date"  data-target-input="nearest">
                            <input type="text" id="date-start" name="dateStart" class="form-control datetimepicker-input" data-target="#date-start" data-toggle="datetimepicker" />
                            <div class="input-group-append" >
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Show Report">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
