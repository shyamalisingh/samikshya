<div id="mainSection">
    <hr/>
    <?php

    if(isset( $_POST['submit'])){
        //DB update
        $submit = $_POST['submit'];
        $email= $_POST['email'];
        $name= $_POST['fullName'];
        $address= $_POST['address'];
        $contactNum= $_POST['contactNum'];
        $SSN= $_POST['SSN'];
        $education=$_POST['education'];
        $exp=$_POST['exp'];
        $langAbility=$_POST['langAbility'];
        $otherSkills=$_POST['otherSkills'];
        $awards=$_POST['awards'];
        $personal=$_POST['personal'];
        $otherDetails=$_POST['otherDetails'];
        $query="insert into users (name,email,contact_number,address,ssn,education,exp,lang_ability,other_skills,awards,personal,other_details)
        VALUES ('$name','$email','$contactNum','$address','$SSN','$education','$exp','$langAbility','$otherSkills','$awards','$personal','$otherDetails')";
        //echo $query;
        mysqli_query($dbConnectLink,$query,MYSQLI_STORE_RESULT);

        //Email sending
        $subject="Welcome to Samikshya Society";
        $msg="Hello $name, Welcome to Samikshya Society."
         ."We would love to hear from you."
        ."Visit us at www.samikshya.org";
        $headers = 'From: support@samikshya.org' . "\r\n" .
            'Reply-To: support@samikshya.org' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($email,$subject,$msg,$headers);

        //Photo upload
        $target_dir = "uploads/";
        $target_file = $target_dir .$email.'.jpeg';
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["passportPhoto"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
           // echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["passportPhoto"]["size"] > 1000000) {
           echo "Sorry, your file is too large.";
           $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["passportPhoto"]["tmp_name"], $target_file)) {
               // echo "The file ". basename( $_FILES["passportPhoto"]["name"]). " has been uploaded.";
                echo "<p id='successMsg'>Thanks $name for submitting your details a confirmation email has been sent to  $email</p>";
            } else {
                echo "Sorry, there was an error uploading your image.";
            }
        }

    }else{
    ?>
        <form action="index.php?p=registration" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Enter your Details below</legend>
                <label for="passportPhoto">Passport Size Photo<span id="mandatory">*</span>:</label>
                <input type="file" name="passportPhoto" id="passportPhoto">
                <br/>
                <label for="fullName">Name<span id="mandatory">*</span>:</label>
                <input id="fullName" name="fullName" placeholder="Please enter your name"
                       type="text" required="true" size="50" maxlength="100"/>
                <br/>
                <label for="SSN">Identity<span id="mandatory">*</span>:</label>
                <input id="SSN" name="SSN" placeholder="Please enter your Unique Identification Number"
                       type="text" required="true" size="50" maxlength="100"/>
                <br/>
                <label for="email">Email<span id="mandatory">*</span>:</label>
                <input id="email" name="email" placeholder="Please enter your email"
                       type="email" required="true" size="50" maxlength="100"/>
                <br/>
                <label for="address">Address:</label>
                <textarea id="address" name="address"  rows="10" cols="80"
                      placeholder="Please enter your Complete Address" >
                </textarea>
                <br/>
                <label for="mobile">Contact Number:</label>
                <input id="mobile" name="contactNum" placeholder="Please enter your contact Number"
                       type="text" size="50" maxlength="100"/>
                <br/>
                <label for="education">Education:</label>
                <textarea id="education" name="education"  rows="10" cols="80"
                          placeholder="Please enter your Educational Qualifications" >
                </textarea>
                <br/>
                <label for="exp">Experiences:</label>
                <textarea id="exp" name="exp"  rows="10" cols="80"
                          placeholder="Please enter your Work experience" >
                </textarea>
                <br/>
                <label for="langAbility">Language Ability:</label>
                <textarea id="langAbility" name="langAbility"  rows="10" cols="80"
                          placeholder="Please enter your Language abilites" >
                </textarea>
                <br/>
                <label for="otherSkills">Other Skills:</label>
                <textarea id="otherSkills" name="otherSkills"  rows="10" cols="80"
                          placeholder="Please enter your Language abilites" >
                </textarea>
                <br/>
                <label for="awards">Awards:</label>
                <textarea id="awards" name="awards"  rows="10" cols="80"
                          placeholder="Awards" >
                </textarea>
                <br/>
                <label for="personal">Personal Info:</label>
                <textarea id="personal" name="personal"  rows="10" cols="80"
                          placeholder="Enter your other personality traits" >
                </textarea>
                <br/>
                <label for="otherDetails">Other details:</label>
                <textarea id="otherDetails" name="otherDetails"  rows="10" cols="80"
                          placeholder="Other information if any" >
                </textarea>
                <br/>
                <div id="formButtonDiv">
                    <input type="submit" name="submit" value="submit"/>
                </div>

            </fieldset>
        </form>
    <?php
    }
    ?>

    <hr/>

</div>