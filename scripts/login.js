function handleLogin() {
  const email = document.querySelector("#email").value;
  const password = document.querySelector("#password").value;
  if (email == "" || password == "") {
    // document.querySelector('#alert').innerHTML=
    // `<div class="alert alert-danger" role="alert">Please enter email and password</div>`

    document.querySelector(
      "#alert"
    ).innerHTML = `<div class="alert alert-danger" role="alert">Please enter email and password</div>`;

    return;
  }

  const data = {
    email: email,
    password: password,
  };

  
  async function postData(url = "", data = {}) {
    const response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });
    return response.json();
  }

  postData("http://localhost:4000/api/user/login", data).then((data) => {
    if (data.success == false) {
      document.querySelector(
        "#alert"
      ).innerHTML = `<div class="alert alert-danger" role="alert">Wrong email and password</div>`;

      return;
    }

    localStorage.setItem("token", data.token);

    
    window.location.href='/dashboard.html'
    // const token=localStorage.getItem('token');
    // console.log(token)
  });
}
