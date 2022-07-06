 <?php
 $route = 'posts/index';
 $route = preg_replace('/\//', '\\/', $route);
 echo $route;
 echo '<br>';

 // Convert variables e.g. {controller}
 $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
 echo $route;
 echo '<br>';

 // Add start and end delimiters, and case insensitive flag
 $route = '/^' . $route . '$/i';
 echo $route;
 echo '<br>';

 preg_match($route, 'posts/index', $matches);

 var_dump($matches);


?>