

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('visit-form');
  const cancelButton = document.getElementById('cancel-button');
  const modal = document.getElementById('confirmation-modal');
  const modalTitle = document.getElementById('modal-title');
  const modalMessage = document.getElementById('modal-message');
  const modalCancel = document.getElementById('modal-cancel');
  const modalConfirm = document.getElementById('modal-confirm');

  let modalAction = null;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    modalAction = 'submit';
    modalTitle.textContent = 'Submit Form';
    modalMessage.textContent = 'Are you sure you want to submit this form?';
    modal.classList.remove('hidden');
  });

  cancelButton.addEventListener('click', () => {
    modalAction = 'cancel';
    modalTitle.textContent = 'Cancel';
    modalMessage.textContent = 'Are you sure you want to cancel?';
    modal.classList.remove('hidden');
  });

  modalCancel.addEventListener('click', () => {
    modal.classList.add('hidden');
  });

  modalConfirm.addEventListener('click', () => {
    modal.classList.add('hidden');
    if (modalAction === 'submit') {
      form.submit();
    } else if (modalAction === 'cancel') {
      window.location.href = '/CRM/';
    }
  });
});