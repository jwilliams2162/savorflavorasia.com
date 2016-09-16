<? $title = 'Contact Us - Savor Flavor Asia'; ?>
<? $keywords = 'chinese, food, take out, delivery, fried rice, sesame chicken'; ?>

<!DOCTYPE html>

<html lang="en">


<link rel="stylesheet" href="css/contact-form.css">

<?php include_once('includes/head.php'); ?>

<script src="js/jquery-migrate-1.2.1.min.js"></script>

<script src="js/superfish.js"></script>

<script src="js/jquery.easing.1.3.js"></script>

<script src="js/jquery.mobilemenu.js"></script>

<script src="js/jquery.equalheights.js"></script>

<script src="js/TMForm.js"></script>

<script src="js/modal.js"></script>

<script src="js/bootstrap-filestyle.js"></script>

<script src="js/jquery.ui.totop.js"></script>

<script src="js/tmstickup.js"></script>
<!--header-->

<?php include_once('includes/topnav.php'); ?>
<!--content-->

<div class="global indent">

    <!--<div class="container">

        <div class="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>

        </div>

    </div>-->

    <div class="formBox">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-4">

                    <h2>Contact Us..</h2>

                    <div class="info" style="font-size:18px;">

                        <p>Do you have any questions, suggestions, complaints or just want to say hello, please call us if you're on your mobile, or fill out the form on our site.  We would love to hear from you.  we are always on a quest to make YOUR experience at Savor Flavor Asia a positive and memorable experience.  if there is anything we can do for you to be completely satisfied with your lunch or dinner,  please let us know</p>

					    <h4>(480)785-8880</h4>

                    </div>

                </div>

                <div class="col-lg-8 col-md-8 col-sm-8">

                    <h2>Contact Form</h2>

                    <form id="contact-form" method="post" id="form" name="form">

                          <div class="contact-form-loader"></div>

                          <fieldset>

                            <label class="name form-div-1">

                              <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />

                              <span class="empty-message">*This field is required.</span>

                              <span class="error-message">*This is not a valid name.</span>

                            </label>

                            <label class="email form-div-2">

                              <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />

                              <span class="empty-message">*This field is required.</span>

                              <span class="error-message">*This is not a valid email.</span>

                            </label>

                            <label class="phone form-div-3">

                              <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@JustNumbers" />

                              <span class="empty-message">*This field is required.</span>

                              <span class="error-message">*This is not a valid phone.</span>

                            </label>

                            <label class="message form-div-4">

                              <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=0,max=999999)'></textarea>

                              <span class="empty-message">*This field is required.</span>

                              <span class="error-message">*The message is too short.</span>

                            </label>

                            <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->

                            <div>

                              <a href="#" data-type="submit" class="btn-default btn3"><span class="fa fa-arrow-circle-o-right"></span>submit</a>

                            </div>

                          </fieldset> 

                          <div class="modal fade response-message">

                            <div class="modal-dialog">

                              <div class="modal-content">

                                <div class="modal-header">

                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                  <h4 class="modal-title">Modal title</h4>

                                </div>

                                <div class="modal-body">

                                  You message has been sent! We will be in touch soon.

                                </div>      

                              </div>

                            </div>

                          </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!--footer-->

<footer class="indent">

    <div class="container">

        <hr>

        <ul class="clearfix">

            <li><a href="https://www.facebook.com/pages/Savor-Flavor-Asia/176423749069868?ref=hl"><img src="img/icon_facebook200x60.png" alt="facebook"/></a></li>

            <!--<li><a href="#">twitter</a></li>-->

            <li><a href="https://plus.google.com/113171396282732140733/about?hl=en"><img src="img/icon_google_plus200x61.png" alt="google plus" /></a></li>

        </ul>

        <p>Savor Flavor Asia &copy; <em id="copyright-year"></em> <span></span><br> <a href="privacy.html">Privacy policy</a> <span></span><br>4905 E. Ray Rd. #102 &nbsp;Ahwatukee, Arizona 85044</p>

    </div>

 </footer>
<?php include_once('includes/foot.php'); ?>
</html>