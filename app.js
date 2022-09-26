function setMenu(itemMenu) {
    window.alert("Anda memilih " + itemMenu);
    document.getElementById('select-menu').value = itemMenu;
}

function submitOrder(menu){
    window.alert("Anda Yakin akan memesan " + menu);
    document.getElementById('select-order').value = menu;
}

function cetak() {
    var nama = document.getElementById("Fullname").value ;
    document.getElementById("demo").innerHTML = "<b>" + nama +"</b>";
}

gsap.from("#titleHead", {
    opacity: 0,
    y: -50,
    x: 0,
    duration: 2
});
gsap.from("#desc", {
    opacity: 0,
    y: 50,
    x: 0,
    duration: 2
});
gsap.from(".btn", {
    opacity: 0,
    y: 50,
    x: 0,
    duration: 2
});


if (localStorage.getItem('theme') == 'light') {
    setTheme(true);
}

function setTheme(isLight) {
    if (isLight) {
        document.body.setAttribute('id', 'lightMode');
        localStorage.setItem('theme', 'light');
    } else {
        document.body.setAttribute('id', '');
        localStorage.removeItem('theme');
    }
}