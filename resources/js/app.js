require('./bootstrap');

window.addEventListener('DOMContentLoaded', function(){



    document.querySelector('#btnLightTheme').addEventListener('click', function( e ){
        localStorage.setItem('theme', 'light')
        document.documentElement.classList.remove('dark')

        hideParentCollapsable( e )

    })

    document.querySelector('#btnDarkTheme').addEventListener('click', function( e ){
        localStorage.setItem('theme', 'dark')
        document.documentElement.classList.add('dark')

        hideParentCollapsable( e )
    })

    document.querySelector('#btnSystemTheme').addEventListener('click', function( e ){
        localStorage.removeItem('theme')
        if(window.matchMedia('(prefers-color-scheme: dark)').matches){
            document.documentElement.classList.add('dark')
        }else{
            document.documentElement.classList.remove('dark')
        }
        hideParentCollapsable( e )
    })

    function hideParentCollapsable( e ){
        e.target.parentElement.classList.toggle('opacity-0')
        e.target.parentElement.classList.toggle('opacity-100')
        e.target.parentElement.classList.toggle('hidden')
    }


    document.querySelector('#btnMenu').addEventListener('click', function(e) {
        e.preventDefault()
        const sidebar = document.querySelector('#sidebar');
        if(sidebar.classList.contains('-translate-x-full')){
            sidebar.classList.remove('-translate-x-full')
        }else{
            sidebar.classList.add('-translate-x-full')
        }
    })
})

