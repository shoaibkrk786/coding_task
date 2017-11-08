@extends('layout.layout')
@section('contant')
    <div class="container">
        <h2>Add Questions</h2>
        <form  method="post" action="{{route('store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="questionair_id" value="{{$id}}"/>

            <div class="form-group pad">
                <label class="col-md-2" >question Type:</label>
                <div class="col-md-5">
                    <select name="type[]" class="form-control">
                        <option value="text">Text</option>
                        <option value="multiple choice">Multiple choice</option>

                    </select>
                </div>
            </div>
            <div class="form-group pad">
                <label class="col-md-2" for="usr">Question:</label>
                <div class="col-md-10">
                    <input type="text" name="question[]" class="form-control"  placeholder="Enter Question" required>
                </div>
            </div>
            <div class="form-group pad question">
                <label class="col-md-2" >Anser:</label>
                <div class="col-md-10">
                    <input type="text" name="anser[]" class="form-control"  placeholder="Enter Anser" required>
                </div>
            </div>
            <div class="form-group pad">
                <a href="javascript:;"  class="marg add_question">Add Question</a>
            </div>
            <div class="form-group pad">
                <label class="col-md-2" >Choice 1:</label>
                <div class="col-md-10">
                    <input type="text" name="choice_1[]" class="form-control"  placeholder="Enter Choice" required>
                </div>
            </div>
            <div class="form-group pad">
                <label class="col-md-2" >Choice 2:</label>
                <div class="col-md-10">
                    <input type="text" name="choice_2[]" class="form-control"  placeholder="Enter Choice" required>
                </div>
            </div>
            <div class="form-group pad choice">
                <label class="col-md-2" >Choice 3:</label>
                <div class="col-md-10">
                    <input type="text" name="choice_3[]" class="form-control"  placeholder="Enter Choice" required>
                </div>
            </div>
            <div class="form-group pad">
            <a href="javascript:;"  class="marg add_choice">Add Choice</a>
            </div>
            <button type="submit" class="btn btn-default" style="margin-top: 2%;">Submit</button>
        </form>
    </div>
    @endsection
@section('custom_js')
    <script type="text/javascript">
        $('.add_choice').click(function ()
         {
             $('.choice:last') .append(
                     '<div class="form-group pad">'+
                       ' <label class="col-md-2" >' +"Choice 1"+'</label>'+
                           '<div class="col-md-10">'+
                             '<input type="text" name="choice_1[]" class="form-control"  placeholder="Enter Choice">'+
                             '</div>'+
                             '</div>'+
                     '<div class="form-group pad">'+
                     ' <label class="col-md-2" >' +"Choice 2"+'</label>'+
                     '<div class="col-md-10">'+
                     '<input type="text" name="choice_2[]" class="form-control"  placeholder="Enter Choice">'+
                     '</div>'+
                     '</div>'+
                     '<div class="form-group pad">'+
                     ' <label class="col-md-2" >' +"Choice 3"+'</label>'+
                     '<div class="col-md-10">'+
                     '<input type="text" name="choice_3[]" class="form-control"  placeholder="Enter Choice">'+
                     '</div>'+
                     '</div>'
             )
        });

        $('.add_question').click(function () {
            $('.question:last') .append(
                    '<div class="form-group pad">'+
                            '<label class="col-md-2" for="usr">'+"question Type:"+'</label>'+
                            '<div class="col-md-5">'+
                            '<select name="type[]" class="form-control">'+
                            '<option value="text">'+"Text"+'</option>'+
                            '<option value="multiple choice">'+"Multiple choice"+'</option>'+
                            '</select>'+
                            '</div>'+
                            '</div>'+
                            '<div class="form-group pad">'+
                            '<label class="col-md-2" >'+"Question:"+'</label>'+
                            '<div class="col-md-10">'+
                            '<input type="text" name="question[]" class="form-control"  placeholder="Enter Question">'+
                            '</div>'+
                            '</div>'+
                            '<div class="form-group pad">'+
                            '<label class="col-md-2" >'+"Anser:"+'</label>'+
                            '<div class="col-md-10">'+
                            '<input type="text" name="anser[]" class="form-control"  placeholder="Enter Anser">'+
                            '</div>'+
                            '</div>'

            )
        });

    </script>
    @endsection