

function onClick(){
    let timeoutId = 0;

    $('#myElement').on('mousedown', function(){
        timeoutId = setTimeout(myFunction, 1000);
    }).on('mouseup mouseleave', function() {
        clearTimeout(timeoutId);
    });
}
