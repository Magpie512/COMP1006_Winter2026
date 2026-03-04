# PHP Form Validation & Sanitization Cheat Sheet

## 1. Superglobals
- `$_POST` — form submissions (POST)
- `$_GET` — query parameters
- `$_REQUEST` — POST + GET (avoid unless necessary)
- `$_SERVER` — server/request metadata

---

## 2. Basic Sanitization
Use sanitization to *clean* input before storing or outputting.

### Strings
```php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

# Email

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

# URL

$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

# Integers

$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

# HTML 

echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

# Required field

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

# Email valid
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format.';
}

# Integer Validate
if (!filter_var($age, FILTER_VALIDATE_INT)) {
    $errors['age'] = 'Age must be an integer.';
}

#String validation
if (strlen($username) < 3 || strlen($username) > 20) {
    $errors['username'] = 'Username must be 3–20 characters.';
}

# Regex 
if (!preg_match('/^[A-Za-z0-9_]+$/', $username)) {
    $errors['username'] = 'Only letters, numbers, and underscores allowed.';
}

# DB Safety (PDO)
$pdo = new PDO('mysql:host=localhost;dbname=test', 'user', 'pass', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

# CRUD
## Create (Insert)
$stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
$stmt->execute([
    ':name' => $name,
    ':email' => $email
]);

## READ 
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute([':id' => $id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

# Update
$stmt = $pdo->prepare("UPDATE users SET name = :name WHERE id = :id");
$stmt->execute([
    ':name' => $name,
    ':id' => $id
]);

# Delete
$stmt = $pdo->prepare("UPDATE users SET name = :name WHERE id = :id");
$stmt->execute([
    ':name' => $name,
    ':id' => $id
]);