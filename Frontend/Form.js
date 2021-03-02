import React, {useState} from 'react';
import Login from './Login';
import Loggedin from './loggedin';
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
<div className="form-container-left">
</div>
{/* when the user input is left empty this shows them the warning message */}
{!isSubmitted ?(
 <Login submitForm={submitForm} /> 
):(
 <Loggedin/>
)}
</div>
{/* above code will sibmit the form succefuly to form success if the entered details are correct */}
  <div className="form-container">
<div className="form-container-left">
</div>
{/* when the user input is left empty this shows them the warning message */}
{!isSubmitted ?(
 <Login submitForm={submitForm} /> 
):(
 <Loggedin/>
)}
</div>        
        </>
    );
};
export default Form;
// this is exported as Form so it could be used in other forms