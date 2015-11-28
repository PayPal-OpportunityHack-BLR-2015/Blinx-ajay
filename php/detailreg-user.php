<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();
?>

<div class="content">

    <div class="inner-bg">
        <div class="container">

            <div class="col-sm-3"></div>

            <div class="row">
                <div class="col-sm-6">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>We need few more details</h3>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" method="post" class="login-form"
                                  action="php/finishregistration.php">
                                <div class="form-group">
                                    <label class="sr-only" for="form-mobile-number">Mobile Number</label>
                                    <input type="text" name="form-mobile-number" placeholder="Mobile Number..."
                                           class="form-mobile-number form-control" id="form-mobile-number">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Alternative Mobile Number</label>
                                    <input type="text" name="form-password" placeholder="Alternative Mobile Number..."
                                           class="form-password form-control" id="form-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-dob">Date of Birth</label>
                                    <input type="text" name="form-dob" placeholder="Date of Birth..."
                                           class="form-password form-control" id="form-dob" value="<?php 
                                                        if(isset($_SESSION['form-birthday'])){
                                                                print stripslashes($_SESSION['form-birthday']);
                                                        }
                                                        else{print '';} ?>">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-gender">Gender</label>
                                    <input type="text" name="form-gender" placeholder="Gender..."
                                           class="form-password form-control" id="form-gender" value="<?php 
                                                        if(isset($_SESSION['form-gender'])){
                                                                print stripslashes($_SESSION['form-gender']);
                                                        }
                                                        else{print '';} ?>">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-qual">Qualification</label>
                                    <input type="text" name="form-qual" placeholder="Qualification..."
                                           class="form-password form-control" id="form-qual">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-inst">Institution</label>
                                    <input type="text" name="form-inst" placeholder="Institution..."
                                           class="form-password form-control" id="form-inst">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-occ">Occupation</label>
                                    <input type="text" name="form-occ" placeholder="Occupation..."
                                           class="form-password form-control" id="form-occ">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-add">Address</label>
                                    <input type="text" name="form-add" placeholder="Address..."
                                           class="form-password form-control" id="form-add">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-state">State</label>
                                    <input type="text" name="form-state" placeholder="State..."
                                           class="form-password form-control typeahead tt-query" id="form-state">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-pic">Profile Picture</label>
                                    <input type="text" name="form-add" readonly placeholder="Profile Pic"
                                           class="form-password form-control " id="form-pic">
                                    <span class="btn btn-default btn-file ">
                                        Browse <input type="file">
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-doc">Document Proof</label>
                                    <input type="text" name="form-doc" readonly placeholder="Document Proof"
                                           class="form-password form-control" id="form-doc">
                                      <span class="btn btn-default btn-file">
                                        Browse <input type="file">
                                    </span>
                                </div>
                                <button type="submit" class="btn">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>


            </div>

        </div>
    </div>

</div>
<?php
$templates = new League\Plates\Engine('templates/site');
echo $templates->render('bootstrap-template', ['title' => 'Blinx - Home']);
?>
<script src="/assets/bootstrap/js/typeahead.bundle.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('input.form-state').typeahead({
            name: 'states',
            local: ['Andaman and Nicobar Islands', 'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chandigarh', 'Chhattisgarh', 'Dadra and Nagar Haveli', 'Daman and Diu', 'Delhi', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Lakshadweep', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Orissa', 'Pondicherry', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Tripura', 'Uttaranchal', 'Uttar Pradesh', 'West Bengal']
        });
    });
</script>
