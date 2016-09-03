<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 9/2/2016
 * Time: 11:41 PM
 */
?>
<!DOCTYPE html>
<!--
______ ______  ______  ______ ______  ______  __  __     ______  ______  __      __  __  ______ __  ______  __   __  ______
/\  == /\  == \/\  __ \/\__  _/\  ___\/\  ___\/\ \_\ \   /\  ___\/\  __ \/\ \    /\ \/\ \/\__  _/\ \/\  __ \/\ "-.\ \/\  ___\
\ \  _-\ \  __<\ \ \/\ \/_/\ \\ \  __\\ \ \___\ \  __ \  \ \___  \ \ \/\ \ \ \___\ \ \_\ \/_/\ \\ \ \ \ \/\ \ \ \-.  \ \___  \
 \ \_\  \ \_\ \_\ \_____\ \ \_\\ \_____\ \_____\ \_\ \_\  \/\_____\ \_____\ \_____\ \_____\ \ \_\\ \_\ \_____\ \_\\"\_\/\_____\
\/_/   \/_/ /_/\/_____/  \/_/ \/_____/\/_____/\/_/\/_/   \/_____/\/_____/\/_____/\/_____/  \/_/ \/_/\/_____/\/_/ \/_/\/_____/
-->
<html lang="en">
<head>
    <title>Protech Solutions | Rhode Island</title>
    <!-- Favicon logo
<link rel="shortcut icon" href="/images/logos/logofavicon.ico" type="image/x-icon">-->
    <!--<link rel="icon" href="/images/logos/logofavicon.png" type="image/png">-->
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Raleway Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,900,800,500' rel='stylesheet' type='text/css'>
    <!-- Abel Font -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- Great Vibes Cursive -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <!-- Titillium Web Font-->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">
    <!-- Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Chat text -->
    <link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
    <!-- Kristi Font -->
    <link href='https://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
    <!-- Materialize css -->
    <link type="text/css" rel="stylesheet" href="/ASCapstoneProject/css/materialize.min.css"  media="screen,projection"/>
    <!-- Stylesheet -->
    <link type="text/css" rel="stylesheet" href="/ASCapstoneProject/css/style.css" media="screen,projection" />
    <!--  Devicons Color Version -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
    <!--<link rel="stylesheet" href="css/devicon-colors.css">-->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/devicons/1.8.0/css/devicons.min.css" rel="stylesheet" type="text/css">-->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
</head>
<body>

<!-- HEADER -->
<header class="chkout-headder">
    <!-- Begin Navbar -->
    <div class="navbar-fixed open-sans3">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center-on-xlarge great-vibes">Protech Solutions</a>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down hide-on-xlarge">
                    <li><a href="#!">About</a></li>
                    <li><a href="#!">Product</a></li>
                    <li><a href="#!">Testimonials</a></li>
                    <li><a href="#!">Demo</a></li>
                    <li class="active-checkout"><a href="#!">Buy</a></li>
                    <li><a href="#!">Contact</a></li>
                    <!-- Extra Drop Down Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="ddExtra" data-belowOrigin="true" data-alignment="right" data-gutter="-5" data-hover="true" data-constrainwidth="true "><i class="material-icons">more_vert</i></a></li>
                    <!-- Dropdown Structure -->
                    <ul id="ddExtra" class="dropdown-content">
                        <li><a href="#!">Team</a>
                        <li class="divider"></li>
                        <li><a href="#!">Location</a></li>
                        <li class="divider"></li>
                        <li><a href="#!">Social Media</a></li>
                    </ul>
                </ul>
            </div>
        </nav>
        <ul id="slide-out" class="side-nav fixed ralewayBold">
            <li><div class="userView">
                    <div class="center-align">
                        <img class="circle side-logo" src="/ASCapstoneProject/images/logos/logo.png">
                    </div>
                    <a href="index.html"><span class="white-text name userview-link">Protech Solutions</span></a>
                    <a href="#!"><span class="white-text email userview-link">ProtechSolutionsRI@gmail.com</span></a>
                </div></li>
            <li><a class="waves-effect" href="index.html#about">About</a></li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="index.html#product">Product</a></li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="index.html#testimonial">Testimonials</a></li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="#!">Demo</a></li>
            <li><div class="divider"></div></li>
            <!--<li class="active-checkout-side"><a href="#!">Buy</a></li>-->
            <li><a class="subheader">Buy</a></li>
            <li><a class="waves-effect" href="#!"><i class="material-icons left red-text">subdirectory_arrow_right</i>Checkout</a></li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="#!">Contact</a></li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="#!">Dev Team</a>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="#!">Location</a></li>
            <li><div class="divider"></div></li>
            <li><a href="#!">Social Media</a></li>
            <li><div class="divider"></div></li>
        </ul>
    </div><!-- End Navbar -->
    <!-- BREADCRUMB NAV -->
    <nav class="open-sans3 breadcrumb-nav hide-on-med-and-down">
        <div class="nav-wrapper">
            <div class="col s12 bcrumb-hvr pinned">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Checkout</a>
            </div>
        </div>
    </nav><!-- END BREADCRUMB NAV -->
