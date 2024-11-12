<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel.Co</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="first.css">
</head>
<body>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-hiking"></i>Travel.Co</a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="#category">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#packages">packages</a>
        <!-- <a href="#guides">guides</a> -->
        <a href="#reviews">reviews</a>
        <a href="blogs.html">blogs</a>
        <a href=""><b style="color:purple;">Hello ! </b><strong s><?php echo $_SESSION['username']; ?></strong></a>
        <a href="index1.php?logout='1'" style="color: red;" onclick="ask()"><b>Log out</b></a> 
      
        <script>
            function ask(){
                alert('You will be logged out to Sign-in page');
            }
        </script>
        
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="fas fa-"></a> 
        <div id="search-btn" class="fas fa-">
            
        </div>
    </div>

</header>

<!-- header section ends -->

<!-- search form  -->

<div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>


<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Make your Next Trip</span>
                        <h3>Your Best Trip</h3>
                        <p>Travelling opens door to creating memories. Let's make your travel a little more fun!</p>
                        <a href="#category" class="btn">get started now</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(images/b7.jpeg) no-repeat;">
                    <div class="content">
                        <span>Creative Holidays</span>
                        <h3>Create your kind of Holiday</h3>
                        <p>Plan your dream holiday with us! Free yourself from daily stress and travel with us! </p>
                        <a href="#category" class="btn">Explore now</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(images/home-bg-3.jpg) no-repeat;">
                    <div class="content">
                        <span>Life Adventure</span>
                        <h3>Or Nothing</h3>
                        <p>Don't watch life go by – get out there and live it!</p>
                        <a href="#category" class="btn">Are you Ready ?</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section> -->

<!-- home section ends -->

<!-- category section starts  -->

