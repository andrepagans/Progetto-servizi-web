document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("viewCopiesForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var bookId = document.getElementById("bookId").value;
        
        fetch('api/visualizza-libro/' + bookId)
            .then(response => response.json())
            .then(data => {
                var messageElement = document.getElementById("copiesAvailable");
                if (data.response === 0) {
                    messageElement.textContent = data.messaggio;
                    messageElement.className = "alert alert-danger mt-3";
                } else {
                    messageElement.textContent = "Copie disponibili: " + data.copie_disponibili;
                    messageElement.className = "alert alert-success mt-3";
                }
            })
            .catch(error => {
                document.getElementById("copiesAvailable").textContent = "Errore nella richiesta. Riprova più tardi.";
                document.getElementById("copiesAvailable").className = "alert alert-danger mt-3";
            });
    });
});