<?php
namespace mildert\session;
if (session_status() != PHP_SESSION_ACTIVE) session_start();
/**
 * @return bool if a user is logged in
 */
function isLoggedIn(): bool {
    return !empty($_SESSION["userID"]);
}

function unpaidLevy(): bool {
    return $_SESSION['unpaidLevy'] ?? false;
}

/**
 * @return bool if a non-member DU user is logged in
 */
function isLoggedInDU(): bool {
    return !empty($_SESSION['nonMember']);
}