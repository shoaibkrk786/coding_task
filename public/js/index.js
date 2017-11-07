/**
 * Created by Hafiz Shoaib on 10/27/2017.
 */
$('.add_choice').click(function ()
{
    $('.choice:last') .append(
        '<div class="form-group pad">'+
        ' <label class="col-md-2" for="usr">' +"Choice 1"+'</label>'+
        '<div class="col-md-10">'+
        '<input type="text" class="form-control"  placeholder="Enter Choice">'+
        '</div>'+
        '</div>'+
        '<div class="form-group pad">'+
        ' <label class="col-md-2" for="usr">' +"Choice 2"+'</label>'+
        '<div class="col-md-10">'+
        '<input type="text" class="form-control"  placeholder="Enter Choice">'+
        '</div>'+
        '</div>'+
        '<div class="form-group pad">'+
        ' <label class="col-md-2" for="usr">' +"Choice 3"+'</label>'+
        '<div class="col-md-10">'+
        '<input type="text" class="form-control"  placeholder="Enter Choice">'+
        '</div>'+
        '</div>'
    )
});

$('.add_question').click(function () {
    $('.question:last') .append(
        '<div class="form-group pad">'+
        '<label class="col-md-2" for="usr">'+"question Type:"+'</label>'+
        '<div class="col-md-5">'+
        '<select class="form-control">'+
        '<option value="text">'+"Text"+'</option>'+
        '<option value="Hours">'+"Multiple choice"+'</option>'+
        '</select>'+
        '</div>'+
        '</div>'+
        '<div class="form-group pad">'+
        '<label class="col-md-2" for="usr">'+"Question:"+'</label>'+
        '<div class="col-md-10">'+
        '<input type="text" class="form-control"  placeholder="Enter Question">'+
        '</div>'+
        '</div>'

    )
});
