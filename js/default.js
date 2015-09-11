function getData() {
    var $formdata = $('form').serialize();
    console.log($formdata);
}

function calcSubs() {
    var ser = 0;
    var serField = 1;
    var count = 0;
    $.each(arrows, function(i, field) {
        ser += ($('input[name="'+field).val())*1;
        count++;
        if(count >= 3) {
            $('input[name="ser'+serField).val(ser);
            serField++;
            count = 0;
            ser = 0;
        }
    });
}