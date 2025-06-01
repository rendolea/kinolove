btn_menu = document.querySelector('#menu_btn');
menu_wrap = document.querySelector('#menu_wrap');
content = document.querySelector('#content');

btn_menu.onclick = function(){
    menu_wrap.classList.toggle('menu_active');
    content.classList.toggle('content_active')
}