<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" href="main2.css" rel="stylesheet" >
  <title>Medicare</title>
</head>
<body  >
  
<p>payment of your  product </p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city">
            <div>
              <label for="country">Country</label>
                <select id="country" name="country" onchange="handlecountry(this.value)" style="height: 30%; width: 10%;" >
                  <option selected="....">.....</option>
                  <option value="1">India</option>
                  <option value="2">USA</option>
                  <option value="3">UK</option>
                  <option value="4">China</option>
                </select>
            </div>
            <div>
              <label for="state">State</label>
                <div id="state"></div>
            </div>
            <div>
              <label for="zip" style="height: 50%; width: 80%;">Zip</label>
                <input type="text" id="zip" name="zip" >
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" >
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
 
</div>
</body>
<script type="text/javascript">
  function handlecountry(cvalue)
{
  var xmlRequest = new XMLHttpRequest();
  if (cvalue == "") {
        document.getElementById("state").innerHTML = "";
        return;
      }
      else
      {
         if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
  xmlRequest.onreadystatechange = function()
  {
    if(this.readyState == 4 && this.status == 200)
    {
      document.getElementById("state").innerHTML=this.responseText;

    }
  };
  xmlRequest.open("GET","ajax.php?q="+cvalue,true);
  xmlRequest.send();
}
}
</script>
</html>
