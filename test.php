<p id="demo"></p>

<button onclick="">Stop time</button>

<script>
    
    var myVar = setInterval(myTimer, 1000);
    

    function myTimer(){
        
        var index = 0;
        
        var elem = document.getElementById("demo");
        
        elem.innerHTML = index;
        
        var id = setInterval(frame, 100);
                
        function frame(){
            if(Number(elem.innerHTML) >= 100){
                clearInterval(myVar);
            } else{
                index++;
                elem.innerHTML = index * 1;
            }
        }
        
    }
    
</script>