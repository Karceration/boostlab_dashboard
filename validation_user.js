const nom = document.getElementById('nom')
const prenom = document.getElementById('prenom')
const password = document.getElementById('password')

const form_users = document.getElementById('form_users')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []

  if (nom.value === '' || nom.value == null) {
    messages.push('Nom invalide')
  }
  if (prenom.value === '' || prenom.value == null) {
    messages.push('Prenom invalide')
  }

  if (password.value.length <= 6) {
    messages.push('Password trop court')
  }

  if (password.value.length >= 20) {
    messages.push('Password trop long')
  }


  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})
