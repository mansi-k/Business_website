<!--========== FOOTER ==========-->
<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="index.php">Home</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="about.php">About</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="products.php">Products</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="infrastructure.php">Infrastructure</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="products.php">Projects</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="contact.php">Contact</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-4 sm-margin-b-30">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">Send Us A Note</h2>
                    <form id="contact-form" name="cform" method="post" onsubmit="return checkall()">
                        <input type="text" id="fn" name="uname" class="form-control footer-input margin-b-20" placeholder="Name" required>
                        <input type="email" id="fe" name="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                        <input type="text" id="fp" name="phno" maxlength="10" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                        <textarea name="msg" id="fm" class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                        <button name="csubmit" type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                    </form>
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
                <span id="b" style="color: #17bed2; font-size: 28px; font-weight: bold;">MIT</span>
                <span style="color: #fff; font-size: 22px; font-weight: bold;">CREATIVE</span>
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="color-base fweight-700" href="#preview/asentus/">MIT Creative</a> All rights reserved by: <a class="fsite color-base fweight-700" href="index.php">mitcreative.com</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->
<script>
    function checkAll()
    {
        var ph = document.getElementById( "fp" );
        var phv = ph.value;
        if(phv.length<10 && /^\d+$/.test(phv)==false)
        {
            document.cform.submit();
            return true;
        }
        else
        {
            ph.focus();
            alert("Invalid details!");
            return false;
        }

    }
</script>
<!-- Back To Top -->
<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

<?php
    if(isset($_POST['csubmit'])) {
        $name = $_POST['uname'];
        $emid = $_POST['email'];
        $phno = $_POST['phno'];
        $msg = $_POST['msg'];
        $message = '<html><body><table>
<tr><td>From  -  '.$name.'</td></tr><tr><td>Email ID  -  '.$emid.'</td></tr><tr><td>Phone No  -  '.$phno.'</td></tr><tr><td>Message - <br>'.$msg.'</td></tr>
</table></body></html>';
        $subj = "Message from $emid";
        $mailstatus=0;
        //include 'email.php';
        $to = "contact@mitcreative.com";
        //from = "contact@mitcreative.com";
        $headers = "MIME-VERSION: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=UTF-8". "\r\n";
        $headers .= "From : <$emid> \r\n";
        if(mail($to,$subj,$message,$headers)) {
            ?>
            <script>
                alert("Thank you for messaging us!");
            </script>
            <?php
        }
        else {
            ?>
            <script>
                alert("Failed");
            </script>
            <?php
        }
    }
?>