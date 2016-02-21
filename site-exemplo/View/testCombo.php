
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Combobox Example</title>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link href="../bootstrap-combobox-master/css/bootstrap-combobox.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="well">
          <h1>Bootstrap Combobox Example</h1>
        </div>
      </div>
      <div class="row">
        <form>
          <fieldset>
            <legend>Transforms a select box into a autoselecting combobox</legend>
            <label>Turns this</label>
            <select class="input-large">
              <option value="">Choose a State</option>
              <option value="PA">Pennsylvania</option>
              <option value="CT">Connecticut</option>
              <option value="NY">New York</option>
              <option value="MD">Maryland</option>
              <option value="VA">Virginia</option>
            </select>
              <label>Into this</label>
              <select class="combobox input-large" name="normal">
                <option value="">Choose a State</option>
                <option value="PA">Pennsylvania</option>
                <option value="CT">Connecticut</option>
                <option value="NY">New York</option>
                <option value="MD">Maryland</option>
                <option value="VA">Virginia</option>
              </select>
          </fieldset>
        </form>
      </div>
      <div class="row">
        <form class="form-horizontal">
          <fieldset>
            <legend>Transforms a select box into a autoselecting combobox</legend>
            <div class="control-group">
              <label class="control-label">Turns this</label>
              <div class="controls">
                <select required="required">
                  <option></option>
                  <option value="PA">Pennsylvania</option>
                  <option value="CT">Connecticut</option>
                  <option value="NY">New York</option>
                  <option value="MD">Maryland</option>
                  <option value="VA">Virginia</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Into this</label>
              <div class="controls">
                <select class="combobox" name="horizontal" required="required">
                  <option></option>
                  <option value="PA">Pennsylvania</option>
                  <option value="CT">Connecticut</option>
                  <option value="NY">New York</option>
                  <option value="MD">Maryland</option>
                  <option value="VA">Virginia</option>
                </select>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="row">
        <form class="form-inline">
          <fieldset>
            <legend>Transforms a select box into a autoselecting combobox</legend>
            <label>Turns this</label>
            <select>
              <option></option>
              <option value="PA">Pennsylvania</option>
              <option value="CT">Connecticut</option>
              <option value="NY">New York</option>
              <option value="MD">Maryland</option>
              <option value="VA">Virginia</option>
            </select>
            <label>Into this</label>
            <select class="combobox" name="inline">
              <option></option>
              <option value="PA">Pennsylvania</option>
              <option value="CT">Connecticut</option>
              <option value="NY">New York</option>
              <option value="MD">Maryland</option>
              <option value="VA">Virginia</option>
            </select>
          </fieldset>
        </form>
      </div>
    </div>
    <script src="../bootstrap-combobox-master/js/bootstrap-combobox.js"></script>
    <script type="text/javascript">
      //<![CDATA[
        $(document).ready(function(){
          $('.combobox').combobox()
        });
      //]]>
    </script>
  </body>
</html>
