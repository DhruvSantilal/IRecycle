  
import React from 'react';
import './Loginform.css';

const loggedin = () => {
  return (
    <div className='form-content-right'>
      <h1 className='form-loggedin'>Login Successful! </h1>
      <button className='form-input-btn' type='submit' onClick = "./Login.js">
          Logout
        </button>
    </div>
  );
};
// logged in page showing the user has successfully logged in and also have a logout button
export default loggedin;