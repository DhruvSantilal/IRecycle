import React from 'react';
import validate from './validateInfo';
import useForm from './useForm';
import './Form.css';
//above are the imported froms which this form will use
const FormSignup = ({ submitForm }) => {
  const { handleChange, handleSubmit, values, errors } = useForm(
    submitForm,
    validate
  );
//above checks for when signing up for errors and makes sure it only allows the correct values
  return (
    <div className='form-content-right'>
      <form onSubmit={handleSubmit} className='form' noValidate>
        <h1>
          ENTER YOUR DETAILS TO REGISTER
        </h1>
        <div className='form-inputs'>
            {/*text input field created for users to enter they username*/}
          <label className='form-label'>Username</label>
          <input
           
            className='form-input'
            type='text'
            name='username'
            placeholder='Enter your username'
            value={values.username}
            onChange={handleChange}
          />
         {/*this line is linked to the error validation i created and checks if the entered value is valid*/}
          {errors.username && <warning>{errors.username}</warning>}
        </div>
        <div className='form-inputs'>
            {/*text input field created for users to enter they email*/}
          <label className='form-label'>Email</label>
          <input
         
            className='form-input'
            type='email'
            name='email'
            placeholder='Enter your email'
            value={values.email}
            onChange={handleChange}
          />
            {/*this line is linked to the error validation i created and checks if the entered value is valid*/}
          {errors.email && <warning>{errors.email}</warning>}
        </div>
        <div className='form-inputs'>
           {/*text input field created for users to enter they password*/}
          <label className='form-label'>Password</label>
          <input
            className='form-input'
            type='password'
            name='password'
            placeholder='Enter your password'
            value={values.password}
            onChange={handleChange}
          />
          {/*this line is linked to the error validation i created and checks if the entered value is valid*/}
          {errors.password && <warning>{errors.password}</warning>}
        </div>
        <div className='form-inputs'>
           {/*text input field created for users to enter they confirmation password*/}
          <label className='form-label'>Confirm Password</label>
          <input
            className='form-input'
            type='password'
            name='password2'
            placeholder='Confirm your password'
            value={values.password2}
            onChange={handleChange}
          />
           {/*this line is linked to the error validation i created and checks if the entered value is valid*/}
          {errors.password2 && <warning>{errors.password2}</warning>}
        </div>
        {/*this is a sign up button for submition*/}
        <button className='form-input-btn' type='submit'>
          Sign up
        </button>
        <span className='form-input-login'>
          Already have an account? Login <a href='#'>here</a>
          {/* above is just a text asking for the users to login if they have an account */}
        </span>
      </form>
    </div>
  );
};

export default FormSignup;