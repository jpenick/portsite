<?php
	$pageName='Blog Page';
	include('header.php');
?>

<h1>Contact</h1>
<p>My contact info and the contact form.</p>
<h3>Social Media</h3>
<p>
	<ul>
		<li>Github</li>
		<li>LinkedIn</li>
		<li>Freelance website</li>
	</ul>
</p>
<h3>Contact Me</h3>
<form action="/my-handling-form-page" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message:</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
    <button type="submit">Send your message</button>
    </div>
</form>
<?php
include('footer.php');
?>