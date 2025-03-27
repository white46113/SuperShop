import './bootstrap';
import axios from 'axios';

// axios.post('/login-form',
//     {
//         email: 'user@example.com',
//         password: 'secret123'
//     }
// ).then(response => console.log(response));
// let name = null;
// let changed = name?.toUpperCase();
// console.log(changed);

document.getElementById("ajaxForm").addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(this);
    axios.post("/login-form", formData, {
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        }
    })
    .then(response => {
        document.getElementById("responseMessage").innerHTML = `<p>${response.data.message}</p>`;
    })
    .catch(error => console.error(error));
});
