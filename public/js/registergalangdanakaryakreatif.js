//your javascript goes here
var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {


    showTab(currentTab);

});

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        // document.getElementById("regForm").submit();
        // return false;
        //alert("sdf");
        document.getElementById("nextprevious").style.display = "none";
        document.getElementById("all-steps").style.display = "none";
        document.getElementById("register").style.display = "none";
        document.getElementById("text-message").style.display = "block";
    }
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
        if (y[i].type === "checkbox" && !y[i].checked) {
            y[i].classList.add("invalid");
            valid = false;
        }else if (y[i].type === "radio" &&  !y[i].name) {
            y[i].classList.add("invalid");
            valid = false;
        }else if (y[i].value === "") {
            y[i].classList.add("invalid");
            valid = false;
        }
    }
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        var stepElements = document.getElementsByClassName("step");
        if (stepElements.length > currentTab) {
          stepElements[currentTab].className += " finish";
        }
    }
    return valid; // return the valid status
  }

// function fixStepIndicator(n) {
//     var i, x = document.getElementsByClassName("step");
//     for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); }
//     x[n].className += " active";
// }
function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        if (x[i]) { // Check if the element exists before accessing its className
            x[i].className = x[i].className.replace(" active", "");
        }
    }
    if (x[n]) { // Check if the element exists before adding the "active" class
        x[n].className += " active";
    }
}
