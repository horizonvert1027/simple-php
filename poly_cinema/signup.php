<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Implement Sticky Header and Footer with CSS</title>
</head>
  <body>
    <div class="login-wrapper" id="signup-content">
      <div class="login-content">
        <h3>sign up</h3>
        <form method="post" action="create_employee.php">
          <div class="row">
            <label for="username-2">
              emplyee_name:
              <input
                type="text"
                name="emplyee_name"
                id="username-2"
                placeholder="Hugh Jackman"
                pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$"
                required="required"
              />
            </label>
          </div>
          <div class="row">
            <label for="email-2">
              emplyee email:
              <input
                type="password"
                name="employee_email"
                id="email-2"
                placeholder=""
                pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                required="required"
              />
            </label>
          </div>
          <div class="row">
            <label for="password-2">
              Password:
              <input
                type="password"
                name="employee_password"
                id="password-2"
                placeholder=""
                pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                required="required"
              />
            </label>
          </div>
          <div class="row">
            <label for="repassword-2">
              re-type Password:
              <input
                type="password"
                name="password"
                id="repassword-2"
                placeholder=""
                pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                required="required"
              />
            </label>
          </div>
          <div class="row">
            <button type="submit" name="submit">sign up</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
