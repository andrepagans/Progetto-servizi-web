let libri;
let tabellaContainer = document.querySelector("#tabella-container");
let inserisciBtn = document.querySelector('#nuovo-libro');
let formContainer = document.querySelector('#form-container');
let modificaFormContainer = document.querySelector('#modifica-form-container');
let libroForm = document.querySelector('#libro-form');
let modificaLibroForm = document.querySelector('#modifica-libro-form');

inserisciBtn.addEventListener('click', () => {
    if (formContainer.style.display === 'none' || formContainer.style.display === '') {
        formContainer.style.display = 'block';
    } else {
        formContainer.style.display = 'none';
    }
});

libroForm.addEventListener('submit', function (event) {
    event.preventDefault();
    let formData = new FormData(libroForm);

    fetch('./insert.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.response === 1) {
                alert(data.messaggio);
            }
            aggiornaTabella();
            formContainer.style.display = 'none';
            libroForm.reset();
        })
        .catch((error) => {
            console.error('Errore: ', error);
        });
});

modificaLibroForm.addEventListener('submit', function (event) {
    event.preventDefault();
    let formData = new FormData(modificaLibroForm);

    fetch('./update.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.response === 1) {
                alert(data.messaggio);
            }
            aggiornaTabella();
            modificaFormContainer.style.display = 'none';
            modificaLibroForm.reset();
        })
        .catch((error) => {
            console.error('Errore: ', error);
        });
});

function generaTabella() {
    fetch('./select.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            libri = data;
            console.log('Dati ricevuti: ', data);
            let tabella = `
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Titolo</th>
                        <th>Autore</th>
                        <th>Genere</th>
                        <th>Data di pubblicazione</th>
                        <th>Copie disponibili</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    ${generaRighe(data)}
                </tbody>
            </table>
            `;
            tabellaContainer.innerHTML = tabella;
            let modificaBottoni = document.querySelectorAll(".modifica-libro");
            let eliminaBottoni = document.querySelectorAll(".elimina-libro");

            for (let i = 0; i < modificaBottoni.length; i++) {
                modificaBottoni[i].addEventListener('click', apriModificaForm);
            }

            for (let i = 0; i < eliminaBottoni.length; i++) {
                eliminaBottoni[i].addEventListener('click', eliminaLibro);
            }
        })
        .catch((error) => {
            console.error('Errore: ', error);
        });
}

function generaRighe(libri) {
    let righe = '';
    libri.forEach(libro => {
        let riga = `
                <tr>
                    <td>${libro.id}</td>
                    <td>${libro.titolo}</td>
                    <td>${libro.autore}</td>
                    <td>${libro.genere}</td>
                    <td>${libro.data_di_pubblicazione}</td>
                    <td>${libro.copie_disponibili}</td>
                    <td>
                        <button class="btn btn-warning btn-sm modifica-libro" data-id="${libro.id}" data-titolo="${libro.titolo}" data-autore="${libro.autore}" data-genere="${libro.genere}" data-data_pubblicazione="${libro.data_di_pubblicazione}" data-copie_disponibili="${libro.copie_disponibili}">Modifica</button>
                        <button class="btn btn-danger btn-sm elimina-libro" data-val="${libro.id}">Elimina</button>
                    </td>
                </tr>
            `;
        righe += riga;
    });
    return righe;
}

function apriModificaForm(e) {
    let id = e.target.getAttribute('data-id');
    let copie_disponibili = e.target.getAttribute('data-copie_disponibili');

    document.getElementById('modifica-id').value = id;
    document.getElementById('modifica-copie_disponibili').value = copie_disponibili;

    modificaFormContainer.style.display = 'block';
}

function eliminaLibro(e) {
    let id = e.target.getAttribute('data-val');
    console.log("Elimino libro", e.target.getAttribute('data-val'));
    const formData = new FormData();
    formData.append('id', id);

    fetch('./delete.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (data.response === 1) {
                alert(data.messaggio);
            }
            aggiornaTabella();
        })
        .catch((error) => {
            console.error('Errore: ', error);
        });
}

function aggiornaTabella() {
    let tabella = document.querySelector('table');
    tabellaContainer.removeChild(tabella);
    generaTabella();
}

generaTabella();
