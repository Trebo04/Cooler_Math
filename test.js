// Define the value of the myVar variable
var myVar = "Hello World";

// Log the value of myVar to the console
console.log(myVar);

// Create a new XMLHttpRequest object
var xhr = new XMLHttpRequest();

// Specify the HTTP method, URL, and asynchronous flag for the request
xhr.open('POST', 'test.php', true);

// Set the Content-Type header to indicate that the request body contains form data
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// Define the callback function to be called when the readyState of the request changes
xhr.onreadystatechange = function() {
  // Check if the request is done and the status code is OK
  if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
    // Log the response from the server to the console
    console.log(this.responseText);

    // Get the 'response' element from the page
    var responseElem = document.getElementById('response');

    // Set the text content of the 'response' element to the response from the server
    responseElem.textContent = this.responseText;
  }
};

console.log(myVar);

// Send the request with the myVar parameter in the request body
xhr.send('myVar=' + myVar);