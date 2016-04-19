<html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
    Hello, {$name}!
    Version is, {$smarty.version}!
    Not an injection: {php}echo $smarty->_tpl_vars('name');{/php}
  </body>
</html>
