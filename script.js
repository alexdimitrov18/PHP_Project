// Pure JS AJAX

function bandGoals() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("band").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "Band_Info/band_goals.txt", true)
    xhttp.send();
}

function bandInfo() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("band").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "Band_Info/band_info.txt", true)
    xhttp.send();
}

function communityInfo() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("band").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "Band_Info/band_community.txt", true)
    xhttp.send();
}
// jQuery AJAX

// Members
$(document).ready(function () {
$("#dajax").click(function () {
    $("#dustin").load("Members/dustin.txt");
});
});

$(document).ready(function () {
$("#brajax").click(function () {
    $("#brockr").load("Members/brock.txt");
});
});

$(document).ready(function () {
$("#rajax").click(function () {
    $("#ronDe").load("Members/ronDe.txt");
});
});

$(document).ready(function () {
$("#aajax").click(function () {
    $("#adamg").load("Members/adamg.txt");
});
});

// Albums

$(document).ready(function () {
$("#btnTRD").click(function () {
    $("#traRD").load("Albums/tra_rd.txt");
});
});

$(document).ready(function () {
$("#btnTDRD").click(function () {
    $("#traDERD").load("Albums/tra_de.txt");
});
});

$(document).ready(function () {
$("#btnTM").click(function () {
    $("#traM").load("Albums/tra_mean.txt");
});
});

$(document).ready(function () {
$("#btnTS").click(function () {
    $("#traS").load("Albums/tra_songs.txt");
});
});

//_________________________________________________

$(document).ready(function () {
$("#btnVRD").click(function () {
    $("#vesRD").load("Albums/ves_rd.txt");
});
});

$(document).ready(function () {
$("#btnVDRD").click(function () {
    $("#vesDERD").load("Albums/ves_de.txt");
});
});

$(document).ready(function () {
$("#btnVM").click(function () {
    $("#vesM").load("Albums/ves_mean.txt");
});
});

$(document).ready(function () {
$("#btnVS").click(function () {
    $("#vesS").load("Albums/ves_songs.txt");
});
});

//________________________________________________

$(document).ready(function () {
$("#btnDRD").click(function () {
    $("#divRD").load("Albums/div_rd.txt");
});
});

$(document).ready(function () {
$("#btnDM").click(function () {
    $("#divM").load("Albums/div_mean.txt");
});
});

$(document).ready(function () {
$("#btnDS").click(function () {
    $("#divS").load("Albums/div_songs.txt");
});
});


// Hide members list and show specific member profile

$(document).ready(function () {
    $("#dus").click(function () {
        $("#dustinp").show();
        $("#hide").hide();
    });
});

$(document).ready(function () {
    $("#brock").click(function () {
        $("#brockp").show();
        $("#hide").hide();
    });
});

$(document).ready(function () {
    $("#ron").click(function () {
        $("#ronp").show();
        $("#hide").hide();
    });
});

$(document).ready(function () {
    $("#adam").click(function () {
        $("#adamp").show();
        $("#hide").hide();
    });
});

$(document).ready(function () {
    $("#dus").click(function () {
        $("#dustinp").show();
        $("#hide").hide();
    });
});

// Hide specific member profile and show members list

$(document).ready(function () {
    $(".close").click(function () {
        $("#hide").show();
        $("#dustinp").hide();
        $("#brockp").hide();
        $("#ronp").hide();
        $("#adamp").hide();
    });
});

// Hide albums list and show specific album

$(document).ready(function () {
    $("#tra").click(function () {
        $("#tran").show();
        $("#hidea").hide();
    });
});

$(document).ready(function () {
    $("#ves").click(function () {
        $("#vesa").show();
        $("#hidea").hide();
    });
});

$(document).ready(function () {
    $("#divi").click(function () {
        $("#diva").show();
        $("#hidea").hide();
    });
});

// Hide album profile and playlist then show album list

$(document).ready(function () {
    $(".closea").click(function () {
        $("#hidea").show();
        $("#tran").hide();
        $("#vesa").hide();
        $("#diva").hide();
    });
});

// OnHover animations

function dustinMouseOver() {
    var x = document.getElementById("dus");
    x.style.color = "grey";
}

function dustinMouseOut() {
    var x = document.getElementById("dus");
    x.style.color = "white";
}

function brockMouseOver() {
    var x = document.getElementById("brock");
    x.style.color = "grey";
}

function brockMouseOut() {
    var x = document.getElementById("brock");
    x.style.color = "white";
}

function ronMouseOver() {
    var x = document.getElementById("ron");
    x.style.color = "grey";
}

function ronMouseOut() {
    var x = document.getElementById("ron");
    x.style.color = "white";
}

function adamMouseOver() {
    var x = document.getElementById("adam");
    x.style.color = "grey";
}

function adamMouseOut() {
    var x = document.getElementById("adam");
    x.style.color = "white";
}

function traMouseOver() {
    var x = document.getElementById("tra");
    x.style.color = "grey";
}

function traMouseOut() {
    var x = document.getElementById("tra");
    x.style.color = "white";
}

function vesMouseOver() {
    var x = document.getElementById("ves");
    x.style.color = "grey";
}

function vesMouseOut() {
    var x = document.getElementById("ves");
    x.style.color = "white";
}

function divMouseOver() {
    var x = document.getElementById("divi");
    x.style.color = "grey";
}

function divMouseOut() {
    var x = document.getElementById("divi");
    x.style.color = "white";
}

function dusH1MouseOver() {
    var x = document.getElementById("dajax");
    x.style.color = "grey";
}

function dusH1MouseOut() {
    var x = document.getElementById("dajax");
    x.style.color = "white";
}

function brH1MouseOver() {
    var x = document.getElementById("brajax");
    x.style.color = "grey";
}

function brH1MouseOut() {
    var x = document.getElementById("brajax");
    x.style.color = "white";
}

function rdH1MouseOver() {
    var x = document.getElementById("rajax");
    x.style.color = "grey";
}

function rdH1MouseOut() {
    var x = document.getElementById("rajax");
    x.style.color = "white";
}

function agH1MouseOver() {
    var x = document.getElementById("aajax");
    x.style.color = "grey";
}

function agH1MouseOut() {
    var x = document.getElementById("aajax");
    x.style.color = "white";
}