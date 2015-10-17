<?php
if(isset($_POST['submit']))
{
    if( !$_POST['name'] || !$_POST['email'] || !$_POST['subject'] || !$_POST['message'] || $_POST['name'] == '' || $_POST['email'] == ''|| $_POST['message'] == '')
    {
        $error = 'Please fill in all the required fields';
    }
    else 
    {
            $recMailOn = "info@blackthorium.com";
            $name = esc_html($_POST['name']);
            $email = esc_html($_POST['email']);
            $comment = esc_html($_POST['message']);
            $msg = "Name: " . $name . PHP_EOL;
            $msg .= "Email Address: " . $email . PHP_EOL;
            $msg .= "Message: " . $comment;

            $sitename = "Black Thorium";
            $subject = '[' . $sitename . ']' . $_POST['subject'];
            $headers = 'From: ' . $name . ' <' . $email . '>' . PHP_EOL;
            //wp_mail($to, $subject, $msg, $headers);*/

            // the message
            $msg = "First line of text\nSecond line of text";

            // send email
            mail($recMailOn,$subject,$msg);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackThorium - The Tech Solutions You are Looking For</title>
    <meta name="description" content="BlackThorium - The Tech Solutions You are Looking For" />
    <!-- templatemo 411 dragonfruit -->
    <meta name="author" content="blackthorium">
    <!-- Favicon-->
    <link rel="shortcut icon" href="./favicon.ico" />		
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Camera -->
    <link href="css/camera.css" rel="stylesheet">
    <!-- Template  -->
    <link href="css/templatemo_style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div class="banner" id="templatemo_banner_slide">
    <ul>
        <li class="templatemo_banner_slide_01">
            <div class="slide_caption">
                <h1>Creative Team</h1>
                <p>We are creative team with ideas your business needs. We develop with experience and current trends your business needs.</p>
            </div>
        </li>
        <li class="templatemo_banner_slide_02">
            <div class="slide_caption">
                <h1>Time is Money</h1>
                <p>We value your time as well as your money. We focus on professional quality work but keep the timelines right in control.</p>
            </div>
        </li>
        <li class="templatemo_banner_slide_03">
            <div class="slide_caption">
                <h1>Right Tools</h1>
                <p>We use the right tools for the right task.</p>
            </div>
        </li>
        <li class="templatemo_banner_slide_04">
            <div class="slide_caption">
                <h1>Make Reality</h1>
                <p>Having a new idea for an app, we are here to make it reality.</p>
            </div>
        </li>
    </ul>
</div>

<div id="templatemo_mobile_menu">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#templatemo_banner_slide"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a></li>
            <li><a href="#templatemo_about"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; About</a></li>
            <li><a href="#templatemo_events"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp; Projects</a></li>
            <li><a href="#templatemo_timeline"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Methodology</a></li>
            <li><a href="#templatemo_contact"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp; Contact</a></li>
        </ul>
</div>
<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
            	<a rel="nofollow" href="http://www.blackthorium.com">
                	<img src="images/black-thorium-logo.png" id="logo_img" alt="Black Thorium" title="Black Thorium" />
                </a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                    <li><a href="#templatemo_banner_slide">Home</a></li>
                    <li><a href="#templatemo_about">About</a></li>
                    <li><a href="#templatemo_events">Projects</a></li>
                    <li><a href="#templatemo_timeline">Methodology</a></li>
                    <li><a href="#templatemo_contact">Contact</a></li>
                 </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
        </div>
    </div>
</div>
<div id="templatemo_about" class="container_wapper">
    <div class="container-fluid">
        <h1>About Our Organization</h1>
        <div class="col-sm-12 col-md-4 about_icon">
            <div class="imgwap mission"><i class="fa fa-cubes"></i></div>
            <h2>WEB</h2>
            <p>All web solutions including front-end and API development.</p>
        </div>
        <div class="col-sm-12 col-md-4 about_icon">
            <div class="imgwap product"><i class="fa fa-bar-chart-o"></i></div>
            <h2>iOS</h2>
            <p>Experienced team to provide you with iOS services</p>
        </div>
        <div class="col-sm-12 col-md-4 about_icon">
            <div class="imgwap testimonial"><i class="fa fa-rocket"></i></div>
            <h2>Android</h2>
            <p>Having an App idea, we can make it reality for you.</p>
        </div>
        <div class="clearfix testimonial_top_bottom_spacer"></div>

        <div class="col-sm-12 col-md-12">
            <p>We are young and energitic team who are looking for new challenges. Our experienced developer are capable to deliver the solutions you are looking for. Our development team focuses on mainly three doamins which are as follows</p>
            <h2>WEB</h2>
            <p>The web team can deliver relible web solutions, either you are looking for a simple website or CRM we can deliver it. We have experts who can develop Single Page Application. If you are looking for reliable APIs for you next application we can deliver it.</p>

            <h2>iOS</h2>
            <p>The mobile application team can devliver you the reliable and stable iOS apps. If you are looking for native or hybrid solution we are well equipped to deliver you at reasonable time.</p>

            <h2>Android</h2>
            <p>We are well equipped to deliver reliable and stable Apps in Andoird format too. As the publishing mechanism is simpler you can experiment your ideas with android and if you find comfortable add an iOS platform to your product.</p>

        </div>
        <div class="clearfix testimonial_top_bottom_spacer"></div>
    </div>
</div><!--templatemo_about-->
<div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
        <h1>Latest Projects</h1>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_left">
                <div class="event_box_img">
                    <img src="images/projects-01.jpg" class="img-responsive" alt="Web Design Trends" />
                </div>
                <div class="event_box_caption">
                    <h1>Executive Enterprises</h1>
                    <p>Branding and Print Designs</p>
                    <p>We gave the Brand Design to Executive Enterprises. The print media was covered including Visiting Cards, Invoice and Letter Head.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_right">
                <div class="event_box_img">
                    <img src="images/projects-02.jpg" class="img-responsive" alt="Free Bootstrap Seminar" />
                </div>
                <div class="event_box_caption">
                    <h1>OAK Technologies</h1>
                    <p>Design &amp; Development of website</p>
                    <p>We delivered the designed and onwards developed the complete website of OAK Technologies</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_left">
                <div class="event_box_img">
                    <img src="images/projects-03.jpg" class="img-responsive" alt="" />
                </div>
                <div class="event_box_caption">
                    <h1>Hyat &amp; Meerjees</h1>
                    <p>Design &amp; Development of Website</p>
                    <p>HYAT &amp; MEERJEES is a vibrant firm of lawyers, providing legal services since 1981; supported by a capable administrative staff and state-of-the-art offices in prime locations.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_right">
                <div class="event_box_img">
                    <img src="images/projects-04.jpg" class="img-responsive" alt="" />
                </div>
                <div class="event_box_caption">
                    <h1>Clean Tech</h1>
                    <p>Design &amp; Development of Clean Tech website.</p>
                    <p>The Global Cleantech Innovation Programme (GCIP), currently running in 6 countries, including Pakistan, is a three year programme that aims at developing a sustainable entrepreneurship ecosystem, while supporting clean technology innovations in SMEs and startup enterpreneurs to maximize their opportunities to achieve sustainable commercial success.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="templatemo_timeline" class="container_wapper">
    <h1>Development Methodology</h1>
    <div class="container-fluid">
        <div class="time_line_wap">
            <div class="time_line_caption">1</div>
            <div class="time_line_paragraph">
                <h1>Requirements analysis</h1>
                <p>We initiate every project with requirement analysis. We take this step seriously and give ample time to set the direction towards the right path.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">2</div>
            <div class="time_line_paragraph">
                <h1>Planning &amp; Designing</h1>
                <p>Once the requirments are clear we being the planning and software designing phase. With detailed requimentments and thorough planning we aim for professional and stable outcome. During designing we keep room for future enhancements to accomodate the future needs of your businees. Timelines are also set in this phase so you know when things will be ready to production.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">3</div>
            <div class="time_line_paragraph">
                <h1>Development</h1>
                <p>We follow divide and conqure rule. The tasks are well divided into smaller and simpler chunks which helps the team members to work independently knowing the other parts will just work.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">4</div>
            <div class="time_line_paragraph">
                <h1>Testing</h1>
               
                <p>We test our products on three levels. The first phase is developer level testing, which is task level testing then Q/A team assures the define funtionality is working and tries to break with corner cases. Once different modules are integrated we go for full application level testing, which leaves very little room for any bugs to pass on production environment.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">5</div>
            <div class="time_line_paragraph">
                <h1>Demo</h1>
                <p>Client's satisfaction is our number one priority. Once we are satisfied by our internal testing we go for demo on beta servers. The clients' feedback are well acknoledged and by any chance there is any need for change, we do it while staying with in the terms and condition finalized in earlier phases.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">6</div>
            <div class="time_line_paragraph">
                <h1>Deployment</h1>
              
                <p>Once the client is satisfied with the output, we move the code to production environment where the target audience could use the final product.</p>
            </div>
        </div>
           <div class="time_line_wap">
            <div class="time_line_caption">7</div>
            <div class="time_line_paragraph">
                <h1>Maintenance</h1>
                
                <p>For on going project we go for Service Level Agreements and provide on going support.</p>
            </div>
        </div>
    </div>

</div>
<div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
        <h1>Contact</h1>
        <div class="col-xs-12">
            <div id="templatemo_contact_map"></div>
        </div>
        <div class="col-md-4">
            <h2>Contact Info.</h2>
            <p>We are eager to provide our services to you. Please feel free to query us and we will get back to you at our earliest.</p>
            <br>
            <p>
                <strong>Email:</strong> info@BlackThorium.com<br />
                <strong>Website:</strong> www.BlackThorium.com<br />
                <strong>Address:</strong> #8, Third floor, Ahmed Center, I-8 Markaz, Islamabad 44000, Pakistan</p>
            <ul class="list-inline social-link">
                <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-github"></i></a> 
                </li>
           </ul>
        </div>
        <form method="post" class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                <h2>Send Enquiry</h2>
                </div>
                <div class="col-md-6">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="Your Name" required/>
                </div>
                <div class="col-md-6">
                    <p>Email</p>
                    <input type="email" name="email" id="email" placeholder="Your Email" required/>
                </div>
                <div class="col-md-12">
                    <p>Subject</p>
                    <input type="text" name="subject" id="subject" placeholder="Subject" required/>
                </div>
                <div class="col-md-12">
                    <p>Message</p>
                    <textarea name="message" id="message"  placeholder="Write your message here..." required></textarea>
                </div>
                <input type="hidden" name="submit" value="1" />
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button type="submit">Send</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="templatemo_footer">
    <div>
        <p id="footer">Copyright &copy; Black Thorium</p>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/unslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/templatemo_script.js"></script>
</body>
</html>