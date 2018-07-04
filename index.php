<!DOCTYPE html>
<html>
   <head>
      <title>Stronka</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet">
   </head>
   <body>
      <div id="container">
         <div class="logo">
            <a href="index.php"><img src="img/logo.png" /></a>
         </div>
         <div class="row">
            <div class="cl">
               <div id="registerForm">
                  <h1>Register Form</h1>
                  <form class="formBox registerForm">
                     <div class="form">
                        <label>
                           <img src="img/userInput.png" id="input_img" />
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Username" />
                        </label>
                        <label>
                           <img src="img/lockInput.png" id="input_img">
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Password" />
                        </label>
                        <label>
                           <img src="img/lockInput.png" id="input_img">
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Confirm Password" />
                        </label>
                        <label>
                           <img src="img/envelopeInput.png" id="input_img">
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Email" />
                        </label>
                        <label>
                           <img src="img/locationInput.png" id="input_img">
                           <div class="borderInput"></div>
                           <select>
                              <option value="0">Your Location</option>
                              <option value="1">Audi</option>
                              <option value="2">BMW</option>
                              <option value="3">Citroen</option>
                              <option value="4">Ford</option>
                              <option value="5">Honda</option>
                              <option value="6">Jaguar</option>
                              <option value="7">Land Rover</option>
                              <option value="8">Mercedes</option>
                              <option value="9">Mini</option>
                              <option value="10">Nissan</option>
                              <option value="11">Toyota</option>
                              <option value="12">Volvo</option>
                           </select>
                        </label>
                        <label class="check checSpace">
                           <p>I have read and accept the terms of use.</p>
                           <input type="checkbox" checked="checked">
                           <span class="checkmark"></span>
                        </label>
                        <button class="button full">Sign Up</button>
                     </div>
                  </form>
               </div>
               <div id="sendForm">
                  <h1>Send Email</h1>
                  <form class="sendEmail formBox">
                     <div class="form">
                        <label>
                           <img src="img/userInput.png" id="input_img" />
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Your name" />
                        </label>
                        <label>
                           <img src="img/envelopeInput.png" id="input_img">
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Your email" />
                        </label>
                        <label>
                        <input type="textarea" placeholder="Type your message ..." />
                        </label>
                        <label class="check">Send a copy to my email
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                        </label>
                        <button class="button full">Send email</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="cr">
               <div id="registerForm">
                  <h1>Sign In Form</h1>
                  <form class="formBox signInForm">
                     <div class="form">
                        <label>
                           <img src="img/userInput.png" id="input_img" />
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Username" />
                        </label>
                        <label>
                           <img src="img/lockInput.png" id="input_img">
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Password" />
                        </label>
                        <div style="margin-top:23px;">
                           <label class="check checSpace">
                              <p>Remember me</p>
                              <input type="checkbox" checked="checked">
                              <span class="checkmark"></span>
                        </div>
                        <button class="button half">Sign Up</button>
                        </label>
                     </div>
                  </form>
               </div>
               <div id="recoverForm">
                  <h1>Recover Form</h1>
                  <form class="formBox recoverForm">
                     <div class="form">
                        <label>
                           <img src="img/userInput.png" id="input_img" />
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Username" />
                        </label>
                        <label>
                           <img src="img/lockInput.png" id="input_img">
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Password" />
                        </label>
                        <button class="button half left">Send</button>
                        <button style="opacity: 0.50;"class="button half right">Done</button>
                     </div>
                  </form>
               </div>
               <div id="regForm">
                  <h1>Subscribe Form</h1>
                  <form class="formBox regForm">
                     <div class="form">
                        <label>
                           <img src="img/envelopeInput.png" id="input_img" />
                           <div class="borderInput"></div>
                           <input type="text" placeholder="Enter your email" />
                        </label>
                        <button class="buttonS half left">Subscribe</button>
                        <button class="buttonPink half right">No, Thanks</button>
                     </div>
                  </form>
               </div>
               <img src="img/logoStopka.png" class="stopka" style="box-shadow: inset 1px 4px 9px -6px;" />
            </div>
         </div>
      </div>
   </body>
</html>