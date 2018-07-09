<?include("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
</head>
<body>

<h2 style="text-align:center">Please pick your subscription plan</h2>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Pro</li>
    <li class="grey">$ 24.99 /monthly</li>
    <li>Complete Supervision</li>
    <li>Customer insuarance</li>
    <li>Insuarance</li>
     <li>5% Discount</li>
    <li class="grey"><a href="payment.php" class="button">Subscribe</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Yearly</li>
    <li class="grey">$ 49.99 / year <li>Complete Supervision</li>
    <li>Customer insuarance</li>
    <li>Insuarance</li>
    <li>10% Discount</li>
    
    <li class="grey"><a href="payment.php" class="button">Subscribe</a></li>
  </ul>
</div>

</body>
</html>
<?include("footer.php"); ?>