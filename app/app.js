function initApp(){
    $.getJSON("data/data.json", function(result){
        //success one
        console.log(result.speakers);
        let speakersArray = result.speakers;
        let navArray = result.nav;
        
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
        })

        $.each(navArray, function(idx, navItems){
            $(".links-container").append(
                `<a href="${navItems.link}">${navItems.name}</a>`
            );
        })
    }).fail(function(error){
        console.log(error);
    })
}

$(document).ready(function(){
    initApp()
});