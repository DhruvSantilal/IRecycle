import React, {useState} from 'react';
import Login from './Login';
import './Form.css';
import loggedin from './loggedin';
import './loggedin.js'

//above are all the imports which this page or form will use it in order to excecute the program
 export const Form = () => {
    const [isSubmitted, setIsSubmitted] = useState(false) ;
    function submitForm(){
        setIsSubmitted(true);
    }
    return (
        <>
{/* when the user input is left empty this shows them the warning message */}
<div className='form-container'>
{!isSubmitted ?(
 <Login submitForm={submitForm} /> 
):(
 <loggedin/>
)}
</div>
{/* if the page values are entered correctly then it will take them to logged in page    */}
          
        </>
    );
};
export default Form;