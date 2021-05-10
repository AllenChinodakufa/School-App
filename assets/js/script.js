

function myTimer(){

    var index = 0;

    var elem = $(".js-counter");
    
    console.log(typeof Number($(".js-counter").attr("data-speed")));
    
    console.log(Number($(".js-counter").attr("data-from")));
    
    console.log(Number($(".js-counter").attr("data-to")));

    elem.text(index);

    var id = setInterval(frame, 10);

    function frame(){

        if(Number(elem.text()) >= Number($(".js-coun0ter").attr("data-to"))){

            clearInterval(myVar);

        } else{

            index++;

            elem.text(index * 1);

        }

    }

}