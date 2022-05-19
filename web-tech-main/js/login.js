function control() {
    var email = document.getElementById("email");
    var password = document.getElementById("password").value;

    if (email === "" || password === "") {
      alert("E-mail ve Şifre alanları boş geçilemez!");
      return false;
    }
    else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))) {
      alert("Geçerli bir E-mail adresi girmelisiniz!");
      return false;
    }
    else if (password == "") {
      alert("Lütfen şifrenizi giriniz!");
      return false;
    }

  }