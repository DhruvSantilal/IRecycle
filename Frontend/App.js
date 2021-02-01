import React from 'react';
import './App.css';
import './Form.css';

function App() {
  return (
    <div className="App">
      <form classname='form'>
     <h1>ENTER YOUR DETAILS TO REGISTER</h1>
     <div class="form-label">
       <label>Email: </label>
       <input
         
         className='form-input'
         type='email'
         name='email'
         placeholder='Enter your email'
       />
    </div>
    <div class="form-label">
       <label>Password: </label>
       <input
         
         className='form-input'
         type='password'
         name='password'
         placeholder='Enter your password'
       />
    </div>
    <div className="img">
<span className="close-btn">x</span> 

</div>
    <button className='form-input-btn' type='submit'>
          Sign in
        </button>
        <span className='form-input-login'>
            Not registered? Register <a href="#">here.</a>
          {/* above is just a text asking for the users to login if they have an account */}
        </span>
   
        </form>
    </div>
  );
}

export default App;


//className='form-input'
//type='email'
//name='email'
//placeholder='Enter your email'