<!doctype html><html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <title>BillDesk - All Your Payments. Single Location</title>
    <link href="{{ asset('public/css/bank.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://use.fontawesome.com/015f09638c.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>


<body>

<div id="hidden" class="col-md-4 col-md-offset-4" style="display: none;"><div id="mainContainer" class="row large-centered">

        <div class="text-center"><h2>BANK</h2></div>

        <hr class="divider">
        <dl class="mercDetails">
            <dt>Merchant</dt> 				<dd>Shop Street</dd>
            <dt>Transaction Amount</dt> 	<dd>INR {{ $total }}</dd>
            <dt>Debit Card</dt> 		<dd>xxxx xxxx xxxx 2458</dd>
        </dl>
        <hr class="divider">


        <form name="form1" id="form1" method="get" action="{{ route('comptelePayment') }}">
            <fieldset class="page2">
                <div class="page-heading">
                    <h6 class="form-heading">Authenticate Payment</h6>
                    <p class="form-subheading">OTP sent to your mobile number ending <strong>0119</strong></p>


                </div>

                <div class="row formInputSection">
                    <div class="large-7 columns">
                        <label>
                            Enter One Time Password (OTP)
                            <input type="number" name="otp" required min="6"  class="form-control optPass" value="" maxlength="6" autocomplete="off"/>
                        </label>
                    </div>
                    <div class="large-5 columns">
                        <label>&nbsp;</label><button class="expanded button next" onClick="ValidateForm()">Make Payment</button>
                    </div>
                </div>
                <div class="text-right resendBtn requestOTP"><a class="request-link" href="javascript:void(0)">Resend OTP</a></div>
                <p>


                    <a class="tryAgain" href="complete_order.jsp">Go back</a> to merchant
                </p>
            </fieldset>


        </form>
    </div></div>
<div id="load" class="col-md-4 col-md-offset-4 text-center" style="margin-top: 20px"><i style="position: relative;bottom:-5px" class="fa fa-2x fa-spinner fa-pulse"></i> Redirecting to your bank's website. Do not close or refresh the window</div>

<script>
    document.onmousedown = rightclickD; function rightclickD(e) { e = e||event; if (e.button == 2) { alert('Function Disabled...'); return false; } }
    function ValidateForm() {
        var regPin = RegExp("^[0-9]{4,6}$");
        if( document.form1.customerpin.value == "" || !document.form1.customerpin.value.match(regPin) ) {
            alert("Please enter a valid 6 digit One Time Password (OTP) receive on your registered Mobile Number."); document.form1.customerpin.focus(); return false;
        }
        else
        {
            document.form1.submit();
        }
    }
$(document).ready(function () {
    window.setTimeout(function () {
        $('#load').hide();
        $('#hidden').show();
    }, 5000);
});
</script>

</body>
</html>