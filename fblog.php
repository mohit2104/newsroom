<html>
<head></head>
<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '205785166264439', 
    //channelUrl : '//127.0.0.1/channel.html', 
    status     : true, 
    cookie     : true, 
    xfbml      : true  
  });


  FB.Event.subscribe('auth.authResponseChange', function(response) {

    if (response.status === 'connected') {

      testAPI();
    } else if (response.status === 'not_authorized') {

      FB.login();
    } else {
      FB.login();
    }
  });
  };


  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));


  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.name + '.');
    });
  }
  function m()
  {
  FB.logout(function(response) {

});}
function name1()
{
FB.api('/me', function(response) {

  document.getElementById('id').value=response.id;
  document.getElementById('name').value=response.name;
  document.getElementById('form').submit();
});
}

</script>

<div id='facebook' style='position:absolute;top:90px;left:0px;background:rgba(10,50,200,0.3);padding:10px;'>
<fb:login-button show-faces="true" width="200" max-rows="1" ></fb:login-button>
<button onclick='m()' style='background:rgba(0,112,0,0.2);color:white;font-family:cursive'>other user</button>
<button onclick='name1()' style='background:rgba(0,112,0,0.2);color:white;font-family:cursive;'>login with fb</button>

</div>
<form action='next.html' method='get' id='form' style='display:none'>
<input type='text' name='id' id='id'>
<input type='text' name='name' id='name'>
</form>
</body>
</html>                