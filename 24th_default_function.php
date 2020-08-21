<?php
//function initialization
function sayhello()
{
	echo "<p>hello</p>";
}
//calling 
sayhello();

function regform()
{
	echo "<form method='POST'>";
	echo "<input type='text'name='name'
	placeholder='enter your name'required>";
	echo "<input type='email'name='email'
	placeholder='enter your email' required>";
	echo "<input type='submit'name='subs'
	value='subscribe'>";
}
regform();
?>