// Get the container element
let elContainer = document.getElementById("elContainer");

// Get all buttons with class="btn" inside the container
let elements = elContainer.getElementsByClassName("item");

// Loop through the buttons and add the active class to the current/clicked button
for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener("click", function() {
        let current = document.getElementsByClassName("active");

        // If there's no active class
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }

        // Add the active class to the current/clicked button
        this.className += " active";
    });
}