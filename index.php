<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>


<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOBBOX CONSOLE //PUPO//</title>
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60020786-1', 'auto');
      ga('send', 'pageview');

    </script>
    <style>
    	body {
    		background-color: #000;
    		color: #00CB00;
        	font-size: 14px;
        	font-family: monospace;
        	
    		}
      .header {	padding-bottom: 15px;}

      .container {max-width: 920px; margin: auto;}
      .terminal_holder {
      	float:left;
        max-width: 600px;
        margin: auto;
      }
      .helpbox {
      	float:right;
      	max-width: 300px;
      	margin: auto;
      }
      .slide{ 
      	    position: fixed;
    		top: 30px;
    		right: 5px;
     }
      a {
        color: #fff;
      }
      a:visited {
        color: #ccc;
      }
      @media screen and (max-width: 621px) {
        .header {
          font-size: 6px;
        }
      }
      input { background-color: transparent;  color: #ffffff;  border: none; outline: none; color: #00CB00; font-size: 14px; font-family: monospace;}
    </style>

    
  <style type="text/css"></style></head>
  
  <body>
  
  <div class="container">

  	<div class="terminal_holder" id="terminal_holder">


		&nbsp;&nbsp;&nbsp;__&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______&nbsp;&nbsp;&nbsp;&nbsp; ______&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__&nbsp;&nbsp;__&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
		&nbsp;&nbsp;/\&nbsp;\&nbsp;&nbsp; /\&nbsp;&nbsp;__&nbsp;\&nbsp;&nbsp;&nbsp;/\&nbsp;&nbsp;==&nbsp;\&nbsp;&nbsp;&nbsp;/\&nbsp;&nbsp;== \&nbsp;&nbsp;&nbsp;/\&nbsp;&nbsp;__&nbsp;\&nbsp;&nbsp;&nbsp;/\_\_\_\<br>
		&nbsp;_\_\&nbsp;\&nbsp;&nbsp;\&nbsp;\&nbsp;\/\&nbsp;\&nbsp;&nbsp;\&nbsp;\&nbsp;&nbsp;__&lt;&nbsp;&nbsp;&nbsp;\&nbsp;\&nbsp;&nbsp;__&lt;&nbsp;&nbsp;&nbsp;\&nbsp;\ \/\&nbsp;\&nbsp;&nbsp;\/_/\_\/_<br>
		/\_____\&nbsp;&nbsp;\&nbsp;\_____\&nbsp;&nbsp;\&nbsp;\_____\&nbsp;&nbsp;\&nbsp;\_____\&nbsp;&nbsp;\&nbsp;\_____\&nbsp;&nbsp; /\_\/\_\<br>
		\/_____/&nbsp;&nbsp; \/_____/&nbsp;&nbsp;&nbsp;\/_____/&nbsp;&nbsp;&nbsp;\/_____/&nbsp;&nbsp;&nbsp;\/_____/&nbsp;&nbsp; \/_/\/_/<br><br><br>
		This is a terminal done by Pupo
		<br>It should connect to the JOBBOX API and get some cool info from them.
		<br> While using this, you should feel like an hacker. 
		<br> If not, go to jobbox.io for the true experience.
		<br> Type Help for information.

			<div id = "cmd"> </div>

			> <input type="text" id="input"  autofocus>
	</div>

	<div class="helpbox">

		<div class= "slide">
			<br> <br> <br> <br> <br> <br> 
			Commands available:
			<br> <br>
			> <FONT COLOR=\"#FD8E2F\">companies</FONT> - Lists all companies <br>
			> <FONT COLOR=\"#FD8E2F\">company XX</FONT> - Presents information for company XX <br>
			> <FONT COLOR=\"#FD8E2F\">jobs</FONT> - Lists all available Jobs <br>
			> <FONT COLOR=\"#FD8E2F\">job XX</FONT> - Presents information for job XX <br>
			> <FONT COLOR=\"#FD8E2F\">user</FONT> - Presents info on current user  <br>
			> <FONT COLOR=\"#FD8E2F\">apps</FONT> - Lists your applications <br>
			> <FONT COLOR=\"#FD8E2F\">app XX</FONT> - Presents information for application XX <br>
			> <FONT COLOR=\"#FD8E2F\">referrals</FONT> - Lists your referalls <br>
			> <FONT COLOR=\"#FD8E2F\">referralssent</FONT> - Lists the referrals you sent <br> 
			> <FONT COLOR=\"#FD8E2F\">clear</FONT> - clears the command box   <br>
		</div>

	</div>

</div>

  

</body></html>


<script type="text/javascript" charset="utf-8">

var listofinputs = [];
var n = -1;


$('#input').bind('keypress', function(e) {
	
	if(e.keyCode==13){
		
		document.getElementById("cmd").innerHTML += "> " + document.getElementById("input").value + "<br>";
		listofinputs[listofinputs.length] = document.getElementById("input").value;
		n++; 

		var res = document.getElementById("input").value .split(" "); //splits commands for cases like company XX

		
		if (document.getElementById("input").value == "companies"){

			Getcompanies();
			document.getElementById("input").value = "";

		}
		
		else if (res[0] == "company"){

			if (isNumber(res[1]))
			{
				Getcompany(res[1]);
				document.getElementById("input").value = "";

			}
			else
			{
				document.getElementById("cmd").innerHTML += "Invalid Company number <br>";
				document.getElementById("input").value = "";

			}

			document.getElementById("input").value = "";

		}

		else if (res[0] == "job"){

			if (isNumber(res[1]))
			{
				GetJobsbyID(res[1]);
				document.getElementById("input").value = "";

			}
			else
			{
				document.getElementById("cmd").innerHTML += "Invalid job number <br>";
				document.getElementById("input").value = "";

			}

			document.getElementById("input").value = "";

		}

		else if (res[0] == "app"){

			if (isNumber(res[1]))
			{
 				GetUserAppID([1]);
				document.getElementById("input").value = "";

			}
			else
			{
				document.getElementById("cmd").innerHTML += "Invalid application number <br>";
				document.getElementById("input").value = "";

			}

			document.getElementById("input").value = "";

		}

		
		else if (document.getElementById("input").value == "jobs"){
			GetJobs();
			document.getElementById("input").value = "";
		}

		else if (document.getElementById("input").value == "user"){
			GetUser();
			document.getElementById("input").value = "";
		}

		else if (document.getElementById("input").value == "apps"){
			GetUserApps();
			document.getElementById("input").value = "";
		}

		else if (document.getElementById("input").value == "referrals"){

			GetReferrals();
			document.getElementById("input").value = "";
		}

		else if (document.getElementById("input").value == "referralssent"){

			GetReferralssent();
			document.getElementById("input").value = "";
		}

		else if (document.getElementById("input").value == "help"){

			help();
			document.getElementById("input").value = "";
		}

		else if (document.getElementById("input").value == "clear"){

			clear();
			document.getElementById("input").value = "";
		}
		else
		{
			document.getElementById("cmd").innerHTML += "Invalid Command; Type help for help... <br>";
			document.getElementById("input").value = "";
		}

		jumpToPageBottom()

	}



	});

$(document).click(function (event) {   $('#input').focus() })
$('#input').bind('keydown', function(e) {
	console.log(listofinputs)
	console.log(n)
	if(e.keyCode==38) //up
	{
		if ( n >= 0 && n <= listofinputs.length){
			 document.getElementById("input").value = listofinputs[n];
		     if (n>= 1){ n--; }
		}
	}

	if(e.keyCode==40)
	{
 		document.getElementById("input").value = "";
 		n = listofinputs.length -1;
	}


	});


	function isNumber(n) {
  			return !isNaN(parseFloat(n)) && isFinite(n);
	}

	function jumpToPageBottom() {
    		$('html, body').scrollTop(  $(document).height() );
	}


//----- FUNCTIONS FOR COMMANDS.........


function Getcompanies() {

        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/companies.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 
          	for(i = 0; i < data.length; i++)
          	{
          		var company = data[i];

          	 document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">ID: </FONT>" + company.id + "<br>";

          	 document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Name: </FONT>" + company.name + " <br> ";
          		
             document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Pitch: </FONT>" + company.short_pitch + "<br>";

			 document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Created at: </FONT>" + company.created_at + "<br> <br>";

			 jumpToPageBottom();

          	}

           },
          error: function() { alert('boo!'); }
        });

      }

