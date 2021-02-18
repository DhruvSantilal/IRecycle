  
import React from 'react';
import './Form.css';

const loggedin = () => {
  return (
    <div className='form-content-right'>
      <h1 className='form-loggedin'>you logged in!</h1>
      <button className='form-input-btn' type='submit'>
          Login
        </button>
    </div>
  );
};
// logged in page showing the user has successfully logged in and also have a logout button
export default loggedin;