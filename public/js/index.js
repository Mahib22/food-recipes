const inputMaterial = document.getElementById('inputMaterial');
const inputStep = document.getElementById('inputStep');

function addMaterial() {
    const addInput = document.createElement('input');
    addInput.setAttribute('type', 'text');
    addInput.classList.add('form-control', 'bg-white', 'radius-10', 'mb-2');
    addInput.setAttribute('id', 'materials');
    addInput.setAttribute('name', 'materials');

    inputMaterial.append(addInput);
};

function addStep() {
    const addInput = document.createElement('input');
    addInput.setAttribute('type', 'text');
    addInput.classList.add('form-control', 'bg-white', 'radius-10', 'mb-2');
    addInput.setAttribute('id', 'steps');
    addInput.setAttribute('name', 'steps');

    inputStep.append(addInput);
};