<section class="category" id="category">
    
     
    <h1 class="heading"><br>adventure idea!</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/c1.jpg" alt="">
            <h3>Waterfall Trekking</h3>
            <p>“A strong person and a waterfall always carve their own path." Come and let the waterfall wash over you.</p>
            <a href="waterfall_trekking.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/hiking.png" alt="">
            <h3>Hiking</h3>
            <p>Hiking is a long, vigorous walk, usually on trails or footpaths in the countryside. Hiking involves a long energetic walk in a natural environment on hiking trails or footpaths for a day or overnight.</p>
            <a href="hiking(1).html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/c3.jpg" alt="">
            <h3>Paragliding</h3>
            <p>Paragliding is the recreational and competitive adventure sport of flying paragliders: lightweight, free-flying, foot-launched glider aircraft with no rigid primary structure.</p>
            <a href="Paragliding.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/c4.jpg" alt="">
            <h3>River Rafting</h3>
            <p>Rafting is recreational outdoor activities which use an inflatable raft to navigate a river or other body of water. Dealing with risk is often a part of the experience.</p>
            <a href="rafting.html" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/bear.png" alt="">
    </div>

    <div class="content">
        <h3>memorable outdoor experiences</h3>
        <p>Recently visited one of the famous rainforests in Canada. Canada's Great Bear Rainforest is the largest intact temperate rainforest in the world—and one of the most magical, with elusive species like sea wolves and Kermode bears roaming its 21 million acres. </p>
        <p> Travel will take you on a nine-day excursion aboard a schooner, departing from British Columbia's aboriginal First Nations community of Bella Bella and stopping for sea kayaking along the way. While Canada is currently closed to U.S. travelers, you can always plan ahead for a spring 2022 trip.</p>
        <a href="outdoor_experience.html" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading">featured products</h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/Barbeque grill.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-">Buy</a>
                        <!-- <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a> -->
                    </div>
                </div>
                <div class="content">
                    <h3>Barbeque Grill</h3>
                    <div class="price"> &#8377; 1148</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/carabiner.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-">Buy</a>
                        <!-- <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a> -->
                    </div>
                </div>
                <div class="content">
                    <h3>Carabiner</h3>
                    <div class="price"> &#8377; 1500 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/hiking Bagpack.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-">Buy</a>
                        <!-- <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a> -->
                    </div>
                </div>
                <div class="content">
                    <h3>Hiking Bagpack</h3>
                    <div class="price">&#8377; 2599 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/hiking-boots.png" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-">Buy</a>
                        <!-- <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a> -->
                    </div>
                </div>
                <div class="content">
                    <h3>Hiking Boots</h3>
                    <div class="price"> &#8377; 3999 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/pocket knife.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-">Buy</a>
                        <!-- <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a> -->
                    </div>
                </div>
                <div class="content">
                    <h3>Pocket Knife</h3>
                    <div class="price">&#8377; 899 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/skiiii goggles.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-">Buy </a>
                        <!-- <a href="#" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a> -->
                    </div>
                </div>
                <div class="content">
                    <h3>Skii Goggles</h3>
                    <div class="price"> &#8377; 1500 </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- shop section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">popular packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/maldives.jpg" alt="">
            </div>
            <div class="content">
                <h3>Maldives Sightseeing and Adventure Tour Package (3 days & 2 nights)</h3>
                <p>A world-class holiday awaits you in the Maldives with us as your perfect travel companion to make it all work smoother than smooth. With us, you have the chance to choose the best island resorts in the Maldives along with a plethora of water sports activities that can make your vacation something to cherish forever in memories.</p>
                <div class="price">&#8377; 39,037</div>
                <a href="book_maldives.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/char dham.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Char Dham Yatra Package(6 days & 5 nights) </h3>
                <p>Travellers of all kinds can get the best tourism opportunities in Uttarakhand, the Himalayan state in India, with our various Uttarakhand sightseeing tour packages.Char Dham Yatra is one of the most important pilgrimages in India and holds high religious significance.</p>
                <div class="price">&#8377; 12,000</div>
                <a href="book_CharDham.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/hiking1.png" alt="">
            </div>
            <div class="content">
                <h3>Rishikesh Hiking (8 days & 7 nights)</h3>
                <p>They say, “There is no Wi-Fi in the mountains, but you will find a better connection”. Covering vast landscapes, stunning views, scenic beauty and surprises, the best hikes in India are experiences to revel in.</p>
                <div class="price">&#8377; 15,081 </div>
                <a href="book_Rishikesh.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ladakh.jpg" alt="">
            </div>
            <div class="content">
                <h3>Ladakh Package (4 days & 3 nights)</h3>
                <p>Ladakh is the land of lamas — full of high passes, alpine lakes and a Buddhist culture that’s still very much alive. Ladakh is one of the most popular destinations among adventure tourists, riders, photographers, and all kinds of outdoor enthusiasts. It can be reached by rail road and train networks. However, be prepared for a lot of off roading to reach your destination. There are a couple of routes you can take to reach the valley</p>
                <div class="price">&#8377; 28,091 </div>
                <a href="book_ladakh.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/k.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kerala Tour Package (4 days & 3 nights)</h3>
                <p>Our Kerala Package will include various offers. Called as God’s Own Country, Kerala has something for tourists from all walks of life and tastes like family tour planners, group tour, nature lovers and adventure tour enthusiasts too. So what are you waiting for, come and explore Kerala!!</p>
                <div class="price">&#8377; 15,000 </div>
                <a href="book_kerala.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/d.jpg" alt="">
            </div>
            <div class="content">
                <h3>Dubai Desert Safari Package (5 days & 4 nights</h3>
                <p>Our tour packages to Dubai will make you experience the world’s biggest suspended aquarium at Dubai Mall, will take you on a 4X4 desert safari ride and will entertain you with other activities like belly dancing.No visit to Dubai is complete without being on the top of the world i.e on the 124th floor of Burj Khalifa where you can enjoy the 360 degrees top view of the mesmerizing city.</p>
                <div class="price">&#8377; 45,000 </div>
                <a href="book_dubai.php" class="btn">Book Now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->


<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading">client's reviews</h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p class="text">It was a wonderful experience for us. All your arrangements were up to the mark.
                    All hotels and transportation arrangements were excellent. Though we had faced some problems with hotel at Kedarnath you handled it swiftly and efficiently. Thanks for your support and prompt response.
                    The driver (Mahesh) just was very cooperative, polite and friendly. His driving skills were excellent and safe.</p>
                <div class="user">
                    <img src="images/pr.png" alt="">
                    <div class="info">
                        <h3>Jayesh Banarjee</h3>
                        <span>Engineer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">How are you doing? Hope you are doing well.
                    We had a great trip in India for 6days
                    And my family and I we can say that we have received a great service from your team.
                    All the hotels we stayed are very nice clean, staff served us the best including the clean and yummy food!</p>
                <div class="user">
                    <img src="images/p1.png" alt="">
                    <div class="info">
                        <h3>Sangita Patel</h3>
                        <span>Designer</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Where Mountain Hiking Holidays shines is in their total dedication to providing clients with an exceptional hiking experience. While you are in-country, their choices of accommodations, dining, transportation, local experts, hike options, add-ons, and even unexpected small surprises, provides one with a truly cut-to-fit experience. Amy and John both possess top-shelf communications skills. It’s clear they care about their clients and want you to feel confident in travelling with them.</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>Jack Malan</h3>
                        <span>Architect</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Very well customised trip for Maldives by TravTree Holiday. All the guidelines were provided by the agency. Special thanks to Ms. Chanchal Sharma for making our Maldives trip hassle free.</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>Alyssa Root</h3>
                        <span>CA</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">We had a great 1 week time on our trip to Shimla - Manali - Dalhousie. It was a unbelievable budget tour offered to us with fantastic hotels and services. The cab facility was also great and the driver was very courteous. He knew in and out of the places and was always on time.</p>
                <div class="user">
                    <img src="images/p2.png" alt="">
                    <div class="info">
                        <h3>Rajesh Narwal</h3>
                        <span>Professor</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">We want to thank you for your help in arranging our tour to India. Although after 16 jeep safaris, the Royal Bengal Tiger eluded our sighting. We came very close a few times, separated by mere minutes. The rest of the Wildlife however did not disappoint! We enjoyed our accommodations & the hospitality provided as such.

                    Sri Lanka was equally fantastic! Never realized that it was so GREEN & mountainous. We were sorry that we were unable to meet you in person but we certainly understand how busy you are. Until next time, take care, & Best Wishes to you in 2019!</p>
                <div class="user">
                    <img src="images/p.png" alt="">
                    <div class="info">
                        <h3>Seeta Kumar</h3>
                        <span>Pilot</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->

<!-- services section starts  -->

<section class="services">

    <h1 class="heading"> what we offer </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/serv-1.png" alt="">
            <h3>complete guide</h3>
            <p>A guide is a book that gives you information or instructions to help you do or understand something</p>
            <a href="Complete guide.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv-2.png" alt="">
            <h3>custom packages</h3>
            <p>Custom packages we provide is that you all can plan your trip  with the best of the plans we provide improves the quality of your journey.</p>
            <a href="custom_package.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv-3.png" alt="">
            <h3>family trips</h3>
            <p>Family trips to spend your time with the one's who matter the most to you we provide all plans releated to a group of six or as per your requirments</p>
            <a href="Family_Trips.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv-4.png" alt="">
            <h3>train guides</h3>
            <p>publication containing routes and timetables for train journeys</p>
            <a href="train_guides.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv-5.png" alt="">
            <h3>adventure trail</h3>
            <p>Located away from the chaotic metropolis lies an assemblage of class-apart nature resorts in solitude. Here, flyovers give way to Burma Bridges, elevators give way to rappelling ropes, and limousines give way to ripples and rafts.</p>
            <a href="adventure_trail.html" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="images/serv-6.png" alt="">
            <h3>various adventures</h3>
            <p>Various adventures sports  we offer are paraglading,water hiking,sports. Releated to scuba diving and the most you admire bungee jumping</p>
            <a href="various_adventures.html" class="btn">read more</a>
        </div>
        
    </div>

</section>


<section class="blogs" id="blogs">

    <h1 class="heading"> our daily posts </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/img-1.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 25th jan, 2020 </a>
                    <a href="#"> <i class="fas fa-user"></i> by ordinary taveler </a>
                    <br>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Tokyo, Japan</a>
                </div>
                <h3>Fearless Outing.</h3>
                <p>We arrived in Vancouver before 11:00, two flights in advance of the departure of the ship, as advised by the travel agent to avoid problems if WestJet cancelled or delayed our flight. No problems.</p>
                <a href="fearless outing.html" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-2.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 20th sept, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by local adventurer </a>
                    <br>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Assam, India</a>
                </div>
                <h3>Family on Airplane.</h3>
                <p>Back in 2013, I gave up my rented apartment and sold most of my belongings. In the years since, I’ve felt at home in many places around the world but not put down roots anywhere.</p>
                <a href="Family on airplane.html" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-3.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 15 oct, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by a Broken Backpack </a>
                    <br>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Mumbai, India</a>
                </div>
                <h3>Symbolizing Travel.</h3>
                <p>After almost a week of cruising through Bosnia and Herzegovina, it was new country time and we had decided to continue our road trip in Montenegro. It was cheaper to rent a different car in each country, so we dropped off our Bosnian car in Mostar and jumped on a bus to Herceg Novi, right across the border with Montenegro. I said cheaper, not quicker or less annoying.</p>
                <a href="Symbolizing travel.html" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-4.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 21st june, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by young adventuress </a>
                    <br>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Bangalore, India</a>
                </div>
                <h3>My Itchy Travel Feet.</h3>
                <p>This popular YouTube channel by Nadine Sykora documents her experiences as she travels around the world. </p>
                <a href="itchy.html" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-5.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 20th feb, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Adventure in You </a>
                    <br>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Thani, Thailand</a>
                </div>
                <h3>Ready your Bags.</h3>
                <p>If there was a contest for the best travel blog, I would tell everyone to vote for me..</p>
                <a href="ready.html" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="images/img-6.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 20th july, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by Origin </a>
                    <br>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Delhi, India</a>
                </div>
                <h3>Offbeat Travels.</h3>
                <p>One of my favorite blogs as she talks about the “real” side of travel and is not afraid to get political, talk about racial prejudice when she travels and discusses life as a black female traveler.</p>
                <a href="offbeat.html" class="btn">read more</a>
            </div>

        </div>

    </div>

</section> -->


    <div class="content">
        <h1 class="heading">subscribe now</h1>
        <p>Subscribe for weekly emails with curated articles, guide and amazing offers to enhance your touring adventure!</p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
        </form>
    </div>

</section> -->

<section class="clients">

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide silde"><img src="images/client-logo-1.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-2.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-3.png" alt=""></div>
            <div class="swiper-slide silde"><img src="images/client-logo-4.png" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#category">home</a>
            <a href="#about">about</a>
            <a href="#shop">shop</a>
            <a href="#packages">packages</a>
            <a href="#reviews">reviews</a>
            <a href="blogs.html">blogs</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my wishlist</a>
            <a href="#">ask questions</a>
            <a href="#">terms of use</a>
            <a href="#">privacy policy</a>
        </div>  

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 8928213663 </a>
            <a href="#"> <i class="fas fa-phone"></i> +91 8097803929 </a>
            <a href="mailto:tourstravel806@gmail.com"> <i class="fas fa-envelope"></i> tourstravel806@gmail.com </a>
            <a href="https://www.google.com/maps/place/SIES+Graduate+School+of+Technology/@19.042813,73.0208893,17z/data=!4m5!3m4!1s0x3be7c3db5e2c85cd:0xef26c52d7d73816e!8m2!3d19.042813!4d73.023078" target="blank"> <i class="fas fa-map"></i> SIES GST Navi Mumbai, india - 400706 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=100087673113037" target="blank"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://mobile.twitter.com/travelc37333199" target="blank"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/travel__co" target="blank"> <i class="fab fa-instagram"></i> instagram </a>
            
        </div>

    </div>

    <div class="credit">created by <span>Group 16</span> | all rights reserved!</div>

</section> 

<!-- footer section ends -->












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>