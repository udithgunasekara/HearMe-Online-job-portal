<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login selection page</title>
    <style>
      body 
{
  font-family:sans-serif; 
background: -webkit-linear-gradient(to right, #0000FF, #FF0000);
 	 background: linear-gradient(to right, #ADD8E6, #FFFFFF);

  color:whitesmoke;
}

 
h1{
    text-align: center;
}


form{
    width:35rem;
    margin: auto;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(100%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;
}
span.a {
  display: inline; 
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 1px solid blue;  

}
	h4{
	font-size:35px;
 	font-family: "Brush Script MT", cursive;
	text-align:center;
	padding:7px;
	}

button {
    background-color: #030804;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-size: 18px;
  }

button:hover {
    opacity: 0.6;
    cursor: pointer;
}

.headingsContainer{
    text-align: center;
}

.headingsContainer p{
    color: red;
	
}
.mainContainer{
    padding: 19px;
	text-align:center;
  
}


  /* Media queries for the responsiveness of the page */
  @media screen and (max-width: 600px) {
    form{
      width: 25rem;
    }
  }
  
  @media screen and (max-width: 400px) {
    form{
      width: 20rem;
    }
  }

    </style>
</head>
<body>
    <script type="text/javascript">
        function redirectToRelPage() {
            var userTypeSe = document.querySelector('input[name="userTypeSe"]:checked').value;
			
            if (userTypeSe === "employee") {
                
				window.location.href = "empreg.php";
				alert("You are being redirected to the employee page");
			
			} else if (userTypeSe === "company") {
                window.location.href = "companyreg.php";
            alert("You are being redirected to the company page");
			
			}
        }
    </script>

    <form action="" id="Form">
	
	
        <div class="headingsContainer">
		<h4><b><u>Hirehub</u></b></h4>
            <h3 style ="font-size:30px">Log in to proceed!</h3>
            <p style ="font-size:20px">How do you want to proceed?</p>
        </div>

        <div class="mainContainer">
            <input  type="radio" name="userTypeSe" value="employee" style="transform: scale(2); margin-right:10px" checked>
            <label for="employee" style ="font-size:18px">Employee</label><br>
            <p>OR</p>
            <input type="radio" name="userTypeSe" value="company" style="transform: scale(2); margin-right:10px">
            <label for="company"style ="font-size:18px">Company</label><br><br>
            <img src="https://static1.shine.com/l/m/images/blog/job_search_portals.png" width="117px" height="117px" align="right">
            <button type="button" onclick="redirectToRelPage()">Login</button>
        </div>
    </form>
</body>
</html>
