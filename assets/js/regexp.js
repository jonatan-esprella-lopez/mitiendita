export default function InputValidate(input, index, validations, errores){
  const content = input.parentElement.parentElement;
  let count = 0;

  validations.forEach(verify => {
    if(!verify){
      errores[index].style.display = 'block';
      errores[index].textContent = input.validationMessage;
      count ++;
    }
  });
  
  if(count > 0){
    content.classList.add('formulario__grupo-incorrecto');
    content.classList.remove('formulario__grupo-correcto');
  }else{
    errores[index].style.display = 'none';
    content.classList.add('formulario__grupo-correcto');
    content.classList.remove('formulario__grupo-incorrecto');
    input.setCustomValidity("");
  }
}


export const validateEmpty = (campo) => {
  const value = campo.value.trim();
  if (value === '') {
    campo.setCustomValidity("Este campo es requerido");
    return false;
  } else {
    return true;
  }
}


// Validación de solo letras
export const validarSoloLetras = (campo) => {
  let regex = /^[a-zA-Z ]+$/;
  if (!regex.test(campo.value)) {
    campo.setCustomValidity("Por favor ingrese solo letras");
    return false;
  } else {
    return true;
  }
}

// Validación de letras y números
export const validarLetrasNumeros = (campo) => {
  let regex = /^[0-9a-zA-Z]+$/;
  if (!regex.test(campo.value)) {
    campo.setCustomValidity("Por favor ingrese solo letras y números");
    return false;
  } else {
    return true;
  }
}

export const validarLetrasNumerosEspeciales = (campo) => {
  let regex = /^[a-zA-Z0-9 !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
  if (!regex.test(campo.value)) {
    campo.setCustomValidity("Por favor ingrese solo letras, números y algunos caracteres especiales");
    return false;
  } else {
    return true;
  }
}

export const validarSoloNumeros = (campo) => {
  let regex = /^[0-9]+$/;
  if (!regex.test(campo.value)) {
    campo.setCustomValidity("Por favor ingrese solo números");
    return false;
  } else {
    return true;
  }
}

// Validación de correo electrónico
export const validarCorreo = (campo) => {
  let regex = /^\S+@\S+\.\S+$/;
  if (!regex.test(campo.value)) {
    campo.setCustomValidity("Por favor ingrese un correo electrónico válido");
    return false;
  } else {
    return true;
  }
}

// Validación de longitud mínima
export const validarMinimo = (campo, minimo) => {
  if (campo.value.length < minimo) {
    campo.setCustomValidity(`Por favor ingrese al menos ${minimo} caracteres`);
    return false;
  } else {
    return true;
  }
}

// Validación de longitud máxima
export const validarMaximo = (campo, maximo) => {
  if (campo.value.length > maximo) {
    campo.setCustomValidity(`Por favor ingrese máximo ${maximo} caracteres`);
    return false;
  } else {
    return true;
  }
}


// Validación de url
export const validarURL = (campo) => {
  let regex = /^(http(s)?:\/\/)?[\w.-]+(\.[\w.-]+)+[a-zA-Z0-9\-\._~:/?#[\]@!\$&'\(\)\*\+,;=]+$/;
  if (!regex.test(campo.value)) {
    campo.setCustomValidity("Por favor ingrese una URL válida");
    return false;
  } else {
    return true;
  }
}


// Validación de coincidencia de contraseñas
export const validarPasswordConfirm = (campo1, campo2) => {
  if (campo1.value !== campo2.value) {
    campo2.setCustomValidity("Las contraseñas no coinciden");
    return false;
  } else {
    return true;
  }
}

export const errorVerification = (inputs) => {
  let count = 0;
  inputs.forEach((input) => {
    if(input.validationMessage.length > 0){
      count++;
    }
  });
  return count === 0;
}

export const onEvent = (inputs, validations, preload = false) => {
  inputs.forEach((input, index) => {
    if(preload){
      document.addEventListener("DOMContentLoaded", () => validations(input, index)[input.name]());
    }

    const tag = input.nodeName.toLowerCase();
    
    const events = {
      input: () => { 
        input.addEventListener('keyup', validations(input, index)[input.name]);
      },
      select: () => {
        input.addEventListener('change', validations(input, index)[input.name]);
      }
    }

    events[tag]();

  });
}