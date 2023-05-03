import InputValidate, { 
  validarSoloLetras,
  validarLetrasNumerosEspeciales,
  validarMinimo,
  validarMaximo,
  validarCorreo,
  validateEmpty,
  validarSoloNumeros,
  validarURL,
  errorVerification,
  onEvent
} from './regexp.js'

import { confirmModal, alertModal } from './alerts.js'


const errores = Array.from(document.querySelectorAll('.formulario__input-error'));

// Validaciones de los inputs
export const validations = (input, index) => ({

  names: () => {
    InputValidate(input, index, [
      validarSoloLetras(input),
      validarMinimo(input, 2),
      validarMaximo(input, 30)
    ], errores)
  },

  direction: () => {
    InputValidate(input, index, [
      validarLetrasNumerosEspeciales(input),
      validarMinimo(input, 7)
    ], errores)
  },

  email: () => {
    InputValidate(input, index, [
      validarCorreo(input)
    ], errores)
  },

  web: () => {
    InputValidate(input, index, [
      validarURL(input)
    ], errores)
  },

  product_type: () => {
    InputValidate(input, index, [
      validateEmpty(input)
    ], errores)
  },

  phone: () => {
    InputValidate(input, index, [
      validarSoloNumeros(input),
      validarMinimo(input, 7),
      validarMaximo(input, 8)
    ], errores)
  },

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
    
    confirmModal('Registrar proveedor', '¿Está seguro que desea guardar el proveedor?', confirm);
  });
}


export const actionUpdate = () => {

  const formulario = document.getElementById("formulario");
  const btncancel = document.getElementById('btn-cancel-reset');

  btncancel.addEventListener('click', () => {
    alertModal("Cancelado", () => {
      window.location.href = 'http://localhost/tiendita/providers.php';
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
        window.location.href = 'http://localhost/tiendita/providers.php';
      });
    }
    
    confirmModal('Actualizar usuario', '¿Está seguro que desea actualizar los datos del usuario?', confirm, canceled);
  });
}


export const deleteProviderAlert = () => {
  const forms = Array.from(document.getElementsByClassName('form-users-delete'));

  forms.forEach((item) => {
    item.addEventListener('submit', (e) => {
      e.preventDefault();

      const confirm = () => { item.submit();}
      const cancel = () => {
        alertModal('Cancelado');
      }

      confirmModal('Eliminar proveedor', '¿Está seguro que desea eliminar este proveedor?', confirm, cancel);
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

