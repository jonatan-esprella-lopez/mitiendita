import InputValidate, { 
  validarSoloLetras,
  validarLetrasNumerosEspeciales,
  validarMinimo,
  validarMaximo,
  validarCorreo,
  validateEmpty,
  validarLetrasNumeros,
  validarSoloNumeros,
  validarPasswordConfirm,
  errorVerification,
  onEvent
} from './regexp.js'

import { confirmModal, alertModal } from './alerts.js'


const errores = Array.from(document.querySelectorAll('.formulario__input-error'));

// Validaciones de los inputs
export const validations = (input, index) => ({

  nombre: () => {
    InputValidate(input, index, [
      validarSoloLetras(input),
      validarMinimo(input, 2),
      validarMaximo(input, 30)
    ], errores)
  },

  apellidos: () => {
    InputValidate(input, index, [
      validarSoloLetras(input),
      validarMinimo(input, 2),
      validarMaximo(input, 30)
    ], errores)
  },

  correo: () => {
    InputValidate(input, index, [
      validarCorreo(input)
    ], errores)
  },

  direccion: () => {
    InputValidate(input, index, [
      validarLetrasNumerosEspeciales(input),
      validarMinimo(input, 7)
    ], errores)
  },

  tipo_usr: () => {
    InputValidate(input, index, [
      validateEmpty(input)
    ], errores)
  },

  telefono: () => {
    InputValidate(input, index, [
      validarSoloNumeros(input),
      validarMinimo(input, 7),
      validarMaximo(input, 8)
    ], errores)
  },

  password: () => {
    InputValidate(input, index, [
      validarLetrasNumeros(input),
      validarMinimo(input, 6)
    ], errores)
  },

  ci: () => {
    InputValidate(input, index, [
      validarLetrasNumeros(input),
      validarMinimo(input, 6),
      validarMaximo(input, 10)
    ], errores)
  },

  password2: () => {
    InputValidate(input, index, [
      validarPasswordConfirm(document.getElementsByName("password")[0], input),
      validarLetrasNumeros(input),
      validarMinimo(input, 6),
      validarMaximo(input, 10)
    ], errores)
  }
});


export const actionRegister = () => {

  const formulario = document.getElementById("formulario");
  const inputs = Array.from(formulario.querySelectorAll('input, select'));
  const btncancel = document.getElementById('btn-cancel-reset');

  btncancel.addEventListener('click', () => {
    alertModal("Cancelado", () => {
      inputs.forEach((input) => {
        input.value = '';
      });
    });
  });

  formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    const confirm = () => {
      const formulario = document.getElementById("formulario");
      const inputs = Array.from(formulario.querySelectorAll('input, select'));
      inputs.forEach((input, index) => {
        validations(input, index)[input.name]();
      });
      
      if(!errorVerification(inputs)){
        alertModal("Asegúrese de que todos los campos estén llenados correctamente");
      }else{
        formulario.submit();
      }
    }
    
    confirmModal('Registrar usuario', '¿Está seguro que desea guardar el usuario?', confirm);
  });
}


export const actionUpdate = () => {

  const formulario = document.getElementById("formulario");
  const btncancel = document.getElementById('btn-cancel-reset');

  btncancel.addEventListener('click', () => {
    alertModal("Cancelado", () => {
      window.location.href = 'http://localhost/tiendita/users.php';
    });
  });

  formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    const confirm = () => {
      const formulario = document.getElementById("formulario");
      const inputs = Array.from(formulario.querySelectorAll('input, select'));
      inputs.forEach((input, index) => {
        validations(input, index)[input.name]();
      });
      
      if(!errorVerification(inputs)){
        alertModal("Asegúrese de que todos los campos estén llenados correctamente");
      }else{
        formulario.submit();
      }
    }

    const canceled = () => {
      alertModal("Cancelado", () => {
        window.location.href = 'http://localhost/tiendita/users.php';
      });
    }
    
    confirmModal('Actualizar usuario', '¿Está seguro que desea actualizar los datos del usuario?', confirm, canceled);
  });
}


export const deleteUserAlert = () => {
  const forms = Array.from(document.getElementsByClassName('form-users-delete'));

  forms.forEach((item) => {
    item.addEventListener('submit', (e) => {
      e.preventDefault();

      const confirm = () => { item.submit();}
      const cancel = () => {
        alertModal('Cancelado');
      }

      confirmModal('Eliminar usuario', '¿Está seguro que desea eliminar este usuario?', confirm, cancel);
    });
  });
}


//Ejecutar validaciones
export default function execRegisterValidation(action, preload = false){

  const formulario = document.getElementById("formulario");
  const inputs = Array.from(formulario.querySelectorAll('input, select'));

  onEvent(inputs, validations, preload);

  action();
}

