///////////// PROCESS MESSAGES /////////////
function processMessages(messages){
    console.log(messages);
    $.each(messages, function(idx, value){
        $('.message-content-js').append(
          `<div class="comment">
                <p class="commentName"><span class="nameSpan">${value.name}</span> <span class="emailSpan">(${value.email})</span> wrote at ${value.time}:</p>
                <div class="commentInfo">
                    <p>${value.subject}</p>
                    <p>${value.message}</p>
                </div>
           </div>
            <hr>`
        );
    });
}



/////////////////// INIT APP ///////////////////
function initApp(){
    $.getJSON("data/data.json", function(result){
        //success one
        let speakersArray = result.speakers; //set speakers array
        let navArray = result.nav; //set navArray

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
            ); //load content to speaker-container div
        });  //loop through speakersArray

        // $.each(messages, function(idx, value) {}

        // LOAD NAV ITEMS TO NAVBAR
        $.each(navArray, function(idx, navItems){
            if(navItems.dropdown != undefined){ //if the navItem contains a dropdown
                $(".links-container-js").append(
                    `<div class="dropdown dropdown-${navItems.route}">
                         <a class="dropbtn" onclick="dropdown${navItems.route}()">${navItems.name}
                            <i class="fa fa-caret-down"></i>
                         </a>
                         <div class="dropdown-content dropdown-content-${navItems.route}">
                            <a href="${navItems.route}.php">PHP Ver.</a>
                            <a href="${navItems.route}.html">JS Ver.</a>
                         </div>
                     </div>`
                ); //load content to links-container div
            } else {
                $(".links-container-js").append(
                    `<a class="aNorm" href="${navItems.link}">${navItems.name}</a>`
                ); //load content to links-container div
            } //if the navItem doesn't contain a dropdown menu
        }) //loop through the navArray
    }).fail(function(error){
        console.log(error);
    });

    // ADD CONTACT INFORMATION TO DATABASE
    $("#add").click(function (e) {
        e.preventDefault(); //prevent click default

        //assign user inputs to variables
        let name = $("#addName-js").val();
        let email = $("#addEmail-js").val();
        let subject = $("#addSubject-js").val();
        let message = $("#addMessage-js").val()
        let time = Date($.now());

        if(name == "" | email == "" | subject == "" | message == ""){ //check if any fields are empty
            $("#popup").css("display", "flex"); //display popup
            $("html").css("pointer-events", "none"); //prevent user click
            $("html").css("cursor", "wait"); //change cursor so for user feedback

            $("#popup .text").append(
                `<p>Please complete entire form</p>`
            ); //display error text inside popup

            setTimeout(function(){
                $("#popup").css("display", "none"); //hide popup
                $("html").css("pointer-events", "initial"); //allow user click
                $("html").css("cursor", "auto"); //reset cursor
            }, 1500) //kill popup after 1.5seconds
        } else {
            FIREBASE_UTILITY.writeData(name, email, subject, message, time); //write to db
            FIREBASE_UTILITY.getAllMessages(serverCallBack); //server callback
            success(); //call success popup and redirect function
        }
    });

    //LOAD MESSAGES
    FIREBASE_UTILITY.getAllMessages(processMessages);
}


////////////////////// SUCCESS //////////////////////
function success(){
    $("#popup").css("display", "flex"); //display popup
    $("html").css("pointer-events", "none"); //prevent user click
    $("html").css("cursor", "wait"); //change cursor so for user feedback

    $("#popup .text").append(
        `<p>Query successfully submitted!</p><br>
         <p>Reloading page...</p>`
    ); //display success text inside popup

    setTimeout(function(){
        location.reload();
    }, 2000); //reload page after 2 seconds to remove popup and user inputs
}



////////////////// STORE SESSION //////////////////
// function smoothScroll(){
//     $("#").click(function(){
//         $('html,body').animate({
//             scrollTop: $("#about-section").offset().top - 10
//         }); //animate scroll to about-section
//     }); //if the about nav button is clicked
// }



//////////////////// DROPDOWN ////////////////////
var toggle = false; //set false toggle variable
function dropdownspeakers(){
    if (!toggle){ //if toggle is false display dropdown
        $(".dropdown-speakers .dropdown-content-speakers").css("display", "flex");
        toggle = true;
    } else if(toggle){
        $(".dropdown-speakers .dropdown-content").css("display", "none");
        toggle = false;
    } //if toggle is true hide dropdown
} //dropdown for speakers nav item

function dropdowncontact(){
    if (!toggle){ //if toggle is false display dropdown
        $(".dropdown-contact .dropdown-content-contact").css("display", "flex");
        toggle = true;
    } else if(toggle){
        $(".dropdown-contact .dropdown-content").css("display", "none");
        toggle = false;
    } //if toggle is true hide dropdown
} //dropdown for contact nav item

function dropdownmessages(){

    if (!toggle){ //if toggle is false display dropdown
        $(".dropdown-messages .dropdown-content-messages").css("display", "flex");
        toggle = true;
    } else if(toggle){
        $(".dropdown-messages .dropdown-content").css("display", "none");
        toggle = false;
    } //if toggle is true hide dropdown
} //dropdown for messages nav item



//////////////// SERVER CALLBACK ////////////////
function serverCallBack(result){ } //callback to server



/////////////////// DOC READY ///////////////////
$(document).ready(function(){
    FIREBASE_UTILITY.getAllMessages(serverCallBack);
    initApp();
    // smoothScroll();
});