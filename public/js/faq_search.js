//Start of faq search bar script

function myFunction() {
    // Declare variables
    var input, filter, div, button, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    div = document.getElementsByClassName("questAnsw");
    foundEntries = 0;
    element = document.getElementById("no-result-message");


    
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < div.length; i++) {
        
        button = div[i].getElementsByTagName("button")[0];
        
        if (button.innerHTML.toUpperCase().indexOf(filter) > -1) {
            div[i].style.display = "block";
            foundEntries++;           

        } else {
            div[i].style.display = "none";
        }
    }

    if (foundEntries == 0){
        element.classList.remove("hide-element");
    } else {
        element.classList.add("hide-element");
    }
}

//End of faq search bar script