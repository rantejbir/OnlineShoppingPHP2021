function getSubCategories(categoryid){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function (){
        if(this.readyState==4 && this.status==200){
            var s = this.response;
            document.getElementById('subcatid').innerHTML = s;
        }
    };
    xmlhttp.open('GET','getSubCategory.php?categoryid='+categoryid,true);
    xmlhttp.send();
}

function calculatePrice(){
    var mrp =  parseFloat(document.getElementById("mrp").value);
    var discount = parseFloat(document.getElementById('discount').value);
    var disAmt = mrp*discount/100;
    var price = mrp - disAmt;
    document.getElementById('price').value = price.toString();
}

function searchProduct(){
    var search = document.getElementById('search').value;
    window.location.href = "productpage.php?search="+search;
}