</header>
<!-- END HEADER -->




<main>
    <!-- CHECKOUT FORMS -->
    <section class="section checkout-section open-sans3">
        <div class="container">
            <!-- BEGIN FORM -->
            <form class="col s12" id="checkoutForm" method="post">
                <!--CHECKBOX - PRODUCT SECTION-->
                <div class="row">
                    <div class="col s12 m8 l6 offset-m2 offset-l3" id="validateAnimate">
                        <ul class="collection with-header center-align">
                            <li class="collection-header" id="chk-collection-header"><img src="images/logos/logo.png" height="128" width="128"/><h4>Protech Checkout</h4></li>
                            <li class="collection-item" id="chk-collection">
                                <p>
                                    <input name="group1" type="radio" id="chkEHR" title="Please check off correct product" class="with-gap validate" required="" aria-required="true" value="EHR"/>
                                    <label for="chkEHR" class="chk-ehr-label">Advanced EHR Suite - <i>$199.99 /month</i></label>
                                </p>
                                <p>
                                    <input name="group1" type="radio" id="chkBilling" disabled="disabled" />
                                    <label for="chkBilling">Advanced Medical Billing Suite - <i>$79.99 /month</i></label>
                                </p>
                                <p>
                                    <input name="group1" type="radio" id="chkPortal" disabled="disabled" />
                                    <label for="chkPortal">Advanced Patient Portal Suite - <i>$149.99 /month</i></label>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div><!-- END CHECKBOX - PRODUCT SECTION -->
                <!-- ROW -->
                <div class="row">
                    <div class="col s12 m8 offset-m2 l6">
                        <!-- CARD -->
                        <div class="card chk-out-card">
                            <div class="card-content billing-content">
                                <div class="row">
                                    <h5 class="center-align">Payment Information</h5>
                                    <div class="require center-align">* All fields required</div><br/>
                                </div>
                                <div class="row">
                                    <!-- First Name-->
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="first_name" placeholder="John" type="text" name="" pattern="^[a-zA-Z'.,\s-]{2,35}$" title="Enter first name" class="validate" required="" aria-required="true">
                                            <label for="first_name"><b>First Name</b></label>
                                        </div>
                                        <!-- Last Name-->
                                        <div class="input-field col s6">
                                            <input id="last_name" placeholder="Juggerknot" type="text" name="" pattern="^[a-zA-Z'.,\s-]{2,50}$" title="Enter last name" class="validate" required="" aria-required="true">
                                            <label for="last_name"><b>Last Name</b></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Address 1-->
                                        <div class="input-field col s12">
                                            <input id="address_one" placeholder="123 Holiday Lane" type="text" name=""  title="Enter your street address" class="validate" required="" aria-required="true">
                                            <label for="address_one"><b>Address 1</b></label>
                                        </div>
                                    </div>
                                    <!-- Address 2-->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="address_two" placeholder="Apartment 2C" type="text" name="" title="Enter secondary address">
                                            <label for="address_two"><b>Address 2</b></label>
                                        </div>
                                    </div>
                                    <!-- CITY -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="city" placeholder="Narnia" type="text" name=""  title="Enter your city or town" class="validate" required="" aria-required="true">
                                            <label for="city"><b>City</b></label>
                                        </div>
                                    </div>
                                    <!-- STATES -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select id="states" title="Select a state" class="validate" required="" aria-required="true">
                                                <option value="None" class="grey-text" disabled selected>Select a State</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                            <label for="states"><b>State</b></label>
                                        </div>
                                    </div>
                                    <!-- ZIPCODE -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="zipcode" placeholder="03543 or 02454-4533" type="text" name=""  pattern="^\d{5}(?:[-\s]\d{4})?$" title="Enter your zipcode" class="validate" required="" aria-required="true">
                                            <label for="zipcode"><b>Zip</b></label>
                                        </div>
                                    </div>
                                    <!-- Country -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input disabled value="United States" id="country" type="text" class="validate">
                                            <label for="country"><b>Country</b></label>
                                        </div>
                                    </div>
                                    <!-- PHONE -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <!-- CHECK VALIDATION ******************* -->
                                            <input id="phone_number" placeholder="123-456-7890" type="text" name="" pattern="^[2-9]\d{2}-\d{3}-\d{4}$" title="Enter your 10 digit phone number with dashes ex. 508-234-1233" class="validate" required="" aria-required="true">
                                            <label for="phone_number"><b>Phone</b></label>
                                        </div>
                                    </div>
                                    <!-- EMAIL -->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <!-- placeholder="Name@yourdomain.com" -->
                                            <input  id="email_of" placeholder="example@yourdomain.com" type="text" name="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Enter email address correctly" class="validate" required="" aria-required="true">
                                            <label for="email_of"><b>Email</b></label>
                                        </div>
                                    </div>
                                </div><!-- END ROW -->
                            </div><!-- END CARD CONTENT -->
                        </div> <!-- END CARD -->
                    </div><!-- END COL -->

                    <!-- CC FORM -->
                    <div class="col s12 m8 offset-m2 l6">
                        <!-- CARD -->
                        <div class="card chk-out-card">
                            <div class="card-content billing-content">
                                <div class="row">
                                    <h5 class="center-align">Credit Card Information</h5>
                                    <div class="require hide-on-small-only center-align">* All fields required</div><br />
                                </div>
                                <div class="row">
                                    <!-- Credit Card  Name-->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="cc_name" placeholder="First Last" type="text" name="cc_name" pattern="^[a-zA-Z'.,\s-]{2,50}$" title="Enter full name on card" class="validate" required="" aria-required="true">
                                            <label for="cc_name"><b>Card Name</b></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Credit Card Number -->
                                        <div class="input-field col s12">
                                            <input id="cc_number" placeholder="0000000000000000" type="text" name="cc_number" pattern="^[1-9][0-9]{11,15}$" title="Enter credit card number" class="validate" required="" aria-required="true">
                                            <label for="cc_number"><b>Card Number</b></label>
                                        </div>
                                    </div>
                                    <!-- Expiration Dates -->
                                    <div class="row">
                                        <!-- Month Expr -->
                                        <div class="input-field col s6">
                                            <select id="cc_month" title="Select a month" type="select" class="validate" required="" aria-required="true">
                                                <option value="" disabled selected>Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <label for="cc_month"><b>Month</b></label>
                                        </div>
                                        <!-- Year Expr -->
                                        <div class="input-field col s6">
                                            <select id="cc_year" title="Select a year" type="select" class="validate" required="" aria-required="true">
                                                <option value="" disabled selected>Year</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>
                                            <label for="cc_year"><b>Year</b></label>
                                        </div>
                                    </div>
                                    <!-- CCV Security Code -->
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="cc_ccv" placeholder="Ex: 121" type="text" name=""  pattern="^[1-9][0-9]{2,3}$" title="Enter your CCV number (3 or 4 digits)" class="validate" required="" aria-required="true">
                                            <label for="cc_ccv"><b>CCV</b></label>
                                        </div>
                                        <div class="col s6">
                                            <div class="whats-CCV">
                                                <a class="chk-links tooltipped" data-position="bottom" data-delay="50" data-tooltip="CCV is the final 3 or 4 digits of the number printed on the back of your card" href="#!">What is this?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- END ROW -->
                            </div><!-- END CARD CONTENT -->
                        </div> <!-- END CARD -->
                    </div><!-- END COL -->

                    <div class="col s12 m8 offset-m2 l6">
                        <!-- CARD -->
                        <div class="card chk-out-card">
                            <div class="card-content checkout-card-complete">
                                <div class="row">
                                    <div class="row complete-box">
                                        <h5 class="">Complete Order:</h5>
                                    </div>
                                    <div class="center-align tos" id="tocBox">
                                        <!--onchange="this.setCustomValidity(validity.valueMissing ? 'Please agree to the Terms of Service' : '');"-->
                                        <input type="checkbox" class="filled-in" name="terms" id="chk_termsOfService" title="Please agree to the terms of service" required="" aria-required="true" />
                                        <!-- TOS Modal Trigger -->
                                        <label for="chk_termsOfService"><a href="#tosModal" class="chk-links modal-trigger">Terms of Service</a></label>
                                    </div>
                                    <!-- Modal Structure -->
                                    <div id="tosModal" class="modal modal-fixed-footer">
                                        <div class="modal-content open-sans3 tos-contents">
                                            <h4 class="center-align">Protech Solutions Terms of Service</h4>
                                            <h5>1. Terms</h5>
                                            <p>By accessing this web site, you are agreeing to be bound by these
                                                web site Terms and Conditions of Use, all applicable laws and regulations,
                                                and agree that you are responsible for compliance with any applicable local
                                                laws. If you do not agree with any of these terms, you are prohibited from
                                                using or accessing this site. The materials contained in this web site are
                                                protected by applicable copyright and trade mark law.</p>
                                            <h5>2. Use License</h5>
                                            <ol type="a">
                                                <li>
                                                    Permission is granted to temporarily download one copy of the materials
                                                    (information or software) on Protech Solutions's web site for personal,
                                                    non-commercial transitory viewing only. This is the grant of a license,
                                                    not a transfer of title, and under this license you may not:

                                                    <ol type="i">
                                                        <li>modify or copy the materials;</li>
                                                        <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                                                        <li>attempt to decompile or reverse engineer any software contained on Protech Solutions's web site;</li>
                                                        <li>remove any copyright or other proprietary notations from the materials; or</li>
                                                        <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                                                    </ol>
                                                </li>
                                                <li>
                                                    This license shall automatically terminate if you violate any of these restrictions and may be terminated by Protech Solutions at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
                                                </li>
                                            </ol>

                                            <h5>3. Disclaimer</h5>

                                            <ol type="a">
                                                <li>
                                                    The materials on Protech Solutions's web site are provided "as is". Protech Solutions makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, Protech Solutions does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.
                                                </li>
                                            </ol>

                                            <h5>4. Limitations</h5>
                                            <p>In no event shall Protech Solutions or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on Protech Solutions's Internet site, even if Protech Solutions or a Protech Solutions authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

                                            <h5>5. Revisions and Errata</h5>

                                            <p>The materials appearing on Protech Solutions's web site could include technical, typographical, or photographic errors. Protech Solutions does not warrant that any of the materials on its web site are accurate, complete, or current. Protech Solutions may make changes to the materials contained on its web site at any time without notice. Protech Solutions does not, however, make any commitment to update the materials.</p>

                                            <h5>6. Links</h5>

                                            <p>Protech Solutions has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by Protech Solutions of the site. Use of any such linked web site is at the user's own risk.</p>

                                            <h5>7. Site Terms of Use Modifications</h5>

                                            <p>Protech Solutions may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</p>

                                            <h5>8. Governing Law</h5>

                                            <p>Any claim relating to Protech Solutions's web site shall be governed by the laws of the State of Rhode Island without regard to its conflict of law provisions.</p>

                                            <p>General Terms and Conditions applicable to Use of a Web Site.</p>
                                            <h5>Privacy Policy</h5>

                                            <p>Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>

                                            <ul>
                                                <li>
                                                    Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.
                                                </li>
                                                <li>
                                                    We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.
                                                </li>
                                                <li>
                                                    We will only retain personal information as long as necessary for the fulfillment of those purposes.
                                                </li>
                                                <li>
                                                    We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.
                                                </li>
                                                <li>
                                                    Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.
                                                </li>
                                                <li>
                                                    We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
                                                </li>
                                                <li>
                                                    We will make readily available to customers information about our policies and practices relating to the management of personal information.
                                                </li>
                                            </ul>

                                            <p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.</p>

                                        </div>
                                        <div class="modal-footer">
                                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" id="tosAgreeBtn">Agree</a>
                                        </div>
                                    </div>
                                    <!-- Purchase Button -->
                                    <div class="center-align">
                                        <button class="btn waves-effect waves-light" type="submit" id="chkOutBtn" form="checkoutForm" name="action">Purchase
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CC FORM -->
                </div><!--END  ROW -->
            </form>
        </div> <!-- END CONTAINER -->
    </section><!-- END Checkout Forms -->

    <section class="section bottom-sec">
        <div class="checkout-banner">
            <!--https://hd.unsplash.com/photo-1468743428993-661b9309fa2c-->
            <div class="banner-overlay">
                <div class="center-align">
                    <img height="256" width="256" src="/ASCapstoneProject/images/logos/logo.png" />
                    <p class="open-sans7 white-texxt chkout-co-name">Protech Solutions</p>
                </div>
            </div>
            <img class="checkout-bnr-img" src="/ASCapstoneProject/images/images/building-two.jpeg">
        </div>
    </section>
