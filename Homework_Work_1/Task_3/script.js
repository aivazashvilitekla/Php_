function answer(){
    var radios = document.getElementsByName("input");
    var count = 0;
    for(var i = 0; i< radios.length; i++){
        if(radios[i].value=="correct"){
            if(radios[i].checked==true){
                count++;
            }
        }
    }
    ans1 = document.getElementById("answer").value;
    ans2 = document.getElementById("answer2").value;
    if(ans1=="echo 'Hello World';"){
        count++;
        if(ans2=="count++;"){
            count++;
        }
    }
    document.getElementById("pasuxebi").innerText = "სწორი პასუხების რაოდენობაა "+count;
}