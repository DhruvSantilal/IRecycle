import React, {useState} from 'react';
import Login from './Login';
//import FormSuccess from './FromSuccess';
import './Form.css';
import loggedin from './loggedin';
//above are all the imports which this page or form will use it in order to excecute the program
export const Form = () => {
    const [isSubmitted, setIsSubmitted] = useState(false) ;
    function submitForm(){
        setIsSubmitted(true);
    }
    return (
        <>
{/* when the user input is left empty this shows them the warning message */}
{!isSubmitted ?(
 <Login submitForm={submitForm} /> 
):(
 <loggedin/>
)}

       
          
        </>
    );
};
export default Form;