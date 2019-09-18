// /////////////////////////////////////// //
// ---------------- INIT APP ---------------- //
// ////////////////////////////////////// //
function initApp(){
    $.getJSON("data/data.json", function(result){
        //success one
        console.log(result.speakers);
        let speakersArray = result.speakers;
        let navArray = result.nav;

        // LOAD SPEAKERS TO SPEAKER PAGE
        $.each(speakersArray, function(idx, speakers){
            $(".speaker-container").append(
                `<div class="speaker">
                    <div class="speaker-left">
                        <div class="img-container">
                            <img src="${speakers.img}" alt="Image of ${speakers.name}">
                        </div>
                     </div>
                     <div class="speaker-right">
                        <div class="speaker-desc">
                            <h1>${speakers.name}</h1>
                            <h2>${speakers.title}</h2>
                            <p>${speakers.desc}</p>
                        </div>
                     </div>
                 </div>`
            );
        });

        // $.each(messages, function(idx, value) {}

// LOAD NAV ITEMS TO NAVBAR
        $.each(navArray, function(idx, navItems){
            if(navItems.id != "#"){
                $(".links-container").append(
                    `<a class="aNorm" id="${navItems.id}" href="${navItems.link}">${navItems.name}</a>`
                );
            } else {
                $(".links-container").append(
                    `<a class="aNorm" href="${navItems.link}">${navItems.name}</a>`
                );
            }
        })
    }).fail(function(error){
        console.log(error);
    });

// ADD CONTACT INFORMATION TO DATABASE
    $("#add").click(function (e) {
        e.preventDefault();

        let name = $("#addName").val();
        let email = $("#addEmail").val();
        let subject = $("#addSubject").val();
        let message = $("#addMessage").val()
        let time = Date($.now());

        if(name == "" | email == "" | subject == "" | message == ""){
            $("#popup").css("display", "flex");
            $("html").css("pointer-events", "none");
            $("html").css("cursor", "wait");

            $("#popup .text").append(
                `<p>Please complete entire form</p>`
            );

            setTimeout(function(){
                $("#popup").css("display", "none");
                $("html").css("pointer-events", "initial");
                $("html").css("cursor", "auto");
            }, 1500)

        } else {
            FIREBASE_UTILITY.writeData(name, email, subject, message, time);
            FIREBASE_UTILITY.getAllMessages(serverCallBack);
            success();
        }
    });
}

function success(){
    $("#popup").css("display", "flex");
    $("html").css("pointer-events", "none");
    $("html").css("cursor", "wait");

    $("#popup .text").append(
        `<p>Query successfully submitted!</p><br>
         <p>Reloading page...</p>`
    );


    setTimeout(function(){
        location.reload();
    }, 2000);
}




// /////////////////////////////////////// //
// ----------- SMOOTH SCROLL ---------- //
// ////////////////////////////////////// //
// function smoothScroll(){
//     $("#").click(function(){
//         $('html,body').animate({
//             scrollTop: $("#about-section").offset().top - 10
//         });
//     });
// }




// /////////////////////////////////////// //
// -------- HIDE DROPDOWN INIT ------- //
// ////////////////////////////////////// //
function initHideDropdown(){
    $(".dropdown-content").hide();
}




// /////////////////////////////////////// //
// ------------- DROPDOWN ------------- //
// ////////////////////////////////////// //
function dropdown(){
    $(".dropdown").click(function(){
        $(".dropdown-content").toggle();
    });
}




// /////////////////////////////////////// //
// ---------- SERVER CALLBACK ---------- //
// ////////////////////////////////////// //
function serverCallBack(result){ }




// /////////////////////////////////////// //
// -------------- DOC READY -------------- //
// ////////////////////////////////////// //
$(document).ready(function(){
    initHideDropdown();
    FIREBASE_UTILITY.getAllMessages(serverCallBack);
    initApp();
    // smoothScroll();
});