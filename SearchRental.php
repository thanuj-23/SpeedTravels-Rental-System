<!-- include header file -->
<?php   include 'header.php'; ?>

<style>
  <?php include './css/searchBookingStyle.css'; ?>
</style>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $vehicleType = $_POST['vehicleType'];
  $pickupLocation = $_POST['pickupLocation'];
  $dropLocation = $_POST['dropLocation'];
  $pickupDate = $_POST['pickupDate'];
  $pickupTime = $_POST['pickupTime'];
}
?>


    <!-- main content area --- start -->
    <div class="container-xxl" id="searchMain">
        <div class="row">
            <!-- show customer searching details-->
            <div class="col-md-3">
                <div id="searchDetails">
                    <h5>You Searching</h5> <hr>
                    <h6>Vehicle Type</h6> 
                    <div class="row row-cols-2 g-2 g-md-4">
                        <div class="col-1"><i class="bi bi-car-front"></i></i></div>
                        <div class="col"><p> <?php echo $vehicleType ?> </p></div>
                    </div>
                    <h6>Pick-up</h6> 
                    <div class="row row-cols-2 g-2 g-md-4">
                        <div class="col-1"><i class="fa-solid fa-calendar-days"></i></div>
                        <div class="col"><p> <?php echo $pickupDate ?> </p></div>
                    </div>
                    <div class="row row-cols-2 g-2 g-md-4">
                        <div class="col-1"><i class="fa-solid fa-location-dot"></i></i></div>
                        <div class="col"><p> <?php echo $pickupLocation ?> </p></div>
                    </div>
                    <div class="row row-cols-2 g-2 g-md-4">
                        <div class="col-1"><i class="fa-solid fa-clock"></i></i></div>
                        <div class="col"><p> <?php echo $pickupTime ?> </p></div>
                    </div>
                    <h6>Drop-off</h6> 
                    <div class="row row-cols-2 g-2 g-md-4">
                        <div class="col-1"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="col"><p> <?php echo $dropLocation ?> </p></div>
                    </div>                    
                </div>
            </div>
            <div class="col-md-7">
                <div class="" id="vehicleDetails">
                    <div class="row allDetails">
                        <div class="col-md-4">
                            <!-- add vehicle picture (nirmal) -->
                            <img src="./img/car.png" alt="vehicle-image"> 
                        </div>
                        <div class="col-md">
                            <!-- vehicle Name ( nirmal ) -->
                            <h5 class="vehicleName">Toyota BYD</h5> <hr>
                            <div class="row Details">
                                <div class="col">
                                    <i class="bi bi-person-fill-check"><span>Number of person</span></i>
                                    <!-- add here persons count (nirmal) -->
                                    <p>1-3</p>
                                </div>
                                <div class="col">
                                    <i class="bi bi-fuel-pump"><span>Fuel Type</span></i> 
                                    <!-- add vehicle fuel type here (nirmal) -->
                                    <p>Petrol</p>
                                </div>
                            </div>
                            <div class="row additionalCharges">
                                <div class="row">
                                    <div class="col-1"><i class="bi bi-check2-circle"></i></div>
                                    <!-- nirmal -->
                                    <div class="col"><p>Additional Fare per Km <span>500</span> LKR </p></div>
                                </div>
                                <div class="row">
                                    <div class="col-1"><i class="bi bi-check2-circle"></i></div>
                                    <!-- nirmal -->
                                    <div class="col"><p>Additional Waiting Fare per Hour <span>300</span> LKR </p></div>
                                </div>                                
                            </div>
                            <div class="row">
                                <a href="bookingDetails.php" class="btn bookingBtn">Booking Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row allDetails">
                        <div class="col-md-4">
                            <!-- add vehicle picture (nirmal) -->
                            <img src="./img/car.png" alt="vehicle-image"> 
                        </div>
                        <div class="col-md">
                            <!-- vehicle Name ( nirmal ) -->
                            <h5 class="vehicleName">Toyota BYD</h5> <hr>
                            <div class="row Details">
                                <div class="col">
                                    <i class="bi bi-person-fill-check"><span>Number of person</span></i>
                                    <!-- add here persons count (nirmal) -->
                                    <p>1-3</p>
                                </div>
                                <div class="col">
                                    <i class="bi bi-fuel-pump"><span>Fuel Type</span></i> 
                                    <!-- add vehicle fuel type here (nirmal) -->
                                    <p>Petrol</p>
                                </div>
                            </div>
                            <div class="row additionalCharges">
                                <div class="row">
                                    <div class="col-1"><i class="bi bi-check2-circle"></i></div>
                                    <!-- nirmal -->
                                    <div class="col"><p>Additional Fare per Km <span>500</span> LKR </p></div>
                                </div>
                                <div class="row">
                                    <div class="col-1"><i class="bi bi-check2-circle"></i></div>
                                    <!-- nirmal -->
                                    <div class="col"><p>Additional Waiting Fare per Hour <span>300</span> LKR </p></div>
                                </div>                                
                            </div>
                            <div class="row">
                                <a href="bookingDetails.php" class="btn bookingBtn">Booking Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2" id="StepsAndHelp">
                <h4>Rentals</h4> <hr>
                <h5>Steps for Rent a Vehicle</h5>
                <div style="margin: 20px 0px 40px 10px;">
                    <div  data-aos="fade-up" data-aos-duration="500"> <span class="circle">1</span><span class="steps">Search Vehicle</span> </div>
                    <div  data-aos="fade-up" data-aos-duration="550"> <hr class="hrVerticle"> </div>
                    <div  data-aos="fade-up" data-aos-duration="1000"> <span class="circle">2</span><span class="steps">Select a Vehicle</span> </div>
                    <div  data-aos="fade-up" data-aos-duration="1050"> <hr class="hrVerticle"> </div>
                    <div  data-aos="fade-up" data-aos-duration="1500"> <span class="circle">3</span><span class="steps">Confirm your booking</span> </div>
                </div>
                <h5>Need Help ?</h5> <hr>
                <div  data-aos="fade-up" data-aos-duration="" class="row helpDetails">
                    <div class="col-2"><i class="bi bi-telephone"></i></div>
                    <div class="col-10"><p>Hot-line</p></div>
                </div>
                <p class="number" data-aos="fade-up" data-aos-duration="">0778907002</p>
                <div  data-aos="fade-up" data-aos-duration="" class="row helpDetails">
                    <div class="col-2"><i class="bi bi-whatsapp"></i></div>
                    <div class="col-10"><p>whatsapp</p></div>
                </div>
                <p class="number" data-aos="fade-up" data-aos-duration="">0778907002</p>
            </div>
        </div>
    </div>
    <!-- main content area --- end -->

    
    <!-- link rental booking js file -->
    <script src="js/rentals.js"></script>
        <!-- aos animation -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
    </script>


<!-- include footer file -->
<?php include 'footer.php'; ?>
