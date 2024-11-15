function checkForm() {
            var username = document.getElementById('Emp_ID').value;
            var password = document.getElementById('Emp_Pass').value;

            if (username === "" || password === "") {
                alert("Please fill in all fields");
                return false;
            }

            // Additional checks if needed

            return true;
        }
        