const email = document.getElementById('email')

function phonecall() {
    open(`+1${email.innerHTML}`)
}

const call = document.getElementById('call')


call.addEventListener('submit', (e) => {
    e.preventDefault();
    phonecall()
})