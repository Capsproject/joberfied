

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-logo">
                    <h3>How Can We Help ?</h3>
                    <p>Just send us your questions or concerns by starting a new case, and we will give you the help you need.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form name="sentMessage" id="contactForm" method="POST" novalidate>
                    <h3>Contact me</h3>
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Full Name" id="name" required data-validation-required-message="Please enter your name" />
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div><!-- For success/fail messages -->
                    <button type="button" id="sendEmail" class="btn btn-primary pull-right">Send</button><br />
                </form>
            </div>
            <div class="col-md-6">
             
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1107.650824964166!2d120.94186542302072!3d13.747707518082715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd06ffdf468ed9%3A0x607a2320588f70b3!2sMabini%20Municipal%20Hall!5e1!3m2!1sen!2sph!4v1696217425432!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
     
      
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function sendEmail() {
        var email = $("#email").val();
        var name = $("#name").val();
        var message = $("#message").val();
        
        if (email !== '' && name !== '' && message !== '') {
            $.ajax({
                type: "POST",
                url: "./emailer.php",
                data: {
                    email: email,
                    name: name,
                    message: message
                },
                success: function(response) {
                    $("#contactForm")[0].reset();
                    $("#successModal").modal('show'); // Show the success modal
                },
                error: function(error) {
                    $("#errorModal").modal('show'); // Show the error modal
                }
            });
        } else {
            alert("Fill all fields");
        }
    }

    $(document).ready(function() {
        $("#sendEmail").on("click", function() {
            sendEmail();
        });
    });
</script>

<!-- Add these modals to your HTML -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Message sent successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Failed to send the message. Please try again.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
