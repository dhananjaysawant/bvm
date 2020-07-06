<section class="default-text-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h2 class="page-heading">Contact Us : </h2>
      </div>
    </div>
  </div>
</section>

<section class="default-page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 card p-3">
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
      <div class="col-md-6">
        
      </div>
    </div>
  </div>
</section>
