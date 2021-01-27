@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/find/show" method="GET">
                <div class="col-md">
                    <label>เลือกวันที่</label>
                    <div class="form-group">
                        <div class="input-group date"  data-target-input="nearest">
                            <input type="month" id="month" name="month" />
                        </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Show Report">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
