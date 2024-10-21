function LoginOn(){
  const login = document.getElementById("login");
  login.style.display = "flex";
}

function LoginOff(){
  const login = document.getElementById("login");
  login.style.display = "none";
}

function loginInvalido(){
  const params = new URLSearchParams(window.location.search);
  const msg = params.get('msg');

  if(msg == "lginvld"){
    alert('Login Inválido. Tente novamente');
  }

}