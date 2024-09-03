<?php

/**
 * Template Name: Register
 *
 * This is the template that displays the Registration page.
 *
 * @package TutorStarter
 */

get_header();
?>
<div class="register-container">
    <h2>Register</h2>
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
        <input type="hidden" name="action" value="custom_registration">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Register">
    </form>
</div>