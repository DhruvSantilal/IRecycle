export default function validateInfo(values) {
    let errors = {};
//calls a function an error
    if (!values.email.trim()) {
        errors.email = "Email required";
      }

      if (!values.password.trim()) {
        errors.password = "Password is required"; 
      }
//validation is checked above if both of the fields are left empty and it will show a message

    return errors;
} //it is returned so it could be used in other forms such as login page