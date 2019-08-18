function r(){
    var refresh=1000;
    mytime=setTimeout('time()',refresh)
}
function time(){
    var x=new Date();
    t=x.getHours()+":"+x.getMinutes()+":"+x.getSeconds();
    document.getElementById('time').setAttribute('style','color:hotpink');
    document.getElementById('time').innerHTML="ساعت "+t+'به وقت تهران';
    r();
    }
    $(document).ready(function(){
        $('[title="User name"]').tooltip();
        $('[title="Enter User name"]').tooltip();
    });
    
     function validate(field,query){
        var xmlhttp;
        if(window.XMLHttpRequest){
            xmlhttp= new XMLHttpRequest;
        }else{
            xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');
        }
        
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState!=4 && xmlhttp.status==200){
                document.getElementById(field).innerHTML='Validating..';
            }else if(xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById(field).innerHTML=xmlhttp.responseText;
            }else{
                document.getElementById(field).innerHTML="problem in validating";
            }
        }
        xmlhttp.open("GET","validat/validating.php?field="+field+"&query="+query,false);
        xmlhttp.send();
    }
    