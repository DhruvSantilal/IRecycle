export default function validateInfo(values) {
    let errors = {};
  // when the username input is left empty this shows them the warning message
    if (!values.username.trim()) {
      errors.username = 'Username required';
    }
  // when the email input is left empty this shows them the warning message and also it makesure the email are valid by doing character and symbol checks
    if (!values.email) {
      errors.email = 'Email required';
    } else if (!/\S+@\S+\.\S+/.test(values.email)) {
      errors.email = 'Email address is invalid';
    }
    //if the password field is empty it requires and password and gives a warning and also the password should be above 6 characters
    if (!values.password) {
      errors.password = 'Password is required';
    } else if (values.password.length < 6) {
      errors.password = 'Password needs to be 6 characters or more';
    }
  //makesure sure the confrim password input field is not empty and also checks if the confirm password matches with the typed password and gives warning
    if (!values.password2) {
      errors.password2 = 'Password is required';
    } else if (values.password2 !== values.password) {
      errors.password2 = 'Passwords do not match';
    }
    //returns as error which will be used in other forms(pages)
    return errors;
  }