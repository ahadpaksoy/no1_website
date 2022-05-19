function check(){

    var ad = document.getElementById("ad").value;
    var soyad = document.getElementById("soyad").value;
    var email = document.getElementById("email");
    var message=document.getElementById("floatingTextarea2").value;

    if (ad  == "")
    {
      alert("AD alanı boş olamaz!");
      return false;
    }

    if (soyad == "")
    {
      alert("SOYAD alanı boş olamaz!");
      return false;
    }

    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)))
    {
      alert("Geçerli bir E-Mail adresi girmelisiniz!");
      return false;
    }

    if(message==""){
      alert("MESSAGE alanı boş olamaz");
      return false;
    }
  }