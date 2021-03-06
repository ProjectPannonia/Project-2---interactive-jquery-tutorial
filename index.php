<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Jquery with design</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Jquery tutorial</h1>
        </header>

        <!-- Main content container-->
        <div class="contentContainer">

            <!--Welcome slide-->
            <div id="welcome_slide" class="slide">
                <h2>Welcome my basic jQuery tutorial</h2>
                <input id="begin_btn" class="big_button" type="button" value="Let's begin">
            </div>
            <!--Sections slide-->
            <div id="sections_slide" class="slide">
                <h3>
                    Sections
                </h3>
                <article>
                    <ol>
                        <li>What is jQuery?</li>
                        <li>The document ready event</li>
                        <li>Install Jquery</li>
                        <li>Selectors</li>
                        <li>Add and remove class</li>
                        <li>Events</li>
                        <li>Commonly used jQuery event methods</li>
                        <li>Events</li>
                        <li>Effects</li>
                    </ol>
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--First slide introduce-->
            <div id="first_slide_introduce" class="slide">
                <h2>
                    What is jQuery?
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--First slide-->
            <div id="first_slide" class="slide">
                <h3>What is jquery?</h3>
                <article>
                    JQuery is "just" a javascript library.<br>
                    The purpose of jQuery is to make it much easier and faster to use JavaScript on your website.<br>
                    Before you start studying jQuery, you should have a basic knowledge of:<br>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                    </ul>
                   
                    This is a lightweight, "write less, do more" JavaScript library.
                    <br>
                    The jQuery library contains the following features:<br>
                     <ul>
                         <li>HTML/DOM manipulation</li>
                         <li>CSS manipulation</li>
                         <li>HTML event methods</li>
                         <li>Effects and animations</li>
                         <li>AJAX</li>
                         <li>Utilities</li>
                     </ul>
                     With jQuery you select HTML elements and perform "actions" on them.<br>
                     Basic syntax: $(selector).action()<br>
                     The "$" sigh to define jQuery.<br>
                     The "selector" can be a "class", "id" or a "HTML tag".<br>
                     A jQuery action() to be performed on the element(s).
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Second slide introduce-->
            <div id="second_slide_introduce" class="slide">
                <h2>
                    The document ready event
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Second slide-->
            <div id="second_slide" class="slide">
                <h3>The document ready event</h3>
                <article>
                    This is to prevent any jQuery code from running before the document is finished loading.(Just like an "Immediately invoked function")<br>
                    It is good practice to wait for the document to be fully loaded and ready before working with it.<br> This also allows you to have your JavaScript code before the body of your document, in the head section. <br>
                    <img src="pic/ready/ready.JPG" alt="Document ready function"><br>
                    Or you can use this form(It is the same).<br>
                    <img src="pic/ready/anotherReady.JPG"><br>
                    In my opinion the "document ready" event is easier to understand when reading the code.
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Third slide introduce-->
            <div id="third_slide_introduce" class="slide">
                <h2>
                    How to install jquery?
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Third slide-->
            <div id="third_slide" class="slide">
                <h3>Install Jquery -> Use a CDN:</h3>
                
                <article>
                    The easiest way to use jQuery is to use a CDN(Google, Microsoft, CDNJS or jsDelivr).
                    Just copy the selected cdn's link between script tags and put it into the html document's head section. 
                </article>
                <article>
                    Google cdn:<br>
                    <img src="pic/cdns/googleCdn.JPG">
                </article>
                <article>
                    Microsoft cdn:<br>
                    <img src="pic/cdns/microsoftCdn.JPG">
                </article>
                <article>
                    CDNJS cdn:<br>
                    <img src="pic/cdns/cdnjs.JPG">
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Fourth slide introduce-->
            <div id="fourth_slide_introduce" class="slide">
                <h2>
                    Selectors
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Fourth slide-->
            <div id="fourth_slide" class="slide">
                <h3>Select an element with jquery by:</h3>

                <article>
                    Id:<br>
                    <img src="pic/selectors/id.JPG" alt="Select by id">
                </article>
                <article>
                    Class:<br>
                    <img src="pic/selectors/class.JPG" alt="Select by class">
                </article>
                <article>
                    Tagname:<br>
                    <img src="pic/selectors/tagname.JPG" alt="Select by tagname">
                </article>
                <article>
                    Select multiple elements:<br>
                    <img src="pic/selectors/multipleSelection.JPG" alt="Select multiple elements">
                </article>
                <article>
                    Select all elements:<br>
                    <img src="pic/selectors/allSelected.JPG" alt="Select all">
                </article>
                <article>
                    You can store the selected element in a variable:<br>
                    <img src="pic/selectors/storeSelection.JPG" alt="Store selection">
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Fifth slide introduce-->
            <div id="fifth_slide_introduce" class="slide">
                <h2>
                    Add or remove classes
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Fifth slide-->
            <div id="fifth_slide" class="slide">
                <h3>Add or Remove a class:</h3>
                <article>
                    Add a class to elements classlist:<br>
                    <img src="pic/addRemoveClass/addClass.JPG" alt="Add class ">
                </article>
                <article>
                    Remove a class from element classlist:<br>
                    <img src="pic/addRemoveClass/removeClass.JPG" alt="Remove class ">
                </article>

                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Fifth slide introduce-->
            <div id="sixth_slide_introduce" class="slide">
                <h2>
                    Events
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Sixth slide-->
            <div id="sixth_slide" class="slide">
                <h3>Events</h3>

                <article>
                    What  are Events?<br>
                    All the different visitors' actions that a web page can respond to are called events.<br>
                    They are represents the moment when something happens.<br>
                    Like: moving a mouse over an element, selecting radio buttons, clicking on something.
                </article>
                <article>
                    After we have a good understanging on selectors let's see some examples on events.
                </article>
                <article>
                    You can use the "ES6 way" with the arrow function:<br>                    
                    <img src="pic/events/clickEvent.JPG">
                </article>
                <article>
                    Or the "old way":<br>
                    <img src="pic/events/anotherClickEvent.JPG">
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
             <!--Seventh slide introduce-->
             <div id="seventh_slide_introduce" class="slide">
                <h2>
                    Commonly used jQuery event methods
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <div id="seventh_slide" class="slide">
                <h3>Commonly used jQuery event methods:</h3>
                <article>
                    Double click method: This function is activated, when user double clicks on element.<br>
                    <img src="pic/events/doubleClick.JPG" alt="Double click event">
                </article>
                <article>
                    Mouse enter method: Activated when mouse's pointer enters the HTML element.<br>
                    <img src="pic/events/mouseEnter.JPG" alt="Mouse enter event">
                </article>
                <article>
                    Mouse leave: Works, when mouse's pointer leaves the HTML element.<br>
                    <img src="pic/events/mouseLeave.JPG" alt="Mouse leave">
                </article>
                <article>
                    Mouse down: This function is executed, when the left, middle or right mouse button is pressed down, while the mouse is over the HTML element.<br>
                    <img src="pic/events/mouseDown.JPG" alt="Mouse down">
                </article>
                <article>
                    <p>
                        Mouse up: Executed, when left, middle or right mouse button is released.
                    </p>
                    <img src="pic/events/mouseUp.JPG" alt="Mouse up">
                </article>
                <article>
                    <p>
                        Hover: The hover method takes two functions and is a combination of the mouseenter() and mouseleave() methods.
                        The first function is exevuted when the mouse enters the element, and the second is executed when the mouse leaves the element.
                    </p>
                    <img src="pic/events/hover.JPG" alt="Mouse hover">
                </article>
                <article>
                    <p>
                        Focus: The function is executed when the form field gets focus.
                    </p>
                    <img src="pic/events/focus.JPG" alt="Focus on element">
                </article>
                <article>
                    <p>
                        Blur: The function is executed when the form field loses focus.
                    </p>
                    <img src="pic/events/blur.JPG" alt="Lose focus">
                </article>
                <article>
                    <p>
                        On method: This method attaches one or more event handlers for the selected element.
                    </p>
                    <img src="pic/events/oneOne.JPG" alt="">
                    <img src="pic/events/oneTwo.JPG">
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
             <!--Eight slide introduce-->
             <div id="eight_slide_introduce" class="slide">
                <h2>
                    Show - Hide - Toggle
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Eight slide-->
            <div id="eight_slide" class="slide">
                <h3>
                    jQuery effects - Show - Hide - Toggle
                </h3>
                <article>
                    <p>
                        Hide: Hide an element.
                    </p>
                    <img src="pic/showHide/hide.JPG">
                </article>
                <article>
                    <p>
                        Show: Show an element.
                    </p>
                    <img src="pic/showHide/show.JPG">
                </article>
                <article>
                    <p>
                        Toggle: Toggle between show and hide
                    </p>
                    <p>
                        You can also toggle between hiding and showing an element with the toggle() method.

                        Shown elements are hidden and hidden elements are shown:
                    </p>
                    <img src="pic/showHide/toggle.JPG">
                </article>
                <article>
                    <p>
                        Advanced properties: Show, hide and toggle methods have optional properties.
                        You can call this function without parameters like in examples above, but you can add two optional parameters to these functions.
                    </p>
                    <p>
                        $(selector).hide(speed,callback);
                    </p>
                    <p>
                        $(selector).show(speed,callback);
                    </p>
                    <p>
                        The optional speed parameter specifies the speed of the hiding/showing, and can take the following values: "slow", "fast", or milliseconds.
                        The optional callback parameter is a function to be executed after the hide() or show() method completes (you will learn more about callback functions in a later chapter).
                    </p>
                    <p>
                        The following example demonstrates the speed parameter with hide():
                    </p>
                    <img src="pic/showHide/hideSpeed.JPG">>
                </article>
                
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
             <!--Nineth slide introduce-->
             <div id="nineth_slide_introduce" class="slide">
                <h2>
                    Events
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Nineth slide-->
            <div id="nineth_slide" class="slide">
                <h3>
                    jQuery effects - Fade
                </h3>
                <article>
                    <p>
                        Fading:
                    </p>
                    <p>
                        With jQuery you can fade elements in and out of visibility.
                    </p>
                    <p>
                        Fading Methods:
                    </p>
                    <p>
                        jQuery has the following fade methods:
                        <ul>
                            <li>fadeIn()</li>
                            <li>fadeOut()</li>
                            <li>fadeToggle()</li>
                            <li>fadeTo()</li>
                        </ul>
                    </p>
                </article>
                <article>
                    <p>
                        The jQuery fadeIn() method is used to fade in a hidden element.<br>
                        Syntax: $(selector).fadeIn(speed,callback);<br>
                        The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.<br>
                        The optional callback parameter is a function to be executed after the fading completes.<br>
                        The following example demonstrates the fadeIn() method with different parameters:<br>
                    </p>
                    <img src="pic/showHide/fadeIn.JPG">
                </article>
                <article>
                    <p>
                        The jQuery fadeOut() method is used to fade out a visible element.<br>
                        Syntax: $(selector).fadeOut(speed,callback);<br>
                        The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.<br>
                        The optional callback parameter is a function to be executed after the fading completes.<br>
                        The following example demonstrates the fadeOut() method with different parameters:<br>
                    </p>
                    <img src="pic/showHide/fadeOut.JPG">
                </article>
                <article>
                    <p>
                        The jQuery fadeToggle() method toggles between the fadeIn() and fadeOut() methods.<br>
                        If the elements are faded out, fadeToggle() will fade them in.<br>
                        If the elements are faded in, fadeToggle() will fade them out.<br>
                        $(selector).fadeToggle(speed,callback);<br>
                        The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.<br>
                        The optional callback parameter is a function to be executed after the fading completes.<br>
                        The following example demonstrates the fadeToggle() method with different parameters:<br>
                    </p>
                    <img src="pic/showHide/fadeToggle.JPG">
                </article>
                <article>
                    <p>
                        The jQuery fadeTo() method allows fading to a given opacity (value between 0 and 1).<br>
                        Syntax: $(selector).fadeTo(speed,opacity,callback);<br>
                        The required speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.<br>
                        The required opacity parameter in the fadeTo() method specifies fading to a given opacity (value between 0 and 1).<br>
                        The optional callback parameter is a function to be executed after the function completes.<br>
                        The following example demonstrates the fadeTo() method with different parameters:<br>
                    </p>
                    <img src="pic/showHide/fadeTo.JPG">
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
             <!--Tenth slide introduce-->
             <div id="tenth_slide_introduce" class="slide">
                <h2>
                    Sliding
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <!--Tenth slide-->
            <div id="tenth_slide" class="slide">
                <h3>
                    jQuery effects - Sliding
                </h3>
                <article>
                    <p>
                        The jQuery slide methods slide elements up and down.
                    </p>
                    <p>
                        With jQuery you can create a sliding effect on elements.<br>
                        jQuery has the following slide methods:
                        <ul>
                            <li>slideDown()</li>
                            <li>slideUp()</li>
                            <li>slideToggle()</li>
                        </ul>
                    </p>
                </article>
                <article>
                    <p>slideDown() Method</p>
                    <p>
                        The jQuery slideDown() method is used to slide down an element.<br>
                        Syntax: $(selector).slideDown(speed,callback);<br>
                        The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.<br>
                        The optional callback parameter is a function to be executed after the sliding completes.<br>
                        The following example demonstrates the slideDown() method:
                    </p>
                    <img src="pic/showHide/flip.JPG">
                </article>
                <article>
                    <p>slideUp()</p>
                    <p>
                        The jQuery slideUp() method is used to slide up an element.<br>
                        Syntax: $(selector).slideUp(speed,callback);<br>
                        The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.<br>
                        The optional callback parameter is a function to be executed after the sliding completes.<br>
                        The following example demonstrates the slideUp() method:<br>
                    </p>
                    <img src="pic/showHide/slideUp.JPG">
                </article>
                <article>
                    <p>slideToggle()</p>
                    <p>
                        The jQuery slideToggle() method toggles between the slideDown() and slideUp() methods.<br>
                        If the elements have been slid down, slideToggle() will slide them up.<br>
                        If the elements have been slid up, slideToggle() will slide them down.<br>
                        Syntax: $(selector).slideToggle(speed,callback);<br>
                        The optional speed parameter can take the following values: "slow", "fast", milliseconds.<br>
                        The optional callback parameter is a function to be executed after the sliding completes.<br>
                        The following example demonstrates the slideToggle() method:
                    </p>
                    <img src="pic/showHide/slideToggle.JPG">
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
             <!--Eleventh slide introduce-->
             <div id="eleventh_slide_introduce" class="slide">
                <h2>
                    Animate
                </h2>
                
                <article class="introduce">
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <div id="eleventh_slide" class="slide">
                <h3>
                    jQuery effects - Animate
                </h3>
                <article>
                    <p>
                        With jQuery, you can create custom animations.
                    </p>
                    <p>
                        The animate() Method<br>
                        The jQuery animate() method is used to create custom animations.<br>
                        Syntax: $(selector).animate({params},speed,callback);<br>
                        The required params parameter defines the CSS properties to be animated.
                        The optional speed parameter specifies the duration of the effect. It can take the following values: "slow", "fast", or milliseconds.<br>
                        The optional callback parameter is a function to be executed after the animation completes.<br>
                        The following example demonstrates a simple use of the animate() method; it moves a "<div>" element to the right, until it has reached a left property of 250px:
                    </p>
                    
                    <img src="pic/animation/animate.JPG">
                </article>
                <article>
                    <p>
                        jQuery animate() - Manipulate Multiple Properties
                    </p>
                    <p>
                        Notice that multiple properties can be animated at the same time:
                    </p>
                    <img src="pic/animation/animateMultiple.JPG">
                </article>
                <article>
                    <input class="slideBack" type="button" value="Back">
                    <input class="slideTo" type="button" value="Next">
                </article>
            </div>
            <div id="last_slide" class="slide">
                <h2>Thank you for your attention</h2>
                <input id="finish_btn" class="big_button" type="button" value="Back to start">
            </div>
        </div>


        <footer>
            <h1>Created by: Project Pannonia</h1>
        </footer>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>