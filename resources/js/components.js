class Dropdown{
    constructor(){
        document.querySelectorAll('[data-type="dropdown"]').forEach( dropdown => {
            dropdown.firstElementChild.addEventListener('click', function( ){
                dropdown.lastElementChild.classList.toggle('hidden')
                dropdown.lastElementChild.classList.toggle('opacity-0')
                dropdown.lastElementChild.classList.toggle('opacity-100')
            })
        })
    }
}

class AlertDismissible{
    constructor(){
        const alerts = document.querySelectorAll('[data-type="alert-dismissible"]')
        alerts.forEach( alert => {
            alert.querySelector('button').addEventListener('click', function(){
                alert.classList.add('opacity-0');
                setTimeout( function(){
                    alert.remove()
                }, 250)
            })
            setTimeout( function(){
                alert.querySelector('button').click()

            }, 3500)
        })
    }
}

window.addEventListener('DOMContentLoaded', function(){
    new Dropdown()
    new AlertDismissible()
})
