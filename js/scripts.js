const submit = document.getElementById("submit")

const msgSent = () => {
  alert("Данные успешно отправлены, ожидайте обратной связи!")
}

submit.addEventListener("click", msgSent)


const modalLogo = document.getElementById("modal__logo")



modalLogo.addEventListener("click", () => {

  modalLogo.src = "./images/logo/logo-black.png"
  setTimeout(()=>{
    modalLogo.src = "./images/logo/logo-white.png"
  }, 2000)
})


