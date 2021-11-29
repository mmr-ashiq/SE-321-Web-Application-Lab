const first = document.querySelector('#number_1');
const second = document.querySelector('#number_2');
const submit_btn = document.querySelector('#submit');
const operation = document.querySelector('#operation');
const result = document.querySelector('#result');

submit_btn.addEventListener('click', () => {
    const first_number = parseInt(first.value);
    const second_number = parseInt(second.value);
    const operation_value = operation.value;

    if(operation_value === 'addition'){
        const result = parseInt(first_number + second_number);
        document.getElementById('result').innerHTML = result;
    }else if(operation_value === 'subtraction'){
        const result = parseInt(first_number - second_number);
        document.getElementById('result').innerHTML = result;
    }else if(operation_value === 'multiplication'){
        const result = parseInt(first_number * second_number);
        document.getElementById('result').innerHTML = result;
    }else if(operation_value === 'division'){
        const result = parseInt(first_number / second_number);
        document.getElementById('result').innerHTML = result;
    }
});