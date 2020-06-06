<?php include "includes/header.php";?>
<!--End header -->
        <h2 class="welcome">Welcome!</h2>
        <p>Please fill out the form below and let us know a little bit about your upcoming project and how we can help.</p>
        <?php

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hello@katebaldwin.dev";  //place your/your client's email address here
        $toName = "Kate"; //place your client's name here
        $website = "Web Dev Examples";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    </section>
        
    <aside>
        <h3>Basic Website Design Cycle</h3>

        <p>The following is a list of resources to assist in the website design process:</p>
        <ul>
            <li><a href="https://www.seoptimer.com/blog/website-design-questionnaire/" target="_blank" title="Website Design Questionnaire">Website Design Questionnaire</a></li>
            <li><a href="https://websitelaunchchecklist.com/" target="_blank" title="Website Launch Checklist">Website Launch Checklist</a></li>
            <li><a href="https://app.lucidchart.com/" target="_blank" title="Lucid Charts">Lucid Charts</a></li>
        </ul>
    </aside>

<!-- Start Footer -->
<?php include "includes/footer.php";?>