import Axios from "axios";

export function login(credentials) {
    return new Promise((res, rej) => {
        Axios.post('/api/auth/login', credentials)
            .then((response) => {
                res(respond.data);
            })
            .catch((err) =>{
                rej("Wrong email or password");
            })
    })
}

export function getLocalUser() {
    const userString = localStorage.getItem("user");

    if(!userString) {
        return null; 
    }

    return JSON.parse(userString);
}