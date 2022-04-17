<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
    <!--<link href="https://fonts.font.im/css?family=Indie+Flower|Open+Sans+Condensed:300|Permanent+Marker|Ruslan+Display"-->
          <!--rel="stylesheet">-->
</head>
<body>

<header>
    <div class="logo"><img src="img/logo.jpg"/></div>
    <div class="menu">
        <a href="index.html">Home</a>
        <a href="menu.html">Menu</a>
        <a href="content.html">Connect</a>
        <a href="contact.php" class="active">Contact</a>
    </div>
</header>
<div class="con">
    <div class="con1">
        <div class="form_con">
            <form action="https://formspree.io/f/xyyopqaw" method="POST" id="my-form">
                <div>
                    <label>Full Name</label>
                    <br>
                    <input type="text" placeholder="You name" name="name" required="required">
                </div>

                <div>
                    <label>Email</label>
                    <br>
                    <input type="email" placeholder="You email" name="email" required="required">
                </div>

                <div>
                    <label>Rate Our Products</label>
                    <br>
                    <select name="rate" required="required">
                        <option label="commonly" value="commonly"></option>
                        <option label="good" value="good"></option>
                        <option label="excellent" value="excellent"></option>
                        <option label="very nice" value="very nice"></option>
                    </select>
                </div>

                <div>
                    <label>More comments from you</label>
                    <br>
                    <textarea placeholder="Say what you want to say" name="more" required="required"></textarea>
                </div>

                <div class="btns">
                    <button type="submit" id="my-form-button">Send</button>
                </div>
                <p id="my-form-status"></p>

            </form>
        </div>
        <div class="app_con">
             <video controls autoplay muted >
                            <source src="img/adv.mp4">
                        </video>
        </div>
    </div>
</div>
<footer>
    McDonald's
</footer>

<script>
    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
        event.preventDefault();
        var status = document.getElementById("my-form-status");
        var data = new FormData(event.target);
        fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
            status.innerHTML = "Thanks for your submission!";
            form.reset()
            window.location.href = 'thanks you.html'
        } else {
            response.json().then(data => {
                if (Object.hasOwn(data, 'errors')) {
                status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
                status.innerHTML = "Oops! There was a problem submitting your form"
            }
        })
        }
    }).catch(error => {
            status.innerHTML = "Oops! There was a problem submitting your form"
    });
    }
    form.addEventListener("submit", handleSubmit)
</script>
</body>
</html>
