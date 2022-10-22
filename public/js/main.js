
// register script
try {

    document.getElementById("registerbtn").addEventListener("click", () => {
        let email = document.getElementById("email").value;
        let first_name = document.getElementById("first_name").value;
        let last_name = document.getElementById("last_name").value;
        let psw = document.getElementById("psw").value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


        if (!filter.test(email)) {
            alert("Invalid Email");
            return;
        }
        else if (first_name.length < 3 || last_name.length < 3) {
            alert("First name or last name must be up to 3 letters")
            return;
        }
        else if (psw.length < 5) {
            alert("password must be up to 5 charaters")
        }

        document.getElementById("registerbtn").style.display = "none";
        fetch("https://lolnews.fun/api/register",
            {
                method: "POST",
                body: JSON.stringify({
                    email: email,
                    first_name: first_name,
                    last_name: last_name,
                    password: psw
                }),
                headers: {
                    "Content-Type": "application/json"
                }
            }).then(async (data) => {
                document.getElementById("registerbtn").style.display = "block";
                let res = await data.json();
                if (res.status) {
                    alert("registration success")
                    window.location.href = "login.html";
                }
                else {
                    alert(JSON.stringify(res.data));
                }
            })

    });

} catch (error) { }

// login script

try {
    document.getElementById("loginbtn").addEventListener("click", () => {
        let email = document.getElementById("email").value;
        let psw = document.getElementById("psw").value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


        if (!filter.test(email)) {
            alert("Invalid Email");
            return;
        }
        else if (psw.length < 5) {
            alert("password must be up to 5 charaters")
        }

        document.getElementById("loginbtn").style.display = "none";
        fetch("https://lolnews.fun/api/login",
            {
                method: "POST",
                body: JSON.stringify({
                    email: email,
                    password: psw
                }),
                headers: {
                    "Content-Type": "application/json",
                    // "Authorization": `Bearer ${localStorage.getItem('access_token')}`
                }
            }).then(async (data) => {
                document.getElementById("loginbtn").style.display = "block";
                let res = await data.json();
                if (res.status) {
                    // console.log(res);
                    localStorage.setItem("access_token", res.data.access_token);
                    alert("Login successfull")
                    window.location.href = "getlink.html";
                }
                else {
                    alert(JSON.stringify(res.data.message));
                }
            })

    });

} catch (error) { }
// new pss script

try {
    document.getElementById("newpswbtn").addEventListener("click", () => {
        let email = document.getElementById("email").value;
        let reset_code = document.getElementById("reset_code").value;
        let New_password = document.getElementById("New_password").value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


        if (!filter.test(email)) {
            alert("Invalid Email");
            return;
        }
        else if (reset_code.length < 3) {
            alert("reset code must be up to 5 charaters")
        }


        document.getElementById("newpswbtn").style.display = "none";
        fetch("https://lolnews.fun/api/new-password",
            {
                method: "POST",
                body: JSON.stringify({
                    email: email,
                    reset_code: reset_code,
                    new_password: New_password




                }),
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${localStorage.getItem('access_token')}`

                }
            }).then(async (data) => {
                document.getElementById("newpswbtn").style.display = "block";
                let res = await data.json();
                if (res.status) {
                    // console.log(res);
                    localStorage.setItem("access_token", res.data.access_token);
                    alert("new password creation successfull")
                    window.location.href = "log.html";
                }
                else {
                    alert(JSON.stringify(res.data.message));
                }
            })

    });

} catch (error) { }

//  forgetpassword script

try {
    document.getElementById("logoutbtn").addEventListener("click", () => {
        let email = document.getElementById("email").value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


        if (!filter.test(email)) {
            alert("Invalid Email");
            return;
        }


        document.getElementById("logoutbtn").style.display = "none";
        fetch("https://lolnews.fun/api/forgot-password",
            {
                method: "POST",
                body: JSON.stringify({
                    email: email,

                }),
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": `Bearer ${localStorage.getItem('access_token')}`

                }
            }).then(async (data) => {
                document.getElementById("logoutbtn").style.display = "block";
                let res = await data.json();
                if (res.status) {
                    // console.log(res);
                    localStorage.setItem("access_token", res.data.access_token);
                    alert("Logout successfull")
                    window.location.href = "new-pass.html";
                }
                else {
                    alert(JSON.stringify(res.data.message));
                }
            })

    });

} catch (error) { }
// send message script

try {
    document.getElementById("snd-msg").addEventListener("click", () => {
        let user_id = document.getElementById("user_id").value;
        let message = document.getElementById("message").value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;



        document.getElementById("snd-msg").style.display = "none";
        fetch("https://lolnews.fun/api/send-message",
            {
                method: "POST",
                body: JSON.stringify({
                    user_id: user_id,
                    message: message

                })
            }).then(async (data) => {
                document.getElementById("snd-msg").style.display = "block";
                let res = await data.json();
                if (res.status) {
                    // console.log(res);
                    localStorage.setItem("access_token", res.data.access_token);
                    alert("sent ")
                    window.location.href = "snd.html";
                }
                else {
                    alert(JSON.stringify(res.data.message));
                }
            })

    });

} catch (error) { }

window.copyLink = async () => {
    try {
        const mylink = document.getElementById("mylink").innerHTML;
        navigator.clipboard.writeText(mylink);

    } catch (error) {
        // alert("Failed")
    }
}

window.shareLink = async () => {
    try {
        const mylink = document.getElementById("mylink").innerHTML;
        const shareData = {
            title: 'Send me message!',
            text: 'Hi, Send me secret anonymous message. Feel free to tell me anything. I\'m waiting',
            url: mylink,
          }
          try {
            await navigator.share(shareData);
            resultPara.textContent = 'MDN shared successfully';
          } catch (err) {
            resultPara.textContent = `Error: ${err}`;
          }

    } catch (error) {
        // alert("failed")
    }
}