function Getcompany(id) {
		console.log(id);
        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/companies/' + id + '.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 

          		var company = data;

          	 document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">ID: </FONT>" + company.id + "<br>";

          	 document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Name: </FONT>" + company.name + " <br> ";
          		
             document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Pitch: </FONT>" + company.short_pitch + "<br>";

			 document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Created at: </FONT>" + company.created_at;
			 
			 jumpToPageBottom();

           	},

          error: function() { alert('boo!'); }

        });

      }

function Getcompanyname(id) {
		
        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/companies/' + id + '.json',
          type: 'GET',
          dataType: 'json',
          async: false ,
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 

          		var company = data;

          		document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Company: </FONT>" +  company.name;

          		sjumpToPageBottom();
           	},

          error: function() { alert('boo!'); }

        });

      }

function GetJobs() {

        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/offers.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 
          	for(i = 0; i < data.length; i++)
          	{
          	  var company = data[i];

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">City: </FONT>" + company.city + "<br>";

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Country: </FONT>" + company.country_name + " <br> ";
          		
              Getcompanyname(company.company_id);

              document.getElementById("cmd").innerHTML += "<br><FONT COLOR=\"#FD8E2F\">Perks: </FONT>" + company.perks + "<br> <br>";

              jumpToPageBottom();
          	}

           },

          error: function() { alert('boo!'); }
        });

      }

  function GetJobsbyID(id) {
		
        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/offers/' + id + '.json',
          type: 'GET',
          dataType: 'json',
          async: false ,
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 

          	  var company = data;

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">City: </FONT>" + company.city + "<br>";

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Country: </FONT>" + company.country_name + " <br> ";
   
              document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Perks: </FONT>" + company.perks + "<br> <br>";

              jumpToPageBottom()

           	},

          error: function() { alert('boo!'); }

        });

      }



      function GetUser() {

        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/user.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 
          	  
          	  var company = data;

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">ID: </FONT>" + company.id + "<br>";

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">E-mail: </FONT>" + company.email + " <br> ";
          	
              document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Name: </FONT>" + company.first_name + " " + company.last_name + "<br>";
          		
          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Location: </FONT>" + company.location + ", " + company.country_code + " <br>  <br>";

          	  jumpToPageBottom()
           },

          error: function() { alert('boo!'); }
        });

      }


      function GetUserApps() {

        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/user/applications.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 
          	  
          	for(i = 0; i < data.length; i++)
          	{
          	  var company = data[i];

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">------application " + (i+1) + "------</FONT><br>";

          	  GetJobsbyID(data[i].offer_id);
          	  
          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">My application: </FONT>" + company.text + " <br> ";

              document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Application Date: </FONT>" + company.created_at + "<br> <br>";

              jumpToPageBottom()
          	}
          },
          error: function() { alert('boo!'); }
        });

      }

      function GetUserAppID(id) {

        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/user/applications/' + id + '.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 

          	  var company = data;

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">------application------ </FONT><br>";

          	  GetJobsbyID(data.offer_id);
          	  
          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">My application: </FONT>" + company.text + " <br> ";

              document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Application Date: </FONT>" + company.created_at + "<br> <br>";

              jumpToPageBottom()
          	
          },
          error: function() { alert('boo!'); }
        });

      }

      function GetReferrals() {

        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/user/referrals_received.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 
          	  
          	for(i = 0; i < data.length; i++)
          	{
          	  var company = data[i];

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">------Referral " + (i+1) + "------</FONT><br>";
      	  
          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Refered Person: </FONT>" + company.referred_name + " <br> ";

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Text: </FONT>" + company.text + "<br>";

              document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Created at: </FONT>" + company.created_at + "<br> <br>";

              jumpToPageBottom()
          	}
          	
          },
          error: function() { alert('boo!'); }
        });

      }

      function GetReferralssent() {

        $.ajax({
          url: 'http://qa.jobbox.io/api/v1/user/referrals_sent.json',
          type: 'GET',
          dataType: 'json',
          beforeSend: function(xhr) {
            xhr.setRequestHeader("Authorization", "Token token=e44729b33c335b407c70ee1632ed74a2")
          },

          success: function(data) { 
          	  
          	for(i = 0; i < data.length; i++)
          	{
          	  var company = data[i];

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">------Referral " + (i+1) + "------</FONT><br>";
      	  
          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Refered Person: </FONT>" + company.referred_name + " <br> ";

          	  document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Text: </FONT>" + company.text + "<br>";

              document.getElementById("cmd").innerHTML += "<FONT COLOR=\"#FD8E2F\">Created at: </FONT>" + company.created_at + "<br> <br>";

              jumpToPageBottom()
          	}
          	
          },
          error: function() { alert('boo!'); }
        });

      }

      function help() {

      	 document.getElementById("cmd").innerHTML += " <br>Commands available: <br>";
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">companies</FONT> - Lists all companies <br>"
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">company XX</FONT> - Presents information for company XX <br>"
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">jobs</FONT> - Lists all available Jobs <br>"
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">job XX</FONT> - Presents information for job XX <br>"
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">user</FONT> - Presents info on current user  <br>"
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">apps</FONT> - Lists your applications <br>"
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">app XX</FONT> - Presents information for application XX <br>"
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">referrals</FONT> - Lists your referalls <br> ";
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">referralssent</FONT> - Lists the referrals you sent <br> ";
		 document.getElementById("cmd").innerHTML += " 	> <FONT COLOR=\"#FD8E2F\">clear</FONT> - clears the command box  <br> <br>";
      }

      function clear() {
      	document.getElementById("cmd").innerHTML =  "";


      }

</script>
