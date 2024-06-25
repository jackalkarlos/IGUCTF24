const $ = q => document.querySelector(q);
let val = $('input').value;

$('input').addEventListener('focus', () => {
  $('.background').classList.add('zoom');
});

$('input').addEventListener('blur', () => {
  $('.background').style.top = '0';
  $('.background').style.left = '0';
  $('.background').classList.remove('zoom');
});

$('input').addEventListener('keyup', (ev) => {
  if (ev.target.value == val) return;
  $('.background').style.top = Math.random() * 20 - 10 + 'px';
  $('.background').style.left = Math.random() * 20 - 10 + 'px';
  val = ev.target.value;
});

addEventListener('load', () => $('input').focus());

let Count = 0;

document.addEventListener("DOMContentLoaded", function() {
CountCheck()

  document.getElementById("passwordInput").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
	  CountCheck()
      checkPassword();
      Count++;
      localStorage.setItem("LoginCount", Count);
	  document.cookie = "LoginCount=" + btoa(Count.toString()) + "; path=/";
    }
  });

  document.getElementById("login").addEventListener("click", function(event) {
	 CountCheck()
    checkPassword();
    Count++;
    localStorage.setItem("LoginCount", Count);
	document.cookie = "LoginCount=" + btoa(Count.toString()) + "; path=/";
  });

  function checkPassword() {
    var audio = document.getElementById("errorAudio");
    audio.play();

    var password = document.getElementById("passwordInput").value;
    if (password === "*****") {
      window.location.href = "5e96a9f2f9034f149df071c348ee7032.php"; 
    }
  }
});

function CountCheck(){
  let CountCheck = localStorage.getItem("LoginCount");
  if (CountCheck >= 10) {
    window.location.href = "403.php";
  }
}

document.getElementById("login").addEventListener("click", function() {
    var password = document.getElementById("passwordInput").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            if (response !== "success") {
                document.getElementById("errorAudio").play();
            }
        }
    };
    xhr.send("Secret=" + password);
});

document.getElementById("passwordInput").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        var password = document.getElementById("passwordInput").value;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                if (response !== "success") {
                    document.getElementById("errorAudio").play();
                }
            }
        };
        xhr.send("Secret=" + password);
    }
});


function checkAuthCookie() {
   
    var authCookie = getCookie("Auth");

    
    if (!authCookie || authCookie !== "233447130ebded0b70940b2c82d9762317b5ec120d618bfa817c169a9ca494390edbb434b077923d43e75a35f7f082f9119e7c22ff95e350372f3caa1e658423") {
    
        location.reload();
    }
}


setInterval(checkAuthCookie, 1000);


function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i].trim();
            
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}
