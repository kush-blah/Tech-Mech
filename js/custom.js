$('.counter').each(function() {
    let $this = $(this),
        countTo = $this.attr('data-count');
    console.log("Counting");
    $({ countNum: $this.text()}).animate({
            countNum: countTo
        },

        {

            duration: 2000,
            easing:'linear',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(this.countNum);
                //alert('finished');
            }

        });
});
$('.showDialog').on('click',function(){
    console.log("hiding");
    $('.collapse').collapse('hide');
});

$('.carousel').carousel();

function toggle() {
    let x = document.getElementById("login-dialog");
    x.style.display = "block";
}
function setProperties() {
    closeDiv();
}
function closeDiv() {
    let x = document.getElementById("login-dialog");
    x.style.display = "none";
}

function toggleForms() {
    let x = document.getElementById("registrationFrom");
    let y = document.getElementById("loginForm");
    if(x.style.display === "none" && y.style.display ==="block"){
        console.log("show login");
        y.style.display = "none";
        x.style.display = "block";
    }else{
        console.log("show register");
        y.style.display = "block";
        x.style.display = "none";
    }
}

