<?php

//response generation function

$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

	global $response;

	if($type == "success") $response = "<div class='success'>{$message}</div>";
	else $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');
$subject = "New order from form ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
           'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
	if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
	else {

		//validate email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			my_contact_form_generate_response("error", $email_invalid);
		else //email is valid
		{
			//validate presence of name and message
			if(empty($name) || empty($message)){
				my_contact_form_generate_response("error", $missing_content);
			}
			else //ready to go!
			{
				$sent = wp_mail($to, $subject, strip_tags($message), $headers);
				if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
				else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
			}
		}
	}
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>
<!-- MAIN SECTION -->
<section id="article-section" class="line">
	<div class="margin">
		<!-- ARTICLES -->
		<div class="s-12 m-7 l-9">
			<!-- ARTICLE 1 -->
			<article class="margin-bottom">
				<!-- text -->
				<div class="post-text">
					<div class="line">
						<div class="margin">
							<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
                                <p><?php echo $response; ?></p>
                            <div class="s-12 l-6">


								<address>
									<p><i class="icon-sli-phone icon"></i> +38 099 000 00 00</p>
									<p><i class="icon-globe_black icon"></i> Slovakia - Europe</p>
									<p><i class="icon-mail icon"></i> info@visiondesign.sk</p>
								</address>
							</div>
							<div class="s-12 l-6">
								<h4>Contact form</h4>


                                    <form class="customform" action="<?php the_permalink(); ?>" method="post">
                                        <div class="s-12"><p><label for="name">Name: <span>*</span> <br><input placeholder="+38 099 644 58 43" type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p></div>
                                        <div class="s-12"><p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p></div>
                                         <div class="s-12"><p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p></div>
                                         <div class="s-12"><p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
                                        <input type="hidden" name="submitted" value="1">
                                        <p><input type="submit"></p>
                                    </form>

							</div>
							<?php endwhile; // end of the loop. ?>
						</div>
					</div>
				</div>
				<!-- MAP -->
				<div id="map-block">
					<iframe src="https://www.google.com/maps/" width="100%" height="450" frameborder="0" style="border:0"></iframe>
				</div>
			</article>
			<!-- AD REGION -->
			<div class="line">
				<div class="advertising horizontal">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Fashion Blog -->
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8115128083480193" data-ad-slot="9121305263" data-ad-format="auto"></ins>
					<script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</div>
		<!-- SIDEBAR -->
		<div class="s-12 m-5 l-3">
			<aside>
				<!-- AD REGION -->
				<div class="advertising margin-bottom hide-s">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Fashion 160x600 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:160px;height:600px"
					     data-ad-client="ca-pub-8115128083480193"
					     data-ad-slot="7468355662"></ins>
					<script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</aside>
		</div>
	</div>
</section>