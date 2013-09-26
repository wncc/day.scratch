
<?php
include 'header.php';?>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '387219034740375',                        // App ID from the app dashboard
    channelUrl : 'http://day.scratch.wncc-iitb.org/channel.html', // Channel file for x-domain comms
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      testAPI();
      testPost();
    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login();
    } else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.name + '.');

    });

  }

  function testPost(){

    FB.api('/me/feed', 'post', { message: "I'm going to Attend the Scratch Weekend. Are you?", link :'http://day.scratch.wncc-iitb.org/',picture:'http://www.cbsomagh.org/Portals/cbsomagh/Clubs%20&%20Societies/Scrat%20logo.jpg',name:'Scratch Hack Weekend',description:'Scratch Hack Weekend Conducted by Wncc IIT Bombay' }, function(response){
  if (!response || response.error) {
    alert('Error occured' + response.error);
<<<<<<< HEAD
  } else {
    alert('Post ID: ' + response.id);
=======
>>>>>>> 5cd952f65fe1a6c96182ca63335b7a2e16138b68
  }
})
  }

  FB.ui(
  {
    method: 'feed',
    name: 'Facebook Dialogs',
    link: 'https://developers.facebook.com/docs/dialogs/',
    picture: 'http://fbrell.com/f8.jpg',
    caption: 'Reference Documentation',
    description: 'Dialogs provide a simple, consistent interface for applications to interface with users.'
  },
  function(response) {
    if (response && response.post_id) {
      alert('Post was published.');
    } else {
      alert('Post was not published.');
    }
  }
);
var access_token;
function attend()
{
	FB.api('/193659327480060/attending','post',function(data) { console.log(data);});
}
</script>

<form method='post' action='reg.php'>
<legend>Register your team!</legend>
<table>
<tr><td>Team Name : </td><td><input width='100px' type='text' name='team'></td></tr>
<tr><td>Member1 Name : </td><td><input width='100px' type='text' name='name1'></td></tr>
<tr><td>Member1 Phone : </td><td><input width='100px' type='text' name='phone1'></td></tr>
<tr><td>Member1 E-mail : </td><td><input width='100px' type='text' name='mail1'></td></tr>
<tr><td>Member2 Name : </td><td><input width='100px' type='text' name='name2'></td></tr>
<tr><td>Member2 Phone : </td><td><input width ='100px' type='text' name='phone2'></td></tr>
<tr><td>Member2 E-mail : </td><td><input width = '100px' type='text' name='mail2'></td></tr>
</table>
<input onclick='testPost()' type='submit' name='submit' value='Register'>
</form>
<?php 
include 'footer.php';
?>

