@extends('layout.layout')
@section('contant')
    <div class="container">
        <h2>Create</h2>
        <form class="form-group"  method="post" action="{{route('store_q')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="form-group pad">
                <label class="col-md-2" >Questionair Name:</label>
                <div class="col-md-10">
                <input type="text" name="name" class="form-control"  placeholder="Enter Questionair name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2" >Duration:</label>
                <div class="col-md-5">
                    <input type="text" name="duration" class="form-control"  placeholder="Enter Duration">
                </div>
                <div class="col-md-5">
                    <select name="time" class="form-control" id="sel1">
                        <option value="min">Minutes</option>
                        <option value="hr">Hours</option>

                    </select>
                </div>
            </div>
            <div class="form-group pad">
                <label class="col-md-2" >Can Resume?:</label>
                <div class="col-md-10">
                    <label class="radio-inline">
                        <input type="radio" name="resume" value="Yes">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="resume" value="No">No
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-default" style="margin-top: 2%;">Submit</button>
        </form>
    </div>

@endsection