

// datepicker1
    $( "#datepicker" ).datepicker();
    $("#prev").click(function(){
        var date = $('#datepicker').datepicker('getDate', '-1d');
        date.setDate(date.getDate()-1);
        $('#datepicker').datepicker('setDate', date);
    })
    $("#next").click(function(){
        var date = $('#datepicker').datepicker('getDate', '+1d');
        date.setDate(date.getDate()+1);
        $('#datepicker').datepicker('setDate', date);
    })
    // datepicker2
    $( "#datepicker2" ).datepicker();
    $("#prev2").click(function(){
        var date = $('#datepicker2').datepicker('getDate', '-1d');
        date.setDate(date.getDate()-1);
        $('#datepicker2').datepicker('setDate', date);
    })
    $("#next2").click(function(){
        var date = $('#datepicker2').datepicker('getDate', '+1d');
        date.setDate(date.getDate()+1);
        $('#datepicker2').datepicker('setDate', date);
    })
    // datepicker2
    $( "#datepicker3" ).datepicker();
    $("#prev3").click(function(){
        var date = $('#datepicker3').datepicker('getDate', '-1d');
        date.setDate(date.getDate()-1);
        $('#datepicker3').datepicker('setDate', date);
    })
    $("#next3").click(function(){
        var date = $('#datepicker3').datepicker('getDate', '+1d');
        date.setDate(date.getDate()+1);
        $('#datepicker3').datepicker('setDate', date);
    })
    // datepicker4
    $( "#datepicker4" ).datepicker();
    $("#prev4").click(function(){
        var date = $('#datepicker4').datepicker('getDate', '-1d');
        date.setDate(date.getDate()-1);
        $('#datepicker4').datepicker('setDate', date);
    })
    $("#next4").click(function(){
        var date = $('#datepicker4').datepicker('getDate', '+1d');
        date.setDate(date.getDate()+1);
        $('#datepicker4').datepicker('setDate', date);
    })
    // datepicker5
    $( "#datepicker5" ).datepicker();
    $("#prev5").click(function(){
        var date = $('#datepicker5').datepicker('getDate', '-1d');
        date.setDate(date.getDate()-1);
        $('#datepicker5').datepicker('setDate', date);
    })
    $("#next5").click(function(){
        var date = $('#datepicker5').datepicker('getDate', '+1d');
        date.setDate(date.getDate()+1);
        $('#datepicker5').datepicker('setDate', date);
    })
    // datepickersimple
    $( "#datepickerstart" ).datepicker();
    $( "#datepickerend" ).datepicker();
    $( "#datepickercoldate" ).datepicker();
    $( "#startdate" ).datepicker();
    $( "#enddate" ).datepicker();

// DatePicker

//    start date
    var d = new Date();
    var elem = document.getElementById("startdate");
    elem.value = d.toISOString().slice(0,16);
//    end date
    var d = new Date();
    var elem = document.getElementById("enddate");
    elem.value = d.toISOString().slice(0,16);
//    default date
    var d = new Date();
    var elem = document.getElementById("defaultdate");
    elem.value = d.toISOString().slice(0,16);