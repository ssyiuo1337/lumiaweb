<?php
session_start();
require '../api/db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: /login.html');
    exit;
}

$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare('SELECT role FROM users WHERE id = ?');
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if (!$user || $user['role'] !== 'Администратор') {
    header('Location: /index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1337</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение Font Awesome для иконок -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Подключение пользовательского CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body class="light-theme">

<?php
require '../api/db.php';

// Проверка авторизации пользователя
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.html');
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare('SELECT role FROM users WHERE id = ?');
$stmt->execute([$user_id]);
$user = $stmt->fetch();

// Проверка роли пользователя
if (!$user || $user['role'] !== 'Администратор') {
    header('Location: /index.html');
    exit;
}
?>

<!-- Сайдбар -->
<div class="sidebar">
    <h4 class="mb-4">1337</h4>
    <a href="#" onclick="showSection('users')"><i class="fas fa-users"></i> Управление пользователями</a>
    <a href="#" onclick="showSection('subscriptions')"><i class="fas fa-gift"></i> Управление подписками</a>
    <a href="#" onclick="showSection('keys')"><i class="fas fa-key"></i> Генерация ключей</a>
    <a href="#" onclick="showSection('role-set')"><i class="fas fa-user-cog"></i> Установка ролей</a>
    <a href="#" onclick="showSection('get-info-key')"><i class="fas fa-info-circle"></i> Информация о ключе</a>
    <a href="#" onclick="showSection('reset-hwid')"><i class="fas fa-redo-alt"></i> Сброс HWID</a>
    <a href="#" onclick="showSection('ban-user')"><i class="fas fa-ban"></i> Бан/Разбан</a>
</div>

<!-- Основное содержимое -->
<div class="content container">
    <!-- Раздел управления пользователями -->
    <div id="users" class="admin-section" style="display: none;">
        <h2>Управление пользователями</h2>
        <form id="deleteUserForm">
            <div class="mb-3">
                <label for="userId" class="form-label">ID пользователя:</label>
                <input type="number" name="user_id" id="userId" class="form-control" required>
            </div>
            <button class="btn btn-danger" type="submit">Удалить пользователя</button>
        </form>
        <div id="deleteUserResult" class="mt-2"></div>
    </div>

    <!-- Раздел управления подписками -->
    <div id="subscriptions" class="admin-section" style="display: none;">
        <h2>Управление подписками</h2>
        <form id="giveSubscriptionForm">
            <div class="mb-3">
                <label for="userIdSub" class="form-label">ID пользователя:</label>
                <input type="number" name="user_id" id="userIdSub" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="subName" class="form-label">Название подписки:</label>
                <input type="text" name="subscription_name" id="subName" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="expiresAt" class="form-label">Дата окончания:</label>
                <input type="datetime-local" name="expires_at" id="expiresAt" class="form-control" required>
            </div>
            <button class="btn btn-success" type="submit">Выдать подписку</button>
        </form>
        <div id="giveSubscriptionResult" class="mt-2"></div>
    </div>

    <!-- Раздел генерации ключей -->
    <div id="keys" class="admin-section" style="display: none;">
        <h2>Генерация ключей</h2>
        <form id="generateKeysForm">
            <div class="mb-3">
                <label for="keyCount" class="form-label">Количество ключей:</label>
                <input type="number" name="count" id="keyCount" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="subscriptionName" class="form-label">Название подписки:</label>
                <input type="text" name="subscription_name" id="subscriptionName" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="durationDays" class="form-label">Длительность подписки (в днях):</label>
                <input type="number" name="duration_days" id="durationDays" class="form-control" required>
            </div>
            <button class="btn btn-success" type="submit">Сгенерировать ключи</button>
        </form>
        <div id="generateKeysResult" class="mt-2"></div>
    </div>

    <!-- Раздел установки роли -->
    <div id="role-set" class="admin-section" style="display: none;">
        <h3>Установка роли</h3>
        <form id="roleSetForm">
            <div class="mb-3">
                <label for="userIdRole" class="form-label">ID Пользователя:</label>
                <input type="text" id="userIdRole" name="user_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="newRole" class="form-label">Новая Роль:</label>
                <input type="text" id="newRole" name="role" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Установить роль</button>
        </form>
        <div id="roleSetResult" class="mt-2"></div>
    </div>

    <!-- Раздел информации о ключе -->
    <div id="get-info-key" class="admin-section" style="display: none;">
        <h3>Информация о ключе</h3>
        <form id="getInfoKeyForm">
            <div class="mb-3">
                <label for="key" class="form-label">Ключ:</label>
                <input type="text" id="key" name="key" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Получить информацию</button>
        </form>
        <div id="getInfoKeyResult" class="mt-2"></div>
    </div>

    <!-- Раздел сброса HWID -->
    <div id="reset-hwid" class="admin-section" style="display: none;">
        <h3>Сброс HWID</h3>
        <form id="resetHWIDForm">
            <div class="mb-3">
                <label for="userIdHwid" class="form-label">ID Пользователя:</label>
                <input type="text" id="userIdHwid" name="user_id" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Сбросить HWID</button>
        </form>
        <div id="resetHWIDResult" class="mt-2"></div>
    </div>

    <!-- Раздел бана/разбана -->
    <div id="ban-user" class="admin-section" style="display: none;">
        <h3>Система бана</h3>
        <form id="banUserForm">
            <div class="mb-3">
                <label for="userIdBan" class="form-label">ID Пользователя:</label>
                <input type="text" id="userIdBan" name="user_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="banStatus" class="form-label">Статус:</label>
                <select id="banStatus" name="is_banned" class="form-select" required>
                    <option value="1">Забанить</option>
                    <option value="0">Разбанить</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="banReason" class="form-label">Причина бана:</label>
                <textarea id="banReason" name="ban_reason" class="form-control"></textarea>
            </div>
            <button class="btn btn-danger" type="submit">Применить</button>
        </form>
        <div id="banUserResult" class="mt-2"></div>
    </div>
</div>

<!-- Переключатель темы -->
<div class="theme-toggler" onclick="toggleTheme()">
    <div class="toggle-button"></div>
</div>

<!-- Подключение jQuery и Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showSection(sectionId) {
        const sections = document.querySelectorAll('.admin-section');
        sections.forEach(section => section.style.display = 'none');
        document.getElementById(sectionId).style.display = 'block';
    }

    // Переключение темы
    function toggleTheme() {
        const body = document.body;
        const toggler = document.querySelector('.theme-toggler .toggle-button');
        if (body.classList.contains('light-theme')) {
            body.classList.remove('light-theme');
            body.classList.add('dark-theme');
            toggler.style.left = '30px';
        } else {
            body.classList.remove('dark-theme');
            body.classList.add('light-theme');
            toggler.style.left = '2px';
        }
    }

    // Обработка форм через AJAX
    $(document).ready(function () {
        // Удаление пользователя
        $('#deleteUserForm').submit(function (event) {
            event.preventDefault();
            $.post('../api/admin/delete_user.php', $(this).serialize(), function (response) {
                $('#deleteUserResult').text(response);
            });
        });

        // Выдача подписки
        $('#giveSubscriptionForm').submit(function (event) {
            event.preventDefault();
            $.post('../api/admin/give_subscription.php', $(this).serialize(), function (response) {
                $('#giveSubscriptionResult').text(response);
            });
        });

        // Генерация ключей
        $('#generateKeysForm').submit(function (event) {
            event.preventDefault();
            $.post('../api/admin/generate_keys.php', $(this).serialize(), function (response) {
                $('#generateKeysResult').html(response);
            });
        });

        // Установка роли
        $('#roleSetForm').submit(function (event) {
            event.preventDefault();
            $.post('../api/admin/roleSet.php', $(this).serialize(), function (response) {
                $('#roleSetResult').text(response);
            });
        });

        // Получение информации о ключе
        $('#getInfoKeyForm').submit(function (event) {
            event.preventDefault();
            $.post('../api/admin/infoKey.php', $(this).serialize(), function (response) {
                $('#getInfoKeyResult').html(response);
            });
        });

        // Сброс HWID
        $('#resetHWIDForm').submit(function (event) {
            event.preventDefault();
            $.post('../api/admin/resetHWID.php', $(this).serialize(), function (response) {
                $('#resetHWIDResult').text(response);
            });
        });

        // Бан/разбан пользователя
        $('#banUserForm').submit(function (event) {
            event.preventDefault();
            $.post('../api/admin/ban_user.php', $(this).serialize(), function (response) {
                $('#banUserResult').text(response);
            });
        });
    });
</script>
</body>
</html>
