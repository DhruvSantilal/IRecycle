export default function validateInfo(values) {
    let errors = {};

    if (!values.email.trim()) {
        errors.email = "Email required";
      }

      if (!values.password.trim()) {
        errors.password = "Password is required"; 
      }


    return errors;
}