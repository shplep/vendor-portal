<?php
// public/login.php
$page_title = "Login";
require_once 'partials/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // ... login logic ...
}
?>

<div class="flex min-h-screen items-center justify-center">
    <div class="w-full max-w-md">
        <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <!-- ... login form ... -->
        </form>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>