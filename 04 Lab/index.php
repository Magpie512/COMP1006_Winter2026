<?php require "includes/header.php" ?>
<main>
  <h2> Order Across The Aether - Easy & Simple</h2> <!-- chat gpt emojis,, Naughty Naughty Johnny -->
  <form action="process.php" method="post">
  <section>
    <!-- Customer Information -->
    <fieldset class = "customer-info">
      <legend>Customer Information</legend>
      <label for="first_name">First Name</label>
      <input type="text" id="first_name" name="first_name" required placeholder="Alex">

      <label for="last_name">Last Name</label>
      <input type="text" id="last_name" name="last_name" required placeholder="Newhook">
      <!-- MY WIFE !!! -->

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" placeholder="555-123-4567" required type="tel">

      <label for="address">Address</label>
      <input type="text" id="address" name="address" required placeholder="123 Street Street">

      <label for="email">Email Address</label>
      <input type="text" id="email" name="email" required type="email" placeholder="For your online reciept">
    </fieldset>

    <!-- Order Details -->

    <fieldset class="detai">
      <legend>Order Details</legend>

      <p>
        Enter a quantity for each item (use 0 if you don't want it).
      </p>

      <table border="1" cellpadding="8" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">Our Collection</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Pebbles</th>
            <td>
              <label for="pebbles" class="visually-hidden">Pebbles quantity</label>
              <input type="number" id="pebbles" name="items[pebbles]" min="0" max="24" value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Daisies</th>
            <td>
              <label for="daisies" class="visually-hidden">Daisies quantity</label>
              <input type="number" id="daisies" name="items[daisies]" min="0" max="24" value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Left Shoes</th>
            <td>
              <label for="left_shoes" class="visually-hidden">Left Shoes quantity</label>
              <input type="number" id="left_shoes" name="items[left_shoes]" min="0" max="24" value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Under Garments</th>
            <td>
              <label for="under_garments" class="visually-hidden">Under Garments quantity</label>
              <input type="number" id="under_garments" name="items[under_garments]" min="0" max="24" value="0">
            </td>
          </tr>

          <tr>
            <th scope="row">Raisins</th>
            <td>
              <label for="raisins" class="visually-hidden">Raisins quantity</label>
              <input type="number" id="raisins" name="items[raisins]" min="0" max="24" value="0">
            </td>
          </tr>

        </tbody>
      </table>

    </fieldset>

  </section>

    <fieldset>
      <legend>Additional Comments</legend>

      <p>
        <label for="comments">Comments and Concerns</label><br>
        <textarea id="comments" name="comments" rows="4"
          placeholder="Aetheric concerns and delivery information"></textarea>
      </p>
    </fieldset>

    <p>
      <button type="submit">Place Order</button>
    </p>

  </form>
</main>
</body>

</html>

<?php require "includes/footer.php" ?>