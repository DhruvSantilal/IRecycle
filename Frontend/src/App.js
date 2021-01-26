import React, {useState} from 'react';
import LoginForm from './LoginForm';

function App() {
  const admin= {
    username: "aseemansar",
    email: "aseemansar@hotmail.com",
    password: "hello"
  }
const [user, setUser] = useState({username:"", email:""});
const[error, SetError] = useState("");

const Login = details => {
  console.log(details);
}
const Logout =  () => {
  console.log("Logout");

//   if (email == admin.email && password == admin.password)
//   console.log("Logged in");
// else {
//   console.log("Details do not match!");
//}
}
  return (
    <div className="App">
     {(user.username !="") ?(
       <div className="App">
         <h2>Welcome, <span>user.username</span></h2>
         <button>Logout</button>
         </div>
     ) : (
       <LoginForm Login={Login}error={error}/>
     )}
     
    </div>
  );
}

export default App;
