<!DOCTYPE html>
<html>
<head>

	<title>Apply to be an Angel</title>

	<link rel="stylesheet" type="text/css" href="/user/apply/css/main.css">

	<?php include '../../includes/header.html';?>


	<div>
		<form>
            <label>
                Name:
            <input name="fullName" placeholder="Full Name"required>
            </label>
            <label>
                Maiden name, if applicable:
            <input name="mname" placeholder="Maiden Name">
            </label>
            <label>
                Address:
            <input name="address" placeholder="Address"required>
            </label>
            <label>
                State
            <input name="state" placeholder="State"required>
            </label>
            <label>
                Zip Code
            <input name="zip" placeholder="Zip Code"required>
            </label>
            <label>
                Phone Number
            <input name="phone" placeholder="Phone"required>
            </label>
            <h>References</h>
            <label>
                Reference Name:
            <input name="reference1Name" placeholder="Reference Name"required>
            </label>
            <label>
                Reference Email:
            <input name="reference1Email" placeholder="Reference Email"required>
            </label>
            <label>
                Reference Phone:
            <input name="reference1Phone" placeholder="Reference Phone"required>
            </label>
            <label>
                Reference Name:
            <input name="reference2Name" placeholder="Reference Name">
            </label>
            <label>
                Reference Email:
            <input name="reference2Email" placeholder="Reference Email">
            </label>
            <label>
                Reference Phone:
            <input name="reference2Phone" placeholder="Reference Phone">
            </label>
            <label>
                Give some reasons for why you would like to be a Angel:
            <textarea name="reasonsWhy" placeholder ="Enter your reasons here" required></textarea>
            </label>
            <label>
                Enter all previous experience helping others who are in crisis:
            <textarea name="prevExp" placeholder="Enter all previous crisis experience here" required></textarea>
            </label>
            <label>
                Enter all previous volunteer experience:
            <textarea name="prevVolunteer" placeholder="Enter here" required></textarea>
            </label>
            <input type="checkbox" name="bgCheckConsent" value="Approved" required> By checking this box
                you agree to a background check<br>
            <label>
                Have you ever been covicted of a crime?            
            <input type="radio" name="convicted" value="yes"> Yes 
            <input type="radio" name="convicted" value="no"> No<br>
            </label>
            <label>
                If yes, explain what it was for and what happened.
            <textarea name="convictionExplanation" placeholder="If yes, explain why and what happened.">
                </textarea>
                </label>
            
            <div class="container">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thanks for Applying!</h4>
                        </div>
                        <div class="modal-body">
                        <p>Thank you for your interest in becoming an Angel. Your information 
                            will be reviewed, and you will be notified via email within 5-7 business days.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>
		</form>
	</div>

	<script type="text/javascript" src = "/user/apply/js/main.js"></script>

<?php include '../../includes/footer.html';?>