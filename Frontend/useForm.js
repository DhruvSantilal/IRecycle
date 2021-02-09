import {useState, useEffect} from 'react';

const useForm = (callback, validate )=> {
    const[values, setValues] = useState({
        email: '',
        password: '',
        
    }); 
    //above are all the fields that will be used to perfom functions are listed above
    const [errors, setErrors] = useState({});
    const [isSubmitting, setIsSubmitting] = useState(false);
//only when fields that is inputed are wrong it will call the error function
    const handleChange = e => {
        const { name, value} = e.target;
        setValues({
           ...values,
          [name]: value
//name is targeted on each user input so we can call them out when you need to perfom a functionon it e.g validation
        });
    };
const handleSubmit = e =>{
    e.preventDefault();
    //when button is sumbitted it doesnt reload the page 
    setErrors(validate(values));
    setIsSubmitting(true);
};
 useEffect(
() => {
    if(Object.keys(errors).length === 0 && isSubmitting){
      callback()  ;
      }
      //callback performs the function once the expected functions are performed
 }, 
 [errors]
 );

    return { handleChange,handleSubmit, values,errors};
};
//returned and exported as this form will be used in other forms such as login and validation.
export default useForm;