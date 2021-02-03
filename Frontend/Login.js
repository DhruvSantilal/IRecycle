import React from 'react';
import './Form.css';
import validate from './Validation';
import useForm from './useForm'

const Login = () => {
    const {handleChange,handleSubmit, values, errors} = useForm(  submitForm,   validate  )
  return (
    <div className="App">
      
      <form classname='form' onSubmit={handleSubmit}>
        
     <h1>LOGIN HERE</h1>
     <div class="form-label">
       <label>Email</label>
       <input
         
         className='form-input'
         type='email'
         name='email'
         placeholder='Enter your email'
        value={values.email}
        onChange={handleChange}
       />
       {errors.email && <warning>{errors.email}</warning>}
    </div>
    <div class="form-label">
       <label>Password</label>
       <input
         
         className='form-input'
         type='password'
         name='password'
         placeholder='Enter your password'
         value={values.password}
         onChange={handleChange}
       />
       {errors.password && <warning>{errors.password}</warning>}
    </div>
    <div className="img">
<span className="close-btn">x</span> 

</div>
    <button className='form-input-btn' type='submit'>
          Login
        </button>
        <div>
        <span className='form-input-login'>
            Not registered? Register <a href='react/registration-form/src/FormSignup.js'>here.</a>
          {/* above is just a text asking for the users to login if they have an account */}
        </span>
        </div>
   
        </form>
    </div>
  );
}

export default Login;