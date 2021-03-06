
<?php 
	
	session_start();
    ?> 
    <!DOCTYPE html>  
<html lang="en" class="PM 
	marketing-html"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>
			
			CooProperties

			 | The Property Crowdfunding Platform		</title>
<meta name="description" content="Invest in our handpicked investment opportunities from just N50,000. Choose from buy to sell, buy to let, loan notes and private equity developments.">
<link rel="apple-touch-icon" sizes="57x57" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/ourlogo.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/ourlogo.png">
<link rel="icon" type="image/png" sizes="192x192" href="img/ourlogo.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/ourlogo.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/ourlogo.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/ourlogo.png">
<link rel="manifest" href="img/ourlogo.png">
<meta name="msapplication-TileColor" content="/">
<meta name="msapplication-TileImage" content="/">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="css/production.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
<link rel="stylesheet" href="https://cloud.typography.com/6287754/7790752/css/fonts.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="css/sign_up.css"> 
<link rel="stylesheet" href="registration/css/jquery-ui.css" />
<script src="registration/js/jquery-1.12.0.min.js"></script>
</head>
    
<body class="
    	marketing    ">
<header role="banner" class="header">
<div class="container">
<div class="row">
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
<div class="header__logo-container">
<img src="img/ourlogo.png" class="header__logo"></a>
</div>
</div>
<div class="col-xs-8 visible-xs">
<div class="header__btn-area">
<a href="#" class="btn">
Log in
</a>
<a href="sign_up.html" class="header__btn-area__sign-up btn btn-action">
Get 
</a>
</div>
</div>
<div class="col-xs-2 visible-xs">
<a href="#" class="header--mobile__menu-btn">
<i class="fa fa-bars"></i>
</a>
</div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
<nav role="navigation" class="header__nav">
<ul>
<li class="header__nav__link--li">
<a href="project.html" class="header__nav__link--a ">
Investments
</a>
</li>
<li class="header__nav__link--li">
<a href="howitworks.html" class="header__nav__link--a ">
How it Works
</a>
</li>
<li class="header__nav__link--li">
<a href="contact.html" class="header__nav__link--a ">
Support
</a>
</li>
</ul>
</nav>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
<div class="header__btn-area">

<a href="login.php" class="btn btn-action">
Login
<span class="visible-md-inline-block visible-lg-inline-block">

</span>
</a>
</div>
</div>
</div>
</div>
</header>

<div class="signup">

								<?php 
	
	
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
            echo"<div class='alert alert-danger'>";

            echo $msg; 
            echo "</div>";
		}
	
		
		unset($_SESSION['ERRMSG_ARR']);
	}
	?>
							
<form method="post" action="registration/process_result1.php" enctype="multipart/form-data" >
    <div class="row">
      <h4>Membership Registration</h4>
      <div class="input-group input-group-icon">
        <input type="text" name="name" placeholder="Full Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name="email" placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="tel" name="tel" placeholder="Phone Number"/>
        <div class="input-icon"><i class="fa fa-phone"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="address" placeholder="Address"/>
        <div class="input-icon"><i class="fa fa-globe"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name="mpassword" placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
      <h4>Date of Birth</h4>
      <div class="input-group input-group-icon">
        <input  placeholder="dd-mm-yyyy" name="dateofbirth" id="datepicker" type="text" value="dd-mm-yyyy" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required="" />
        <div class="input-icon"><i class="fa fa-calendar"></i></div>
      </div> 
      
        
    </div>
    
    <div class="row">
      
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
       
        <label for="terms">By signing up, you agree to our terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.
        </label>
        
   <input type="submit" class="btn btn-info" value="Submit">
      </div>
    </div>
  </form>
  </div>


