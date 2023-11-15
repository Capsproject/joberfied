    <section id="content">

        <div class="container content">    


            <!-- REGISTRATION FORM -->
        
        <p> <?php check_message();?></p>      
            <form class="row form-horizontal span6  wow fadeInDown" action="process.php?action=register" method="POST">
            <h2 class=" ">Personal Info</h2>
            
            <div class="row"> 
                <div class="form-group">
                    <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                        "FNAME">Firstname:</label>

                        <div class="col-md-8">
                        <input name="JOBID" type="hidden" value="">
                        <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder=
                            "Firstname" type="text" value=""  required onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "LNAME">Lastname:</label>

                        <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input  class="form-control input-sm" id="LNAME" name="LNAME" placeholder=
                            "Lastname"  required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "MNAME">Middle Name:</label>

                        <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input  class="form-control input-sm" id="MNAME" name="MNAME" placeholder=
                            "Middle Name"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                        <!-- <input class="form-control input-sm" id="DEPARTMENT_DESC" name="DEPARTMENT_DESC" placeholder=
                            "Description" type="text" value=""> -->
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "ADDRESS">Address:</label>

                        <div class="col-md-8">

                        <textarea class="form-control input-sm" id="ADDRESS" name="ADDRESS" placeholder=
                            "Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for=
                        "Gender">Sex:</label>

                        <div class="col-md-8">
                        <div class="col-lg-5">
                            <div class="radio">
                            <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Female</label>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="radio">
                            <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Male</label>
                            </div>
                        </div> 
                        
                        </div>
                    </div>
                </div>


                <div class="form-group">
        <div class="rows">
            <div class="col-md-8">
                <div class="col-md-4">
                    <label class="col-lg-12 control-label">Date of Birth :</label>
                </div>

                <div class="col-lg-3">
                    <select class="form-control input-sm" name="month" required>
                        <option value="" disabled selected>Month</option>
                        <?php
                            $mon = array('Jan' => 1, 'Feb' => 2, 'Mar' => 3, 'Apr' => 4, 'May' => 5, 'Jun' => 6, 'Jul' => 7, 'Aug' => 8, 'Sep' => 9, 'Oct' => 10, 'Nov' => 11, 'Dec' => 8);

                            foreach ($mon as $month => $value) {
                                echo '<option value=' . $value . '>' . $month . '</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="col-lg-2">
                    <select class="form-control input-sm" name="day" required>
                        <option value="" disabled selected>Day</option>
                        <?php
                            $d = range(31, 1);
                            foreach ($d as $day) {
                                echo '<option value=' . $day . '>' . $day . '</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="col-lg-3">
                    <select class="form-control input-sm" name="year" required>
                        <option value="" disabled selected>Year</option>
                        <?php
                            $years = range(2010, 1900);
                            foreach ($years as $yr) {
                                echo '<option value=' . $yr . '>' . $yr . '</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>


            

                <div class="form-group">
                    <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                    "BIRTHPLACE">Place of Birth:</label>

                    <div class="col-md-8">
                        
                        <textarea class="form-control input-sm" id="BIRTHPLACE" name="BIRTHPLACE" placeholder=
                            "Place of Birth" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off"></textarea>
                    </div>
                    </div>
                </div> 


                <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                    "TELNO">Contact No.:</label>

                    <div class="col-md-8">
                    
                    <input required="true" class="form-control input-sm" id="TELNO" name="TELNO" placeholder=
                        "Contact No." type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" pattern="09\d{9}" autocomplete="off">
                    </div>
                </div>
                </div> 

                <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                    "CIVILSTATUS">Civil Status:</label>

                    <div class="col-md-8">
                    <select required="true" class="form-control input-sm" name="CIVILSTATUS" id="CIVILSTATUS">
                        <option value="none" >Select</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow" >Widow</option>
                        <!-- <option value="Fourth" >Fourth</option> -->
                    </select> 
                    </div>
                </div>
                </div>  

                <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                    "EMAILADDRESS">Email Address:</label> 
                    <div class="col-md-8">
                    <input type="Email" class="form-control input-sm" id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address" required="true"  autocomplete="false"/> 
                    </div>
                </div>
                </div>  
                <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                    "DEGREE">Educational Attainment:</label>

                    <div class="col-md-8">
                    <input name="deptid" type="hidden" value="">
                    <input  class="form-control input-sm" id="DEGREE" name="DEGREE" placeholder=
                        "Educational Attainment"    onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                    </div>
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for=
                    "USERNAME">Username:</label>

                    <div class="col-md-8">
                    <input name="deptid" type="hidden" value="">
                    <input  class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
                        "Username" required="true"  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                    </div>
                </div>
                </div>
            
                
                
    <style> 
            
    #message {
    position: relative;
    width: 100%;
    }

    #message p {
    padding: 2px 0px;
    font-size: 13px;
    margin-left: 33%;
    float: left;
    width: 100%;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
    color: green;
    }

    .valid:before {
    position: relative;
    left: -35px;
    content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
    color: red;
    }

    .invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
    }
    </style>
    <form id="registrationForm" action="your_server_script.php" method="post">

                <div class="form-group">
                    <div class="col-md-8">

                        <label class="col-md-4 control-label" for="PASS" >Password:</label>
                        
                        <div class="col-md-8">
                            <input class="form-control input-sm" id="PASS" name="PASS" placeholder="Password" type="password" 
                            required onkeyup="checkPassword()" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div id="message">
                        <p>Password must contain the following:</p>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-md-8">
                            <input required="true" type="checkbox"> By signing up, you agree with our <a data-target="#myModal" data-toggle="modal" href="dps.php">Data Privacy Statement</a>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-md-8">
                            <button class="btn btn-primary btn-sm" id="registerButton" name="btnRegister" type="submit" disabled>Register</button>
                        </div>
                    </div>
                </div>
            </form>


         
    <script>
    var myInput = document.getElementById("PASS");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    var registerButton = document.getElementById("registerButton");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function () {
        document.getElementById("message").style.display = "none";
    }

    // Function to check password validity and enable/disable the registration button
    function checkPassword() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        var isLowerCaseValid = myInput.value.match(lowerCaseLetters);

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        var isUpperCaseValid = myInput.value.match(upperCaseLetters);

        // Validate numbers
        var numbers = /[0-9]/g;
        var isNumberValid = myInput.value.match(numbers);

        // Validate length
        var isLengthValid = myInput.value.length >= 8;

        // Update the classes and enable/disable the registration button
        letter.classList.toggle("valid", isLowerCaseValid);
        letter.classList.toggle("invalid", !isLowerCaseValid);
        capital.classList.toggle("valid", isUpperCaseValid);
        capital.classList.toggle("invalid", !isUpperCaseValid);
        number.classList.toggle("valid", isNumberValid);
        number.classList.toggle("invalid", !isNumberValid);
        length.classList.toggle("valid", isLengthValid);
        length.classList.toggle("invalid", !isLengthValid);

        // Enable/disable registration button
        registerButton.disabled = !(isLowerCaseValid && isUpperCaseValid && isNumberValid && isLengthValid);
    }

    // Initially disable the registration button
    registerButton.disabled = true;
</script>