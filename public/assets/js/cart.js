//////////////////////////////////////

function doAJAXcall( pid, pq, csrf_token, type, url, callback, loc ) {
alert(loc);   
   var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function () {

 //     alert(xmlhttp.readyState +' '+ xmlhttp.status);

        if ( xmlhttp.readyState == XMLHttpRequest.DONE && xmlhttp.status == 200) {
            var data = xmlhttp.responseText;
            if ( loc == 'pop'){
                return "pop_done";
            } else{
                location.reload();
                return "det_done";
            }
        }
    };

    xmlhttp.open(type, url, true);
     
    var data = new FormData();
    data.append('pid', pid );
    data.append('pq', pq );
    xmlhttp.setRequestHeader('x-csrf-token', csrf_token);
   xmlhttp.send( data );
   //alert('d');
}

//doAPIcall("get","hdg", "dhs");

function add_to_cart ( Prod_Id, Prod_q, csrf, loc="det" ) {
    if ( Prod_q == 0 || Prod_q == '' || Prod_q < 0 ){
        alert('Quantity should be atleast 1');
    } else {
        
        var jxret = 
        doAJAXcall(
            Prod_Id,
            Prod_q,
            csrf,
            "POST",
            "{{ route('/product/add-to-cart') }}",//https://domain.com/api/index.php?type=SELECT",
            function (data) {
               // alert();
                // alert(data);//document.getElementById("outputHere").innerHTML = data; //Place data at #outputHere
            },
            loc
        );

        if( loc == "pop"){
            alert("hell"+' '+loc);
            return jxret;
        }

//document.cookie = "clicked_on="+user['id'];
//alert( "getCookie('clicked_on') ");

}
    ////////////////////////////////////////
}

function tr( pid )
{
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
   // alert('i am here'+' '+pid+' '+csrf);
   alert (add_to_cart( pid, 1, csrf, "pop") );
}