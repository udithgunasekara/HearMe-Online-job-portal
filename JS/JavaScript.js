function deleteuser() {
    document.getElementById('deleteForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const userID = document.getElementById('userID').value;

        fetch(`deleteuser.php?userID=${userID}`)
            .then(response => response.text())
            .then(result => {
                alert(result);
                if (result.includes('deleted successfully')) {
                    window.location.href = 'AdminPage.php';
                }
            })
            .catch(error => {
                alert('Error deleting user.');
            });
    });
}



function salaryCheck() {
    const salaryInput = document.getElementById('salary').value;

    // Check if the salary is an integer
    if (!Number.isInteger(Number(salaryInput))) {
        alert('Salary must be an integer value.');
        return false; 
    }
}

