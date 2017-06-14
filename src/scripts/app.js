function myFunction() {
    var x = document.getElementById('myDIV');
    var y = document.getElementById('myARROW');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.transform ="rotate(90deg)";

    }
    else {
        x.style.display = 'none';
        y.style.transform ="rotate(0deg)";
    }
};


function myFunction2() {
    var x = document.getElementById('myDIV2');
    var y = document.getElementById('myARROW2');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.transform ="rotate(90deg)";

    }
    else {
        x.style.display = 'none';
        y.style.transform ="rotate(0deg)";
    }
};

function myFunction3() {
    var x = document.getElementById('myDIV3');
    var y = document.getElementById('myARROW3');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.transform ="rotate(90deg)";

    }
    else {
        x.style.display = 'none';
        y.style.transform ="rotate(0deg)";
    }
};

function openNav() {
  var y = document.getElementById('crossmenu');
    y.style.display = 'block';
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("headertransi").style.marginLeft = "250px";
    document.getElementById("ctn-movable").style.marginLeft = "250px";
    document.getElementById("ctn-donate").style.marginLeft = "500px";

};

function closeNav() {
  var y = document.getElementById('crossmenu');
    y.style.display = 'none';
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("headertransi").style.marginLeft = "0";
    document.getElementById("ctn-donate").style.margin = "auto";
    document.getElementById("ctn-donate").style.marginTop = "-60px";
    document.getElementById("ctn-movable").style.marginLeft = "50";
};
