const containerIds = ["#welcome_slide", "#first_slide", "#second_slide", "#third_slide", "#fourth_slide", "#fifth_slide", "#sixth_slide","#seventh_slide"];

(() => { 
    for(let i = 1; i < containerIds.length; i++) {
        $(containerIds[i]).hide();
    }
})();   


$("#begin_btn").on( "click", () => {
    $("#welcome_slide").hide(1500);
    $("#first_slide").show(1500);
});

let containerCounter = 1;

const nextButton = $( ".slideTo" );

nextButton.on( "click", () => {
    let actual, next;

    if(containerCounter < containerIds.length) {
        actual = $(containerIds[containerCounter]);
        console.log("Actual: " + containerIds[containerCounter]);
        containerCounter++;
        next = $(containerIds[containerCounter]);
        actual.hide(1500);
        next.show(1500);
        console.log("Pushed");
    }
});

const previousButton = $(".slideBack");

previousButton.on( "click", () => {

    if(containerCounter > 0) {
        
        containerCounter--;
    }
});