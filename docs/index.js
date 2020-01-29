console.log("Hi");
console.log('If you want JSON format, you can use "http://muaz742.com/saymyip?f=json" syntax');

function updateIpAdress() {
    $.getJSON( "http://muaz742.com/saymyip?f=json", function( data ) {
        JSON.stringify(data);
        document.getElementById("ipAdress").innerText = data.ipAdress;
    });
}

updateIpAdress();

var ipAdress = document.getElementById("ipAdress").textContent;

function copy() {
    copyToClipboard(ipAdress);
    Toast.fire({
        title: 'copy to clipboard 👍'
    })
    console.log("IP Adress Copied 👍");
}

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

/** https://hackernoon.com/copying-text-to-clipboard-with-javascript-df4d4988697f */
const copyToClipboard = str => {
    const el = document.createElement('textarea');  // Create a <textarea> element
    el.value = str;                                 // Set its value to the string that you want copied
    el.setAttribute('readonly', '');                // Make it readonly to be tamper-proof
    el.style.position = 'absolute';
    el.style.left = '-9999px';                      // Move outside the screen to make it invisible
    document.body.appendChild(el);                  // Append the <textarea> element to the HTML document
    const selected =
        document.getSelection().rangeCount > 0        // Check if there is any content selected previously
            ? document.getSelection().getRangeAt(0)     // Store selection if found
            : false;                                    // Mark as false to know no selection existed before
    el.select();                                    // Select the <textarea> content
    document.execCommand('copy');                   // Copy - only works as a result of a user action (e.g. click events)
    document.body.removeChild(el);                  // Remove the <textarea> element
    if (selected) {                                 // If a selection existed before copying
        document.getSelection().removeAllRanges();    // Unselect everything on the HTML document
        document.getSelection().addRange(selected);   // Restore the original selection
    }
}
