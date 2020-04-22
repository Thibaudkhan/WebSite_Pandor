cookie_name = "CounterCookie";


function doCookie(){
    if(document.cookie){
        index = document.cookie.indexOf(cookie_name);
    }
    else {
        index = -1;
    }

    var expires = "Thursday, 21-May-2020 20:00:00 UTC+2";

    if(index == -1){
        document.cookie = cookie_name + "=1_" + Math.random().toString(36).substr(2, 9) +"; expires =" + expires;
        location.reload();
    }

    else {
        countbegin = (document.cookie.indexOf("=", index) +1);
        idBegin = document.cookie.indexOf("_");
        idEnd = document.cookie.indexOf(";");
        if (idEnd == -1){
            idEnd = document.cookie.length;
        }
        console.log(document.cookie);
        console.log(document.cookie.substring(countbegin, idBegin));
        count = eval(document.cookie.substring(countbegin, idBegin)) + 1;
        id = document.cookie.substring(idBegin, idEnd);
        document.cookie = cookie_name + "=" + count + id + ";expires="+expires;
    }
    console.log(document.cookie);
    document.getElementById("counter").innerHTML = document.cookie ;

}

function getTimes(){

    if(document.cookie) {
        index = document.cookie.indexOf(cookie_name);
        if (index != -1) {
            countbegin = (document.cookie.indexOf("=", index) + 1);
            countend = document.cookie.indexOf("_", index);
        
            if (countend == -1) {
                countend = document.cookie.length;
            }
            count = document.cookie.substring(countbegin, countend);
            if (count == 1) {
                return (count+" time");
            } 
            else {
                return (count+" times");
            
            }
        }
    }
    return ("0 times");

}

