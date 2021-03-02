import React from 'react';
import './Form.css';
import validate from './Validation';
import useForm from './useForm';
import './Form';
//above are the imported froms which this form will use
const Login = ({submitForm}) => {
    const {handleChange,handleSubmit, values, errors} = useForm( submitForm,   validate  )
  return (
    //above checks for when signing up for errors and makes sure it only allows the correct values
    <div className="App">
      
      <form  onSubmit={handleSubmit}  className='form' noValidate>
        
     <h1>LOGIN HERE</h1>
     <div class="form-label">
       <label>Email</label>
       <input
      //this is for users to enter the email
         className='form-input'
         type='email'
         name='email'
         placeholder='Enter your email'
        value={values.email}
        onChange={handleChange}
       />
       {errors.email && <warning>{errors.email}</warning>}
        {/*this line is linked to the error validation i created and checks if the entered value is valid*/}
    </div>
    
    <div class="form-label">
       <label>Password</label>
       <input
         //input field for password where users can enter the password
         className='form-input'
         type='password'
         name='password'
         placeholder='Enter your password'
         value={values.password}
         onChange={handleChange}
         //abovr line checks for errors everytime when the users enter something and also does the validation. This is a a function made on a different form
       />
       {errors.password && <warning>{errors.password}</warning>}
           {/* above code simply shows the validation for this specific field and warns them */}
    </div>
    <div>
        <span className='form-input-login'>
           <a href='#'>Forgot your password?</a>
          {/* above is just a text asking for the users to login if they have an account */}
        </span>
        </div>
    <div className="img">
<span className="close-btn">x</span> 

</div>
    <button className='form-input-btn' type='submit'>
          Login
        </button>
        {/* loginbutton */}
        <div>
        <span className='form-input-login'>
            Not registered? Register <a href='#'>here.</a>
          {/* above is just a text asking for the users to login if they have an account */}
        </span>
        </div>
   
        </form>
    </div>
  );
}

export default Login;
//this page is exporeted so it can be called on other forms