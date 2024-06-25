<?php
session_start();


if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    
    http_response_code(200);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="style.css">
    <title>Authentication</title>
</head>
<body>
    <h2>+90<?php echo $_SESSION["phone"]?></h2>
    <p>Telefon Numaranıza Gönderilen 6 Haneli 2FA Kodunu Giriniz</p>
    <div id="response"></div>
    <div class="otp-field">
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input class="space" type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
    </div>

    <script>
        const inputs = document.querySelectorAll(".otp-field input");

        inputs.forEach((input, index) => {
            input.dataset.index = index;
            input.addEventListener("keyup", handleOtp);
            input.addEventListener("paste", handleOnPasteOtp);
        });

        function handleOtp(e) {
            const input = e.target;
            let value = input.value;
            let isValidInput = value.match(/[0-9a-z]/gi);
            input.value = "";
            input.value = isValidInput ? value[0] : "";

            let fieldIndex = input.dataset.index;
            if (fieldIndex < inputs.length - 1 && isValidInput) {
                input.nextElementSibling.focus();
            }

            if (e.key === "Backspace" && fieldIndex > 0) {
                input.previousElementSibling.focus();
            }

            if (fieldIndex == inputs.length - 1 && isValidInput) {
                submit();
            }
        }

        function handleOnPasteOtp(e) {
            const data = e.clipboardData.getData("text");
            const value = data.split("");
            if (value.length === inputs.length) {
                inputs.forEach((input, index) => (input.value = value[index]));
                submit();
            }
        }

        function submit() {
            console.log("Submitting...");
            let otp = "";
            inputs.forEach((input) => {
                otp += input.value;
                input.disabled = true;
                input.classList.add("disabled");
            });

            var formData = {
                'otp': otp
            };

            fetch('OTP.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                if (response.ok) {
                    document.getElementById('response').innerHTML = "<h4>Tebrikler! Giriş izni verildi.</h4>";
                    setTimeout(function() {
                window.location.href = '8ded3021680a9c325aa0ca34d162502b.php';
            }, 1000);
                } else if (response.status === 403) {
                    document.getElementById('response').innerHTML = "<h4>Hata! Giriş izni reddedildi.</h4>";
                } else {
                    document.getElementById('response').innerHTML = "<h4>Hata! Geçersiz istek.</h4>";
                }

                inputs.forEach((input) => {
                    input.disabled = false;
                    input.classList.remove("disabled");
                    input.value = "";
                });
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>

<?php
} else {
    
    http_response_code(403);
    echo "Forbidden";
}
?>
