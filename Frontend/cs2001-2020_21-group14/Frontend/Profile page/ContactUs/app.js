var firebaseConfig = {
  apiKey: "AIzaSyDEXPL6hUhOM54Qy99VYtjuO6yDi3IwGi4",
  authDomain: "contact-form2-89c0d.firebaseapp.com",
  projectId: "contact-form2-89c0d",
  databaseURL: "//contact-form2-89c0d-default-rtdb.firebaseio.com",
  storageBucket: "contact-form2-89c0d.appspot.com",
  messagingSenderId: "265557705795",
  appId: "1:265557705795:web:241f0d3c5396edbf4280f6",
  measurementId: "G-VVD1ZZLS  JN"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
// Seperation.

// The line for reference firebase is here
var messageRef = firebase.database().ref('Enquiry')


document.getElementById('userInfo').addEventListener('submit', submitForm);


function submitForm(e) {
e.preventDefault();

var name = getInputVal('name');
var email = getInputVal('email');
var message = getInputVal('message');

//calls the function
saveMessage(name, email, message);


//show an alert for user when they send the message
document.querySelector('.alert').style.display = 'block';

//hide alert
setTimer(function() {
  document.querySelector('.alert').style.display = 'none';
},3000);
}

function getInputVal(id) {
  return document.getElementById(id).value;
}

//saving messages below

function saveMessage(name, email, message) {
  var newMessageRef = messageRef.push();
  newMessageRef.set({
    name: name,
    email: email,
    message: message,
  });
}

//------------------------------------------------------

let btngoBack = document.querySelector('.btn')
btngoBack.addEventListener('click' , () => {
    window.history.back();
});
// this function returns the user to their previous page.   
