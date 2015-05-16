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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <fieldset>
    <legend><b>Edit User</b></legend>
    <form action="" method="post">
      <table>
        <tr>
          <td>User ID</td>
          <td>:</td>
          <td>
            <input type="text" name="user_id" value="" />
            <input type="button" value="..." id="lookup" />
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" name="user_name" value="" /></td>
        </tr>
      </table>
      <br/>
      <input type="submit" value="SAVE" />
    </form>
  </fieldset>
  <script>
  $(document).ready(function () {
    $("#lookup").lookupbox({
      title: 'Search User',
      url: 'user.php?chars=',
      imgLoader: '<img src="images/loader.gif">',
      onItemSelected: function(data){
        $('input[name=user_id]').val(data.user_id);
        $('input[name=user_name]').val(data.user_name);
      },
      tableHeader: ['ID', 'Name']
    });
  });
  </script>
</body>
</html>