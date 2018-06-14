<?php

/*
File Name: modalForm.php
Date: 5/30/18
Programmer: Stesha Norstrom
*/

echo '<section class="formSection">
    
    <div class="formModal">
        <h1>Have questions? Please...</h1>

    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Click Here!</button>

        </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <div id="contactForm">
        <form name="contactInput" method="POST" action="returnPageContact.php">
                    
            <div class="row">    
                <div class="col-40">
                    <label for="firstLastName">Name (First and Last):</label><br>
                </div>
                <div class="col-60">
                    <input type="text" name="firstLastName" id="firstLastName" required>
                </div>
            </div>

                <br>

            <div class="row">
                <div class="col-40">
                    <label for="name">E-mail:</label><br>
                </div>
                <div class="col-60">
                    <input type="email" name="email" id="email" required>
                </div>
            </div>

                <br>

            <div class="row">    
                <div class="col-40">
                    <label for="phone">Phone Number:</label><br>
                </div>
                <div class="col-60">
                    <input type="tel" name="phone" id="phone">
                </div>
            </div>

                <br>

            <div class="row">
                <div class="col-40">
                    <label for="comments">Comments or questions:</label><br>
                </div>
                <div class="col-60">
                    <textarea name="comments" id="comments" cols="40" rows="2"></textarea>
                </div>
            </div> 

                <br><br>

            <div id="btnContainer">
                <input type="submit" value="submit">
            </div>

        </form> 
          </div>
      </div>

    </div>
        
    </section>';
    
    ?>