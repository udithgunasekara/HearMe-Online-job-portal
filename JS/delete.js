function confirmDelete() {
    if (confirm("Are you sure you want to Deactivate your Account?")) {
      deleteRecord();
    }
  }
  
  function deleteRecord() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
       
        alert(this.responseText);
        window.location.href='login.php';
  
      }
    };
    xhttp.open("GET", "delete.php", true);
    xhttp.send();
  }



  function logout() {
    if (confirm("Are you sure you want to Log Out?")) {
      logoutprofile();
    }
  }
  function logoutprofile() {

    fetch('logout.php')
      .then(response => response.text())
      .then(data => {
        alert("Logout Success");
        window.location.href = "login.php";
      })
      .catch(error => {
        console.log('Error:', error);
      });
  }