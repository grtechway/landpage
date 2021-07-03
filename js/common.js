
function httpGet(pincode)
{
    var theUrl = "https://api.postalpincode.in/pincode/"+pincode;
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
            const obj = JSON.parse(xmlHttp.responseText);
            var state = document.getElementById("floatingState");
            state.value = "";
           
            if(obj[0].Status!="Error"){
                //alert(obj[0].PostOffice[0].Name);
                if (typeof window.orientation !== 'undefined') { 
                    var state = document.getElementById("floatingStatemob");
                    var datalist = document.getElementById("datalistcitymobOptions");
                    while (datalist.options.length > 0) {
                        datalist.remove(0);
                    }
                    for (const x of obj[0].PostOffice) { 
                        //alert(x.Name);
                        var opt = document.createElement('option');
                        opt.value = x.Name;
                        opt.text = x.Name;
                        datalist.appendChild(opt);
                    }     
                }else{
                    var state = document.getElementById("floatingState");
                    var datalist = document.getElementById("datalistcityOptions");
                    while (datalist.options.length > 0) {
                        datalist.remove(0);
                    }
                    for (const x of obj[0].PostOffice) { 
                        //alert(x.Name);
                        var opt = document.createElement('option');
                        opt.value = x.Name;
                        opt.text = x.Name;
                        datalist.appendChild(opt);
                    }
                }
                state.value=obj[0].PostOffice[0].State;
                
            }else{
                var state = document.getElementById("floatingState");
                state.value = "";
                var datalist = document.getElementById("datalistcityOptions");
                while (datalist.firstChild) {
                    datalist.removeChild(datalist.lastChild);
                }
                var City = document.getElementById("floatingCity");
                City.value="";
            }
        }
            
    }
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
}