</main>














<!-- FOOTER -->
<footer class="page-footer abel">
    <div class="container">
        <div class="row">
            <div class="col l6 m6 s12 center-align foot-text">
                <h5 class="center-align">Have a question?</h5>
                <!-- Help Chat Modal Trigger -->
                <p class="center-align">You can reach us 24 hours a day, 7 days a week by connecting to our live <a
                        href="#modal-chat" class="modal-trigger">customer service representative</a></p>
                <!-- Modal Structure -->
                <div id="modal-chat" class="modal modal-fixed-footer">
                    <div class="modal-content chat-content">
                        <div class="modal-header right-align">
                            <a href="#!" class="chat-action-icon"><i class="material-icons">remove</i></a>
                            <a href="#!" class="chat-action-icon modal-action modal-close"><i class="material-icons">clear</i></a>
                        </div>
                        <h4>Live Customer Support</h4>
                        <p class="chat-header">One of our customer support staff will be glad to help you out with any
                            questions or issues you may be facing. Thank you!</p>
                        <div class="row">
                            <div class="col s12">
                                <div class="card chat-box left-align">
                                    <div class="card-content black-text inconsolata">
                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>
                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="rep-name">Tim:</span>&nbsp;I am a very simple card. I am good at
                                            containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>

                                        <p><span class="cust-name">Customer24124:</span>&nbsp;I am a very simple card. I
                                            am good at containing small bits of information.
                                            I am convenient because I require little markup to use effectively.</p>


                                        <div class="response-section">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer chat-footer">
                        <div class="row">
                            <form class="col s12">
                                <div class="input-field col s10">
                                    <input id="" type="text" length="255" placeholder="Write message here!">
                                </div>
                                <div class="col s2" style="margin-top: 10px;">
                                    <button class="btn waves-effect waves-light blue darken-4  white-text" type="submit"
                                            name="action">Send
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <a class="modal-trigger" href="#tosModalHome">Terms of Service</a>

                    <!-- Modal Structure -->
                    <div id="tosModalHome" class="modal modal-fixed-footer">
                        <div class="modal-content open-sans3 tos-contents left-align">
                            <h4 class="center-align">Protech Solutions Terms of Service</h4>
                            <h5>1. Terms</h5>
                            <p>By accessing this web site, you are agreeing to be bound by these
                                web site Terms and Conditions of Use, all applicable laws and regulations,
                                and agree that you are responsible for compliance with any applicable local
                                laws. If you do not agree with any of these terms, you are prohibited from
                                using or accessing this site. The materials contained in this web site are
                                protected by applicable copyright and trade mark law.</p>
                            <h5>2. Use License</h5>
                            <ol type="a">
                                <li>
                                    Permission is granted to temporarily download one copy of the materials
                                    (information or software) on Protech Solutions's web site for personal,
                                    non-commercial transitory viewing only. This is the grant of a license,
                                    not a transfer of title, and under this license you may not:

                                    <ol type="i">
                                        <li>modify or copy the materials;</li>
                                        <li>use the materials for any commercial purpose, or for any public display
                                            (commercial or non-commercial);
                                        </li>
                                        <li>attempt to decompile or reverse engineer any software contained on Protech
                                            Solutions's web site;
                                        </li>
                                        <li>remove any copyright or other proprietary notations from the materials; or
                                        </li>
                                        <li>transfer the materials to another person or "mirror" the materials on any
                                            other server.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    This license shall automatically terminate if you violate any of these restrictions
                                    and may be terminated by Protech Solutions at any time. Upon terminating your
                                    viewing of these materials or upon the termination of this license, you must destroy
                                    any downloaded materials in your possession whether in electronic or printed format.
                                </li>
                            </ol>

                            <h5>3. Disclaimer</h5>

                            <ol type="a">
                                <li>
                                    The materials on Protech Solutions's web site are provided "as is". Protech
                                    Solutions makes no warranties, expressed or implied, and hereby disclaims and
                                    negates all other warranties, including without limitation, implied warranties or
                                    conditions of merchantability, fitness for a particular purpose, or non-infringement
                                    of intellectual property or other violation of rights. Further, Protech Solutions
                                    does not warrant or make any representations concerning the accuracy, likely
                                    results, or reliability of the use of the materials on its Internet web site or
                                    otherwise relating to such materials or on any sites linked to this site.
                                </li>
                            </ol>

                            <h5>4. Limitations</h5>
                            <p>In no event shall Protech Solutions or its suppliers be liable for any damages
                                (including, without limitation, damages for loss of data or profit, or due to business
                                interruption,) arising out of the use or inability to use the materials on Protech
                                Solutions's Internet site, even if Protech Solutions or a Protech Solutions authorized
                                representative has been notified orally or in writing of the possibility of such damage.
                                Because some jurisdictions do not allow limitations on implied warranties, or
                                limitations of liability for consequential or incidental damages, these limitations may
                                not apply to you.</p>

                            <h5>5. Revisions and Errata</h5>

                            <p>The materials appearing on Protech Solutions's web site could include technical,
                                typographical, or photographic errors. Protech Solutions does not warrant that any of
                                the materials on its web site are accurate, complete, or current. Protech Solutions may
                                make changes to the materials contained on its web site at any time without notice.
                                Protech Solutions does not, however, make any commitment to update the materials.</p>

                            <h5>6. Links</h5>

                            <p>Protech Solutions has not reviewed all of the sites linked to its Internet web site and
                                is not responsible for the contents of any such linked site. The inclusion of any link
                                does not imply endorsement by Protech Solutions of the site. Use of any such linked web
                                site is at the user's own risk.</p>

                            <h5>7. Site Terms of Use Modifications</h5>

                            <p>Protech Solutions may revise these terms of use for its web site at any time without
                                notice. By using this web site you are agreeing to be bound by the then current version
                                of these Terms and Conditions of Use.</p>

                            <h5>8. Governing Law</h5>

                            <p>Any claim relating to Protech Solutions's web site shall be governed by the laws of the
                                State of Rhode Island without regard to its conflict of law provisions.</p>

                            <p>General Terms and Conditions applicable to Use of a Web Site.</p>
                            <h5>Privacy Policy</h5>

                            <p>Your privacy is very important to us. Accordingly, we have developed this Policy in order
                                for you to understand how we collect, use, communicate and disclose and make use of
                                personal information. The following outlines our privacy policy.</p>

                            <ul>
                                <li>
                                    Before or at the time of collecting personal information, we will identify the
                                    purposes for which information is being collected.
                                </li>
                                <li>
                                    We will collect and use of personal information solely with the objective of
                                    fulfilling those purposes specified by us and for other compatible purposes, unless
                                    we obtain the consent of the individual concerned or as required by law.
                                </li>
                                <li>
                                    We will only retain personal information as long as necessary for the fulfillment of
                                    those purposes.
                                </li>
                                <li>
                                    We will collect personal information by lawful and fair means and, where
                                    appropriate, with the knowledge or consent of the individual concerned.
                                </li>
                                <li>
                                    Personal data should be relevant to the purposes for which it is to be used, and, to
                                    the extent necessary for those purposes, should be accurate, complete, and
                                    up-to-date.
                                </li>
                                <li>
                                    We will protect personal information by reasonable security safeguards against loss
                                    or theft, as well as unauthorized access, disclosure, copying, use or modification.
                                </li>
                                <li>
                                    We will make readily available to customers information about our policies and
                                    practices relating to the management of personal information.
                                </li>
                            </ul>

                            <p>We are committed to conducting our business in accordance with these principles in order
                                to ensure that the confidentiality of personal information is protected and
                                maintained.</p>

                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Exit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l6 m6 s12">
                <h5 class="center-align">Social Media</h5>
                <div class="col s2 offset-s1">
                    <a href="#!"><img src="/ASCapstoneProject/images/blue-circle-icons/facebook-blue.png" alt="facebook icon"
                                      class="social-icons"></a>
                </div>
                <div class="col s2">
                    <a href="#!"><img src="/ASCapstoneProject/images/blue-circle-icons/google-blue.png" alt="google plus icon"
                                      class="social-icons"></a>
                </div>
                <div class="col s2">
                    <a href="#!"><img src="/ASCapstoneProject/images/blue-circle-icons/instragram-blue.png" alt="instagram icon"
                                      class="social-icons"></a>
                </div>
                <div class="col s2">
                    <a href="#!"><img src="/ASCapstoneProject/images/blue-circle-icons/linkedin-blue.png" alt="linked-in icon"
                                      class="social-icons"></a>
                </div>
                <div class="col s2">
                    <a href="https://twitter.com/Protech_RI" target="_blank"><img
                            src="/ASCapstoneProject/images/blue-circle-icons/twitter-blue.png" alt="twitter icon" class="social-icons"></a>
                </div>
                <div class="col s12 privacy-link">
                    <div class="center-align">
                        <!-- Privacy Policy Modal Trigger -->
                        <a class="modal-trigger" href="#modalPrivacy">Privacy Policy</a>

                        <!-- Privacy Policy Modal Structure -->
                        <div id="modalPrivacy" class="modal modal-fixed-footer">
                            <div class="modal-content left-align privacy-content">
                                <h3 class="center-align">Protech Solutions Privacy Policy</h3>
                                <h6> This privacy policy discloses the privacy practices for www.protechsolutionsri.com
                                    . This privacy
                                    policy applies solely to information collected by this web site. It will notify you
                                    of
                                    the following:
                                </h6>
                                <ul>
                                    <li>What personally identifiable information is collected from you through the web
                                        site,
                                        how it is used and with whom it may be shared.
                                    </li>
                                    <li> What choices are available to you regarding the use of your data.</li>
                                    <li>The security procedures in place to protect the misuse of your information.</li>
                                    <li>How you can correct any inaccuracies in the information.</li>

                                </ul>
                                <h5>Information Collection, Use, and Sharing</h5>
                                <p> We are the sole owners of the information collected on this site. We only have
                                    access
                                    to/collect information that you voluntarily give us via email or other direct
                                    contact from you.
                                    We will not sell or rent this information to anyone.
                                </p>
                                <p>We will use your information to respond to you, regarding the reason you contacted
                                    us.
                                    We will not share your information with any third party outside of our organization,
                                    other than as necessary to fulfill your request, e.g. to ship an order.
                                </p>
                                <p> Unless you ask us not to, we may contact you via email in the future to tell you
                                    about
                                    specials, new products or services, or changes to this privacy policy.
                                </p>
                                <h5>Your Access to and Control Over Information</h5>
                                <p>You may opt out of any future contacts from us at any time. You can do the following
                                    at any
                                    time by contacting us via the email address or phone number given on our website:
                                </p>
                                <ul>
                                    <li>See what data we have about you, if any.</li>
                                    <li>Change/correct any data we have about you.</li>
                                    <li>Have us delete any data we have about you.</li>
                                    <li>Express any concern you have about our use of your data.</li>
                                </ul>
                                <h5>Security</h5>
                                <p>We take precautions to protect your information. When you submit sensitive
                                    information
                                    via the website, your information is protected both online and offline.
                                </p>
                                <p>Wherever we collect sensitive information (such as credit card data), that
                                    information
                                    is encrypted and transmitted to us in a secure way. You can verify this by looking
                                    for a
                                    closed lock icon at the bottom of your web browser, or looking for "https" at the
                                    beginning
                                    of the address of the web page.
                                </p>
                                <p>While we use encryption to protect sensitive information transmitted online, we also
                                    protect
                                    your information offline. Only employees who need the information to perform a
                                    specific job (for example, billing or customer service) are granted access to
                                    personally identifiable information. The computers/servers in which we store
                                    personally identifiable information are kept in a secure environment.
                                </p>
                                <h5>Updates</h5>
                                <p>Our Privacy Policy may change from time to time and all updates will be posted on
                                    this page.
                                </p>
                                <p>If you feel that we are not abiding by this privacy policy, you should contact us
                                    immediately
                                    via telephone at 555-555-5555 or via email at information@protechsolutions.com
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!"
                                   class="modal-action modal-close waves-effect waves-green btn-flat ">Exit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container center-align">
            &copy; 2016 Protech Solutions
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- FIXED CHAT BUTTON -->
<div class="fix-btn-transform" id="fixChatBtn">
    <a href="#modal-chat" class="btn-floating btn-large modal-trigger">
        <i class="material-icons">message</i>
    </a>
</div><!-- End  Fixed Chatbox Button -->

</div> <!-- END MAIN CONTENT -->


<!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/ASCapstoneProject/js/materialize.min.js"></script>
<script type="text/javascript" src="/ASCapstoneProject/js/script.js"></script>
<!-- Fonts Awesome -->
<script src="https://use.fontawesome.com/351ac21fcd.js"></script>
</body>
</html>

