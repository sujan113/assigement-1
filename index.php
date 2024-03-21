<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizza -Home</title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <img src="logo.png" alt="logo of pizza" />
      <h1>Welcome to PiZZa PAradise!</h1>
    </header>
    <main>
      <form action="subscribe.php" method="get">
        
          <legend>Order your Pizza</legend>

          <label for="emailAddress">Email-address</label>
          <input type="email" name="emailAddress" id="emailAddress" placeholder="Enter your email" required>
          <label for="password">Password</label>
          <input type="password" id="password"  placeholder="Enter your Password" required><br>

          <label for="phoneNumber">Phone Number:</label>
          <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
<br>

          <!-- Here we are adding the input field so, that user can enter the number of pizza they want to order -->
          <label for="number">Number of Pizzas:</label><br>
          <input type="number" id="number" name="number" class="full"/>
          <br />

          <!-- This is the code for option. here we have a label and option with the value-->
          <label for="size">Size:</label>
          <select id="size" name="size" >
            <option value="" disabled selected hidden>Select your size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="Large">Large</option>
          </select>

<br>



          <!-- Shape of pizza-->
          <div class="shape">
          <label>Shape of Piza:</label>
          <input type="radio" id="round" value="round" name="shape" />
          <label for="round">Round</label> 
          <input type="radio" id="square" value="square" name="shape" /> 
          <label for="square">Square</label> 
        </div>
<br>

          <!--toppings-->
          <div class="topp">
          <label >Toppings:</label>
          <input type="checkbox" id="Pepperoni" value="Pepperoni" name="topping" />
          <label for="Pepperoni">Pepperoni</label> 
          <input type="checkbox" id="Mushroom" value="Mushroom" name="topping" /> 
          <label for="Mushroom">Mushroom</label> 
          <input type="checkbox" id="Cheese" value="Cheese" name="topping" /> 
          <label for="Cheese">Cheese</label> 
          <input type="checkbox" id="garlic" value="garlic" name="topping" /> 
          <label for="Garlic">Garlic</label> 
          <input type="checkbox" id="blackolives" value="blackolives" name="topping" /> 
          <label for="blackolives">Black olives</label> 
        </div>
<br>
          <label>Crust Type:</label>
          <select id="crust" name="crust">
            <option value="" disabled selected hidden>Select your Crust</option>

            <option value="Thin-crust">Thin-crust</option>
            <option value="Deep-dish">Deep-Dish</option>
            <option value="Flatbread">Flat bread</option>
            <option value="Chicago-style">Chicago-style</option>
            <option value="Detroit-Style">Detroit-Style</option>
          </select>
          <br>
          <label>Order Type:</label>
          <input type="radio" id="takeout" value="takeout" name="type">
          <label for="takeout">Take out</label> 
          <input type="radio" id="delivery" value="delivery" name="type" /> 
          <label for="delivery">Delivery</label>
          <input type="radio" id="Eat-In " value="Eat-In" name="type" /> 
          <label for="Eat-In">Eat-In</label> <br>


          <input type="submit" value="Order-Pizza">
          <input type="reset" value="Reset">

        
        </fieldset>
      </form>
    </main>
    <div class="footer-text"></div>
      <footer>HTML,CSS | sujan chapagain | All rights reserved.</footer>
    
    
  </body>
</html>
