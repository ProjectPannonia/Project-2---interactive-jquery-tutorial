const containerIds = [  "#welcome_slide", 
                        "#sections_slide", 
                        "#first_slide_introduce", "#first_slide",
                        "#second_slide_introduce", "#second_slide",
                        "#third_slide_introduce", "#third_slide",
                        "#fourth_slide_introduce", "#fourth_slide",
                        "#fifth_slide_introduce", "#fifth_slide",
                        "#sixth_slide_introduce","#sixth_slide",
                        "#seventh_slide_introduce", "#seventh_slide",
                        "#eight_slide_introduce", "#eight_slide", 
                        "#nineth_slide_introduce" , "#nineth_slide",
                        "#tenth_slide_introduce" , "#tenth_slide",
                        "#eleventh_slide_introduce" , "#eleventh_slide",
                        "#last_slide"
                    ];

(() => { 
    const contentContainer = $(".contentContainer");
    const contentContainerChildren = contentContainer.children();
    /*
    for(let i = 0; i < contentContainerChildren.length; i++) {
        let element = contentContainerChildren[i];
        containerIds.push(element.id);
    }
    console.log(containerIds);
    */
    for(let i = 1; i < containerIds.length; i++) {
        $(containerIds[i]).hide();
    }
})();   

let containerCounter = 1;

$("#begin_btn").on( "click", () => {

    $("#welcome_slide").hide(1500);
    $("#sections_slide").show(1500);
    
});

$("#finish_btn").on("click", () => {

    $("#welcome_slide").show(1500);
    $("#last_slide").hide(1500);
    contentContainer = 1;

});


const nextButton = $( ".slideTo" );

nextButton.on( "click", () => {
    let actual, next;

    if(containerCounter < containerIds.length-1) {
        actual = $(containerIds[containerCounter]);
        containerCounter++;
        next = $(containerIds[containerCounter]);
        actual.hide(1000);
        next.show(1300);
    } 
});

const previousButton = $(".slideBack");

previousButton.on( "click", () => {

    if(containerCounter > 0) {
        actual = $(containerIds[containerCounter]);
        containerCounter--;
        next = $(containerIds[containerCounter]);
        actual.hide(1000);
        next.show(1000);
    }
});