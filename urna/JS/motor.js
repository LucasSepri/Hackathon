/* INTERRUPTOR */
function dark() {
    document.body.classList.toggle('dark');
    document.querySelector('#etec').classList.toggle('dark');
    document.querySelector('#onda').classList.toggle('dark');

  }

  const chk = document.getElementById('chk')
  chk.addEventListener('change', () => {
    dark();
  })
  
  /* Abrir Telas */
  document.getElementsByClassName("tablink")[0].click();

  function openCity(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
      tablinks[i].classList.remove("w3-light-grey");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("w3-light-grey");
  }