<a href="#" data-toggle="modal" data-target="#modalRiskWarning" class="sticky-risk">
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
</div>
</div>
</div>
</a>
<div class="modal fade" id="modalRiskWarning" tabindex="-1" role="dialog" aria-labelledby="modalLabelRiskWarning">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
<h4 class="modal-title text-center" id="modalLabelRiskWarning">
Risk warning
</h4>
</div>
<div class="modal-body">
<p>Investing in property and companies can be very rewarding, but it involves the following key risks:</p>
<p>
<strong>
1. Loss of Capital
</strong>
</p>
<p>
Property prices can go down as well as up and different property types or those in different areas may be more or less susceptible to reduced or negative growth. By investing in property through CooProperties, there is a risk that you may not get back what you put in if property prices fall. You should not invest more money through the platform than you can afford to lose without altering your standard of living.
</p>
<p>
<strong>
2. Illiquidity
</strong>
</p>
<p>
Any investment you make through the platform will be highly illiquid. This means that you are unlikely to be able to sell your shares until and unless the investee company is sold or the property is sold at the end of the investment term. The securities you purchase through the platform are not listed on any exchange.
</p>
<p>
<strong>
3. Rarity of Dividends
</strong>
</p>
<p>
If a property receives rent this will be paid to the investors as a dividend net of any fees, costs and expenses. However, should a property not produce rent, or the rent be insufficient to cover the costs and expenses of operating the property, no dividends will be paid and you will be unlikely to see any return on your investment until the property is sold.
</p>
<p>
<strong>
4. Diversification
</strong>
</p>
<p>
Investing in property and unlisted shares should only be done as part of a diversified portfolio. This means that you should invest relatively small amounts in multiple businesses rather than a lot in one or two businesses. It also means that you should invest only a small proportion of your investable capital in startups as an asset class, with the majority of your investable capital invested in safer, more liquid assets.
</p>
<p>
<strong>
5. Tax
</strong>
</p>
<p>
You will be responsible for the payment of your own tax which may include capital gains and/or income tax. We do not provide tax advice and you should seek independent tax advice before investing if you are unsure of your position. It is still your responsibility to ensure that your tax return is correct and is filed by the deadline and any tax owing is paid on time. If you are unsure how this investment will effect your tax status you must seek professional advice before you invest. Each company you invest in will be liable for, and pay, corporation tax and any returns you receive will be paid to you net of any corporation tax due.
</p>
<p>
<strong>
6. Advice
</strong>
</p>
<p>
CooProperties does not give investment advice or provide analysis or recommendations regarding investment opportunities. Investments can only be made by members of CooProperties on the basis of information provided. CooProperties takes no responsibility for this information or for any recommendations, opinions or predictions.
</p>
<p>
<strong>
7. Past Performance
</strong>
</p>
<p>
Past performance is not a reliable indicator of future results. You should not rely on any past performance as a guarantee of future investment performance.
</p>
<p>
<strong>
8. Future performance
</strong>
</p>
<p>
Any projections of future performance are based on the internal calculations and opinions of CooProperties and are subject to change at any time. Forecasts are not a reliable indicator of future results and should not be relied on.
</p>
<p>
<strong>
9. Financial Services Compensation Scheme
</strong>
</p>
<p>
Investing through CooPropertises is not covered by the Financial Services Compensation Scheme.
</p>
<p>
<strong>
10. Client Classification
</strong>
</p>
<p>
Before being allowed to invest, you will need to be classified as an investor type. You will need to provide the relevant information to us, which you warrant to be truthful and accurate, in order that we can classify you. Please follow the steps when signing up to complete this process. If you no longer fall into at least one of the categories of investor available, you will give immediate written notice to CooProperties and you will not access, or try to access the service unless and until you fall into one or more of these categories again.
</p>
<p>
<strong>
11. Jurisdiction
</strong>
</p>
<p>
The information and services provided on the Site are not provided to, and may not be used by, any person or entity in any jurisdiction where the provision or use thereof would be contrary to applicable laws, rules or regulations of any governmental authority or where CooProperies is not authorised to provide such information or services. Some products and services dFescribed in the Site may not be available in all jurisdictions or to all clients.
</p>
<p>
This list of risk factors does not necessarily outline all possible risks involved. Prospective investors should read the <a href="https://cooproperties.com/terms" target="_blank">CooProperties terms and conditions</a> in their entirety and consult with their own advisers before deciding whether to invest. If you are unsure about any aspect of the information provided by the company, you should seek advice from an independent financial adviser.
</p>
</div>
</div>
</div>
</div>
<div class="modal fade" id="js-iframe-modal" tabindex="-1" role="dialog" aria-labelledby="modalIframeModal">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
<h4 class="modal-title text-center" id="modalIframeModal">
Support
</h4>
</div>
<div class="modal-body p0">
<div class="embed-responsive embed-responsive-4by3">
<iframe class="embed-responsive-item" src="./Coop _ The Property Crowdfunding Platform_files/saved_resource.html"></iframe>
</div>
</div>
</div>
</div>
</div>
<!-- start-date-piker-->
<script src="registration/js/jquery-ui.js"></script>
<script>
    $(function() {
    $( "#datepicker" ).datepicker();
    });
</script>
</body>
</html>