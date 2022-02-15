const nom = document.getElementById('nom')
const prenom = document.getElementById('prenom')
const password = document.getElementById('password')

const form = document.getElementById('form')
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
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }


  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})
