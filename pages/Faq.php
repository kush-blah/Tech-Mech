<!DOCTYPE html>
<!--Created by Kush Singh Chibber-->
<html>
<head>
    <meta charset="UTF-8">
    <title>FAQ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

</head>
<body>
<header>
    <?php include('nav-header.html') ?>
</header>
<div class="container-fluid mainFaq">
    <div class="page-header">
        <h1 class="text-white">Frequently Asked Questions</h1>
        <br>
    </div>

    <!-- Bootstrap FAQ - START -->
    <div class="container">
<!--Accordion Card-->

        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                            Is account registration required?
                        </button>
                    </h5>
                </div>
<!--Answer Card Body-->

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Account registration <strong>is</strong> required if you want to avail to our services.
                        Registration for inquiry is not needed.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                            Do In-House part come with guarantee?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        In-House Parts come with a 2-month Guarantee. Some parts come with an additional 6-month
                        Warranty.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                            What is the currency used for all transactions?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        All prices for servicing, subscriptions and other items, including Taxes are in
                        <strong>EUR</strong>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseThree">
                            When do I pay?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Payment is to be done in cash or electronic transfer <strong>BEFORE</strong> the beginning of an
                        appointment.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseThree">
                            When can i drop by?
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <!--List-->
                        During our opening Hours.
                        <ul class="font-italic">
                            <li>Sun: 8 p.m. - 10 p.m.</li>
                            <li>Mon: 8 p.m. - 8 p.m.</li>
                            <li>Tue: 8 p.m. - 8 p.m.</li>
                            <li>Wed: <strong class="text-warning">Closed</strong></li>
                            <li>Thur: 8 p.m. - 8 p.m.</li>
                            <li>Fri: 8 p.m. - 8 p.m.</li>
                            <li>Sat: 8 p.m. - 10 p.m.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseThree">
                            How do i know my service is complete?
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        We will text and call the Owner as soon the car is ready to be handed back over.
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap FAQ - END -->
    <br>
    <br>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>