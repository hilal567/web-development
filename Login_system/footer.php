<!DOCTYPE html>
<html>
<head>
	<title>footer</title>
	<style type="text/css">
		footer {
  color: #666;
  background: #222;
  posittion: fixed;
  bottom: 0px;
  padding: 17px 0 18px 0;
  border-top: 1px solid #000;
  text-align: center;
  width: 100%;
  bottom: 0px;
}
footer a {
  color: #999;
}
footer a:hover {
  color: #efefef;
}

/* responsive footer fix by Aalaap Ghag 
This is where the magic happens */
@media (max-width: 767px) {

  footer  {
    padding-left: 20px;
    padding-right: 20px;
  }
}

.container {
  max-width: 940px;
}
	</style>
</head>
<body>
		<footer>
  <div class="container">
    <p>Here Comes The Footer 2014 <a href=""> Copyright</a> and stuff</p>
  </div>
</footer>
</body>
</html>
