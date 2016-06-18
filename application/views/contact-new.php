    <!DOCTYPE html>
    <html>
    <head>
        <title>Property Booking</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
        <link href="css/new-theme/bootstrap.css" rel='stylesheet' type='text/css'/>
        <link href="css/new-theme/style.css" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="js/new-theme/jquery.min.js"></script>
        <script src="js/new-theme/jquery.validate.js"></script>
       <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script src="js/new-theme/jquery.magnific-popup.js"></script>
        <!--<script src="js/new-theme/bootstrap.js"></script>
        <script src="js/new-theme/bootstrap.min.js"></script>-->
        <script src="js/new-theme/owl.carousel.js"></script>
        <script type="text/javascript" src="js/global/global_url_variable.js"></script>
        <script type="text/javascript" src="js/global/global_functions.js"></script>

        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link href="css/new-theme/owl.carousel.css" rel="stylesheet">

        <script src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
        <!--<script type="text/javascript" src="js/angular-messages.min.js"></script>-->
        <script type="text/javascript" src="js/controller/getRoomDetailController.js"></script>
        <script type="text/javascript" src="js/dirPagination.js"></script>
    </head>

    <body  data-spy="scroll" data-target="#myScrollspy">
    <!--header starts-->
    <div class="header">
        <?php $this->load->view('common/header-bar.php'); ?>
    </div>

    <script>
        $().ready(function() {
            // validate review form on keyup and submit
            $("#reviewForm").validate({
                rules: {
                    customer_name: {
                        required: true,
                        minlength: 2
                    },
                    review_checkin: {
                        required: true
                    },
                    review_checkout: {
                        required: true
                    },
                    review_given: {
                        required: true,
                        minlength: 100,
                        maxlength: 1000
                    },
                    customer_email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    customer_name: {
                        required: "Please enter a first name",
                        minlength: "Your first name must consist of at least 2 characters"
                    },
                    review_checkin: {
                        required: "Please enter a last name",
                        minlength: "Your last name must consist of at least 2 characters"
                    },
                    review_checkout: {
                        required: "Please enter a last name",
                        digit: "Only numbers are allowed",
                        minlength: "Your number must be at least 10 numbers long"
                    },
                    review_given: {
                        required: "Please provide your valuable review",
                        minlength: "Your review must be at least 100 characters long",
                        maxlength: "Your review must be at least 100 characters long"
                    },
                    customer_email: {
                        required: "Please enter a email",
                        email: "Please enter a valid email address"
                    }
                },
                submitHandler: function(form) {
                }
            });
        });

        $(document).ready(function () {

            $('.send-mail').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.send-mail').click(function() {
                $('#phone_div').hide();
                $('#email_id_div').show();
            });

            $('.send-sms').click(function() {
                $('#phone_div').show();
                $('#email_id_div').hide();
            });
           $('.send-sms').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
        $(function() {
            $( "#datepicker,#datepicker1" ).datepicker();
        });
        window.onload = function() {
            $("#owl-demo").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText :  false,
                pagination : false,
            });
			(function(){
				$(".banner").hide();
			})();
        };
    </script>

    <script type="text/javascript">

        function toggleSections(elem, caller)
        {
            // Remove all active class, and hide all sections first
            $(".container").find(".detailed-row").hide();
            $(".nav-tabs li").attr("class", "");
            // show only required section, and add active class to the caller link
            $(".container").find("#"+elem).show();
            $(caller).parent().attr("class", "active");
        }

        function checkLogin() {
            var name = $("#customer_name").val();
            if(name !='') {
                return true;
            } else {
                alert("Please login to book the property...!");
                var form = $(document.createElement('form'));
                $(form).attr("action",login_url);
                $(form).attr("method", "POST");

                var input = $("<input>")
                    .attr("type", "text")
                    .attr("name", "page")
                    .val("BookProperty" );


                $(form).append($(input));

                form.appendTo( document.body )

                $(form).submit();
                return false;

            }
        }

    </script>
    <!---->
    <div class="rooms text-center">
        <div class="container">
            <h2 class="tittle-one">
                <?php echo $propertyName;  ?>

                <h3 style="font-size: 26px !important"><?php echo nl2br($propertyAddress);?></h3>
            </h2>
            <div class="col-sm-9 myScrollspy" id="myScrollspy">
                <ul class="nav nav-tabs nav-stacked" data-offset-top="120" data-spy="affix">
                    <li class="active"><a href="#section1" onclick="javascript: toggleSections('section1', this)">Description</a></li>
                    <li><a href="#section2" onclick="javascript: toggleSections('section2', this)">Gallery</a></li>
                    <li><a href="#section3" onclick="javascript: toggleSections('section3', this)">Charges</a></li>
                    <li><a href="#section4" onclick="javascript: toggleSections('section4', this)">How to Reach</a></li>
                    <li><a href="#section5" onclick="javascript: toggleSections('section5', this)">Reviews</a></li>
                </ul>
            </div>
            <div class="room-detail">
                <div class="property-grids col-sm-9" ng-app="getRoomDetailApp" ng-controller="getRoomDetailController"	ng-init="getRoomDetail()" >
                        <div class="col-sm-12">
                            <div id="section1" class="detailed-row">
                                <div class="panel panel-default">
                                    <div class="panel-heading description-heading"> About</div>
                                    <div class="panel-body">
                                        <p><?php echo nl2br($propertyDescription);?></p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading description-heading"> The Property</div>
                                    <div class="panel-body">
                                        <ul>
                                            <li class="col-sm-2 property-details">
                                                <div class="decription-icon"><img src="images/new-theme/type.png"></div>
                                                <div class="decription-icon-text"><?php echo  nl2br($property_type); ?> </div>
                                            </li>
                                            <li class="col-sm-2 property-details">
                                                <div class="decription-icon"><img src="images/new-theme/bedroom.png"></div>
                                                <div class="decription-icon-text"><?php echo  nl2br($bedrooms); ?> Bedrooms</div>
                                            </li>
                                            <li class="col-sm-2 property-details">
                                                <div class="decription-icon"><img src="images/new-theme/bathroom.png"></div>
                                                <div class="decription-icon-text"><?php echo  nl2br($bathrooms); ?> Bathrooms</div>
                                            </li>
                                            <li class="col-sm-2 property-details">
                                                <div class="decription-icon"><img src="images/new-theme/guest.png"></div>
                                                <div class="decription-icon-text"><?php echo  $accommodates; ?> Guests</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading description-heading"> Amenities</div>
                                    <div class="panel-body">
                                        <ul>
                                            <?php if($pool == "Yes"){?>
                                                <li class="col-sm-2 property-details">
                                                    <div class="decription-icon"><img src="images/new-theme/pool.png"></div>
                                                    <div class="decription-icon-text">Pool</div>
                                                </li>
                                            <?php }?>
                                            <?php if($internet_access == "Yes"){?>
                                                <li class="col-sm-2 property-details">
                                                    <div class="decription-icon"><img src="images/new-theme/wifi.png"></div>
                                                    <div class="decription-icon-text">Internet Access</div>
                                                </li>
                                            <?php }?>
                                            <?php if($television == "Yes"){?>
                                                <li class="col-sm-2 property-details">
                                                    <div class="decription-icon"><img src="images/new-theme/television.png"></div>
                                                    <div class="decription-icon-text">Television</div>
                                                </li>
                                            <?php }?>
                                            <?php if($pet_friendly == "Yes"){?>
                                                <li class="col-sm-2 property-details">
                                                    <div class="decription-icon"><img src="images/new-theme/pets.png"></div>
                                                    <div class="decription-icon-text"> Pets Allowed</div>
                                                </li>
                                            <?php }?>
                                            <?php if($air_condition == "Yes"){?>
                                                <li class="col-sm-2 property-details">
                                                    <div class="decription-icon"><img src="images/new-theme/conditioner.png"></div>
                                                    <div class="decription-icon-text"> Air Conditioner</div>
                                                </li>
                                            <?php }?>
                                            <div class="clearfix"> </div>
                                            <?php if($in_house_kitchen == "Yes"){?>
                                                <li class="col-sm-2 property-details" style="margin-top: 10px">
                                                    <div class="decription-icon"><img src="images/new-theme/kitchen.png"></div>
                                                    <div class="decription-icon-text">In-House Kitchen</div>
                                                </li>
                                            <?php }?>
                                        </ul>
                                        <div class="clearfix"> </div>
                                        <?php if($meals){ ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading description-heading"> Food</div>
                                                <div class="panel-body">
                                                    <p><?php echo nl2br($meals);?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if($other_amenities){ ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading description-heading"> Other Amenities</div>
                                                <div class="panel-body">
                                                    <p><?php echo nl2br($other_amenities);?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if($leisureActivities){ ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading description-heading"> Leisure Activities</div>
                                                <div class="panel-body">
                                                    <p><?php echo nl2br($leisureActivities);?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="section2" class="detailed-row" style="display: none">
                              <!--  <h2>Gallery</h2> -->
                              <!--<div id="owl-demo" class="owl-carousel">-->
                                    <?php
                                    $i=1;
                                    $count=1;
                                    $files = glob('Admin/'.$imagePath."*.*");
                                    foreach ($files as $image_files) {
                                    ?>
                                    <div class="item text-center image-grid property-grid">
                                        <ul>
                                            <?php
                                                for ($count=1; $count<6; $count++)
                                                {
                                                    if($i<count($files)){
                                                        $image = $files[$i];
                                                        $supported_file = array(
                                                            'gif',
                                                            'jpg',
                                                            'jpeg',
                                                            'png'
                                                        );
                                                        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                                                        if (in_array($ext, $supported_file))
                                                        { ?>
                                                            <li><img src="<?php echo $image;?>" alt=""></li>
                                                        <?php
                                                            $i++;
                                                        }
                                                        else
                                                        {
                                                            continue;
                                                        }
                                                }
                                            }?>
                                        </ul>
                                    </div>
                                     <?php   } ?>
                                <!--</div>-->
                            </div>
                            <hr>
                            <div id="section3" class="detailed-row"  style="display: none">
                              <!--   <h2>Charges</h2>-->
                                <?php
                                foreach($rentresult as $row)
                                {
                                    $row=(array)$row;
                                    echo'<p><b>Accomodation Type:-</b>'.$row['accomodation'].
                                        '<br><b>Base Price:-</b>'.$row['basePrice'].
                                        '<br><b>Price per child:-</b>'.$row['childPrice'].
                                        '<br><b>Price per Adult:-</b>'.$row['adultPrice'].
                                        '<br><b>Room capacity:-</b>'.$row['capacity'].
                                        '</p><br><br>';
                                }
                                ?>
                            </div>
                            <hr>
                            <div id="section4" class="detailed-row" style="display: none">
                             <!--   <h2>How To Reach</h2> -->
                                <p><?php echo nl2br($way_to_reach); ?></p>
                            </div>
                            <hr>
                            <div id="section5" class="detailed-row" style="display: none">
                             <!--   <h2>Reviews</h2>-->
                                <div class="contact-form detailed-contact-form">
                                    <form name="reviewForm" novalidate ng-submit="reviewForm.$valid && processForm()" class="angular-msgs">

                                        <?php if(isset($name) && isset($email_address)){?>
                                            <input type="text" id="customer_name" ng-model="customer_name" placeholder="Name" ng-init="customer_name='<?php echo $name;?>'" readonly>
                                            <input type="text" ng-model="customer_email" placeholder="Email" ng-init="customer_email='<?php echo $email_address;?>'" readonly>
                                        <?php } else{?>

                                            <input type="text" id="customer_name" ng-model="customer_name" name="customer_name" ng-pattern="/^[a-zA-Z ]*$/" placeholder="Name" ng-value="" required>
                                            <!--<div ng-messages="reviewForm.customer_name.$error" ng-show="reviewForm.$submitted || reviewForm.customer_name.$dirty" role="alert">
                                                <div ng-message="required">This field is required</div>
                                                <div ng-message="pattern">Only characters & space allowed</div>
                                            </div>-->
                                            <input type="text" ng-model="customer_email" name="customer_email" ng-pattern="/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/" placeholder="Email" ng-value="" required>
                                            <!--<div id="ng-error" ng-messages="reviewForm.customer_email.$error" ng-if="reviewForm.customer_email.$dirty">
                                                <div ng-message="required">This field is required</div>
                                                <div ng-message="pattern">Your email address is invalid</div>
                                            </div>-->
                                        <?php }?>

                                        <div class="clearfix"> </div>

                                        <input class="date" id="datepicker" type="text" autocomplete="off" ng-model="review_checkin" name="review_checkin" id="review_checkin" placeholder="Check-In date" value="Check-In date" onfocus="this.value = '';" >
                                        <!--<div id="ng-error" ng-messages="reviewForm.review_checkin.$error" ng-if="reviewForm.review_checkin.$dirty">
                                            <div ng-message="required" >This field is required</div>
                                        </div>-->
                                        <input class="date" id="datepicker1" type="text" autocomplete="off" ng-model="review_checkout" name="review_checkout" id="review_checkout" placeholder="Check-Out date" value="Check-Out date" onfocus="this.value = '';" >
                                        <!--<div id="ng-error" ng-messages="reviewForm.review_checkout.$error" ng-if="reviewForm.review_checkout.$dirty">
                                            <div ng-message="required" >This field is required</div>
                                        </div>-->

                                        <div class="clearfix"> </div>

                                        <div class="review-rating">Rating:</div>
                                        <div class="acidjs-rating-stars">
                                            <input style="margin-right: 5px" type="radio" ng-model="rating_given" id="group-2-0" value="5" /><label style="font-weight: normal" for="group-2-0">Excellent</label>&nbsp;&nbsp;
                                            <input style="margin-right: 5px" type="radio" ng-model="rating_given" id="group-2-1" value="4" /><label style="font-weight: normal" for="group-2-1">Very Good</label>&nbsp;&nbsp;
                                            <input style="margin-right: 5px" type="radio" ng-model="rating_given" id="group-2-2" ng-init="rating_given=3" ng-selected="true" value="3" /><label style="font-weight: normal" for="group-2-2">Good</label>&nbsp;&nbsp;
                                            <input style="margin-right: 5px" type="radio" ng-model="rating_given" id="group-2-3" value="2" /><label style="font-weight: normal" for="group-2-3">Average</label>&nbsp;&nbsp;
                                            <input style="margin-right: 5px" type="radio" ng-model="rating_given" id="group-2-4" value="1" /><label style="font-weight: normal" for="group-2-4">Bad</label>
                                        </div>

                                        <textarea ng-model="review_given" ng-minlength="100" ng-maxlength="1000" name="review_given"  placeholder="Content...(max 1000)" required></textarea>
                                        <!--<div id="ng-error" ng-messages="reviewForm.review_given.$error" ng-if="reviewForm.review_given.$dirty" >
                                            <div ng-message="required">This field is required</div>
                                            <div ng-message="minlength">Review must be over 100 characters</div>
                                            <div ng-message="maxlength">Review must not exceed 1000 characters</div>
                                        </div>-->

                                        <div class="clearfix"> </div>

                                        <input type="hidden" ng-model="prop_id" ng-init="prop_id='<?php echo $property_id;?>'" >
                                        <input type="submit" id="submit" value="Submit">
                                        <br/><br/>
                                    </form>
                                </div>
                                <div class="other-comments"   data-ng-init = "getReviews()" >
                                    <div class="comments-head">
                                        <div><h3>Reviews</h3></div>
                                        <div>
                                            <dir-pagination-controls
                                                max-size="10"
                                                direction-links="true"
                                                boundary-links="true"
                                                auto-hide="true">
                                            </dir-pagination-controls>
                                        </div>
                                        <div class="comments-bot" dir-paginate="reviews_count in reviews|itemsPerPage:10">
                                            <div class="col-sm-2 customer-name">
                                                <strong>{{reviews_count.customer_name}} </strong><br/><span class="review-star" ng-repeat="r_cnt in strtoint(reviews_count.star_rating)">★</span>
                                            </div>
                                            <div class="col-sm-10 review-details">
                                                <div class="visited-during">
                                                       <strong> Visited property during {{reviews_count.check_in}} - {{reviews_count.check_out}}</strong>
                                                </div>
                                                <div class="review">
                                                    <p>{{reviews_count.review_text}}</p>
                                                </div>
                                            </div>
                                             <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </div>
                </div>
                <div class="booking-grid col-sm-3">
                    <div class="panel-heading description-heading"> <h4> Availability : <?php echo $avail_accomodates;?> </h4> </div>
                    <!--<h4>Availability : <?php /*echo $avail_accomodates;*/?></h4>-->

                    <b><a class="best-btn" onclick=" return checkLogin()" href="BookProperty">Book Now</a></b>
                    <div class="hotel-left-two" ng-app="getRoomDetailApp" ng-controller="popupController">

                        <p> Send </p>
                        <!--<p> <label onclick="togglemailPopUp()" >Mail</label> | <label onclick="togglemessagePopUp()" >SMS</label> </p>-->
                        <a class = "send-mail" href="#send-form" >Email</a> |
                        <a class = "send-sms" href="#send-form">SMS</a>

                        <div id="send-form" class="zoom-anim-dialog mfp-hide">
                      <!--  <modal id="modal"  ng-model="model" visible="showModal">-->
                            <form  name="formData" class="enquiry-form contact-form detailed-contact-form" ng-submit="Contact_to_customer_enquiry(<?php echo "'$propertyId'"; ?>)">
                                <h4 class="tittle-one"><?php echo $propertyName;  ?></h4>
                                <div class="" id="name">
                                    <label for="email"></label> <input type="text"
                                                                       class="form-control" name="full_name" id="full_name"
                                                                       ng-model="form.full_name" placeholder="Full Name" />
                                </div>
                                <div class="" id="email_id_div">
                                    <label for="email"></label> <input type="text"
                                                                       class="form-control" name="email_id" id="email_id"
                                                                       ng-model="form.email_id"
                                                                       ng-pattern="/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/" placeholder="Enter email" required />
                                    <div id="ng-error" ng-messages="form.email_id.$error" ng-if="form.email_id.$dirty">
                                        <div ng-message="required">This field is required</div>
                                        <div ng-message="pattern">Your email address is invalid</div>
                                    </div>
                                </div>
                                <div class="" id="phone_div">
                                    <label for="email"></label> <input type="text"
                                                                       class="form-control" name="phone" id="phone"
                                                                       ng-model="form.phone"
                                                                       placeholder="Enter Phone/Mobile Number"
                                                                       ng-pattern="/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/" required />
                                    <div id="ng-error" ng-messages="form.phone.$error" ng-if="form.phone.$dirty">
                                        <div ng-message="required">This field is required</div>
                                        <div ng-message="pattern">Must be a valid 10 digit phone number</div>
                                    </div>
                                </div>
                                <div class="" id="inTime">
                                    <label for="checkIn"></label><input class="date" placeholder="CheckIn Date" autocomplete="false"
                                                                        name="checkIn" id="checkIn" ng-model="form.checkIn"
                                                                        ng-init="checkIn= 'CheckIn Date'" type="text"
                                                                        onfocus="this.value = '';"
                                                                        onblur="if (this.value == '') {this.value = '';}" required>
                                </div>
                                <div class="" id="outTime">
                                    <label for="checkOut"></label><input class="date" placeholder="CheckOut Date" autocomplete="false"
                                                                         name="checkOut" id="checkOut" ng-model="form.checkOut"
                                                                         ng-init="checkOut= 'CheckOut Date'" type="text"
                                                                         onfocus="this.value = '';"
                                                                         onblur="if (this.value == '') {this.value = '';}" required>
                                </div>
                                <div class="" id="enquiry_div">
                                    <label for="enquiry"></label>
                                    <textarea class="form-control"
                                              ng-model="form.enquiry" id="enquiry" name="enquiry"
                                              placeholder="Enquiry.." required="required"></textarea>
                                </div>

                                <br>
                                <input style="width: 32% !important;" type="submit" id="submit_div" value="Submit">
                            </form>
                            <script src="js/jquery-ui.js"></script>
                            <script>
                                $(function() {
                                    $("#datepicker,#checkIn,#checkOut")
                                        .datepicker();
                                });
                            </script>
                        <!--</modal>-->
                        </div>
                    </div>
                    <div class="map-gd">
                        <div id="map_canvas" style="width:100%;height:270px;"></div>
                        <script src="http://maps.googleapis.com/maps/api/js"></script>
                        <script>
                            /* - map - */
                            var map;
                            var lat = parseFloat('<?php echo $latitude;?>');
                            var log = parseFloat('<?php echo $longitude;?>');
                            var myLatlng = new google.maps.LatLng(lat,log);
                            var myOptions = {
                                zoom: 12,
                                center: myLatlng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                map: map,
                                title: "Property location"
                            });

                            /* - map end - */
                        </script>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
    <div class="fotter-info">
        <?php $this->load->view('common/footer.html'); ?>
    </div>
    <!---->

    </body>
    </html>