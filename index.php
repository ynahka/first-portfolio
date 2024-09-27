<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Blog Website</title>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!----CSS File -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="./dist/calendar-gc.min.css">

    <style>        
        .gallery {
        padding: 40px 0px;
        }

        .galleryItem {
        width: 300px;
        display: inline-block;
        padding-right: 15px;
        }

        .galleryItem img {
        width: 100%;
        }
    </style>
    
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">
      <h1><a href="index.html">Welcome to me<span>Blog!</span></a></h1>
      <h2>It's nice to meet you here</h2>
      <div class="social-links">
        </div>

      <!-- .nav-menu -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#" id="printpage">Print Page</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!--about section-->
  <section id="about">
    <div class="container mt-4 pt-4" id="boxing">
        <h1 class="text-center  text-uppercase" style="font-family: Poppins, sans-serif;"> <strong>Description</strong></h1>
        <div class="row mt-4">
            <div class="col-lg-4">
              <div class="image">
                <img src="img/meeee.jpg" alt="image">
              </div>
            </div>

            <div class="col-lg-8">
                <p> Hi! I'm Gerryminah, Ynah for short. I'm currenty studying at Bicol University taking up a BS in Information Technology.
                </p>
                <p>Other Information:</p>
                <div class="row mt-3">
                    <div class="col-md-5">
                        <ul>
                            <li><strong>Name:</strong> Gerryminah S. Aguilar</li>
                            <li><strong>Nickname:</strong> Ynah</li>
                            <li><strong>Age:</strong> 21</li>
                            <li><strong>Gender:</strong> Female</li>

                        </ul>
                    </div>
                    <div class="col-md-7">
                        <ul>
                                <li><strong>Birthdate:</strong> Oct. 4, 2001</li>
                                <li><strong>Year & Course:</strong> 2nd Year BS in Information Technology</li>
                                <li><strong>School:</strong> Bicol University </li>
                                <li><strong>Address:</strong> Del Rosario St. Libon, Albay</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
        <div class="container mt-5 pt-4 pb-4" id="boxing">
          <h1 class="text-center text-uppercase" style= "font-family: Segoe UI;"> <strong>Facts about Me</strong></h1>
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <div class="card recosContent">
                        <div class="card-header" style="text-align: center;">
                           <strong> Fact #1 </strong>
                          </div>
                        <img class="card-img-top" src="img/fact3.jpg" alt="campus" style="height: 5cm;">
                        <div class="card-body">
                            <h4 class="card-title">Inside House</h4>
                            <p class="card-text text-muted">
                                Others knew that i am very introvert person. I won't deny that. I raised without my parents, so i used to spend my time doing our household chores. I prefer also to meditate than draining myself by socializing. </p>
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mt-2">
                    <div class="card recosContent">
                        <div class="card-header" style="text-align: center;">
                           <strong> Fact #2 </strong>
                          </div>
                        <img class="card-img-top" src="img/fact2.jpg" alt="Course" style="height: 5cm;">
                        <div class="card-body">
                            <h4 class="card-title">Mood Changer</h4>
                            <p class="card-text  text-muted"> 
                                Maybe I'm an actress that has the ability to switch my mood constantly. People may get hard to read me easily. Sometimes, they will mad at me, but I dont feel sorry for that. Maybe that's my amazing talent that no one would like it.  
                                </p>
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Favorites-->
                <div class="container mt-4 pt-4 pb-4"  id="boxing">
                <h1 class="text-center  text-uppercase" style="font-family: Poppins, sans-serif;"> <strong>My Favorite Artists</strong></h1>
                <h3 class="section-subheading text-center">These are my favorite artists where i can listen their songs everyday.</h3>  
                <div class="row">
                      <div class="col-lg-3">
                          <div class="card recosContent">
                              <img class="card-img-top" src="img/myArtists/tay.jpg" alt="Tay"style="height: 5cm">
                              <div class="card-body">
                                  <h4 class="card-title">Taylor Swift</h4>
                                  <p class="card-text  text-muted">American pop and country music singer-songwriter</p>
                                  <div class="text-center">
                                  
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3">
                          <div class="card recosContent">
                              <img class="card-img-top" src="img/myArtists/Troye-Sivan.jpg" alt="Troy" style="height: 5cm">
                              <div class="card-body">
                                  <h4 class="card-title">Troye Sivan</h4>
                                  <p class="card-text  text-muted">South African-born actor, model and singer</p>
                                  <div class="text-center">
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-3">
                          <div class="card recosContent">
                              <img class="card-img-top" src="img/myArtists/Clairo.jpg" alt="clairo" style="height: 5cm">
                              <div class="card-body">
                                  <h4 class="card-title">Clairo</h4>
                                  <p class="card-text  text-muted">Her real name is Claire Elizabeth Cottrill</p>
                                  <div class="text-center">
                                  
                                  </div>
                              </div>
                          </div>
                      </div>

                       <div class="col-lg-3">
                          <div class="card recosContent">
                              <img class="card-img-top" src="img/myArtists/Lorde.jpg" alt="lorde" style="height: 5cm">
                              <div class="card-body">
                                  <h4 class="card-title">Lorde</h4>
                                  <p class="card-text  text-muted">Her real name is Ella Marija Lani Yelich-O'Connor </p>
                                  <div class="text-center">
                                  
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
  </section>

    <section class="page-section" id="blog">
        <div class="container" id="boxing">
            <div class="text-center">
                <h2 class="section-subheading text-uppercase"> <strong>My Featured Blog Posts</strong></h2>
                <h3 class="section-subheading">You will able to see all my recent posts here. Hope you'd like it:)</h3>
            </div>
        </div>

                  <!-- Page content-->
        <div class="container" id="page">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="img/poster.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">March 8, 2022</div>
                            <h2 class="card-title">Birthday Celebration</h2>
                            <p class="card-text">Happiest birthday to my youngest brother! Tho he's very naughty and talkative sometimes, I wish him all the good happenings in life. Always be grateful for everything and have faith in God. </p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="img/Photography/fav7.jpg" alt="..." style="height: 6cm;" /></a>
                                <div class="card-body">
                                    <div class="small text-muted">March 9, 2022</div>
                                    <h2 class="card-title h4">Up Lights </h2>
                                    <p class="card-text"></p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                        </div>

                            <!-- Blog post-->
                        <div class="col-lg-6 mt-4">
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="img/Photography/fav4.jpg" alt="..." style="height: 6cm;"/></a>
                                <div class="card-body">
                                    <div class="small text-muted">March 10, 2022</div>
                                    <h2 class="card-title h4">The edge of a Seashore</h2>
                                    <p class="card-text"></p>
                                    <a class="btn btn-primary" href="#!">Read more →</a>
                                </div>
                            </div>
                            
                        </div>
                    
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Page</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
            
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Favorites</a></li>
                                        <li><a href="#!">Events</a></li>
                                        <li><a href="#!">Celebration</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Music</a></li>
                                        <li><a href="#!">Photography</a></li>
                                        <li><a href="#!">Artists</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Poem-->
                    <div class="card mb-4">
                        <div class="card-header">Notes</div>
                        <div class="card-body">I know how you like your coffee
                            <br>I've heard you curse, I love your handwriting
                            <br>Are you always that sincere
                            <br>Or I am the only one you looked at like that</div>
                    </div>
                    <!--Others-->
                    <div class="card mb-4">
                        <div class="card-header">My playlist</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><u>Mean it</u> - LANY</li>
                                        <li><u>The Cave</u> - Mumford & Sons</li>
                                        <li><u>BMW</u> - because</li>
                                        <li><u>Better Man</u> - Taylor Swift</li>
                                        <li><u>Liability</u> - Lorde</li>

                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><u>Angel Baby</u> - Troye Sivan</li>
                                        <li><u>Adore You</u> - Harris Styles</li>
                                        <li><u>Moonlight</u> -  DHRUV</li>
                                        <li><u>Lose</u> -  NIKI</li>
                                        <li><u>Every Summertime</u> -  NIKI</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
            
            <div class="container mt-4">
            <h1 class="text-center  text-uppercase" style="font-family: Poppins, sans-serif;"> <strong>Calendar</strong></h1>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        
  <section id="gallery">
        <div class="footer col-lg-8 mt-5">
            <h1 class="text-center text-uppercase" style= "font-family: Poppins, sans-serif;" id="box"> <strong>My Photography</strong></h1>
            <h3 class="section-subheading text-center">I love capturing memories and sceneries</h3>    
            <div class="row small">
                <div class="imagegroup" style="border:2px solid white">
                <img src="img/myPersonal/img2.jpg" alt="">
                <img src="img/myPersonal/img7.jpg" alt="">
                <img src="img/myPersonal/img12.jpg" alt="">
                <img src="img/myPersonal/img13.jpg" alt="">
                <img src="img/myPersonal/img14.jpg" alt="">
                <img src="img/Photography/fav7.jpg" alt="">
                <img src="img/Photography/fav3.jpg" alt="">
                </div>
            </div>
        
            <div class="row large">
            <div class="imagegroup" style="animation-delay: 1s;">
                <img src="img/Photography/fav1.jpg" alt="">
                <img src="img/Photography/fav2.jpg" alt="">
                <img src="img/Photography/fav5.jpg" alt="">
                <img src="img/Photography/fav9.jpg" alt="">
                <img src="img/Photography/fav10.jpg" alt="">
                <img src="img/Photography/fav4.jpg" alt="">
                <img src="img/Photography/fav6.jpg" alt="">
                
            </div>
            </div>
        </div>

                        <!-- Post Image -->
                        <div class="container py-4 mt-4">
            <h1 class="text-center text-uppercase" style="font-family: Poppins, sans-serif;"> <strong>Post Image</strong></h1>
        
                <form action="index.php" id="form" name='image'
                    method="POST" enctype="multipart/form-data"
                    onsubmit="return validate();">
                    <div class="form-row">
                        <input type="file" id="file-input" name="file-input[]"
                            multiple="multiple">
                    </div>
                    <div class="button-row">
                        <input type="submit" id="submit" name="submit"
                            value="Post"><span id="validation_error"></span>
                    </div>
                </form>
        <div>
            <!-- gallery class need for using gallery -->
            <div class="gallery">
                <?php
                    if (isset($_POST['submit'])) {
                        if (count($_FILES['file-input']['name']) > 0) {
                            for ($i = 0; $i < count($_FILES['file-input']['name']); $i ++) {
                                $File_dir = $_FILES['file-input']['tmp_name'][$i];
                                $save = "img/newPost/" . $_FILES['file-input']['name'][$i];
                                move_uploaded_file($File_dir, $save);
                            }
                            $dir = "img/newPost/";
                            $photo = glob($dir . "*.jpg");
                            foreach ($photo as $photos) {
                                ?>
                        <div class="galleryItem mt-4">
                        <img src="<?php print_r($photos) ?>">
                    </div>
                    <?php
                            }
                            ?> 
                <?php }}?>
            </div>
        </div>
    </div>

  </section>


      <!-- contact section-->
      <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center text-uppercase" style= "font-family: Segoe UI;"> <strong>Let's get in touch</strong></h1>
            <h3 class="section-subheading text-center" style="font-size: 15px; ">Please fill-up put the form below to send me a message and i will get back to you as soon as possible!</h3>  
            <div class="row mt-4">
                <div class="col-lg-6">
                    <form class="input_field">
                        <input type="text" class="form-control" placeholder="*Your Name">
                        <input type="email" class="form-control mt-3" placeholder="*Your Email">
                        <input type="text" class="form-control mt-3" placeholder="*Subject">
                        
                    </form>  
                </div>
                <div class="col-lg-6">
                        <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Message"></textarea>
                        <button type="button" class="btn btn-success mt-3" style="box-shadow: 0px 0px 8px #ccc; background: rgb(11, 11, 85);">Send Message </button>
                </div>
            </div>
        </div>
        
  </section>
       <!--end books-->
    <!-- Bootstrap core JS and CDN-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

  <script src="js/main.js"></script>
  <script src="./dist/calendar-gc.min.js"></script>

       <!-- Gallery -->
       <script>
    function validate() {
    	    if($("#file-input").val() == "") {
            $("#validation_error").html("Please select image files");
            return false;
        }
        return true;
    }
    </script>

    <!-- calendar -->
<script>
  $(function (e) {
    var calendar = $("#calendar").calendarGC({
      dayBegin: 0,
      prevIcon: '&#x3c;',
      nextIcon: '&#x3e;',
      onPrevMonth: function (e) {
        console.log("prev");
        console.log(e)
      },
      onNextMonth: function (e) {
        console.log("next");
        console.log(e)
      },
      events: [
        {
          date: new Date("2022-04-011"),
          eventName: "Email Feature",
          className: "badge bg-danger",
          onclick(e, data) {
            console.log(data);
          },
          dateColor: "red"
        },
        {
          date: new Date("2022-04-011"),
          eventName: "Deadline",
          className: "badge bg-danger",
          onclick(e, data) {
            console.log(data);
          },
          dateColor: "red"
        },
        {
          date: new Date("2022-04-08"),
          eventName: "Working day",
          className: "badge bg-success",
          onclick(e, data) {
            console.log(data);
          },
          dateColor: "green"
        }
       
      ],
      onclickDate: function (e, data) {
        console.log(e, data);
      }
    });

    // Print page section
    // Only the current page will print
    $("#printpage").on("click" , function(e){
        e.preventDefault();
        //alert("hello world");
        window.print()
        
    })
  })
</script>
</body>
</html>