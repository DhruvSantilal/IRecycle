import React, {useState} from 'react';
import FormSignup from './FormSignup';
import FormSuccess from './FromSuccess';
import './Form.css';
//above are all the imports which this page or form will use it in order to excecute the program
export const Form = () => {
    const [isSubmitted, setIsSubmitted] = useState(false) ;
    function submitForm(){
        setIsSubmitted(true);
    }
    return (
        <>
        {/* close button is created below */}
<div className="form-container">
<span className="close-btn">x</span> 
<div className="form-container-left">
<img src='green.png' alt='image'  //images of the green background used
className='form-img'/>
</div>
{/* when the user input is left empty this shows them the warning message */}
{!isSubmitted ?(
 <FormSignup submitForm={submitForm} /> 
):(
 <FormSuccess/>
)}
</div>
       
          
        </>
    );
};
export default Form;