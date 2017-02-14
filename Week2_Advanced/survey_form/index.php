<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
  </head>
  <body>
    <form action="result.php" method="post">
      <p>Your Name: <input type="text" name="name"></p>
      <p>Dojo Location:
          <select name="location">
            <option>Seattle</option>
            <option>Online</option>
          </select>
      </p>
      <p>Favorite Language:
          <select name="language">
            <option>Javascript</option>
            <option>PHP</option>
          </select>
      </p>
      <p>
        Comment (optional):
        <textarea name="comment"></textarea>
      </p>
      <p><input type="submit" value="Submit"></p>
    </form>
  </body>
</html>
