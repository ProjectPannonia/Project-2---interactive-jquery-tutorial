const containerIds = ["#welcome_slide", "#sections_slide", "#first_slide", "#second_slide", "#third_slide", "#fourth_slide", "#fifth_slide", "#sixth_slide", "#seventh_slide", "#eight_slide", "#nineth_slide", "#tenth_slide", "#eleventh_slide"];

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


$("#begin_btn").on( "click", () => {
    $("#welcome_slide").hide(1500);
    $("#sections_slide").show(1500);
});

let containerCounter = 1;

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