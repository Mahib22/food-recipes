const inputMaterial = document.getElementById('inputMaterial');
const inputStep = document.getElementById('inputStep');

function addMaterial() {
    const addInput = document.createElement('input');
    addInput.setAttribute('type', 'text');
    addInput.classList.add('form-control', 'bg-white', 'radius-10', 'mb-2');
    addInput.setAttribute('id', 'materials');
    addInput.setAttribute('name', 'materials[]');

    inputMaterial.append(addInput);
};

function addStep() {
    const addInput = document.createElement('input');
    addInput.setAttribute('type', 'text');
    addInput.classList.add('form-control', 'bg-white', 'radius-10', 'mb-2');
    addInput.setAttribute('id', 'steps');
    addInput.setAttribute('name', 'steps[]');

    inputStep.append(addInput);
};

function like(id) {
    const el = document.getElementById(`btn-${id}`);
    let likesCount = document.getElementById(`recipe-${id}`);

    fetch('/like/' + id)
        .then(res => res.json())
        .then(data => {
            let currentCount = 0;

            if (data.status === 'LIKE') {
                currentCount = parseInt(likesCount.innerHTML) + 1;
                el.innerText = 'Disukai';
            } else {
                currentCount = parseInt(likesCount.innerHTML) - 1;
                el.innerText = 'Suka';
            }

            likesCount.innerHTML = `${currentCount} orang menyukai ini`;
        });
}