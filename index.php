<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
  <title>jQuery Lookup Box</title>
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
  <script src="js/jquery.lookupbox.js"></script>
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/ui-lightness/jquery-ui.min.css" />
  <link rel="stylesheet" type="text/css" href="css/lookupbox.css" />
</head>
<body>
  <fieldset>
    <legend><b>Basic Usage</b></legend>
    <p>A basic usage of lookup box. For the loading indicator we just use the "<b>Loading...</b>" text.</p>
    <form action="" method="post">
      <table>
        <tr>
          <td>User ID</td>
          <td>:</td>
          <td>
            <input type="text" name="user_id" value="" />
            <input type="button" value="..." id="lookup1" />
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" name="user_name" value="" /></td>
        </tr>
        <tr>
          <td>Role</td>
          <td>:</td>
          <td><input type="text" name="user_role" value="" /></td>
        </tr>
      </table>
      <br/>
      <input type="submit" value="SAVE" />
    </form>
    <script>
    $(document).ready(function () {
      $("#lookup1").lookupbox({
        title: 'Search User',
        url: 'user.php?chars=',
        imgLoader: 'Loading...',
        width: 500,
        onItemSelected: function(data){
          $('input[name=user_id]').val(data.user_id);
          $('input[name=user_name]').val(data.user_name);
          $('input[name=user_role]').val(data.user_role);
        },
        tableHeader: ['ID', 'Name', 'Role']
      });
    });
    </script>
    <p>The code :</p>
<pre>
$(document).ready(function () {
  $("#lookup1").lookupbox({
    title: 'Search User',
    url: 'user.php?chars=',
    imgLoader: 'Loading...',
    width: 500,
    onItemSelected: function(data){
      $('input[name=user_id]').val(data.user_id);
      $('input[name=user_name]').val(data.user_name);
      $('input[name=user_role]').val(data.user_role);
    },
    tableHeader: ['ID', 'Name', 'Role']
  });
});
</pre>
  </fieldset><br/>
  <fieldset>
    <legend><b>Hiding Table Field</b></legend>
    <p>The more columns in SELECT statement, there will be more columns too in the table in lookup box. We can hide them using "<b>hiddenFields</b>" option then put the field name into the list. Although it is hidden, it is still accessible like the "<b>user_role</b>" field the example below.</p>
    <p>We can also use image as the loading indicator by passing the HTML tag to "<b>imgLoader</b>" option.</p>
    <form action="" method="post">
      <table>
        <tr>
          <td>User ID</td>
          <td>:</td>
          <td>
            <input type="text" name="user_id2" value="" />
            <input type="button" value="..." id="lookup2" />
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" name="user_name2" value="" /></td>
        </tr>
        <tr>
          <td>Role</td>
          <td>:</td>
          <td><input type="text" name="user_role2" value="" /></td>
        </tr>
      </table>
      <br/>
      <input type="submit" value="SAVE" />
    </form>
    <script>
    $(document).ready(function () {
      $("#lookup2").lookupbox({
        title: 'Search User',
        url: 'user.php?chars=',
        imgLoader: '<img src="images/loader.gif" />',
        width: 450,
        onItemSelected: function(data){
          $('input[name=user_id2]').val(data.user_id);
          $('input[name=user_name2]').val(data.user_name);
          $('input[name=user_role2]').val(data.user_role);
        },
        tableHeader: ['ID', 'Name'],
        hiddenFields: ['user_role']
      });
    });
    </script>
    <p>The code :</p>
<pre>
$(document).ready(function () {
  $("#lookup2").lookupbox({
    title: 'Search User',
    url: 'user.php?chars=',
    imgLoader: '&lt;img src="images/loader.gif" /&gt;',
    width: 450,
    onItemSelected: function(data){
      $('input[name=user_id2]').val(data.user_id);
      $('input[name=user_name2]').val(data.user_name);
      $('input[name=user_role2]').val(data.user_role);
    },
    tableHeader: ['ID', 'Name'],
    hiddenFields: ['user_role']
  });
});
</pre>
  </fieldset>
</body>
</html>
