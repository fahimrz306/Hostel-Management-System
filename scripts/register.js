function handleRegistration() {
    const name = document.querySelector("#name").value;
    const address = document.querySelector("#address").value;
    const email = document.querySelector("#email").value;
    const password = document.querySelector("#password").value;
    const phone = document.querySelector("#phone").value;
    const nid = document.querySelector("#nid").value;
    const seatId = document.querySelector("#seatId").value;


    if (name == "" || address == "" || email == "" || password == "" || phone == "" || nid == ""  ) {
      
      document.querySelector(
        "#alert"
      ).innerHTML = `<div class="alert alert-danger" role="alert">Please Fillup all information</div>`;
  
      return;
    }
  
    const data = {
        name : name,
        address : address,
        email: email,
        password : password,
        phone : phone,
        nid : nid,
        seatId : seatId,
    };

    async function postData(url = "", data = {}) {
      const response = await fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          // "Authorization": `bearer ${localStorage.getItem("token")}`,
        },
        body: JSON.stringify(data),
      });
      return response.json();
    }

    postData("http://localhost:4000/api/user/register", data).then((data) => {
      console.log(data);
    // if (data.success == false) {
    //   document.querySelector(
    //     "#alert"
    //   ).innerHTML = `<div class="alert alert-danger" role="alert">Wrong email and password</div>`;

    //   return;
    // }

    // localStorage.setItem("token", data.token);

    
    // window.location.href='/login.html'

  });


  // async function getData(url = "") {
  //   const response = await fetch(url, {
  //     method: "GET",
  //     headers: {
  //       "Content-Type": "application/json",
  //       "Authorization": `bearer ${localStorage.getItem("token")}`,
  //     },
  //   });
  //   return response.json();
  // }

  // getData("http://localhost:4000/api/notice/get-all").then((data) => {
  //   // console.log(data.notices)
  //   let print = "";
  //   data.notices.forEach((item) => {
  //     print += item.title + " " +item.description + '<br/>';
  //   });

  //   document.querySelector("body").innerHTML = print;
  // });

}