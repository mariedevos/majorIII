{  const handleSubmitform = e => {
  const $form  = e.target;
  if (!$form.checkValidity()) {
    e.preventDefault();
    $form.querySelector(`.error-form`).textContent = `INVULLEN`;

    Array.from($form.elements).forEach(showValidationInfo);
  }
};

const handleInputField = e => {
  const $field = e.target;
  console.log($field);
  if ($field.checkValidity()) {
    $field.parentElement.querySelector(`.error-form`).textContent = ``;
  }
};

const showValidationInfo = $field => {
  let message;

  if ($field.validity.valueMissing) {
    message = `please fill in this field`;
  }
  if ($field.validity.typeMismatch) {
    message = `Gelieve een geldig emailadres in te voeren.`;
  }

  if (message) {
    $field.parentElement.querySelector(`.error-form`).textContent = message;
  }
};

const handleBlurField = e => {
  const $field = e.currentTarget;
  showValidationInfo($field);
};

const addValidationListeners = fields => {
  fields.forEach($field => {
    $field.addEventListener(`blur`, handleBlurField);
    $field.addEventListener(`input`, handleInputField);
  });
};

const handleInputAantal = ({target}) => {
  console.log(target);
  prijs = target.parentElement.parentElement.querySelector(`.prijs-berekening`).textContent.slice(2);
  $totalVeld = target.parentElement.parentElement.querySelector(`.total-berekening`);
  total = target.value * prijs;
  $totalVeld.textContent = `€ ${total}`;


  $totalPrice = 0;
  document.querySelectorAll(`.total-berekening`).forEach($total => {
    $totalPrice += parseInt($total.textContent.slice(2));
  });
  document.querySelector(`.order-total`).textContent = `€ ${$totalPrice}`;

};

const init = () => {
  const $form = document.querySelector(`form`);
  $form.noValidate = true;
  $form.addEventListener(`submit`, handleSubmitform);
  const inputs = document.querySelectorAll(`.validate`);
  addValidationListeners(inputs);
  $aantallen = document.querySelectorAll(`.aantal-input`);
  $aantallen.forEach($aantal => $aantal.addEventListener(`input`, handleInputAantal));
};

init();
}



const init = () => {
  const $form = document.querySelector(`form`);
  $form.noValidate = true;
  $form.addEventListener(`submit`, handleSubmitform);
  const inputs = document.querySelectorAll(`.validate`);
  addValidationListeners(inputs);
  $aantallen = document.querySelectorAll(`.aantal-input`);
  $aantallen.forEach($aantal => $aantal.addEventListener(`input`, handleInputAantal));
};

init();
