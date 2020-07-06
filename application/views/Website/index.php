    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="slider-img" src="<?php echo base_url(); ?>/assets/images/slider1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="slider-img" src="<?php echo base_url(); ?>/assets/images/slider2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="slider-img" src="<?php echo base_url(); ?>/assets/images/slider3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-orange">About BVM</h2>
            <p class="text-justify text-dark">Bharatiya Vidyarthi Morcha This organization is the Bharat Mukti Morcha Pranit student organization. This national organization was formed on the occasion of the birthday of Mahatma Jotirao Phule Ji, the father of education. This organization is the only national-level student union of SC, ST, OBC, SBC, MBC, NT, DNT, VJNT and religion-oriented minority (Muslim, Jain, Christian, Shikh, Buddhist and Lingayat) students of indigenous Bahujan Samaj. The geographical spread of Bharatiya Vidyarthi Morcha is in 31 states, 530 districts, 5500 tehsils, 15000 blocks, 2 lakh villages across the country.</p>
          </div>
          <div class="col-md-12 text-center">
            <a href="#"><button type="button" class="btn btn-outline-danger">Read More</button></a>
          </div>
        </div>
      </div>
    </section>

    <section class="join">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-6">
                <img class="bvm-middlelogo" src="<?php echo base_url(); ?>/assets/images/bvm_logo.png" alt="">
              </div>
              <div class="col-md-6">
                <img class="bvm-middlelogo" src="<?php echo base_url(); ?>/assets/images/bym_logo.png" alt="">
              </div>
              <div class="col-md-6">
                <img class="bvm-middlelogo" src="<?php echo base_url(); ?>/assets/images/bvcp_logo.png" alt="">
              </div>
              <div class="col-md-6">
                <img class="bvm-middlelogo" src="<?php echo base_url(); ?>/assets/images/racs_logo.png" alt="">
              </div>
            </div>


            <div class="card p-3 bg-grey">
              <form action="<?php echo base_url();?>Welcome/send_mail" method="post"  enctype="multipart/form-data" role="form" class="">
                <div class="row">
                  <div class="col-md-12">
                      <h2 class="m-2 text-orange">Join BVM </h2>
                      <div class="alert alert-success " role="alert" style="display:none">
                        Email Send Successfully
                      </div>
                      <div class="alert alert-danger" role="alert" style="display:none">
                        Email Not Send please Try Again
                      </div>
                    </div>



                  <div class="col-md-12 col-12">
                    <div class="input-group mb-3">
                          <label class="w-100 text-darkred" > Name</label>
                          <input type="text" class="form-control" name="name" placeholder="First Name " aria-label="First Name " aria-describedby="basic-addon1" required>
                        </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="input-group mb-3">
                        <label class="w-100 text-darkred">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email " aria-label="Email " aria-describedby="basic-addon1" required>
                      </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="input-group mb-3">
                        <label class="w-100 text-darkred">Contact No.</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Contact"  aria-describedby="basic-addon1">
                      </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="input-group mb-3">
                        <label class="w-100 text-darkred">State</label>
                        <input type="text" class="form-control" name="state" placeholder="State">
                      </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="input-group mb-3">
                        <label class="w-100 text-darkred">Comments </label>
                        <textarea class="form-control" name="message" rows="3" cols="80"></textarea>
                        </div>
                  </div>

                  <div class="col-12 w-100 text-center">
                        <button  type="submit" class="btn btn-outline-success mt-2 ">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="youtube1 mt-5">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/ac88jbuoFXI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
              </div>
          <div class="col-md-5">
            <div class="card-embeded text-center">
                <h3 class="title text-blue">Facebook</h3>
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBhartiya-vidhyarthi-morchya-kagal-308843679819529&tabs=timeline&width=350&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2646808058667833" width="400" height="550" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>

          <div class="card-embeded text-center">
            <h3 class="title text-blue">Twitter</h3>
          <a class="twitter-timeline" data-width="400" data-height="550" href="https://twitter.com/Dhananj44968498?ref_src=twsrc%5Etfw">Tweets by Dhananj44968498</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
        </div>
      </div>
    </section>



    <section class="news">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-6">
            <h3 class=" mb-3 text-orange">News</h3>
          </div>
          <div class="col-md-6 col-6 text-right">
              <button  type="button" class="btn btn-outline-danger ">Read All News</button>
          </div>
          <div class="col-12">
          <hr class="hr-dark">
          </div>

          <div class="col-md-4">
            <a href="#">
            <div class="card">
            <img src="<?php echo base_url(); ?>/assets/images/bvm_img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-dark">16-jun 2020</p>
              <p class="card-text text-blue ">भारत में हर दिन सवर्णो द्वारा मूलनिवासी बहुजनों पर अन्याय करने पर माफी नहीं माँगते भी नहीं</p>
              <p class="card-text text-dark">अयोध्या में समतलीकरण के दौरान प्राप्त अवशेषों के तत्पश्चात बुद्धिस्ट इंटरनेशनल ....</p>
            </div>
          </div>
          </a>
          </div>
          <div class="col-md-4">
            <a href="#">
            <div class="card">
            <img src="<?php echo base_url(); ?>/assets/images/bvm_img2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-dark">16-jun 2020</p>
              <p class="card-text text-blue ">भारत में हर दिन सवर्णो द्वारा मूलनिवासी बहुजनों पर अन्याय करने पर माफी नहीं माँगते भी नहीं</p>
              <p class="card-text text-dark">अयोध्या में समतलीकरण के दौरान प्राप्त अवशेषों के तत्पश्चात बुद्धिस्ट इंटरनेशनल ....</p>
            </div>
          </div>
          </a>
          </div>

          <div class="col-md-4">
            <a href="#">
            <div class="card">
            <img src="<?php echo base_url(); ?>/assets/images/bvm_img3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-dark">16-jun 2020</p>
              <p class="card-text text-blue ">भारत में हर दिन सवर्णो द्वारा मूलनिवासी बहुजनों पर अन्याय करने पर माफी नहीं माँगते भी नहीं</p>
              <p class="card-text text-dark">अयोध्या में समतलीकरण के दौरान प्राप्त अवशेषों के तत्पश्चात बुद्धिस्ट इंटरनेशनल ....</p>
            </div>
          </div>
          </a>
          </div>
        </div>
        <hr class="mt-3 pb-3">
        <div class="row">
          <div class="col-md-4">
            <a href="#">
            <div class="card">
            <img src="<?php echo base_url(); ?>/assets/images/bvm_img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-dark">16-jun 2020</p>
              <p class="card-text text-blue ">भारत में हर दिन सवर्णो द्वारा मूलनिवासी बहुजनों पर अन्याय करने पर माफी नहीं माँगते भी नहीं</p>
              <p class="card-text text-dark">अयोध्या में समतलीकरण के दौरान प्राप्त अवशेषों के तत्पश्चात बुद्धिस्ट इंटरनेशनल ....</p>
            </div>
          </div>
          </a>
          </div>
          <div class="col-md-4">
            <a href="#">
            <div class="card">
            <img src="<?php echo base_url(); ?>/assets/images/bvm_img2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-dark">16-jun 2020</p>
              <p class="card-text text-blue ">भारत में हर दिन सवर्णो द्वारा मूलनिवासी बहुजनों पर अन्याय करने पर माफी नहीं माँगते भी नहीं</p>
              <p class="card-text text-dark">अयोध्या में समतलीकरण के दौरान प्राप्त अवशेषों के तत्पश्चात बुद्धिस्ट इंटरनेशनल ....</p>
            </div>
          </div>
          </a>
          </div>

          <div class="col-md-4">
            <a href="#">
            <div class="card">
            <img src="<?php echo base_url(); ?>/assets/images/bvm_img3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-dark">16-jun 2020</p>
              <p class="card-text text-blue ">भारत में हर दिन सवर्णो द्वारा मूलनिवासी बहुजनों पर अन्याय करने पर माफी नहीं माँगते भी नहीं</p>
              <p class="card-text text-dark">अयोध्या में समतलीकरण के दौरान प्राप्त अवशेषों के तत्पश्चात बुद्धिस्ट इंटरनेशनल ....</p>
            </div>
          </div>
          </a>
          </div>
        </div>
      </div>
    </section>

    <section class="youtube">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <iframe width="500" height="315" src="https://www.youtube.com/embed/ac88jbuoFXI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
          <iframe width="500" height="315" src="https://www.youtube.com/embed/HeGOT09Zezg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </section>
