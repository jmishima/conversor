
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <LINK href="../../public/css/index.css" rel="stylesheet" type="text/css">
    <title>Conversor UCC</title>

    <link rel="stylesheet" href="https://openlayers.org/en/v3.19.1/css/ol.css" type="text/css">
    <script src="https://openlayers.org/en/v3.19.1/build/ol.js" type="text/javascript"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Conversor de Monedas</a>
        </div>

    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" id="encabezado">
    <div class="container" >

        <h1 font-colorstyle="color:#dcdcdc;">Proyecto Test Automation</h1>
    </div>
</div>

<div class="container">
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Convierte tu divisa en cualquier otra...</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cantidad_from">Cuanto tengo</label>
                <div class="col-md-5">
                    <input id="cantidad_from" name="cantidad_from" type="text" placeholder="Ingrese un monto" class="form-control input-md">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="from">Divisa que tengo</label>
                <div class="col-md-6">
                    <select id="from" name="from" class="form-control">
                        <option  value="USD">US Dollar ($)</option>
                        <option  value="AED">United Arab Emirates Dirham (AED)</option>
                        <option  value="AFN">Afghan Afghani (AFN)</option>
                        <option  value="ALL">Albanian Lek (ALL)</option>
                        <option  value="AMD">Armenian Dram (AMD)</option>
                        <option  value="ANG">Netherlands Antillean Guilder (ANG)</option>
                        <option  value="AOA">Angolan Kwanza (AOA)</option>
                        <option  value="ARS">Argentine Peso (ARS)</option>
                        <option  value="AUD">Australian Dollar (A$)</option>
                        <option  value="AWG">Aruban Florin (AWG)</option>
                        <option  value="AZN">Azerbaijani Manat (AZN)</option>
                        <option  value="BAM">Bosnia-Herzegovina Convertible Mark (BAM)</option>
                        <option  value="BBD">Barbadian Dollar (BBD)</option>
                        <option  value="BDT">Bangladeshi Taka (BDT)</option>
                        <option  value="BGN">Bulgarian Lev (BGN)</option>
                        <option  value="BHD">Bahraini Dinar (BHD)</option>
                        <option  value="BIF">Burundian Franc (BIF)</option>
                        <option  value="BMD">Bermudan Dollar (BMD)</option>
                        <option  value="BND">Brunei Dollar (BND)</option>
                        <option  value="BOB">Bolivian Boliviano (BOB)</option>
                        <option  value="BRL">Brazilian Real (R$)</option>
                        <option  value="BSD">Bahamian Dollar (BSD)</option>
                        <option  value="BTC">Bitcoin (฿)</option>
                        <option  value="BTN">Bhutanese Ngultrum (BTN)</option>
                        <option  value="BWP">Botswanan Pula (BWP)</option>
                        <option  value="BYN">BYN (BYN)</option>
                        <option  value="BYR">Belarusian Ruble (BYR)</option>
                        <option  value="BZD">Belize Dollar (BZD)</option>
                        <option  value="CAD">Canadian Dollar (CA$)</option>
                        <option  value="CDF">Congolese Franc (CDF)</option>
                        <option  value="CHF">Swiss Franc (CHF)</option>
                        <option  value="CLF">Chilean Unit of Account (UF) (CLF)</option>
                        <option  value="CLP">Chilean Peso (CLP)</option>
                        <option  value="CNH">CNH (CNH)</option>
                        <option  value="CNY">Chinese Yuan (CN¥)</option>
                        <option  value="COP">Colombian Peso (COP)</option>
                        <option  value="CRC">Costa Rican Colón (CRC)</option>
                        <option  value="CUP">Cuban Peso (CUP)</option>
                        <option  value="CVE">Cape Verdean Escudo (CVE)</option>
                        <option  value="CZK">Czech Republic Koruna (CZK)</option>
                        <option  value="DEM">German Mark (DEM)</option>
                        <option  value="DJF">Djiboutian Franc (DJF)</option>
                        <option  value="DKK">Danish Krone (DKK)</option>
                        <option  value="DOP">Dominican Peso (DOP)</option>
                        <option  value="DZD">Algerian Dinar (DZD)</option>
                        <option  value="EGP">Egyptian Pound (EGP)</option>
                        <option  value="ERN">Eritrean Nakfa (ERN)</option>
                        <option  value="ETB">Ethiopian Birr (ETB)</option>
                        <option  value="EUR">Euro (€)</option>
                        <option  value="FIM">Finnish Markka (FIM)</option>
                        <option  value="FJD">Fijian Dollar (FJD)</option>
                        <option  value="FKP">Falkland Islands Pound (FKP)</option>
                        <option  value="FRF">French Franc (FRF)</option>
                        <option  value="GBP">British Pound (£)</option>
                        <option  value="GEL">Georgian Lari (GEL)</option>
                        <option  value="GHS">Ghanaian Cedi (GHS)</option>
                        <option  value="GIP">Gibraltar Pound (GIP)</option>
                        <option  value="GMD">Gambian Dalasi (GMD)</option>
                        <option  value="GNF">Guinean Franc (GNF)</option>
                        <option  value="GTQ">Guatemalan Quetzal (GTQ)</option>
                        <option  value="GYD">Guyanaese Dollar (GYD)</option>
                        <option  value="HKD">Hong Kong Dollar (HK$)</option>
                        <option  value="HNL">Honduran Lempira (HNL)</option>
                        <option  value="HRK">Croatian Kuna (HRK)</option>
                        <option  value="HTG">Haitian Gourde (HTG)</option>
                        <option  value="HUF">Hungarian Forint (HUF)</option>
                        <option  value="IDR">Indonesian Rupiah (IDR)</option>
                        <option  value="IEP">Irish Pound (IEP)</option>
                        <option  value="ILS">Israeli New Sheqel (₪)</option>
                        <option  value="INR">Indian Rupee (₹)</option>
                        <option  value="IQD">Iraqi Dinar (IQD)</option>
                        <option  value="IRR">Iranian Rial (IRR)</option>
                        <option  value="ISK">Icelandic Króna (ISK)</option>
                        <option  value="ITL">Italian Lira (ITL)</option>
                        <option  value="JMD">Jamaican Dollar (JMD)</option>
                        <option  value="JOD">Jordanian Dinar (JOD)</option>
                        <option  value="JPY">Japanese Yen (¥)</option>
                        <option  value="KES">Kenyan Shilling (KES)</option>
                        <option  value="KGS">Kyrgystani Som (KGS)</option>
                        <option  value="KHR">Cambodian Riel (KHR)</option>
                        <option  value="KMF">Comorian Franc (KMF)</option>
                        <option  value="KPW">North Korean Won (KPW)</option>
                        <option  value="KRW">South Korean Won (₩)</option>
                        <option  value="KWD">Kuwaiti Dinar (KWD)</option>
                        <option  value="KYD">Cayman Islands Dollar (KYD)</option>
                        <option  value="KZT">Kazakhstani Tenge (KZT)</option>
                        <option  value="LAK">Laotian Kip (LAK)</option>
                        <option  value="LBP">Lebanese Pound (LBP)</option>
                        <option  value="LKR">Sri Lankan Rupee (LKR)</option>
                        <option  value="LRD">Liberian Dollar (LRD)</option>
                        <option  value="LSL">Lesotho Loti (LSL)</option>
                        <option  value="LTL">Lithuanian Litas (LTL)</option>
                        <option  value="LVL">Latvian Lats (LVL)</option>
                        <option  value="LYD">Libyan Dinar (LYD)</option>
                        <option  value="MAD">Moroccan Dirham (MAD)</option>
                        <option  value="MDL">Moldovan Leu (MDL)</option>
                        <option  value="MGA">Malagasy Ariary (MGA)</option>
                        <option  value="MKD">Macedonian Denar (MKD)</option>
                        <option  value="MMK">Myanmar Kyat (MMK)</option>
                        <option  value="MNT">Mongolian Tugrik (MNT)</option>
                        <option  value="MOP">Macanese Pataca (MOP)</option>
                        <option  value="MRO">Mauritanian Ouguiya (MRO)</option>
                        <option  value="MUR">Mauritian Rupee (MUR)</option>
                        <option  value="MVR">Maldivian Rufiyaa (MVR)</option>
                        <option  value="MWK">Malawian Kwacha (MWK)</option>
                        <option  value="MXN">Mexican Peso (MX$)</option>
                        <option  value="MYR">Malaysian Ringgit (MYR)</option>
                        <option  value="MZN">Mozambican Metical (MZN)</option>
                        <option  value="NAD">Namibian Dollar (NAD)</option>
                        <option  value="NGN">Nigerian Naira (NGN)</option>
                        <option  value="NIO">Nicaraguan Córdoba (NIO)</option>
                        <option  value="NOK">Norwegian Krone (NOK)</option>
                        <option  value="NPR">Nepalese Rupee (NPR)</option>
                        <option  value="NZD">New Zealand Dollar (NZ$)</option>
                        <option  value="OMR">Omani Rial (OMR)</option>
                        <option  value="PAB">Panamanian Balboa (PAB)</option>
                        <option  value="PEN">Peruvian Nuevo Sol (PEN)</option>
                        <option  value="PGK">Papua New Guinean Kina (PGK)</option>
                        <option  value="PHP">Philippine Peso (PHP)</option>
                        <option  value="PKG">PKG (PKG)</option>
                        <option  value="PKR">Pakistani Rupee (PKR)</option>
                        <option  value="PLN">Polish Zloty (PLN)</option>
                        <option  value="PYG">Paraguayan Guarani (PYG)</option>
                        <option  value="QAR">Qatari Rial (QAR)</option>
                        <option  value="RON">Romanian Leu (RON)</option>
                        <option  value="RSD">Serbian Dinar (RSD)</option>
                        <option  value="RUB">Russian Ruble (RUB)</option>
                        <option  value="RWF">Rwandan Franc (RWF)</option>
                        <option  value="SAR">Saudi Riyal (SAR)</option>
                        <option  value="SBD">Solomon Islands Dollar (SBD)</option>
                        <option  value="SCR">Seychellois Rupee (SCR)</option>
                        <option  value="SDG">Sudanese Pound (SDG)</option>
                        <option  value="SEK">Swedish Krona (SEK)</option>
                        <option  value="SGD">Singapore Dollar (SGD)</option>
                        <option  value="SHP">St. Helena Pound (SHP)</option>
                        <option  value="SKK">Slovak Koruna (SKK)</option>
                        <option  value="SLL">Sierra Leonean Leone (SLL)</option>
                        <option  value="SOS">Somali Shilling (SOS)</option>
                        <option  value="SRD">Surinamese Dollar (SRD)</option>
                        <option  value="STD">São Tomé &amp; Príncipe Dobra (STD)</option>
                        <option  value="SVC">Salvadoran Colón (SVC)</option>
                        <option  value="SYP">Syrian Pound (SYP)</option>
                        <option  value="SZL">Swazi Lilangeni (SZL)</option>
                        <option  value="THB">Thai Baht (THB)</option>
                        <option  value="TJS">Tajikistani Somoni (TJS)</option>
                        <option  value="TMT">Turkmenistani Manat (TMT)</option>
                        <option  value="TND">Tunisian Dinar (TND)</option>
                        <option  value="TOP">Tongan Paʻanga (TOP)</option>
                        <option  value="TRY">Turkish Lira (TRY)</option>
                        <option  value="TTD">Trinidad &amp; Tobago Dollar (TTD)</option>
                        <option  value="TWD">New Taiwan Dollar (NT$)</option>
                        <option  value="TZS">Tanzanian Shilling (TZS)</option>
                        <option  value="UAH">Ukrainian Hryvnia (UAH)</option>
                        <option  value="UGX">Ugandan Shilling (UGX)</option>
                        <option  value="UYU">Uruguayan Peso (UYU)</option>
                        <option  value="UZS">Uzbekistani Som (UZS)</option>
                        <option  value="VEF">Venezuelan Bolívar (VEF)</option>
                        <option  value="VND">Vietnamese Dong (₫)</option>
                        <option  value="VUV">Vanuatu Vatu (VUV)</option>
                        <option  value="WST">Samoan Tala (WST)</option>
                        <option  value="XAF">Central African CFA Franc (FCFA)</option>
                        <option  value="XCD">East Caribbean Dollar (EC$)</option>
                        <option  value="XDR">Special Drawing Rights (XDR)</option>
                        <option  value="XOF">West African CFA Franc (CFA)</option>
                        <option  value="XPF">CFP Franc (CFPF)</option>
                        <option  value="YER">Yemeni Rial (YER)</option>
                        <option  value="ZAR">South African Rand (ZAR)</option>
                        <option  value="ZMK">Zambian Kwacha (1968–2012) (ZMK)</option>
                        <option  value="ZMW">Zambian Kwacha (ZMW)</option>
                        <option  value="ZWL">Zimbabwean Dollar (2009) (ZWL)</option>
                    </select>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" ></label>
                <div class="col-md-4">
                    <a href="#" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-sort"></span> </a>
                </div>
            </div>



            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="to">Divisa que quiero</label>
                <div class="col-md-6">
                    <select id="to" name="to" class="form-control">
                        <option  value="ARS">Argentine Peso (ARS)</option>
                        <option  value="AED">United Arab Emirates Dirham (AED)</option>
                        <option  value="AFN">Afghan Afghani (AFN)</option>
                        <option  value="ALL">Albanian Lek (ALL)</option>
                        <option  value="AMD">Armenian Dram (AMD)</option>
                        <option  value="ANG">Netherlands Antillean Guilder (ANG)</option>
                        <option  value="AOA">Angolan Kwanza (AOA)</option>
                        <option  value="AUD">Australian Dollar (A$)</option>
                        <option  value="AWG">Aruban Florin (AWG)</option>
                        <option  value="AZN">Azerbaijani Manat (AZN)</option>
                        <option  value="BAM">Bosnia-Herzegovina Convertible Mark (BAM)</option>
                        <option  value="BBD">Barbadian Dollar (BBD)</option>
                        <option  value="BDT">Bangladeshi Taka (BDT)</option>
                        <option  value="BGN">Bulgarian Lev (BGN)</option>
                        <option  value="BHD">Bahraini Dinar (BHD)</option>
                        <option  value="BIF">Burundian Franc (BIF)</option>
                        <option  value="BMD">Bermudan Dollar (BMD)</option>
                        <option  value="BND">Brunei Dollar (BND)</option>
                        <option  value="BOB">Bolivian Boliviano (BOB)</option>
                        <option  value="BRL">Brazilian Real (R$)</option>
                        <option  value="BSD">Bahamian Dollar (BSD)</option>
                        <option  value="BTC">Bitcoin (฿)</option>
                        <option  value="BTN">Bhutanese Ngultrum (BTN)</option>
                        <option  value="BWP">Botswanan Pula (BWP)</option>
                        <option  value="BYN">BYN (BYN)</option>
                        <option  value="BYR">Belarusian Ruble (BYR)</option>
                        <option  value="BZD">Belize Dollar (BZD)</option>
                        <option  value="CAD">Canadian Dollar (CA$)</option>
                        <option  value="CDF">Congolese Franc (CDF)</option>
                        <option  value="CHF">Swiss Franc (CHF)</option>
                        <option  value="CLF">Chilean Unit of Account (UF) (CLF)</option>
                        <option  value="CLP">Chilean Peso (CLP)</option>
                        <option  value="CNH">CNH (CNH)</option>
                        <option  value="CNY">Chinese Yuan (CN¥)</option>
                        <option  value="COP">Colombian Peso (COP)</option>
                        <option  value="CRC">Costa Rican Colón (CRC)</option>
                        <option  value="CUP">Cuban Peso (CUP)</option>
                        <option  value="CVE">Cape Verdean Escudo (CVE)</option>
                        <option  value="CZK">Czech Republic Koruna (CZK)</option>
                        <option  value="DEM">German Mark (DEM)</option>
                        <option  value="DJF">Djiboutian Franc (DJF)</option>
                        <option  value="DKK">Danish Krone (DKK)</option>
                        <option  value="DOP">Dominican Peso (DOP)</option>
                        <option  value="DZD">Algerian Dinar (DZD)</option>
                        <option  value="EGP">Egyptian Pound (EGP)</option>
                        <option  value="ERN">Eritrean Nakfa (ERN)</option>
                        <option  value="ETB">Ethiopian Birr (ETB)</option>
                        <option  value="EUR">Euro (€)</option>
                        <option  value="FIM">Finnish Markka (FIM)</option>
                        <option  value="FJD">Fijian Dollar (FJD)</option>
                        <option  value="FKP">Falkland Islands Pound (FKP)</option>
                        <option  value="FRF">French Franc (FRF)</option>
                        <option  value="GBP">British Pound (£)</option>
                        <option  value="GEL">Georgian Lari (GEL)</option>
                        <option  value="GHS">Ghanaian Cedi (GHS)</option>
                        <option  value="GIP">Gibraltar Pound (GIP)</option>
                        <option  value="GMD">Gambian Dalasi (GMD)</option>
                        <option  value="GNF">Guinean Franc (GNF)</option>
                        <option  value="GTQ">Guatemalan Quetzal (GTQ)</option>
                        <option  value="GYD">Guyanaese Dollar (GYD)</option>
                        <option  value="HKD">Hong Kong Dollar (HK$)</option>
                        <option  value="HNL">Honduran Lempira (HNL)</option>
                        <option  value="HRK">Croatian Kuna (HRK)</option>
                        <option  value="HTG">Haitian Gourde (HTG)</option>
                        <option  value="HUF">Hungarian Forint (HUF)</option>
                        <option  value="IDR">Indonesian Rupiah (IDR)</option>
                        <option  value="IEP">Irish Pound (IEP)</option>
                        <option  value="ILS">Israeli New Sheqel (₪)</option>
                        <option  value="INR">Indian Rupee (₹)</option>
                        <option  value="IQD">Iraqi Dinar (IQD)</option>
                        <option  value="IRR">Iranian Rial (IRR)</option>
                        <option  value="ISK">Icelandic Króna (ISK)</option>
                        <option  value="ITL">Italian Lira (ITL)</option>
                        <option  value="JMD">Jamaican Dollar (JMD)</option>
                        <option  value="JOD">Jordanian Dinar (JOD)</option>
                        <option  value="JPY">Japanese Yen (¥)</option>
                        <option  value="KES">Kenyan Shilling (KES)</option>
                        <option  value="KGS">Kyrgystani Som (KGS)</option>
                        <option  value="KHR">Cambodian Riel (KHR)</option>
                        <option  value="KMF">Comorian Franc (KMF)</option>
                        <option  value="KPW">North Korean Won (KPW)</option>
                        <option  value="KRW">South Korean Won (₩)</option>
                        <option  value="KWD">Kuwaiti Dinar (KWD)</option>
                        <option  value="KYD">Cayman Islands Dollar (KYD)</option>
                        <option  value="KZT">Kazakhstani Tenge (KZT)</option>
                        <option  value="LAK">Laotian Kip (LAK)</option>
                        <option  value="LBP">Lebanese Pound (LBP)</option>
                        <option  value="LKR">Sri Lankan Rupee (LKR)</option>
                        <option  value="LRD">Liberian Dollar (LRD)</option>
                        <option  value="LSL">Lesotho Loti (LSL)</option>
                        <option  value="LTL">Lithuanian Litas (LTL)</option>
                        <option  value="LVL">Latvian Lats (LVL)</option>
                        <option  value="LYD">Libyan Dinar (LYD)</option>
                        <option  value="MAD">Moroccan Dirham (MAD)</option>
                        <option  value="MDL">Moldovan Leu (MDL)</option>
                        <option  value="MGA">Malagasy Ariary (MGA)</option>
                        <option  value="MKD">Macedonian Denar (MKD)</option>
                        <option  value="MMK">Myanmar Kyat (MMK)</option>
                        <option  value="MNT">Mongolian Tugrik (MNT)</option>
                        <option  value="MOP">Macanese Pataca (MOP)</option>
                        <option  value="MRO">Mauritanian Ouguiya (MRO)</option>
                        <option  value="MUR">Mauritian Rupee (MUR)</option>
                        <option  value="MVR">Maldivian Rufiyaa (MVR)</option>
                        <option  value="MWK">Malawian Kwacha (MWK)</option>
                        <option  value="MXN">Mexican Peso (MX$)</option>
                        <option  value="MYR">Malaysian Ringgit (MYR)</option>
                        <option  value="MZN">Mozambican Metical (MZN)</option>
                        <option  value="NAD">Namibian Dollar (NAD)</option>
                        <option  value="NGN">Nigerian Naira (NGN)</option>
                        <option  value="NIO">Nicaraguan Córdoba (NIO)</option>
                        <option  value="NOK">Norwegian Krone (NOK)</option>
                        <option  value="NPR">Nepalese Rupee (NPR)</option>
                        <option  value="NZD">New Zealand Dollar (NZ$)</option>
                        <option  value="OMR">Omani Rial (OMR)</option>
                        <option  value="PAB">Panamanian Balboa (PAB)</option>
                        <option  value="PEN">Peruvian Nuevo Sol (PEN)</option>
                        <option  value="PGK">Papua New Guinean Kina (PGK)</option>
                        <option  value="PHP">Philippine Peso (PHP)</option>
                        <option  value="PKG">PKG (PKG)</option>
                        <option  value="PKR">Pakistani Rupee (PKR)</option>
                        <option  value="PLN">Polish Zloty (PLN)</option>
                        <option  value="PYG">Paraguayan Guarani (PYG)</option>
                        <option  value="QAR">Qatari Rial (QAR)</option>
                        <option  value="RON">Romanian Leu (RON)</option>
                        <option  value="RSD">Serbian Dinar (RSD)</option>
                        <option  value="RUB">Russian Ruble (RUB)</option>
                        <option  value="RWF">Rwandan Franc (RWF)</option>
                        <option  value="SAR">Saudi Riyal (SAR)</option>
                        <option  value="SBD">Solomon Islands Dollar (SBD)</option>
                        <option  value="SCR">Seychellois Rupee (SCR)</option>
                        <option  value="SDG">Sudanese Pound (SDG)</option>
                        <option  value="SEK">Swedish Krona (SEK)</option>
                        <option  value="SGD">Singapore Dollar (SGD)</option>
                        <option  value="SHP">St. Helena Pound (SHP)</option>
                        <option  value="SKK">Slovak Koruna (SKK)</option>
                        <option  value="SLL">Sierra Leonean Leone (SLL)</option>
                        <option  value="SOS">Somali Shilling (SOS)</option>
                        <option  value="SRD">Surinamese Dollar (SRD)</option>
                        <option  value="STD">São Tomé &amp; Príncipe Dobra (STD)</option>
                        <option  value="SVC">Salvadoran Colón (SVC)</option>
                        <option  value="SYP">Syrian Pound (SYP)</option>
                        <option  value="SZL">Swazi Lilangeni (SZL)</option>
                        <option  value="THB">Thai Baht (THB)</option>
                        <option  value="TJS">Tajikistani Somoni (TJS)</option>
                        <option  value="TMT">Turkmenistani Manat (TMT)</option>
                        <option  value="TND">Tunisian Dinar (TND)</option>
                        <option  value="TOP">Tongan Paʻanga (TOP)</option>
                        <option  value="TRY">Turkish Lira (TRY)</option>
                        <option  value="TTD">Trinidad &amp; Tobago Dollar (TTD)</option>
                        <option  value="TWD">New Taiwan Dollar (NT$)</option>
                        <option  value="TZS">Tanzanian Shilling (TZS)</option>
                        <option  value="UAH">Ukrainian Hryvnia (UAH)</option>
                        <option  value="UGX">Ugandan Shilling (UGX)</option>
                        <option  value="USD">US Dollar ($)</option>
                        <option  value="UYU">Uruguayan Peso (UYU)</option>
                        <option  value="UZS">Uzbekistani Som (UZS)</option>
                        <option  value="VEF">Venezuelan Bolívar (VEF)</option>
                        <option  value="VND">Vietnamese Dong (₫)</option>
                        <option  value="VUV">Vanuatu Vatu (VUV)</option>
                        <option  value="WST">Samoan Tala (WST)</option>
                        <option  value="XAF">Central African CFA Franc (FCFA)</option>
                        <option  value="XCD">East Caribbean Dollar (EC$)</option>
                        <option  value="XDR">Special Drawing Rights (XDR)</option>
                        <option  value="XOF">West African CFA Franc (CFA)</option>
                        <option  value="XPF">CFP Franc (CFPF)</option>
                        <option  value="YER">Yemeni Rial (YER)</option>
                        <option  value="ZAR">South African Rand (ZAR)</option>
                        <option  value="ZMK">Zambian Kwacha (1968–2012) (ZMK)</option>
                        <option  value="ZMW">Zambian Kwacha (ZMW)</option>
                        <option  value="ZWL">Zimbabwean Dollar (2009) (ZWL)</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="cantidad_to">Equivale a</label>
                <div class="col-md-5">
                    <input id="cantidad_to" name="cantidad_to" type="text" placeholder="Monto equivalente" class="form-control input-md">

                </div>
            </div>

        </fieldset>
    </form>

    <h2>Mapa mundo, haga click en el pais para ver la conversion</h2>
    <div id="map" class="map"></div>
    <div id="info">&nbsp;</div>

    <script>
        var style = new ol.style.Style({
            fill: new ol.style.Fill({
                color: 'rgba(255, 255, 255, 0.6)'
            }),
            stroke: new ol.style.Stroke({
                color: '#319FD3',
                width: 1
            }),
            text: new ol.style.Text({
                font: '12px Calibri,sans-serif',
                fill: new ol.style.Fill({
                    color: '#000'
                }),
                stroke: new ol.style.Stroke({
                    color: '#fff',
                    width: 3
                })
            })
        });

        var vectorLayer = new ol.layer.Vector({
            source: new ol.source.Vector({
                url: 'https://openlayers.org/en/v3.19.1/examples/data/geojson/countries.geojson',
                format: new ol.format.GeoJSON()
            }),
            style: function(feature, resolution) {
                style.getText().setText(resolution < 5000 ? feature.get('name') : '');
                return style;
            }
        });

        var map = new ol.Map({
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                }),
                vectorLayer
            ],
            target: 'map',
            view: new ol.View({
                projection: 'EPSG:3857',
                center: ol.proj.fromLonLat([-30,0]),
                zoom: 2
            })
        });

        var highlightStyleCache = {};

        var featureOverlay = new ol.layer.Vector({
            source: new ol.source.Vector(),
            map: map,
            style: function(feature, resolution) {
                var text = resolution < 5000 ? feature.get('name') : '';
                if (!highlightStyleCache[text]) {
                    highlightStyleCache[text] = new ol.style.Style({
                        stroke: new ol.style.Stroke({
                            color: '#f00',
                            width: 1
                        }),
                        fill: new ol.style.Fill({
                            color: 'rgba(255,0,0,0.1)'
                        }),
                        text: new ol.style.Text({
                            font: '12px Calibri,sans-serif',
                            text: text,
                            fill: new ol.style.Fill({
                                color: '#000'
                            }),
                            stroke: new ol.style.Stroke({
                                color: '#f00',
                                width: 3
                            })
                        })
                    });
                }
                return highlightStyleCache[text];
            }
        });

        var highlight;
        var displayFeatureInfo = function(pixel) {

            var feature = map.forEachFeatureAtPixel(pixel, function(feature) {
                return feature;
            });

            var info = document.getElementById('info');
            if (feature) {
                info.innerHTML = feature.getId() + ': ' + feature.get('name');
            } else {
                info.innerHTML = '&nbsp;';
            }

            if (feature !== highlight) {
                if (highlight) {
                    featureOverlay.getSource().removeFeature(highlight);
                }
                if (feature) {
                    featureOverlay.getSource().addFeature(feature);
                }
                highlight = feature;
            }

        };

        map.on('pointermove', function(evt) {
            if (evt.dragging) {
                return;
            }
            var pixel = map.getEventPixel(evt.originalEvent);
            displayFeatureInfo(pixel);
        });

        map.on('click', function(evt) {
            displayFeatureInfo(evt.pixel);
        });
    </script>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

