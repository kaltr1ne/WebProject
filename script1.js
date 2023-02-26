function validimiLogin() {
  let uNameLF = document.LoginForm.username;
  let passLF = document.LoginForm.password;

  if (uNameLF.value == "") {
    alert("Please enter your username!");
    uNameLF.focus();
    return false;
  }

  if (passLF.value == "") {
    alert("Please enter your password!");
    passLF.focus();
    return false;
  }

  return true;
}

function validimiSignUp() {
    const emriREGEX = /^[A-Za-z]+$/
    const emailREGEX = /^[\w.+-]+@[\w.-]+\.[a-zA-Z]{2,}$/
    const passREGEX = /^[A-Z][A-Za-z0-9@$!%*?&]*[a-z][A-Za-z0-9@$!%*?&]*[0-9][A-Za-z0-9@$!%*?&]*$/
    let emriSUF = document.SignUpForm.name;
    let uNameSUF = document.SignUpForm.username;
    let emailSUF = document.SignUpForm.email;
    let passSUF = document.SignUpForm.password;
  
    if (emriSUF.value == "") {
      alert("Please enter your name!");
      emriSUF.focus();
      return false;
    }
    if (!emriREGEX.test(emriSUF.value)) {
      alert("Name must contain letters only!");
      emriSUF.focus();
      return false;
    }
  
    if (uNameSUF.value == "") {
      alert("Please enter your Username!");
      uNameSUF.focus();
      return false;
    }
    if (uNameSUF.value.length < 6) {
      alert("Username must contain at least 6 characters!");
      uNameSUF.focus();
      return false;
    }
    if (emailSUF.value == "") {
      alert("Email can't be blank!");
      emailSUF.focus();
      return false;
    }
    if (!emailREGEX.test(emailSUF.value)) {
      alert("Please enter a valid email address!");
      emailSUF.focus();
      return false;
    }
    if (passSUF.value == "") {
      alert("Password can't be blank!");
      passSUF.focus();
      return false;
    }
    if (passSUF.value.length < 8) {
      alert("Please enter a Password with at least 8 charachters!");
      passSUF.focus();
      return false;
    }
    if (!passREGEX.test(passSUF.value)) {
      alert("Password must contasin one lowercase letter, one digit and the first letter must be Uppercase!");
      passSUF.focus();
      return false;
    }
  
    return true;
  }

  function validimiContactForm() {
    const emriREGEX = /^[A-Za-z]+$/
    const emailREGEX = /^[\w.+-]+@[\w.-]+\.[a-zA-Z]{2,}$/
    let emriCF = document.ContactForm.name;
    let emailCF = document.ContactForm.email;
    let msgFieldCF = document.ContactForm.msgField;
  
    if (emriCF.value == "") {
      alert("Please enter your name!");
      emriCF.focus();
      return false;
    }
    if (!emriREGEX.test(emriCF.value)) {
      alert("Name must contain letters only!");
      emriCF.focus();
      return false;
    }
    if (emailCF.value == "") {
      alert("Email can't be blank!");
      emailCF.focus();
      return false;
    }
    if (!emailREGEX.test(emailCF.value)) {
      alert("Please enter a valid email address!");
      emailCF.focus();
      return false;
    }
    if (msgFieldCF.value == "") {
      alert("Please enter your message!");
      msgFieldCF.focus();
      return false;
    }
  
    return true;
  }
  function validimiShtimiProduktit() {
    const qmimiREGEX = /^[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?$/
    let qmimi = document.shtoProduktin.cmimiPd;
  
    if (!qmimiREGEX.test(qmimi.value)) {
      alert("Ju lutem shkruani qmimin ne forme te DOUBLE(123.00)!!!");
      qmimi.focus();
      return false;
    }
  
    if (qmimi.value.length > 10) {
      alert("Qmimi mund te jete me se shumti '99999999.99'!");
      qmimi.focus();
      return false;
    }
  
    return true;
  }
  
  function validimiBuyNowForm() {
    const emriREGEX = /^[A-Za-z]+$/
    const mbiemriREGEX = /^[A-Za-z]+$/
    const emailREGEX = /^[\w.+-]+@[\w.-]+\.[a-zA-Z]{2,}$/
    let uname = document.BuyNowForm.name;
    let usurname = document.BuyNowForm.surname;
    let uusername = document.BuyNowForm.username;
    let uemail = document.BuyNowForm.email;
    let ucontactNumber = document.BuyNowForm.contactNumber;
    let uaddress = document.BuyNowForm.address;
    let uemriProduktit = document.BuyNowForm.emriProduktit;
    let usasia = document.BuyNowForm.sasia;
    let ungjyra = document.BuyNowForm.ngjyra;
    let ucoupon = document.BuyNowForm.coupon;

    if (uname.value == "") {
      alert("Please enter your name!");
      uname.focus();
      return false;
    }
    if (!emriREGEX.test(uname.value)) {
      alert("Name must contain letters only!");
      uname.focus();
      return false;
    } 
    if (usurname.value == "") {
      alert("Please enter your surname!");
      usurname.focus();
      return false;
    }
    if (!mbiemriREGEX.test(usurname.value)) {
      alert("Surname must contain letters only!");
      usurname.focus();
      return false;
    } 
    if (uemail.value == "") {
      alert("Email can't be blank!");
      uemail.focus();
      return false;
    }
    if (!emailREGEX.test(uemail.value)) {
      alert("Please enter a valid email email!");
      uemail.focus();
      return false;
    }
    if (uusername.value == "") {
      alert("Please enter your username!");
      uusername.focus();
      return false;
    }
    if (ucontactNumber.value == "") {
      alert("Please enter your contact number!");
      ucontactNumber.focus();
      return false;
    }
    if (uaddress.value == "") {
      alert("Please enter your address!");
      uaddress.focus();
      return false;
    }
    if (uemriProduktit.value == "") {
      alert("Please enter the product's name!");
      uemriProduktit.focus();
      return false;
    }
    if (usasia.value == "") {
      alert("Please enter the quantity!");
      usasia.focus();
      return false;
    }
    if (ungjyra.value == "") {
      alert("Please enter the color!");
      ungjyra.focus();
      return false;
    }
    if (ucoupon.value == "") {
      alert("Please enter your surname!");
      ucoupon.focus();
      return false;
    }
   
  
    return true;
  }