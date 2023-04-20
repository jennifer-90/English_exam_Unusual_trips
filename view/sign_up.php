<?php

?>


<form action="view=view/profile" method="post">

    <fieldset>
        <legend>
            <label for="login">Login</label>
        </legend>
        <input type="text" id="login" name="login">
    </fieldset>

    <fieldset>
        <legend>
            <label for="email">Email</label>
        </legend>
        <input type="email" id="email" name="email">
    </fieldset>
    
    <fieldset>
        <legend>
            <label for="pwd">Password</label>
        </legend>
        <input type="password" id="pwd" name="pwd">
    </fieldset>
    
    <fieldset>
        <legend>
            <label for="country"></label>
        </legend>
        <select name="country" id="country">
            <option value="">Choose...</option>
            <option value="1">Belgium</option>
            <option value="2">France</option>
        </select>
    </fieldset>

    <fieldset>
        <legend>
            | ACTIONS |
        </legend>
        <input type="submit">
        <input type="reset">
    </fieldset>

</form>