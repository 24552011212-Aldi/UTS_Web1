const VALID_USERNAME = "user";
const VALID_PASSWORD = "123";

function handleLogin() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // Struktur Percabangan If
    if (username === VALID_USERNAME && password === VALID_PASSWORD) {
        alert("Login Berhasil! (client-side)");
        window.location.href = 'dashboard.php';
    } else {
        alert("Login Gagal! Username atau Password salah.");
    }
    return false;
}