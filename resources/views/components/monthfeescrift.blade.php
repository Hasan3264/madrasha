<script>
  // Get the input elements
  const tuitionAmountInput = document.getElementById('tuition-amount');
  const tuitionPayableInput = document.getElementById('tuition-payable');
  const registrationAmountInput = document.getElementById('registration-amount');
  const registrationPayableInput = document.getElementById('registration-payable');
  const admissionAmountInput = document.getElementById('admission-amount');
  const admissionPayableInput = document.getElementById('admission-payable');
  const examAmountInput = document.getElementById('exam-amount');
  const examPayableInput = document.getElementById('exam-payable');
  const totalAmountInput = document.getElementById('total-amount');
  const totalPayableInput = document.getElementById('total-payable');

  // Add event listeners to the amount and payable inputs
  const inputs = [
    tuitionAmountInput,
    tuitionPayableInput,
    registrationAmountInput,
    registrationPayableInput,
    admissionAmountInput,
    admissionPayableInput,
    examAmountInput,
    examPayableInput
  ];

  inputs.forEach(input => {
    input.addEventListener('input', updateTotal);
  });

  // Function to calculate and update the total
  function updateTotal() {
    let totalAmount = 0;
    let totalPayable = 0;

    // Calculate the sum of amounts and payables
    totalAmount += +tuitionAmountInput.value || 0;
    totalAmount += +registrationAmountInput.value || 0;
    totalAmount += +admissionAmountInput.value || 0;
    totalAmount += +examAmountInput.value || 0;

    totalPayable += +tuitionPayableInput.value || 0;
    totalPayable += +registrationPayableInput.value || 0;
    totalPayable += +admissionPayableInput.value || 0;
    totalPayable += +examPayableInput.value || 0;

    // Update the total inputs
    totalAmountInput.value = totalAmount.toFixed(2);
    totalPayableInput.value = totalPayable.toFixed(2);
  }
</script>
