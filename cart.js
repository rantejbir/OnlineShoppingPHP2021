function addtocart(productid){
    // alert(productid);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            alert("Item added to Cart Successfully");
            console.log(this.response);
        }
    };
    xmlhttp.open('GET','addtocart.php?productid='+productid,true);
    xmlhttp.send();
}

function deleteItem(productid){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState==4 && this.status==200){
            alert("Item Deleted from Cart Successfully");
            window.location.href = "viewcart.php";
        }
    };
    xmlhttp.open('GET','deleteCartItem.php?productid='+productid,true);
    xmlhttp.send();
}

function pay(){
    var formdata = new FormData();
    var xmlhttp = new XMLHttpRequest();
    var controls = document.getElementById('frmBilling').elements;
    for(var i=0;i<controls.length-1;i++){
        formdata.append(controls[i].name,controls[i].value);
    }
    formdata.append("grandtotal",document.getElementById('grandtotal').value);
    xmlhttp.onreadystatechange = function (){
        if(this.readyState==4 && this.status==200){
            var ar = this.response;
            if(ar==1){
                window.location.href = "payment_failed.php";
            }else{
                window.location.href = "payment_success.php";
            }
        }
    };
    if(document.getElementById('paymentmethod').value == "Card"){
        $(document).ready(function () {
            let grandtotal = $("#grandtotal").val() * 100;

            var options = {
                "key": "rzp_test_dRWiKHS7zr2Gki",
                "amount": grandtotal,
                "name": "OnlineShopping",
                "description": "Online Payment System - OnlineShopping",
                "image": "https://image.shutterstock.com/image-photo/funny-portrait-happy-smiling-ginger-600w-1154676640.jpg",
                "handler": function (response) {
                    if (response.razorpay_payment_id == "") {
                        formdata.append("status","Failed");
                        xmlhttp.open('POST','payment_action.php',true);
                        xmlhttp.send(formdata);
                    } else {
                        formdata.append("status","Success");
                        formdata.append("refid",response.razorpay_payment_id);
                        xmlhttp.open('POST','payment_action.php',true);
                        xmlhttp.send(formdata);
                    }
                },
                "prefill": {
                    "name": "",
                    "email": ""
                },
                "notes": {
                    "address": ""
                },
                "theme": {
                    "color": "#F37254"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    }
    else{
        formdata.append("refid","COD");
        xmlhttp.open('POST','payment_action.php',true);
        xmlhttp.send(formdata);
    }

}