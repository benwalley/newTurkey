<!DOCTYPE html>
<html>

<head>

    <title>Apply to be an Angel</title>

    <?php include '../../includes/header.html';?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/user/apply/css/main.css">



    <div class="panel panel-default">
        <div class="panel-heading">Application to be an Angel</div>
        <form>

            <div class="topfillform">
                <label>
                    <div class="textlabel">Name</div>
                    <input class="textform" class="textform" name="fullName" placeholder="Full Name">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Maiden name, if applicable</div>
                    <input class="textform" name="mname" placeholder="Maiden Name">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Address</div>
                    <input class="textform" name="address" placeholder="Address">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">State</div>
                    <input class="textform" name="state" placeholder="State">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Zip Code</div>
                    <input class="textform" name="zip" placeholder="Zip Code">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Phone Number</div>
                    <input class="textform" name="phone" placeholder="Phone">
                </label>
            </div>

            <div class="fillform">
                <h4>References</h4>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Reference 1 Name</div>
                    <input class="textform" name="reference1Name" placeholder="Reference 1 Name">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Reference 1 Email</div>
                    <input class="textform" name="reference1Email" placeholder="Reference 1 Email">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Reference 1 Phone</div>
                    <input class="textform" name="reference1Phone" placeholder="Reference 1 Phone">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Reference 2 Name:</div>
                    <input class="textform" name="reference2Name" placeholder="Reference 2 Name">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Reference 2 Email</div>
                    <input class="textform" name="reference2Email" placeholder="Reference 2 Email">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Reference 2 Phone</div>
                    <input class="textform" name="reference2Phone" placeholder="Reference 2 Phone">
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">Why do you want to be a Angel?</div>
                    <textarea class="textareaform" name="reasonsWhy"></textarea>
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">List all experience helping others in a crisis.</div>
                    <textarea class="textareaform" name="prevExp"></textarea>
                </label>
            </div>

            <div class="fillform">
                <label>
                    <div class="textlabel">List all volunteer experience.</div>
                    <textarea class="textareaform" name="prevVolunteer"></textarea>
                </label>
            </div>

            <div id="backgroundCheck">
                <input type="checkbox" name="bgCheckConsent" value="Approved"> By checking this box you agree to a background check.
                <br>
            </div>

            <label class="fillform">
                <div class="textlabel">Have you ever been convicted of a crime?</div>
                <input type="radio" name="convicted" value="yes"> Yes
                <input type="radio" name="convicted" value="no"> No
                <br>
            </label>

            <div class="fillform">
                <label>
                    <div class="textlabel">If yes, explain why.</div>
                    <textarea class="textareaform" name="convictionExplanation">
            </textarea>
                </label>
            </div>

            <div class="container">
                <button type="submit" class="btn btn-primary btn-lgm btn-block" data-toggle="modal" data-target="#myModal">Submit</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Thanks for applying!</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Thank you for your interest in becoming an Angel. Your information will be reviewed, and
                                    you will be notified via email within 5-7 business days.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
        </form>
        </div>

        <script type="text/javascript" src="/user/apply/js/main.js"></script>

        <?php include '../../includes/footer.html';?>