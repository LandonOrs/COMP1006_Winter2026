<?php require 'includes/header.php'; ?>

<main>
<form action="process.php" method="post">
  <fieldset>
    <legend>Customer Information</legend>

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" required maxlength="100"
           value="<?php echo htmlspecialchars($_POST['first_name'] ?? ''); ?>" autocomplete="given-name">

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" required maxlength="100"
           value="<?php echo htmlspecialchars($_POST['last_name'] ?? ''); ?>" autocomplete="family-name">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required
           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" autocomplete="email">

    <label for="phone">Phone Number:</label>
    <input type="tel" name="phone" id="phone" required pattern="^\d{3}-\d{3}-\d{4}$"
           placeholder="555-123-4567"
           value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" autocomplete="tel">
  </fieldset>

 
  <button type="submit">Place Order</button>
</form>
</main>

<?php require 'includes/footer.php'; ?>

